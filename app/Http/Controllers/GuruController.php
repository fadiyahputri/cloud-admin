<?php

namespace App\Http\Controllers;

use App\Models\Guru;
use Illuminate\Http\Request;

class GuruController extends Controller
{
    public function index()
    {
        $guru = Guru::all();
        return view('index', compact(['guru']));
    }

    public function create(){
        return view('tambahguru');
    }

    public function store(Request $request)
    {
        // dd($request->all());
        Guru::create($request->all());
        return redirect('/guru');
    }

    public function edit($id){
        $guru = Guru::find($id);
        return view('editguru', compact(['guru']));
    }

    public function update($id, Request $request){
        $guru = Guru::find($id);
        $guru -> update($request -> except(['_token','submit']));
        return redirect('/guru');
    }

    public function destroy($id){
        $guru = Guru::find($id);
        $guru -> delete(); 
        return redirect('/guru');
    }
}
