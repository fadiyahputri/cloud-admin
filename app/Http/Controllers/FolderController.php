<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Auth;
use App\Models\Cloud;
use App\Models\File as ModelsFile;
use App\Models\Folder;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\File;

class FolderController extends Controller
{

    public function index($id)
    {
              // $file = File::all();
        
        // $dokumenFile = File::select('tipe_file')->get();
        $loggedin_username = Auth::user()->id;
        $dataus = User::with('RelationToCloud:id,user_id,folder_name')->get()->where('id',$loggedin_username);
        foreach ($dataus as $datauser) {
          $datausers =  $datauser->RelationToCloud->id;
          $datacloud = Cloud::with('RelationToFolder:id,cloud_id,nama_folder')->get()->where('id', $datausers); 
          foreach ($datacloud as $itemcloud) {
            $item = $itemcloud->id;
          $folder =  Folder::select('nama_folder','id')->where('cloud_id', $item)->get();
          $folder2 =  Folder::select('nama_folder','id')->where('id', $id)->get();
          }
        
        };
        $file = ModelsFile::with('folder')->where('folder_id',$id)->get();
       
        return view('cloud.folder', ['datafolder'=>$folder,'ids'=>$id,'datafolder2'=>$folder2,'file'=> $file]);
    }

    public function create()
    {
            $loggedin_username = Auth::user()->id;
            $dataus = User::with('RelationToCloud:id,user_id,folder_name')->get()->where('id',$loggedin_username);
        return view('cloud.tambahfolder',['folder'=>$dataus]);
    }

    public function store(Request $request)
    {
        Folder::create([
            'cloud_id'=>$request->name,
         'nama_folder'=>$request->nama_folder,
        ]);
        $nama = Cloud::select('folder_name')->where('id',$request->name)->get()->pluck('folder_name')->first();
        $mahes = $request->nama_folder;
        $path = public_path('/foldercloud'.'/'.$nama.'/'.$mahes);
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
