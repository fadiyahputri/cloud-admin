<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Models\Cloud;
use App\Models\Folder;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

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
          }
        };  
        
        return view('cloud/cloud',['datafolder'=>$folder,'data2'=>$datacloud]);
    }

    public function folder(){
        return view('cloud/folder');
    }

    public function file(){
        return view('cloud/file');
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
