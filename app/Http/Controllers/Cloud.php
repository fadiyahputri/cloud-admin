<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class Cloud extends Controller
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
    
    public function cloud() {
        return view ('cloud/cloud');
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
