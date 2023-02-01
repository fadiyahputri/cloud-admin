<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class TarunaBhaktiController extends Controller
{   //utama
    public function landingpage(){
        return view('SmkTarunaBhakti.landingpage');
    }
    public function ppdb(){
        return view('SmkTarunaBhakti.ppdb');
    }
   

    //profil
    public function sejarah(){
        return view('SmkTarunaBhakti.profil.sejarah');
    }
    public function identitassekolah(){
        return view('SmkTarunaBhakti.profil.identitassekolah');
    }
    public function visimisi(){
        return view('SmkTarunaBhakti.profil.visimisi');
    }
    public function tujuan(){
        return view('SmkTarunaBhakti.profil.tujuan');
    }

    //kesiswaan
    public function pelanggaran(){
        return view('SmkTarunaBhakti.kesiswaan.datapoinpelanggaran');
    }
    public function mars(){
        return view('SmkTarunaBhakti.kesiswaan.marstarunabhakti');
    }
    public function hymne(){
        return view('SmkTarunaBhakti.kesiswaan.hymnetarunabhakti');
    }
    public function pancaprasetyasiswa(){
        return view('SmkTarunaBhakti.kesiswaan.pancaprasetyasiswa');
    }

    //kurikulum
    public function guru(){
        return view('SmkTarunaBhakti.gurutarunabhakti');
    }

    public function sistempembelajaran(){
        return view('SmkTarunaBhakti.kurikulum.sistempembelajaran');
    }
    
}
