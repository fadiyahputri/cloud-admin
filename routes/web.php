<?php

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\FileController;
use App\Http\Controllers\GuruController;
use App\Http\Controllers\CloudController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\FolderController;
use App\Http\Controllers\MatpelController;
use App\Http\Controllers\TarunaBhaktiController;

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





Route::post('/postlogin', [LoginController::class, 'postlogin'])->name('postlogin');

Route::get('/logout', [LoginController::class, 'logout'])->name('logout');

//UNTUK DATA GURU

Route::post('/tambahguru/store',[GuruController::class, 'store']);
Route::get('/editguru/{id}', [GuruController::class, 'edit']);
Route::put('/editguru/update/{id}', [GuruController::class, 'update']);
Route::get('/delete/{id}',[GuruController::class,'destroy']);

//UNTUK DATA MATPEL

Route::get('/tambahmatpel', [MatpelController::class, 'create']);
Route::post('/tambahmatpel/store',[MatpelController::class, 'store']);
Route::get('/editmatpel/{id}', [MatpelController::class, 'edit']);
Route::put('/editmatpel/update/{id}', [MatpelController::class, 'update']);
Route::get('/matpel/delete/{id}',[MatpelController::class,'destroy']);

// UNTUK FILE
Route::get('/folder/file/{id}/{tipe}',[FileController::class, 'index'])->name('file');
Route::get('/folder/file/create/{id}',[FileController::class, 'create'])->name('createfolder');
Route::post('/folder/file/store',[FileController::class, 'store']);
Route::get('/folder/file/delete/{id}',[FileController::class,'destroy']);

// UNTUK FOLDER
Route::get('/folder/{id}',[FolderController::class, 'index'])->name('folder');
Route::get('/clod/folder/create', [FolderController::class, 'create']);
Route::post('/clod/folder/store', [FolderController::class, 'store']);

Route::get('/files/{tipe}',[CloudController::class, 'file'])->name('files');

// UNTUK WEB SEKOLAH START
route::get('/SmkTarunaBhakti',[TarunaBhaktiController::class, 'landingpage'])->name('landingpage');
route::get('/ppdb',[TarunaBhaktiController::class, 'ppdb'])->name('ppdb');
route::get('/GuruTarunaBhakti',[TarunaBhaktiController::class, 'guru'])->name('guru');

    //profil
route::get('/sejarah',[TarunaBhaktiController::class, 'sejarah'])->name('sejarah');
route::get('/identitassekolah',[TarunaBhaktiController::class, 'identitassekolah'])->name('identitassekolah');
route::get('/visimisi',[TarunaBhaktiController::class, 'visimisi'])->name('visimisi');
route::get('/tujuan',[TarunaBhaktiController::class, 'tujuan'])->name('tujuan');


   //kesiswaan
route::get('/datapoinpelanggaran',[TarunaBhaktiController::class, 'pelanggaran'])->name('datapelanggran');   
route::get('/marssmktarunabhakti',[TarunaBhaktiController::class, 'mars'])->name('mars');   
route::get('/hymnesmktarunabhakti',[TarunaBhaktiController::class, 'hymne'])->name('hymne');   
route::get('/pancaprasetyasiswa',[TarunaBhaktiController::class, 'pancaprasetyasiswa'])->name('pancaprasetyasiswa'); 

  //kurikulum
route::get('/sistempembelajaran',[TarunaBhaktiController::class, 'sistempembelajaran'])->name('sistempembelajaran');    

// UNTUK WEB SEKOLAH END
