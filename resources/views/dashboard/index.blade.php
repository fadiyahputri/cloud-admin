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
              <i class="fa-solid fa-school-flag"></i>
              <span class="link-name">Matpel</span>
          </a></li>
          <li><a href="/cloud">
              <i class="uil uil-user-exclamation"></i>
              <span class="link-name">Cloud</span>
          </a></li>
      </ul>
      
      <ul class="logout-mode">
          <li><a href="#">
              <i class="uil uil-user-circle"></i>
              <span class="link-name" id="nama_user">{{Auth::user()->name}}</span>
              <a href="/logout">
                  <i class="uil uil-signout"></i>
                  <span class="link-name">Logout</span>
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
              <span class="text">Data Guru</span>
          </div>

          <div class="activity-data">
            <div class="action-sect">
              <div class="btn-group">
              <a href="/tambahguru"><button class="btn-tambah" type="button">Tambah</button></a> 
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
                          <th>Name</th>
                          <th>Username</th>
                          <th>Password</th>
                          <th>Operation</th>
                      </thead>
                      @foreach($guru as $index => $g)
                      <tbody>
                        @php
                        $no = 1;
                      @endphp
                        <td>{{$index + $guru -> firstItem()}}</td>
                        <td>{{$g->name}}</td>
                        <td>{{$g->username}}</td>
                        <td>{{$g->password}}</td>
                        <td>
                          <div class="table-buttons"> 
                              <a href="/editguru/{{$g->id}}"><button class="btn btn-edit"><i class="fa-sharp fa-solid fa-pen-to-square"></i></button></a> 
                              <a href="/delete/{{$g->id}}"><button type="submit" class="btn btn-hapus"><i class="fa-sharp fa-solid fa-trash"></i></button></a>
                          </div>
                      </td>
                      
                      </tbody>
                      @endforeach
                  </table>
                    {{ $guru -> links() }}
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