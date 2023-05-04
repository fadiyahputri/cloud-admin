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
              <iconify-icon class="box-icon active" icon="uil:users-alt" width="18" height="18"></iconify-icon>
                <p class="sec active">Data Guru</p>
            </a>
        </li>
        <li >
            <a href="/landing">
              <iconify-icon class="box-icon" icon="quill:paper" width="18" height="18"></iconify-icon>
                <p class="sec">Landing Page</p>
            </a>
        </li>
    </ul>
</div>
@endsection

@section('content')
<div id="content">
    <div style="display: flex; align-items: center;">
        <iconify-icon class="icon-utama" icon="uil:users-alt" width="30" height="30"></iconify-icon>
        <p class="title-table">data guru</p> 
    </div>
    <hr style="margin: 0.8rem 0;">    
    <span class="desk-judul">Data akun guru beserta identitas guru. Tambah data untuk menambahkan akun guru dan edit untuk mengubah data.</span>   

    
    <div id="table" style="width: 100%; margin-top: 2%;">
        <div style="display: flex; justify-content: space-between;">
            <p class="title">data guru</p>
            <div style="display: flex;">
                <iconify-icon id="icon-search" style="position: absolute;margin-left: 0.5%;margin-top: 0.35%;color: rgba(35, 31, 32, 0.3);" icon="uil:search" width="18" height="18"></iconify-icon>
                <input id="input-search" type="search" class="search" oninput="search2()" placeholder="Search.....">
            </div>
            <!-- Button trigger modal -->
            <button type="button" class="btn-add-guru" data-bs-toggle="modal" data-bs-target="#addguru">
                Tambah
            </button>
            
            
        </div>
        <table>
            <tr style="border-bottom: 1px solid #DFDFDF; border-top: #DFDFDF;">
                <th>#</th>
                <th>Nama Guru</th>
                <th>Username</th>
                <th>Mata Pelajaran</th>
                <th>Tanggal Dibuat</th>
                <th>action</th>
            </tr>
            @php
            $no = 1;
        @endphp
        @foreach ($guru as $g)
        <tr>
            <td>{{$no++}}</td>
            <td>{{$g->nama}}</td>
            <td>{{$g->user->username}}</td>
            <td>{{$g->matpel}}</td>
            <td>{{ \Carbon\Carbon::parse($g->created_at)->format('M, d Y')}}</td>
            <td>
                <button type="button" data-bs-toggle="modal" data-bs-target="#detailguru" class="btn-action" data-nama='{{$g->nama}}' data-nip="{{$g->nip}}" data-gambar='{{$g->gambar}}'  data-matpel='{{$g->matpel}}' data-jenis_kelamin='{{$g->jenis_kelamin}}' data-alamat="{{$g->alamat}}" data-username="{{$g->user->username}}">
                    <iconify-icon class="icon-action"  icon="ph:info-fill" style="color: white;" width="15" height="15"></iconify-icon>
                </button>
                <button data-bs-toggle="modal" data-bs-target="#editguru" class="btn-action" data-nama='{{$g->nama}}' data-nip="{{$g->nip}}" data-matpel='{{$g->matpel}}' data-jenis_kelamin='{{$g->jenis_kelamin}}' data-alamat="{{$g->alamat}}" data-username="{{$g->user->username}}" data-password="{{$g->user->password}}" data-id="{{$g->id}}" data-userid="{{$g->user->id}}">
                    <iconify-icon class="icon-action"  icon="material-symbols:edit-square-outline" style="color: white;" width="15" height="15"></iconify-icon>
                </button>
                <button data-bs-toggle="modal" data-bs-target="#hapus" class="btn-action" data-nama='{{$g->nama}}' data-nip="{{$g->nip}}" data-matpel='{{$g->matpel}}' data-jenis_kelamin='{{$g->jenis_kelamin}}' data-alamat="{{$g->alamat}}" data-username="{{$g->user->username}}" data-password="{{$g->user->password}}" data-id="{{$g->id}}" data-userid="{{$g->user->id}}" class="btn-action">
                    <iconify-icon class="icon-action"  icon="ic:baseline-delete" style="color: white;" width="15" height="15"></iconify-icon>
                </button>
            </td>
        </tr>
        @endforeach
        </table>
    </div>
</div>
@endsection