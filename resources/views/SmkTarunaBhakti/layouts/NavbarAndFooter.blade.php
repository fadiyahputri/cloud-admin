<!DOCTYPE html>
<html lang="en">

<head>

   <meta charset="UTF-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">

 <!--iconify-->
 <script src="https://code.iconify.design/iconify-icon/1.0.1/iconify-icon.min.js"></script>

 <link href='https://fonts.googleapis.com/css?family=Poppins' rel='stylesheet'>

  <!-- Boxicons CDN Link -->
  <link href='https://unpkg.com/boxicons@2.0.7/css/boxicons.min.css' rel='stylesheet'>


 <!--css-->
 <link rel="stylesheet" href="assetsweb/style.css">
 
 
  
   
   <!---page title-->
   <title>SMK Taruna Bhakti | @yield('title')</title>
   
   @yield('link')

  @yield('style')
</head>

<body>

   <!--navbar-->

   <div class="nav-top">
    <ul class="social-media">
       <li><a href="#">
             <iconify-icon icon="mdi:instagram" style="font-size: 2.5vh"></iconify-icon>
          </a></li>
       <li><a href="#">
             <iconify-icon icon="ic:baseline-facebook" style="font-size: 2.5vh"></iconify-icon>
          </a></li>
       <li><a href="#">
             <iconify-icon icon="mingcute:youtube-fill" style="font-size: 2.5vh"></iconify-icon>
          </a></li>
       <li><a href="#">
             <iconify-icon icon="ic:baseline-tiktok" style="font-size: 2.5vh"></iconify-icon>
          </a></li>
    </ul>
    <ul class="alamat">
       <li><a href="">
             <iconify-icon icon="material-symbols:location-on" style="font-size: 3vh; margin-right: 0.5vh;">
             </iconify-icon> Jl. Pekapuran, RT.02/RW.06, Depok, Jawa Barat 16953
          </a></li>
       <li><a href="">
             <iconify-icon icon="mdi:email" style="font-size: 3vh; margin-right: 0.5vh;"></iconify-icon>
             taruna@smktarunabhakti.net
          </a></li>
       <li><a href="">
             <iconify-icon icon="material-symbols:call-sharp" style="font-size: 3vh; margin-right: 0.5vh;">
             </iconify-icon> (021) 8744810
          </a></li>
    </ul>
 </div>
 <nav>
    <div class="navbar">
      <i class='bx bx-menu'></i>
      <a href="{{asset('/SmkTarunaBhakti')}}" class="logo-tb" >
        <img src="assetsweb/assets/logo-removebg-preview.png" alt="">
        <p class="j-logo">SMK Taruna Bhakti <br><span>Our quality asks to be different</span></p>
     </a>
      <div class="nav-links">
        <div class="sidebar-logo">
          <span class="logo-name">SMKTB</span>
          <i class='bx bx-x' ></i>
        </div>
        <ul class="links">
          <li>
            <div class="c-nav">
              <iconify-icon icon="fa6-solid:school-flag" class="Profil" ></iconify-icon>
              <a class="textprofil">Profil</a>
              <i class='bx bxs-chevron-down profil-arrow arrow'></i>
            </div>
         
            <ul class="profil-sub-menu sub-menu">
              <li><a class="ww" href="{{asset('/sejarah')}}">Sejarah</a></li>
              <li><a  class="ww" href="{{asset('/identitassekolah')}}">Identitas Sekolah</a></li>
              <li><a  class="ww" href="{{asset('/visimisi')}}">Visi dan Misi</a></li>
              <li><a  class="ww" href="{{asset('/tujuan')}}">Tujuan SMK Taruna Bhakti</a></li>
              <li class="more">
                <span ><a class="ww" id="mutu">Mutu</a>
                <i  class='bx bxs-chevron-right arrow mutu-arrow' id="arrow"></i>
              </span>
                <ul class="more-sub-menu">
                  <li><a href="{{asset('/kebijakanmutu')}}">Kebijakan Mutu SMK Taruna Bhakti</a></li>
                  <li><a href="{{asset('/analisisjabatan')}}">Analisi Jabatan Tenaga Kerja Pendidik (GURU)</a></li>
                  <li><a href="{{asset('/analisisjabatanwakilhubungan')}}">Analisis Jabatan Wakil Kepala Sekolah Bidang Hubungan Industri</a></li>
                  <li><a href="{{asset('/analisisjabatanwakitlkurikulum')}}">Analisis Jabatan Wakil Kepala Sekolah Bidang Hubungan Kurikulum</a></li>
                  <li><a href="{{asset('/analisisjabatanwakilkelas')}}">Analisis Jabatan Wali Kelas</a></li>
                </ul>
              </li>
              <li><a class="ww" href="{{asset('/hubunganindustri')}}">Hubungan Industri</a></li>
            </ul>
          </li>
         
          <li>
            <div class="c-nav">
              <iconify-icon icon="ion:school-sharp" class="Kesiswaan"></iconify-icon>
              <a class="Kesiswaantext">Kesiswaan</a>
              <i class='bx bxs-chevron-down Kesiswaan-arrow arrow'></i>
          </div>
    
            <ul class="Kesiswaan-sub-menu sub-menu">
              <li><a class="ww" href="{{asset('/datapoinpelanggaran')}}">Data Poin Pelanggaran dan Tata Tertib</a></li>
              <li><a class="ww" href="{{asset('/marssmktarunabhakti')}}">Mars SMK Taruna Bhakti</a></li>
              <li><a class="ww" href="{{asset('/hymnesmktarunabhakti')}}">Hymne SMK Taruna Bhakti</a></li>
              <li><a class="ww" href="{{asset('/pancaprasetyasiswa')}}">Panca Prasetya Siswa SMK Taruna Bhakti</a></li>
            </ul>
          </li>
          <li>
            <div class="c-nav">
              <iconify-icon icon="ic:baseline-library-books" class="kurikulum"></iconify-icon>
              <a  class="textkurikulum">kurikulum</a>
              <i class='bx bxs-chevron-down kurikulum-arrow arrow'></i>
            </div>
       
          <ul class="htmlCss-sub-menu1 sub-menu1">
            <li><a class="ww" href="{{asset('/GuruTarunaBhakti')}}">Guru SMK Taruna Bhakti</a></li>
            <li><a  class="ww" href="{{asset('/strukturkurikulum')}}">Struktur Kurikulum SMK Taruna Bhakti</a></li>
            <li><a  class="ww" href="{{asset('/sistempembelajaran')}}">Sistem Pembelajaran</a></li>
            <li class="more">
              <span ><a class="ww" id="Sertifikasi" >Sertifikasi Internasional</a>
              <i  class='bx bxs-chevron-right arrow Sertifikasi-arrow' id="arrow"></i>
            </span>
              <ul class="more-sub-menu1">
                <li><a href="{{asset('/SertifikasiBroadcasting')}}">Sertifikasi internasional Bidang Broadcasting</a></li>
                <li><a href="{{asset('/SertifikasiNetworking')}}">Sertifikasi Internasional bidang Networking</a></li>
                <li><a href="{{asset('/SertifikasiMultimedia')}}">Sertifikasi Internasional Bidang Multimedia</a></li>
                <li><a href="{{asset('/SertifikasiProgramming')}}">Sertifikasi Internasional Bidang Programming</a></li>
              </ul>
            </li>
          </ul>
        </li>
        
          <li>
            <div class="c-nav">
              <iconify-icon icon="teenyicons:building-solid" class="Fasilitas"></iconify-icon>
                <a class="Fasilitastext">Fasilitas</a>
                <i class='bx bxs-chevron-down Fasilitas-arrow arrow'></i>
            </div>
 
            <ul class="Kesiswaan-sub-menu1 sub-menu2">
              <li><a class="ww" href="{{asset('/Prasaranasekolah')}}">Sarana dan Prasarana Sekolah</a></li>
              <li><a class="ww" href="{{asset('/ruangpembelajaranumum')}}">Ruang Pembelajaran Umum</a></li>
              <li><a class="ww" href="{{asset('/ruangpembelajarankhusus')}}">Ruang Pembelajaran Khusus</a></li>
              <li><a class="ww" href="{{asset('/fasilitaspendukung')}}">Fasilitas Pendukung</a></li>
            </ul>
          </li>
        </ul>
      </div>
      <div class="s-ppdb">
        
        <div class="search-box" >
          <i class='bx bx-search'></i>
          <div class="input-box">
            <input type="text" placeholder="Search...">
          </div>
        </div>
        <a class="ppdb" href="{{asset('/ppdb')}}">PPDB</a>
      </div>
 
    </div>
 </nav>

   <div class="hero-img">
      <div class="gambar"></div>
   </div>

   @yield('webcontent')

   <!-- footer -->
   <footer class="footer-1">
      <section class="container-footer card-footer">
        <!-- TABLE FOOTER SATU -->
        <div class="table-footer">
          <div class="name-footer">
            <iconify-icon icon="mdi:about" style="color: #001953; margin: 1vh 1vh 0 0;" width="22" height="22"></iconify-icon>
            <p class="judul-footer">TENTANG</p>
          </div>
          <hr>
          <div class="button-footer">
            <button><a href=""><iconify-icon icon="dashicons:businessperson" style="color: white; margin-right: .2vw;" width="15" height="15"></iconify-icon>
            Kepala Sekolah</a></button>
            <button><a href=""><iconify-icon icon="material-symbols:push-pin" style="color: white; margin-right: .2vw;"" width="15" height="15"></iconify-icon>
            Visi dan Misi</a></button>
            <button><a href=""><iconify-icon icon="material-symbols:history-edu" style="color: white; margin-right: .2vw;" width="15" height="15"></iconify-icon>
            Sejarah</a></button>
            <button><a href=""><iconify-icon icon="eos-icons:admin-outlined" style="color: white; margin-right: .2vw;" width="15" height="15"></iconify-icon>
            Admin</a></button>
          </div>
        </div>
      
        <!-- TABLE FOOTER DUA -->
        <div class="table-footer">
          <div class="name-footer">
            <p class="judul-footer">ARSIP</p>
          </div>
          <hr>
          <div class="tahun">
            <iconify-icon icon="ic:round-navigate-next" style="color: #4BBBFA; cursor: pointer;" width="25" height="25" rotate="180deg"></iconify-icon>
            <h4>2022</h4>
            <iconify-icon icon="ic:round-navigate-next" style="color: #4BBBFA; cursor: pointer;" width="25" height="25"></iconify-icon>
          </div>
    
          <div class="kalender">
            <div class="bulan">
              <a href="">Jan</a>
              <a href="">Feb</a>
              <a href="">Mar</a>
              <a href="">Apr</a>
            </div>
            <div class="bulan">
              <a href="">Mai</a>
              <a href="">Jun</a>
              <a href="">Jul</a>
              <a href="">Agu</a>
            </div>
            <div class="bulan">
              <a href="">Sep</a>
              <a href="">Okt</a>
              <a href="">Nov</a>
              <a href="">Des</a>
            </div>
          </div>
        </div>
    
        <!-- TABLE FOOTER TIGA -->
        <div class="table-footer">
          <div class="name-footer">
            <img src="assetsweb/assets/logo-footer.jpg" alt="">
            <p class="judul-footer2">SMK TARUNA <br> BHAKTI DEPOK</p>
          </div>
    
          <hr style="background-color: white; border: none; margin: 0;">
    
          <div class="info-footer">
            <a href="https://www.google.com/maps/place/SMKS+TARUNA+BHAKTI+DEPOK/@-6.3835979,106.8677466,17z/data=!3m1!4b1!4m5!3m4!1s0x2e69ebaff005f277:0x9fcd41028665eea8!8m2!3d-6.3836032!4d106.8699353" class="infoo-footer">Jl. Pekapuran, RT.02/RW.06, Curug, Cimanggis,  Depok 16953</a>
            <a href="">08119892324</a>
            <a href="taruna@smktarunabhakti.net"  class="infoo-footer">taruna@smktarunabhakti.net</a>
          </div>
    
          <div class="akunsosial-footer">
            <a href="https://www.instagram.com/starbhak.official/"><iconify-icon icon="mdi:instagram" style="color: #1E4A85; cursor: pointer;" width="20" height="20"></iconify-icon></a>
            <a href="https://www.youtube.com/c/SMKTarunaBhaktiDepok"><iconify-icon icon="mdi:youtube" style="color: #1E4A85; cursor: pointer;" width="20" height="20"></iconify-icon></a>
            <a href="https://www.facebook.com/smktarunabhaktidepok"><iconify-icon icon="mdi:facebook" style="color: #1E4A85; cursor: pointer;" width="20" height="20"></iconify-icon></a>
            <a href="https://www.tiktok.com/@smktarunabhakti"><iconify-icon icon="ic:baseline-tiktok" style="color: #1E4A85;  cursor: pointer;" width="20" height="20"></iconify-icon></a>
          </div>
        </div>
      </section>
    </footer>
    <footer class="footer-2">
      <p class="text-footer2">
        Lorem ipsum dolor sit, amet consectetur adipisicing elit. Accusamus, quis!
      </p>
      </footer>

      @yield('linkjs')

      <script src="assetsweb/script.js"></script>
</body>

</html>