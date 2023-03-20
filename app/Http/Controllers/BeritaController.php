<?php

namespace App\Http\Controllers;

use App\Models\Berita;
use Illuminate\Http\Request;

class BeritaController extends Controller
{
    public function create()
    {
        return view ('admin/landing/berita/tambahberita');
    }

    public function store(Request $request)
    {
        if($request->hasfile('gambar')){
            $nm = $request->gambar;
            $namaFile = $nm->getClientOriginalName();
            $nm->move(public_path().'/assets/images_berita/', $namaFile);

            Berita::create([
                'gambar' => $namaFile,
                'judul' => $request->judul,
                'isiberita'=> $request->isiberita,
            ]);

        }
        else
        {
            Berita::create([
                'judul' => $request->judul,
                'isiberita'=> $request->isiberita,
            ]);
        }
        return redirect('/landing')->with('success','Berita Berhasil Ditambahkan');
    }

    public function show($id)
    {
        //
    }

    public function edit($id)
    {
        $berita = Berita::find($id);
        return view ('admin/landing/berita/editberita',compact('berita'));
        
    }

    public function update($id, Request $request)
    {
        $berita = Berita::find($id);
        $gambarAwal = $berita->gambar;

        $data = [
            'judul' => $request['judul'],
            'gambar' => $gambarAwal,
            'isiberita' => $request['isiberita']
        ];

        if($request->hasfile('gambar')){
            $request->gambar->move(public_path().'/assets/images_berita/', $gambarAwal);
        }

        $berita->update($data);
        return redirect('/landing');
    }

    public function destroy($id)
    {
        $hapus = Berita::findorfail($id);

        $file = public_path('/assets/images_berita/').$hapus->gambar;
        if (file_exists($file)){
            @unlink($file);
        }

        $hapus->delete();

        return redirect('/landing');
    }

}
