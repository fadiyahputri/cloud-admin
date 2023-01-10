@extends('default')
@section('dashcss')
assets/css/dashboardguru/dashboard.css
@endsection
@section('content')
<nav class="navbar">
  <div class="logo-name">
      <span class="logo_name">Dashboard</span>
  </div>

  <div class="menu-items">
      <ul class="nav-links">
          <li><a href="/guru">
              <div class="bulet"></div>
              <i class="uil uil-users-alt" id="nyala"></i>
              <span class="link-name" id="nyala">Guru</span>
          </a></li>
          <li><a href="/matpel">
              <i class="uil uil-books"></i>
              <span class="link-name">Matpel</span>
          </a></li>
          <li><a href="/cloud">
              <i class="uil uil-cloud"></i>
              <span class="link-name">Cloud</span>
          </a></li>
      </ul>
      
      <ul class="logout-mode">
          <li><a href="#">
              <i class="uil uil-user-circle"></i>
              <span class="link-name" id="nama_user">{{Auth::user()->name}}</span>
              <a href="#">
                  <i class="uil uil-signout"></i>
                  <span class="link-name">Logout</span>
              </a>
          </a></li>
      </ul>
  </div>
</nav>

<section class="dashboard">
  <div class="top">
      <i class="uil uil-bars sidebar-toggle"></i>
      <!--<img src="images/profile.jpg" alt="">-->
  </div>

  <div class="dash-content">
      <div class="overview">
          <div class="title">
              <i class="uil uil-book-reader"></i>
              <span class="text">Tambah Mata Pelajaran</span>
          </div>
          <div class="form-section">
              <form action="/tambahmatpel/store" method="post" enctype="multipart/form-data" autocomplete="off">
                  @csrf
                  <div class="inputan">
                      <label>Nama Mata Pelajaran</label>
                      <input type="text" name="mata_pelajaran" required="require" placeholder="Nama Mata Pelajaran">
                  </div>
                  <div class="inputan">
                    <label>Pengajar</label>
                    <select class="select-option" required="require" name="guru_id" id="guru_id">
                        <option selected>Pilih pengajar atau guru mata pelajaran</option>
                        @foreach ($pengajar as $p)
                        <option value="{{$p->id}}">{{$p->name}}</option>
                        @endforeach
                    </select>
                </div>
                  <div class="btn-group2">
                      <a href="/matpel"><button type="button" class="btn-cancel">Cancel</button></a>
                      <button type="submit" class="btn-submit">Submit</button>
                  </div>
              </form>
          </div>
      </div>
  </div>
  <script>
    const body = document.querySelector("body"),
        modeToggle = body.querySelector(".mode-toggle");
        sidebar = body.querySelector("nav");
        sidebarToggle = body.querySelector(".sidebar-toggle");
  
  sidebarToggle.addEventListener("click", () => {
      sidebar.classList.toggle("close");
      if(sidebar.classList.contains("close")){
          localStorage.setItem("status", "close");
      }else{
          localStorage.setItem("status", "open");
      }
  })
  
  </script>
</section>
@endsection 