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

            'password'=>Hash::make( $request->password)
        ]);
        $data = DB::table('users')->orderBy('id', 'DESC')->limit(1)->get()->pluck('id')->first();
        
        
        Cloud::create([
            'user_id'=>$data,
            'folder_name'=>$request->name,
        ]);
        return redirect('/guru')->with('success','Data Guru Berhasil Ditambahkan');
    }

    public function edit($id){
        $guru = User::find($id);
        return view('dashboard/editguru', compact(['guru']));
    }

    public function update($id, Request $request){
        $guru = User::find($id);
        // $guru -> update($request -> except(['_token','submit']));

        $data = [
            'name' => $request['name'],
            'username' => $request['username'],
            'password'=>Hash::make( $request->password)
        ];

        $guru->update($data);
        return redirect('/guru')->with('success2','Data Guru Berhasil Diupdate');
    }

    public function destroy($id){
        $guru = User::find($id);
        $guru -> delete(); 
        return redirect('/guru')->with('success','Data Guru Berhasil Dihapus');
    }
}
