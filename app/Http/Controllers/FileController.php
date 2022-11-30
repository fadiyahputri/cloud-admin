<?php

namespace App\Http\Controllers;

use App\Models\File;
use Illuminate\Http\Request;

class FileController extends Controller
{
    public function index()
    {
        $file = File::all();

        $dokumenFile = File::select('tipe_file')->get();
        return view('cloud.folder', compact(['file']));
    }

    public function createFolder()
    {
        return view('cloud.tambahfolder');
    }

    public function storeFolder()
    {
        
    }
    
    public function create()
    {
        return view('cloud.tambahfile');
    }

    public function store(Request $request)
    {
        $this -> validate($request, 
            [
                'file' => 'required | mimes: pdf,ppt,pptx,doc,docx,xls,xlsx,pdf',
            ]
        );
        
            $dokumen = $request -> file('file');
           
            $namaDokumen = $request->file('file')->getClientOriginalName();
            $tipe_file = $dokumen -> getClientOriginalExtension();
            $dokumen->move('foldercloud-1/', $namaDokumen);


            $data = new File();
            $data->file = $namaDokumen;
            $data->tipe_file = $tipe_file;
            $data->save();

            return redirect('/folder');
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
    public function destroy($id)
    {
        $hapus = File::findorfail($id);

        $file = public_path('foldercloud-1/').$hapus->file;
        if (file_exists($file)){
            @unlink($file);
        }

        $hapus->delete();
        return redirect('/folder');
    }
}
