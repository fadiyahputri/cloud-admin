<!DOCTYPE html>
<html lang="en">

<head>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <title>Admin Starbhak</title>
  <!-- plugins:css -->
  <link rel="stylesheet" href="{{asset('assets/vendors/feather/feather.css')}}">
  <link rel="stylesheet" href="{{asset('assets/vendors/ti-icons/css/themify-icons.css')}}">
  <link rel="stylesheet" href="{{asset('assets/vendors/css/vendor.bundle.base.css')}}">
  <!-- endinject -->
  <!-- Plugin css for this page -->
  <link rel="stylesheet" href="{{asset('assets/vendors/datatables.net-bs4/dataTables.bootstrap4.css')}}">
  <link rel="stylesheet" href="{{asset('assets/vendors/ti-icons/css/themify-icons.css')}}">
  <link rel="stylesheet" type="text/css" href="{{asset('assets/js/select.dataTables.min.css')}}">
  <!-- End plugin css for this page -->
  <!-- inject:css -->
  <link rel="stylesheet" href="{{asset('assets/css/vertical-layout-light/style.css')}}">
  <!-- endinject -->
  <link rel="shortcut icon" href="{{asset('assets/images/logo tb1.png')}}" />
</head>
<body>
  <div class="container-scroller">
    <!-- partial:partials/_navbar.html -->
    <nav class="navbar col-lg-12 col-12 p-0 fixed-top d-flex flex-row">
        <div class="text-center navbar-brand-wrapper d-flex align-items-center justify-content-center">
          <a class="navbar-brand brand-logo mr-5" href="{{url('/')}}"><img src="{{asset('assets/images/logo tb1.png')}}" class="mr-2" alt="logo"/></a>
          <a class="navbar-brand brand-logo-mini" href="{{url('/')}}"><img src="{{asset('assets/images/logo tb1.png')}}" alt="logo"/></a>
        </div>
        <div class="navbar-menu-wrapper d-flex align-items-center justify-content-end">
          <button class="navbar-toggler navbar-toggler align-self-center" type="button" data-toggle="minimize">
            <span class="icon-menu"></span>
          </button>
          <ul class="navbar-nav mr-lg-2">
            <li class="nav-item nav-search d-none d-lg-block">
              <div class="input-group">
                <div class="input-group-prepend hover-cursor" id="navbar-search-icon">
                  <span class="input-group-text" id="search">
                    <i class="icon-search"></i>
                  </span>
                </div>
                <input type="text" class="form-control" id="navbar-search-input" placeholder="Search now" aria-label="search" aria-describedby="search">
              </div>
            </li>
          </ul>
          <ul class="navbar-nav navbar-nav-right">
            <li class="nav-item nav-profile dropdown">
              <a class="nav-link dropdown-toggle" href="#" data-toggle="dropdown" id="profileDropdown">
                <img src="images/faces/face28.jpg" alt="profile"/>
              </a>
              <div class="dropdown-menu dropdown-menu-right navbar-dropdown" aria-labelledby="profileDropdown">
                <a class="dropdown-item">
                  <i class="ti-settings text-primary"></i>
                  Settings
                </a>
                <a class="dropdown-item">
                  <i class="ti-power-off text-primary"></i>
                  Logout
                </a>
              </div>
            </li>
    
          </ul>
          <button class="navbar-toggler navbar-toggler-right d-lg-none align-self-center" type="button" data-toggle="offcanvas">
            <span class="icon-menu"></span>
          </button>
        </div>
      </nav>
    <!-- partial -->
    <div class="container-fluid page-body-wrapper">
      <!-- partial:partials/_settings-panel.html -->

      <!-- partial -->
      <!-- partial:partials/_sidebar.html -->
      <nav class="sidebar sidebar-offcanvas" id="sidebar">
        <ul class="nav">
          <li class="nav-item">
            <a class="nav-link" href="{{url('/guru')}}">
              <i class="icon-head menu-icon"></i>
              <span class="menu-title">Guru</span>
            </a>
          </li>
          <li class="nav-item" >
            <a class="nav-link" href="{{url('/matpel')}}">
              <i class="icon-book menu-icon"></i>
              <span class="menu-title">Matpel</span>
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="{{url('/cloud')}}">
              <i class="icon-cloud menu-icon"></i>
              <span class="menu-title">Cloud</span>
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#">
              <i class="icon-cloud menu-icon"></i>
              <span class="menu-title">logut</span>
            </a>
          </li>
        </ul>
      </nav>
      <!-- partial -->
      <div class="main-panel">
        <div class="content-wrapper">
            <div class="card" >
                <div class="card-body">
                  <h4 class="card-title">Data matpel</h4>
                  <a href="{{url('/tambahmatpel')}}"><input class="tambah" type="button" value="tambah"></input></a>
                  <div class="table-responsive">
                    <table class="table table-hover">
                      <thead>
                        <tr>
                          <th>Id Buku</th>
                          <th>Nama Buku</th>
                          <th>Jenis Buku</th>
                          <th>Halaman Buku</th>
                          <th>Operation</th>
                        </tr>
                      </thead>
                      <tbody>
                        <tr>
                          <td> </td>
                          <td> </td>
                          <td> </td>
                          <td class="text-danger"> </td>
                          <td><button type="button" class="btn btn-primary">Edit</button>
                              <button type="button" class="btn btn-danger">Hapus</button>
                          </td>
                        </tr>
                        <tr>
                          <td> </td>
                          <td> </td>
                          <td> </td>
                          <td class="text-danger"> </td>
                          <td>
                            <button type="button" class="btn btn-primary">Edit</button>
                            <button type="button" class="btn btn-danger">Hapus</button>
                          </td>
                        </tr>
                        <tr>
                          <td> </td>
                          <td> </td>
                          <td> </td>
                          <td class="text-danger"> </td>
                          <td>
                            <button type="button" class="btn btn-primary">Edit</button>
                            <button type="button" class="btn btn-danger">Hapus</button>  
                          </td>
                        </tr>
                        <tr>
                          <td> </td>
                          <td> </td>
                          <td> </td>
                          <td class="text-success"> </i></td>
                          <td>
                            <button type="button" class="btn btn-primary">Edit</button>
                            <button type="button" class="btn btn-danger">Hapus</button>
                          </td>
                        </tr>
                        <tr>
                          <td></td>
                          <td> </td>
                          <td> </td>
                          <td class="text-success"> </i></td>
                          <td>
                            <button type="button" class="btn btn-primary">Edit</button>
                            <button type="button" class="btn btn-danger">Hapus</button>
                          </td>
                        </tr>
                        <tr>
                          <td></td>
                          <td> </td>
                          <td> </td>
                          <td class="text-success"> </i></td>
                          <td>
                            <button type="button" class="btn btn-primary">Edit</button>
                            <button type="button" class="btn btn-danger">Hapus</button>
                          </td>
                        </tr>
                        <tr>
                          <td></td>
                          <td> </td>
                          <td> </td>
                          <td class="text-success"> </i></td>
                          <td>
                            <button type="button" class="btn btn-primary">Edit</button>
                            <button type="button" class="btn btn-danger">Hapus</button>
                          </td>
                        </tr>
                      </tbody>
                    </table>
                  </div>
                </div>
              </div>


        </div>
      <!-- content-wrapper ends -->
        <!-- partial:partials/_footer.html -->
        <footer class="footer">
          <div class="d-sm-flex ">
            <span class="text-muted ">Copyright © 2021.  Premium <a href="https://www.instagram.com/pplg.one/" target="_blank">Starbhak</a> from Starbhak. All rights reserved. </span>
            <span class="text-muted ml-1"> Distributed by <a href="https://www.instagram.com/kmllghi/" target="_blank">Uhuy Team</a></span> 
          </div>
        </footer> 
        <!-- partial -->
      </div>
      <!-- main-panel ends -->
    </div>   
    <!-- page-body-wrapper ends -->
  </div>
  <!-- container-scroller -->

  <!-- plugins:js -->
  <script src="{{asset('assets/vendors/js/vendor.bundle.base.js')}}"></script>
  <!-- endinject -->
  <!-- Plugin js for this page -->
  <script src="{{asset('assets/vendors/chart.js/Chart.min.js')}}"></script>
  <script src="{{asset('assets/vendors/datatables.net/jquery.dataTables.js')}}"></script>
  <script src="{{asset('assets/vendors/datatables.net-bs4/dataTables.bootstrap4.js')}}"></script>
  <script src="{{asset('assets/js/dataTables.select.min.js')}}"></script>

  <!-- End plugin js for this page -->
  <!-- inject:js -->
  <script src="{{asset('assets/js/off-canvas.js')}}"></script>
  <script src="{{asset('assets/js/hoverable-collapse.js')}}"></script>
  <script src="{{asset('assets/js/template.js')}}"></script>
  <script src="{{asset('assets/js/settings.js')}}"></script>
  <script src="{{asset('assets/js/todolist.js')}}"></script>
  <!-- endinject -->
  <!-- Custom js for this page-->
  <script src="{{asset('assets/js/dashboard.js')}}"></script>
  <script src="{{asset('assets/js/Chart.roundedBarCharts.js')}}"></script>
  <!-- End custom js for this page-->
</body>

</html>