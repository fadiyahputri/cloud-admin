<?php

namespace App\Http\Controllers;

use App\Models\Guru;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class GuruController extends Controller
{
    public function index()
    {
        $guru = User::all();
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
        return redirect('/guru');
    }

    public function edit($id){
        $guru = User::find($id);
        return view('dashboard/editguru', compact(['guru']));
    }

    public function update($id, Request $request){
        $guru = User::find($id);
        $guru -> update($request -> except(['_token','submit']));
        return redirect('/guru');
    }

    public function destroy($id){
        $guru = User::find($id);
        $guru -> delete(); 
        return redirect('/guru');
    }
}
