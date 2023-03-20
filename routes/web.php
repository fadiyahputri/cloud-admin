<?php

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\FileController;
use App\Http\Controllers\GuruController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\CloudController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\BeritaController;
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



Route::get('/', [TarunaBhaktiController::class, 'landingpage']);
Route::get('/login', [LoginController::class, 'index'])->name('login');

Route::group(['middleware' => ['auth','admin:admin,user']], function(){
    // Route::get('/', [GuruController::class, 'index']);

    Route::get('/tambahguru', [CloudController::class, 'tambahguru']);
    
    Route::get('/guru', [GuruController::class, 'index']);
    
    Route::get('/matpel', [CloudController::class, 'matpel']);

    Route::get('/cloud', [CloudController::class, 'cloudDashboard']);    
});

Route::get('/cloud', [CloudController::class, 'cloudDashboard']);   

Route::get('/clod', [CloudController::class, 'cloud']);

Route::get('/clod/last/delete/{id}',[FileController::class,'destroylast'])->name('hpslast');

Route::get('/clod/seemore', [CloudController::class, 'seemore']);


// form landingpage berita
Route::get('/tambahberita', [BeritaController::class, 'create']);
Route::get('/editberita/{id}', [BeritaController::class, 'edit']);
Route::get('/detailberita/{id}', [BeritaController::class, 'show']);
Route::post('/tambahberita/store', [BeritaController::class, 'store']);
Route::put('/editberita/update/{id}', [BeritaController::class, 'update']);
Route::get('/hapusberita/{id}', [BeritaController::class, 'destroy']);

//form partner 
Route::get('/tambahpartner', [PartnerController::class,'create']);


//login api

Route::get('/auth/google/redirect', [LoginController::class, 'googleredirect'])->name('googleredirect');
Route::get('/auth/google/callback', [LoginController::class, 'googlecallaback'])->name('googlecallaback');

Route::get('/admin', [AdminController::class, 'index']);
Route::get('/dataguru', [AdminController::class, 'guru']);
Route::get('/landing', [AdminController::class, 'landing']);

Route::post('/postlogin', [LoginController::class, 'postlogin'])->name('postlogin');

Route::get('/logout', [LoginController::class, 'logout'])->name('logout');

//UNTUK DATA GURU

Route::post('/tambahguru/store',[GuruController::class, 'store']);
Route::get('/editguru/{id}', [GuruController::class, 'edit']);
Route::put('/editguru/update/{id}', [GuruController::class, 'update']);
Route::post('/hapusguru', [GuruController::class , 'destroy']);

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
route::get('/berita',[TarunaBhaktiController::class, 'berita'])->name('berita');


    //profil
route::get('/sejarah',[TarunaBhaktiController::class, 'sejarah'])->name('sejarah');
route::get('/identitassekolah',[TarunaBhaktiController::class, 'identitassekolah'])->name('identitassekolah');
route::get('/visimisi',[TarunaBhaktiController::class, 'visimisi'])->name('visimisi');
route::get('/tujuan',[TarunaBhaktiController::class, 'tujuan'])->name('tujuan');
route::get('/hubunganindustri',[TarunaBhaktiController::class, 'hubunganindustri'])->name('hubunganindustri');

route::get('/kebijakanmutu',[TarunaBhaktiController::class, 'kebijakanmutu'])->name('kebijakanmutu');
route::get('/analisisjabatan',[TarunaBhaktiController::class, 'analisisjabatan'])->name('analisisjabatan');
route::get('/analisisjabatanwakilhubungan',[TarunaBhaktiController::class, 'analisisjabatanwakilhubungan'])->name('analisisjabatanwakilhubungan');
route::get('/analisisjabatanwakitlkurikulum',[TarunaBhaktiController::class, 'analisisjabatanwakitlkurikulum'])->name('analisisjabatanwakitlkurikulum');
route::get('/analisisjabatanwakilkelas',[TarunaBhaktiController::class, 'analisisjabatanwakilkelas'])->name('analisisjabatanwakilkelas');


   //kesiswaan
route::get('/datapoinpelanggaran',[TarunaBhaktiController::class, 'pelanggaran'])->name('datapelanggran');   
route::get('/marssmktarunabhakti',[TarunaBhaktiController::class, 'mars'])->name('mars');   
route::get('/hymnesmktarunabhakti',[TarunaBhaktiController::class, 'hymne'])->name('hymne');   
route::get('/pancaprasetyasiswa',[TarunaBhaktiController::class, 'pancaprasetyasiswa'])->name('pancaprasetyasiswa'); 

  //kurikulum
route::get('/sistempembelajaran',[TarunaBhaktiController::class, 'sistempembelajaran'])->name('sistempembelajaran');    
route::get('/strukturkurikulum',[TarunaBhaktiController::class, 'strukturkurikulum'])->name('strukturkurikulum');  
route::get('/GuruTarunaBhakti',[TarunaBhaktiController::class, 'guru'])->name('guru');

route::get('/SertifikasiBroadcasting',[TarunaBhaktiController::class, 'SertifikasiBroadcasting'])->name('SertifikasiBroadcasting');    
route::get('/SertifikasiNetworking',[TarunaBhaktiController::class, 'SertifikasiNetworking'])->name('SertifikasiNetworking');    
route::get('/SertifikasiMultimedia',[TarunaBhaktiController::class, 'SertifikasiMultimedia'])->name('SertifikasiMultimedia');    
route::get('/SertifikasiProgramming',[TarunaBhaktiController::class, 'SertifikasiProgramming'])->name('SertifikasiProgramming');   

  //fasilitas
route::get('/fasilitaspendukung',[TarunaBhaktiController::class, 'fasilitaspendukung'])->name('fasilitaspendukung');   
route::get('/ruangpembelajaranumum',[TarunaBhaktiController::class, 'ruangpembelajaranumum'])->name('ruangpembelajaranumum');   
route::get('/ruangpembelajarankhusus',[TarunaBhaktiController::class, 'ruangpembelajarankhusus'])->name('ruangpembelajarankhusus');   
route::get('/Prasaranasekolah',[TarunaBhaktiController::class, 'Prasaranasekolah'])->name('Prasaranasekolah');   

  
// UNTUK WEB SEKOLAH END
