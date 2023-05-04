@extends('admin.default')

@section('css')
<link rel="stylesheet" href="../css/dashboard/index.css">
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
    <div style="display: flex; justify-content: space-between; margin-bottom: 4%;">
      <div style="display: flex; align-items: center; width: 50%;">
        <iconify-icon class="icon-utama" icon="quill:paper" width="32" height="32"></iconify-icon>
          <p class="title-table" style="padding-left: 2%;">Landing page > berita</p> 


      </div>
        <a href="/tambahberita">
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
        </a>
    </div>
    
    {{-- BERITA --}}
@foreach ($berita as $b)
{{-- <div class="portfolio icon" data-cat="icon">
  <div class="portfolio-wrapper">
    <div style="position: absolute; background: black; height: 2px; width: 100%; margin-top: 10%;"></div>
    <div style="width: 70%; display: flex; justify-content: center; align-items: center; padding: 0.5rem;">
      <div class="image-landingpage">
        <img src="{{ asset('/assets/images_berita/'.$b->gambar) }}" alt="">
      </div>
    </div>
    <div style="position: relative; padding: 1rem 1.5rem 0 0; display: block;">
      <div style="width: 100%; display: flex; align-items: center; justify-content: space-between; margin-bottom: 6%;">
        <span class="tittle-landingpage">{{$b->judul}}</span>
        <iconify-icon icon="carbon:overflow-menu-horizontal" style="height: 1.5rem; display: flex; justify-content: center; align-items: center; border-radius: 0.5rem; color: white; background: #2C3E50;" width="40" height="40"></iconify-icon>
      </div>
      <div style="height: 20vh; background: green;">
        <span class="description-landingpage">{!!  Str::limit($b->isiberita, 100)  !!}</span>
      </div>
      <div class="button-go" style="">
      <a href="/tambahberita" style="display: flex; justify-content: right;">
        <button class="btn-go">
          nambah 
          <iconify-icon icon="material-symbols:arrow-right-alt-rounded" style="color: white;" width="20" height="20"></iconify-icon>
        </button>
      </a>
      <a href="/editberita/{{$b->id}}" style="display: flex; justify-content: right;">
        <button class="btn-go">
          edit
          <iconify-icon icon="material-symbols:arrow-right-alt-rounded" style="color: white;" width="20" height="20"></iconify-icon>
        </button>
      </a>
      </div>
    </div>
  </div>
</div> --}}
<div>
  <div class="card-detail">
    <div style="display: flex; flex-direction: column">
      <span class="nama-detail">{{$b->judul}}</span>
      <span class="deskripsi-detail"></span>
    </div>
    <span class="tgl-detail">{{$b->created_at}}</span>
    <div style="display: flex">
      <a href="/editberita/{{$b->id}}" class="btn-action-kategori">
          <iconify-icon icon="material-symbols:edit" style="color: white; margin-right: 5%" width="12"></iconify-icon>
        <span>edit</span>
      </a>
      <a class="btn-action-kategori">
        <iconify-icon icon="ic:outline-delete-outline" style="color: white; margin-right: 5%" width="20"></iconify-icon>
        <span>hapus</span>
      </a>
    </div>
  </div>

</div>
@endforeach
  
    
        </div>
    
      </div>
  </div>
@endsection