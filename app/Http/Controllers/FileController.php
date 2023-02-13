<?php

namespace App\Http\Controllers;

use App\Models\Cloud;
use App\Models\File;
use App\Models\Folder;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Str;

class FileController extends Controller
{
    public function index($id,$tipe)
    {
        $loggedin_username = Auth::user()->id;
        $dataus = User::with('RelationToCloud:id,user_id,folder_name')->get()->where('id',$loggedin_username);
        foreach ($dataus as $datauser) {
          $datausers =  $datauser->RelationToCloud->id;
          $datacloud = Cloud::with('RelationToFolder:id,cloud_id,nama_folder')->get()->where('id', $datausers); 
          foreach ($datacloud as $itemcloud) {
            $item = $itemcloud->id;
          $folder =  Folder::select('nama_folder','id')->where('cloud_id', $item)->get();
          }
        
        };
        
        $file = File::where('folder_id',$id)->where('tipe_file',$tipe)->get();
        $fols = Folder::where('id',$id)->get();
       
        
        return view('cloud/file',['datafolder'=>$folder,'file'=>$file,'folder'=>$fols,'tipe'=>$tipe,'ids'=>$id]);
    }

    public function createFolder()
    {
        return view('cloud.tambahfolder');
    }

    public function storeFolder()
    {
        
    }
    
    public function create($id)
    {   
        return view('cloud.tambahfile',['id'=>$id]);
    }

    public function store(Request $request)
    {

       
        $this -> validate($request, 
            [
                'file' => 'required | mimes: pdf,ppt,pptx,doc,docx,xls,xlsx,pdf',
            ]
        );
      
        
            $dokumen = $request -> file('file');
            $folder_id = $request->id;
            $namaDokumen = $request->file('file')->getClientOriginalName();
            $tipe_file = $dokumen -> getClientOriginalExtension();
            $fol = Folder::with('cloud')->where('id',$request->id)->get();
            foreach ($fol as $fols) {
                $filname = $fols->cloud->folder_name;
                $folname = $fols->nama_folder;
            }
            $dokumen->move('foldercloud/'.$filname."/". $folname.'/',$namaDokumen);


            $data = new File();
            $data->file = $namaDokumen;
            $data->tipe_file = $tipe_file;
            $data->folder_id = $folder_id;
            $data->save();

            return redirect()->route('folder',$folder_id);
    }

    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroylast($id)
    {
        $hapus = File::with('folder')->where('id',$id)->get();
        foreach ($hapus as $hapus) {
           
        

        $file = public_path('foldercloud/'.  $hapus->folder->cloud->folder_name.'/'.$hapus->folder->nama_folder.'/'. $hapus->file );
        
         if (file_exists($file)){
            @unlink($file);
         }

         $hapus->delete();
         return redirect('/clod');
        }
    }
}
