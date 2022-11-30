<?php

use App\Http\Controllers\Cloud;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\FileController;
use App\Http\Controllers\GuruController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\FolderController;



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



Route::get('/login', [LoginController::class, 'index'])->name('login');

Route::group(['middleware' => ['auth','admin:admin,user']], function(){
    Route::get('/', [GuruController::class, 'index']);

    Route::get('/tambahguru', [Cloud::class, 'tambahguru']);

    Route::get('/guru', [GuruController::class, 'index']);
    
    Route::get('/matpel', [Cloud::class, 'matpel']);

    Route::get('/cloud', [Cloud::class, 'cloudDashboard']);    
});


Route::get('/clod', [Cloud::class, 'cloud']);

Route::get('/folder', [Cloud::class, 'folder']);

Route::get('/file', [Cloud::class, 'file']);


Route::post('/postlogin', [LoginController::class, 'postlogin'])->name('postlogin');

Route::get('/logout', [LoginController::class, 'logout'])->name('logout');

Route::post('/tambahguru/store',[GuruController::class, 'store']);

// UNTUK FILE
Route::get('/folder',[FileController::class, 'index']);
Route::get('/folder/file/create',[FileController::class, 'create']);
Route::post('/folder/file/store',[FileController::class, 'store']);
Route::get('/folder/file/delete/{id}',[FileController::class,'destroy']);

// UNTUK FOLDER
Route::get('/clod', [FolderController::class, 'index']);
Route::get('/clod/folder/create', [FolderController::class, 'create']);
Route::post('/clod/folder/store', [FolderController::class, 'store']);


