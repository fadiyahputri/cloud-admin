<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;

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
                return redirect()->intended('/clod');
            }else if($user->level == 'admin'){
                return redirect()->intended('/');
            }
        }else{
            return redirect('/login');
        }
    }
    
    public function logout (Request $request){
        Auth::logout();
        return redirect('/login');
    }
   
}
