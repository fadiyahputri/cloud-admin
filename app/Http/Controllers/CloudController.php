<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Models\Cloud;
use App\Models\File;
use App\Models\Folder;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

class CloudController extends Controller
{
    public function index() {
        return view ('dashboard/index');
    }

    public function guru() {
        return view ('dashboard/guru');
    }

    public function matpel() {
        return view ('dashboard/matpel');
    }
    
    public function cloudDashboard() {
        return view ('cloud/cloudDasboard');
    }

    public function cloud(){
        $loggedin_username = Auth::user()->id;
        $dataus = User::with('RelationToCloud:id,user_id,folder_name')->get()->where('id',$loggedin_username);
        foreach ($dataus as $datauser) {
          $datausers =  $datauser->RelationToCloud->id;
          $datacloud = Cloud::with('RelationToFolder:id,cloud_id,nama_folder')->get()->where('id', $datausers); 
          foreach ($datacloud as $itemcloud) {
            $item = $itemcloud->id;
          $folder =  Folder::where('cloud_id', $item)->get();
          $las =  Folder::select('id')->where('cloud_id', $item)->get();
          $last = File::with('folder')->whereIn('folder_id', $las)->orderBy('created_at', 'DESC')->limit(3)->get();
          $pdf = File::with('folder')->whereIn('folder_id', $las)->where('tipe_file','pdf')->get()->count();
          $docx = File::with('folder')->whereIn('folder_id', $las)->where('tipe_file','docx')->get()->count();
          $pptx = File::with('folder')->whereIn('folder_id', $las)->where('tipe_file','pptx')->get()->count();
          $xlsx = File::with('folder')->whereIn('folder_id', $las)->where('tipe_file','xlsx')->get()->count();
          
          }
          
        }; 
         
        
        return view('cloud/cloud',['datafolder'=>$folder,'data2'=>$datacloud,'last' => $last,'pdf'=>$pdf,'docx'=>$docx,'pptx'=>$pptx,'xlsx'=>$xlsx]);
    }

    public function folder(){
        return view('cloud/folder');
    }

    public function folder1(){
        return view('cloud/folder1');
    }

    public function file($tipe){
        $loggedin_username = Auth::user()->id;
        $dataus = User::with('RelationToCloud:id,user_id,folder_name')->get()->where('id',$loggedin_username);
        foreach ($dataus as $datauser) {
          $datausers =  $datauser->RelationToCloud->id;
          $datacloud = Cloud::with('RelationToFolder:id,cloud_id,nama_folder')->get()->where('id', $datausers); 
          foreach ($datacloud as $itemcloud) {
            $item = $itemcloud->id;
          $folder =  Folder::select('nama_folder','id')->where('cloud_id', $item)->get();
          $folders =  Folder::select('nama_folder','id')->where('cloud_id', $item)->get()->pluck('id');
         
          $file = File::with('folder')->whereIn('folder_id', $folders)->where('tipe_file',$tipe)->get();
          
          }
        }
        return view('cloud/files',['datafolder'=>$folder,'file'=>$file]);
    }

    public function seemore(){
        $loggedin_username = Auth::user()->id;
        $dataus = User::with('RelationToCloud:id,user_id,folder_name')->get()->where('id',$loggedin_username);
        foreach ($dataus as $datauser) {
          $datausers =  $datauser->RelationToCloud->id;
          $datacloud = Cloud::with('RelationToFolder:id,cloud_id,nama_folder')->get()->where('id', $datausers); 
          foreach ($datacloud as $itemcloud) {
            $item = $itemcloud->id;
          $folder =  Folder::where('cloud_id', $item)->get();
          $folders =  Folder::select('nama_folder','id')->where('cloud_id', $item)->get()->pluck('id');
         
          $file = File::with('folder')->orderBy('id', 'DESC')->whereIn('folder_id', $folders)->get();
         
          }
          
        }; 
        return view('cloud/seemore',['datafolder'=>$folder,'file'=>$file]);
    }

    public function login() {
        return view ('dashboard/pengguna/login');
    }

    public function tambahguru() {
        return view ('dashboard/tambahguru');
    }

    public function tambahmatpel() {
        return view ('dashboard/tambahmatpel');
    }


}
