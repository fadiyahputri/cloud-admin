<?php

namespace App\Http\Controllers;

use App\Models\Cloud;
use App\Models\Guru;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class GuruController extends Controller
{
    public function index(Request $request)
    {
        if($request->has('search')){
            $guru = User::where('name','LIKE','%' .$request->search.'%')->paginate(5);
        }else{
            $guru = User::paginate(5);
        }
        $guru = User::paginate(5);
        return view('dashboard/index', compact(['guru']));
    }

    public function create(){
        return view('dashboard/tambahguru');
    }

    public function store(Request $request)
    {
        // dd($request->all());
        // User::create($request->all());
        User::create([
            'name'=>$request->name,
            'username'=>$request->username,
            'level'=>$request->level,

            'password'=>$request->password
        ]);
        $data = DB::table('users')->orderBy('id', 'DESC')->limit(1)->get()->pluck('id')->first();
        
        
        Cloud::create([
            'user_id'=>$data,
            'folder_name'=>$request->name,
        ]);

        //STORE GURU

        $this -> validate($request, 
            [
                'image' => 'mimes:jpeg,jpg,png',
            ]
        );
        if($request->hasfile('gambar')){
            $nm = $request->gambar;
            $namaFile = $nm->getClientOriginalName();
            $nm->move(public_path().'/assets/images/profile-picture/gambar_guru/', $namaFile);

            Guru::create([
                'gambar' => $namaFile,
                'nama' => $request->name,
                'nip'=> $request->nip,
                'matpel' => $request->matpel,
                'jenis_kelamin'=> $request->jenis_kelamin,
                'alamat' => $request->alamat,
                'user_id'=> $data
            ]);

        }
        else
        {
            Guru::create([
                'nama' => $request->name,
                'nip'=> $request->nip,
                'matpel' => $request->matpel,
                'jenis_kelamin'=> $request->jenis_kelamin,
                'alamat' => $request->alamat,
                'user_id'=> $data
            ]);
        }
        
        return redirect('/dataguru')->with('success','Data Guru Berhasil Ditambahkan');
    }

    public function edit($id){
        $guru = User::find($id);
        return view('dashboard/editguru', compact(['guru']));
    }

    public function update($id, Request $request){
        $guru = User::find($id);
        // $guru -> update($request -> except(['_token','submit']));
        $pfguru = Guru::find($id);
        $gambarAwal = $pfguru->gambar;

        $data = [
            'name' => $request['name'],
            'username' => $request['username'],
            'password'=>$request->password
        ];

        $data = [
            'gambar' => $gambarAwal,
            'nama' => $request->name,
            'nip'=> $request->nip,
            'matpel' => $request->matpel,
            'jenis_kelamin'=> $request->jenis_kelamin,
            'alamat' => $request->alamat,
            'user_id'=> $data
        ];
        
        if($request->hasfile('gambar')){
        $request->gambar->move(public_path().'/assets/images/profile-picture/gambar_guru/', $gambarAwal);
        }

        $guru->update($data);
        $pfguru->update($data);

        return redirect('/dataguru')->with('success2','Data Guru Berhasil Diupdate');
    }

    public function destroy(Request $request){
        $guru = guru::find($request->id);
        $user = User::find($request->userid);
        
        $guru -> delete(); 
        $user -> delete(); 
        return back()->with('success','Data Guru Berhasil Dihapus');
    }

    
}
