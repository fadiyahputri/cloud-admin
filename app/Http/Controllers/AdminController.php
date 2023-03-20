<?php

namespace App\Http\Controllers;

use App\Models\Guru;
use App\Models\Berita;
use Illuminate\Http\Request;

class AdminController extends Controller
{
    public function index(){
        $g = Guru::with('user')->get();
        
        return view ('admin/index', ['guru'=>$g]);
    }

    public function guru(){
        $g = Guru::with('user')->get();
        return view('admin/dataguru', ['guru'=>$g]);
    }

    public function landing(){
        $berita = Berita::all();
        return view('admin/landingpage', compact(['berita']));
    }
    
    //form 

    public function addberita(){
        
        return view('admin/landing/tambahberita');
    }
}
