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
          <p class="title-table" style="padding-left: 2%;">Landing page > Kepala sekolah</p> 
      </div>
        <a href="/tambahkepalasekolah">
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
  
      
    
  <div class="detail-dari-child">
    <div class="card-detail">
      <div style="display: flex; flex-direction: column">
        <span class="nama-detail">pasi pasi paga</span>
        <span class="deskripsi-detail">artinya apa bang messi ?</span>
      </div>
      <span class="tgl-detail">03/05/2023</span>
      <div style="display: flex">
        <div class="btn-action-kategori">
            <iconify-icon icon="material-symbols:edit" style="color: white; margin-right: 5%" width="12"></iconify-icon>
          <span>edit</span>
        </div>
      </div>
    </div>
  
  </div>
    
        </div>
    
      </div>
  </div>
@endsection