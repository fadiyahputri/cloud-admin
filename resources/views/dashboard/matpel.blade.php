@extends('default')
@section('css')
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
              <i class="uil uil-users-alt"></i>
              <span class="link-name">Guru</span>
          </a></li>
          <li><a href="/matpel">
            <div class="bulet"></div>
              <i class="fa-solid fa-school-flag" id="nyala"></i>
              <span class="link-name" id="nyala">Matpel</span>
          </a></li>
          {{-- <li><a href="/cloud">
              <i class="uil uil-user-exclamation"></i>
              <span class="link-name">Cloud</span>
          </a></li> --}}
      </ul>
      
      <ul class="logout-mode">
          <li><a href="#">
              <i class="uil uil-user-circle"></i>
              <span class="link-name" id="nama_user">{{Auth::user()->name}}</span>
              <a href="/logout">
                  <i class="uil uil-signout"></i>
                  <span class="link-name">Log out</span>
              </a>
          </a></li>
      </li>
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
              <i class="uil uil-users-alt"></i>
              <span class="text">Data Mata Pelajaran</span>
          </div>

          <div class="activity-data">
            <div class="action-sect">
              <div class="btn-group">
              <a href="/tambahmatpel"><button class="btn-tambah" type="button">Tambah</button></a> 
              </div>
              <div class="search-box">
                  <i class="uil uil-search"></i>
                  <form action="/guru" method="GET">
                    <input type="search" placeholder="Search here..." name="search">
                  </form>   
              </div> 
          </div>
              <div class="table-activity">
                  <table>
                      <thead>
                          <th>No</th>
                          <th>Matpel</th>
                          <th>Pengajar</th>
                          <th>Operation</th>
                      </thead>
                      <tbody>
                      </tbody>
                  </table>
              </div>
          </div>
      </div>
  </div>
</section>
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
@endsection 