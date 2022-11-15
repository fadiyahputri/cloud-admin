<?php

use App\Http\Controllers\Cloud;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('index');
});

Route::get('/guru', [Cloud::class, 'guru']);

Route::get('/matpel', [Cloud::class, 'matpel']);

Route::get('/cloud', [Cloud::class, 'cloud']);

Route::get('/login', [Cloud::class, 'login']);