<?php

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\FileController;
use App\Http\Controllers\GuruController;
use App\Http\Controllers\CloudController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\FolderController;
use App\Http\Controllers\MatpelController;



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

    Route::get('/tambahguru', [CloudController::class, 'tambahguru']);
    
    Route::get('/guru', [GuruController::class, 'index']);
    
    Route::get('/matpel', [CloudController::class, 'matpel']);

    Route::get('/cloud', [CloudController::class, 'cloudDashboard']);    
});


Route::get('/clod', [CloudController::class, 'cloud']);



Route::get('/file', [CloudController::class, 'file']);


Route::post('/postlogin', [LoginController::class, 'postlogin'])->name('postlogin');

Route::get('/logout', [LoginController::class, 'logout'])->name('logout');

//UNTUK DATA GURU

Route::post('/tambahguru/store',[GuruController::class, 'store']);
Route::get('/editguru/{id}', [GuruController::class, 'edit']);
Route::put('/editguru/update/{id}', [GuruController::class, 'update']);
Route::get('/guru/delete/{id}',[GuruController::class,'destroy']);

//UNTUK DATA MATPEL

Route::get('/tambahmatpel', [MatpelController::class, 'create']);
Route::post('/tambahmatpel/store',[MatpelController::class, 'store']);
Route::get('/editmatpel/{id}', [MatpelController::class, 'edit']);
Route::put('/editmatpel/update/{id}', [MatpelController::class, 'update']);
Route::get('/matpel/delete/{id}',[MatpelController::class,'destroy']);

// UNTUK FILE

Route::get('/folder/file/create/{id}',[FileController::class, 'create'])->name('createfolder');
Route::post('/folder/file/store',[FileController::class, 'store']);
Route::get('/folder/file/delete/{id}',[FileController::class,'destroy']);

// UNTUK FOLDER
Route::get('/folder/{id}',[FolderController::class, 'index'])->name('folder');
Route::get('/clod/folder/create', [FolderController::class, 'create']);
Route::post('/clod/folder/store', [FolderController::class, 'store']);


