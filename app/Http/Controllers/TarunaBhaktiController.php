<?php

namespace App\Http\Controllers;

use App\Models\Berita;
use App\Models\Guru;
use Illuminate\Http\Request;

class TarunaBhaktiController extends Controller
{   //utama
    public function landingpage(){
        $berita = Berita::all();
        return view('SmkTarunaBhakti.landingpage', compact(['berita']));
    }
    public function ppdb(){
        return view('SmkTarunaBhakti.ppdb');
    }
    public function berita($id){
        $berita = Berita::where("id",$id)->get( );
        return view('SmkTarunaBhakti.berita', compact(['berita']));
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
    public function hubunganindustri(){
        return view('SmkTarunaBhakti.profil.hubunganindustri');
    }
    public function kebijakanmutu(){
        return view('SmkTarunaBhakti.profil.Mutu.kebijakanmutu');
    }
    public function analisisjabatan(){
        return view('SmkTarunaBhakti.profil.Mutu.analisisjabatan');
    }
    public function analisisjabatanwakilhubungan(){
        return view('SmkTarunaBhakti.profil.Mutu.analisisjabatanwakilhubungan');
    }
    public function analisisjabatanwakitlkurikulum(){
        return view('SmkTarunaBhakti.profil.Mutu.analisisjabatanwakitlkurikulum');
    }
    public function analisisjabatanwakilkelas(){
        return view('SmkTarunaBhakti.profil.Mutu.analisisjabatanwakilkelas');
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
        $guru = Guru::all();
        return view('SmkTarunaBhakti.kurikulum.gurutarunabhakti',["guru" => $guru]);
    }

    public function sistempembelajaran(){
        return view('SmkTarunaBhakti.kurikulum.sistempembelajaran');
    }
    public function strukturkurikulum(){
        return view('SmkTarunaBhakti.kurikulum.strukturkurikulum');
    }

    public function SertifikasiBroadcasting(){
        return view('SmkTarunaBhakti.kurikulum.Sertifikat.Broadcasting');
    }
    public function SertifikasiNetworking(){
        return view('SmkTarunaBhakti.kurikulum.Sertifikat.Networking');
    }
    public function SertifikasiMultimedia(){
        return view('SmkTarunaBhakti.kurikulum.Sertifikat.Multimedia');
    }
    public function SertifikasiProgramming(){
        return view('SmkTarunaBhakti.kurikulum.Sertifikat.rpl');
    }

    //fasilitas
    public function fasilitaspendukung(){
        return view('SmkTarunaBhakti.fasilitas.fasilitaspendukung');
    }
    public function ruangpembelajaranumum(){
        return view('SmkTarunaBhakti.fasilitas.ruangpembelajaranumum');
    }
    public function ruangpembelajarankhusus(){
        return view('SmkTarunaBhakti.fasilitas.ruangpembelajarankhusus');
    }
    public function Prasaranasekolah(){
        return view('SmkTarunaBhakti.fasilitas.Prasaranasekolah');
    }
    
}
