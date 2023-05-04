@extends('admin.default')

@section('css')
<link rel="stylesheet" href="css/dashboard/index.css">
@endsection

@section('sidebar')
<div id="sidebar">
    <ul>
        <li >
            <a href="/admin">
              <iconify-icon class="box-icon active" icon="radix-icons:dashboard" width="18" height="18"></iconify-icon>
              <p class="sec active">Dashboard</p>
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
              <iconify-icon class="box-icon" icon="quill:paper" width="18" height="18"></iconify-icon>
                <p class="sec">Landing Page</p>
            </a>
        </li>
    </ul>
</div>
@endsection

@section('content')
<div id="content">
    <div id="hero">
        <a href="/">
            <button class="btn-go">Go to Web </button>
        </a>
    </div>
    <div id="con-2">
        <div id="table">
            <div style="display: flex; justify-content: space-between;">
                <p class="title">Recent activity</p>
                <div style="display: flex;">
                    <iconify-icon id="icon-search" style="position: absolute;margin-left: 0.5%;margin-top: 0.35%;color: rgba(35, 31, 32, 0.3);" icon="uil:search" width="18" height="18"></iconify-icon>
                    <input id="input-search" type="search" class="search" oninput="search2()" placeholder="Search.....">
                </div>
                <div class="btn-group d-flex justify-content-center align-items-center" style="width: fit-content; height: 2vw;">
                    <button class="btn btn-secondary dropdown-toggle" type="button" id="defaultDropdown" data-bs-toggle="dropdown" data-bs-auto-close="true" aria-expanded="false" style="font-size: 0.7rem;  background-color: #2C3E50;">
                        Data guru
                    </button>
                    <ul class="dropdown-menu" aria-labelledby="defaultDropdown">
                      <li><a class="dropdown-item" href="#">Data Guru</a></li>
                      
                    </ul>
                </div>
                <!-- <div class="nav-data navbar navbar-expand-sm navbar-dark navbar-fixed ">
                    <ul style="width: 100%;"  class="navbar-nav ms-auto">
                        <li style="padding: 0;width: 100%;" class="nav-item dropdown">
                          <a  class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            <span style="font-size: 0.8rem; color: white;">Data Guru</span>
                          </a>
                          <div class="dropdown-menu dropdown-menu-end animate slideIn" aria-labelledby="navbarDropdown" >
                            <a class="dropdown-item" href="#"></a>  
                            <a class="dropdown-item" href="#"></a>
                          </div>
                        </li>
                      </ul>
                </div> -->
            </div>
            <table>
                <tr style="border-bottom: 1px solid #DFDFDF; border-top: #DFDFDF;">
                    <th>#</th>
                    <th>Nama Guru</th>
                    <th>username</th>
                    <th>Nama pelajaran</th>
                    <th>Tanggal Dibuat</th>
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
                    <td>{{$g->created_at}}</td>
                </tr>
                @endforeach 
            </table>
        </div>
        <div id="con-right">
                <div class="wrapper">
                <header>
                    <div class="icons">
                        <span id="prev" class="material-symbols-rounded"><i class="fa-solid fa-arrow-left" id="prev"></i></span>
                        </div>
                    <span class="current-date"></span>
                    <div class="icons">
                        <span id="next" class="material-symbols-rounded"><i class="fa-solid fa-arrow-right" id="next"></i></span>
                    </div>
                </header>
                    <div class="calendar">
                        <ul class="weeks" id="ulnya">
                        <li>Sun</li>
                        <li>Mon</li>
                        <li>Tue</li>
                        <li>Wed</li>
                        <li>Thu</li>
                        <li>Fri</li>
                        <li>Sat</li>
                        </ul>
                        <hr class="garisatas">
                        <ul class="days"></ul>
                        <hr class="garisbawah">
                    </div>
                </div> 

            <div id="status">
                <div class="profile"></div>
                <div style="margin-left: 3%;">
                    <span class="admin">Admin</span>
                    <div style="display: flex; align-items: center;">
                        <div class="round-online"></div>
                        <span class="nama-status">Online</span>
                    </div> 
                </div>
            </div>
        </div>
    </div>
</div>
@endsection