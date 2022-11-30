<?php

namespace App\Http\Controllers;

use App\Models\Folder;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\File;

class FolderController extends Controller
{

    public function index()
    {
        $folder = Folder::all();

        // $dokumenFolder = Folder::select('tipe_file')->get();
        return view('cloud.cloud', compact(['folder']));
    }

    public function create()
    {
        return view('cloud.tambahfolder');
    }

    public function store(Request $request)
    {
        // $namaFolder = $request->folder('nama_folder');
        // $data = new File();
        // $data->file = $namaFolder;
        // $data->save();
        // $path = public_path().'/'.$namaFolder . $galleryId;
        // Folder::makeDirectory($path, $mode = 0777, true, true);
        Folder::create([
            $namaFolder = 'nama_folder'=>$request->nama_folder,
        ]);
        $mahes = $request->nama_folder;
        $path = public_path('/foldercloud'.'/'.$mahes);
        if(!File::isDirectory($path)){
            File::makeDirectory($path, 0777, true, true);
        }
        return redirect('/clod');
    }

    public function show($id)
    {
        //
    }

    public function edit($id)
    {
        //
    }

    public function update(Request $request, $id)
    {
        //
    }

    public function destroy($id)
    {
        //
    }
}
