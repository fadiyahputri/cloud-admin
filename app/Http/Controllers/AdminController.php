<?php

namespace App\Http\Controllers;

use App\Models\Guru;
use App\Models\Berita;
use App\Models\Kepsek;
use Illuminate\Http\Request;

class AdminController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index(){
        $g = Guru::with('user')->get();
        
        return view ('admin/index', ['guru'=>$g]);
    }

    public function guru(){
        $g = Guru::with('user')->get();
        return view('admin/dataguru', ['guru'=>$g]);
    }

    public function landing(){
        return view('admin/landingpage');
    }

    public function berita(){
        $berita = Berita::all();
        return view('admin/folder_landingpage/berita', compact(['berita']));
    }
    public function kepala_sekolah(){
        $d = Kepsek::all();
        return view('admin/folder_landingpage/kepala_sekolah', ["kepsek" => $d]);
    }
    public function kolaborasi(){
        return view('admin/folder_landingpage/kolaborasi');
    }

    public function tambahkepsek(){
        
        return view('admin/landing/kepala_sekolah/tambahkepalasekolah');
    }

    public function tambahkepsekStore(Request $request){
        Kepsek::create([
            "name" => $request->name,
            "periodeAwal"=>$request->periodeAwal,
            "periodeAkhir" =>$request->periodeAkhir
        ]);
        return redirect("/landing/kepala_sekolah");
    }

    public function editvisimisi(){
        return view('admin/landing/visi_misi/editvisimisi');
    }
    public function tambahkolab(){
        return view('admin/landing/kolaborsi/tambahkolaborasi');
    }
    
    //form 

    public function addberita(){
        
        return view('admin/landing/tambahberita');
    }
}
