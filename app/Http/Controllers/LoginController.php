<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Support\Str;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Laravel\Socialite\Facades\Socialite;

class LoginController extends Controller
{

    public function index(){
        Auth::logout();
            return view('pengguna.login');
        }


    public function postlogin (Request $request){
        $request->validate([
            'username' => 'required',
            'password' => 'required',
        ]);
        if(Auth::attempt(['username' => $request->username, 'password' => $request->password])){
            $request->session()->regenerate();
            $user = Auth::user();
            if($user->level == 'user'){
                return redirect()->intended('/cloud');
            }else if($user->level == 'admin'){
                return redirect()->intended('/admin');
            }
        }else{
            return back()->with('message', 'Username atau password salah')->with('display','flex');
        }
    }
    
    public function logout (Request $request){
        Auth::logout();
        return redirect('/login');
    }

   

    //LOGIN API

    public function googleredirect(Request $request)
    {
        return Socialite::driver('google')->redirect();
    }
    public function googlecallaback(Request $request)
    {
        $siakun = User::all();
        $userdata = Socialite::driver('google')->user(); 
        //check login 
        $idakun = 109869350966712464181;
        $user = User::where('email', $userdata->email)->where('auth_type','google')->first();

        //jika belum ada akun admin
        if($user == null)
        {   
            //bikin akun baru
            $uuid = Str::uuid()->toString();
            $user =new User();
            $user->name =$userdata->name;
            $user->email  =$userdata->email;
            $user->password =Hash::make($uuid.now());
            $user->auth_type ='google';
            $user->username ='Admin';
            $user->google_id=$userdata->id;
            $user->level = 'admin';
            $user->save();
            
            //validasi email yang ingin disecure
            if($user->email  =$userdata->email == 'starbhak1@gmail.com')
            {
                Auth::login($user);
                return redirect('/admin');
            }
            elseif($user->email  =$userdata->email !== 'starbhak1@gmail.com')
            {
                $user->latest()->first()->delete();
                return redirect('/login')->with('success','Ga bisa bang jangan aneh" deh lu');
            }
        }
        //jika akun sudah didaftarkan
        elseif($user)
        {
            //validasi email lagi
            if($user->email  =$userdata->email == 'starbhak1@gmail.com')
            {
                Auth::login($user);
                return redirect('/admin');
            }
            elseif($user->email  =$userdata->email !== 'starbhak1@gmail.com')
            {
                $user->latest()->first()->delete();
                return redirect('/login')->with('success','Ga bisa bang jangan aneh" deh lu');
            }
        }
    }          
}
