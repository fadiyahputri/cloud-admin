<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class Cloud extends Controller
{
    public function index() {
        return view ('index');
    }

    public function guru() {
        return view ('guru');
    }

    public function matpel() {
        return view ('matpel');
    }
    
    public function cloud() {
        return view ('cloud');
    }

    public function login() {
        return view ('login');
    }
}
