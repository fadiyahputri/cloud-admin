@extends('admin.default')

@section('css')
<link rel="stylesheet" href="css/dashboard/index.css">
@endsection

@section('sidebar')
<div id="sidebar">
    <ul>
        <li >
            <a href="/admin">
              <iconify-icon class="box-icon" icon="radix-icons:dashboard" width="18" height="18"></iconify-icon>
              <p class="sec">Dashboard</p>
            </a>
        </li>
        <li >
            <a href="/dataguru">
              <iconify-icon class="box-icon" icon="uil:users-alt" width="18" height="18"></iconify-icon>
                <p class="sec">Data Guru</p>
            </a>
        </li>
        <li >
            <a href="/landing">
              <iconify-icon class="box-icon active" icon="quill:paper" width="18" height="18"></iconify-icon>
                <p class="sec active">Landing Page</p>
            </a>
        </li>
    </ul>
</div>
@endsection

@section('content')
<div id="content">
  <div style="display: flex; justify-content: space-between;">
    <div style="display: flex; 
    align-items: center; width: 100% ">
      <iconify-icon class="icon-utama" icon="quill:paper" width="32" height="32"></iconify-icon>
        <p class="title-table">Landing page</p> 
    </div>
    <button style="  border: none; 
    height: 2.8vw;
  background-color: #2C3E50; 
  color: white; 
  padding: 0.7rem 1rem; 
  font-size: 0.8rem; 
  font-weight: 500;
  border-radius: 0.6rem;
  transition: 0.25s;
  text-transform: capitalize;
  cursor: pointer;">
      tambah
    </button>
  </div>
  <div class="kategori-landingpage">
    <a href="/landing/berita" class="card-kategori">
      <div class="group-nama-kategori">
        <span class="nama-kategori">Berita</span>
      </div>
      <div class="group-nama-kategori">
        <span class="tgl-kategori">03/05/2023</span>
      </div>
      <div>
      <button data-bs-toggle="modal" data-bs-target="#hapus" class="btn-action"  class="btn-action">
          <iconify-icon class="icon-action"  icon="ic:baseline-delete" style="color: white;" width="15" height="15"></iconify-icon>
      </button>
      </div>
    </a>

    <a href="/landing/kepala_sekolah" class="card-kategori">
      <div class="group-nama-kategori">
        <span class="nama-kategori">Kepala Sekolah</span>
      </div>
      <div class="group-nama-kategori">
      <span class="tgl-kategori">03/05/2023</span>
        
      </div>
      <button data-bs-toggle="modal" data-bs-target="#hapus" class="btn-action"  class="btn-action">
        <iconify-icon class="icon-action"  icon="ic:baseline-delete" style="color: white;" width="15" height="15"></iconify-icon>
    </button>
    </a>

    <a href="/landing/kolaborasi" class="card-kategori">
      <div class="group-nama-kategori">
        <span class="nama-kategori">Kolaborasi</span>

      </div>
      <div class="group-nama-kategori">
        <span class="tgl-kategori">03/05/2023</span>

      </div>
      <button data-bs-toggle="modal" data-bs-target="#hapus" class="btn-action"  class="btn-action">
        <iconify-icon class="icon-action"  icon="ic:baseline-delete" style="color: white;" width="15" height="15"></iconify-icon>
    </button>
    </a>

    <a href="/landing/visi_misi" class="card-kategori">
      <div class="group-nama-kategori">
        <span class="nama-kategori">Visi Misi</span>

      </div>
      <div class="group-nama-kategori">
        <span class="tgl-kategori">03/05/2023</span>

      </div>
      <button data-bs-toggle="modal" data-bs-target="#hapus" class="btn-action"  class="btn-action">
        <iconify-icon class="icon-action"  icon="ic:baseline-delete" style="color: white;" width="15" height="15"></iconify-icon>
    </button>
    </a>
  </div>
{{-- BERITA --}}
</div>
@endsection