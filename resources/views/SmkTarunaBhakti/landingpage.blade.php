<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <!--iconify-->
  <script src="https://code.iconify.design/iconify-icon/1.0.1/iconify-icon.min.js"></script>

  <link href='https://fonts.googleapis.com/css?family=Poppins' rel='stylesheet'>

   <!-- Boxicons CDN Link -->
   <link href='https://unpkg.com/boxicons@2.0.7/css/boxicons.min.css' rel='stylesheet'>

   {{-- aos --}}
   <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">

  <!-- Vendor CSS Files -->
  <link href="assetsweb/assets/vendor/glightbox/css/glightbox.min.css" rel="stylesheet">
   
   <!---page title-->
   <title>SMK Taruna Bhakti | landing page</title>



  <!--css-->
  <link rel="stylesheet" href="assetsweb/style.css">
  <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.9.0/slick.min.css" />
  <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.9.0/slick-theme.min.css" />

  <style type="text/css">
    .slick-dots li.slick-active button:before{
     color:#0d0d0d ;
    }

    .slick-dots li button:before{
        font-size: 8px;
    }

    .slick-next:before{
       color: #4BBBFA;
        font-size: 28px;
    }

    .slick-prev:before{
        color: #4BBBFA;
        font-size: 28px;
        position: relative;
        right: 0.5vw;
     
    }
    .programcardpage-mobile{
       display: none;
    }
    .slick-track{
      width: 10vw;
    }

    @media (max-width:450px){
  .programcardpage-mobile{
      display: block;
  }
  .programcardpage{
      display: none;
  }
  .programs-page h1{
      font-size: 7vw;
  }
  .programs-page h4{
      font-size: 3vw;
      padding: 0 7.5vw;
  }

}
 
</style>
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

    <!--seputar smk-->
    <div class="main-page"  style="overflow: hidden;">
      <h1 style="text-align: center;" data-aos="zoom-in" data-aos-duration="1000">SMK TARUNA BHAKTI</h1>
      <h4 style="text-align: center; font-weight: 400; margin-top: 5px;" data-aos="zoom-in" data-aos-duration="1000">SMK Taruna Bhakti Depok merupakan sekolah IT terbaik di Depok</h4>
      <div class="main-cards">
         <div data-aos="fade-right" data-aos-duration="1000" class="main-card1">
            <img src="assetsweb/assets/Achievement _Outline.svg" alt="">
            <h3>SEKOLAH BERAKREDITASI A</h3>
            <h5>SMK Taruna Bhakti Depok merupakan sekolah dengan akreditasi A berdasarkan pada sertifikat  02.00/203/SK/BAN-SM/XII/2018.</h5>
         </div>
         <div data-aos="fade-up" data-aos-duration="1000" class="main-card2">
            <img src="assetsweb/assets/Achievement _Flatline.svg" alt="">
            <h3>SEKOLAH PUSAT KEUNGGULAN</h3>
            <h5>Sekolah yang bertujuan untuk menyiapkan lulusan yang terserap di industri & menjadi Entrepreneur yang unggul dalam menyongsong Era Revolusi 4.0.</h5>
         </div>
         <div data-aos="fade-left" data-aos-duration="1000" class="main-card3">
            <img src="assetsweb/assets/Boss_Flatline.svg" alt="">
            <h3>SEKOLAH BERBASIS IT</h3>
            <h5>SMK Taruna Bhakti merupakan sekolah yang memanfaatkan teknologi sebagai sarana pendidikannya baik bagi pelajar maupun pengajar.</h5>
         </div>
      </div>
   </div>

   <!--program keahlian-->
   <div >
      <div  class="programs-page" data-aos="fade-up" data-aos-duration="1000">
         <h1 style="text-align: center;">PROGRAM KEAHLIAN</h1>
         <h4 style="text-align: center; font-weight: 400; margin-top: 5px;">Pembelajaran di SMK Taruna Bhakti
            menggabungan antara teori dan praktek dengan orientasi pada kesiapan kerja lulusannya.</h4>
      </div>
      <div class="programcardpage">
         <div class="program-card card1" data-aos="fade-up" data-aos-duration="1400">
            <h4>Pengembangan Perangkat Lunak & Gim</h4>
            <h5>Jurusan yang berfokus pada pengembangan software dan gim</h5>
            <img src="assetsweb/assets/jurusan/rpl.png" alt="">
            <div class="ig-info">
              <iconify-icon class="insta-icon" icon="mdi:instagram"
              style="font-size: 2vw; margin-left: 0.52vw;"></iconify-icon>
           <span>
              <iconify-icon icon="mdi:information-outline" style="font-size: 2vw; margin-left: 0.52vw;">
              </iconify-icon>
           </span>
            </div>
           
         </div>
         <div class="program-card card2" data-aos="fade-up" data-aos-duration="1800">
            <h4>Teknik Jaringan Komputer & Telekomunikasi</h4>
            <h5>Jurusan dengan sarana praktik yang sesuai dengan standar industri.</h5>
            <img src="assetsweb/assets/jurusan/tkj.png" alt="">
            <div class="ig-info">
              <iconify-icon class="insta-icon" icon="mdi:instagram"
              style="font-size: 2vw; margin-left: 0.52vw;"></iconify-icon>
           <span>
              <iconify-icon icon="mdi:information-outline" style="font-size: 2vw; margin-left: 0.52vw;">
              </iconify-icon>
           </span>
            </div>
         </div>
         <div class="program-card card3" data-aos="fade-up" data-aos-duration="2200">
            <h4>Teknik Elektronika & Industri</h4>
            <h5>Jurusan dengan laboratoriam dan alat peraktik sangat lengkap.</h5>
            <img src="assetsweb/assets/jurusan/tei.png" alt="">
            <div class="ig-info">
              <iconify-icon class="insta-icon" icon="mdi:instagram"
              style="font-size: 2vw; margin-left: 0.52vw;"></iconify-icon>
           <span>
              <iconify-icon icon="mdi:information-outline" style="font-size: 2vw; margin-left: 0.52vw;">
              </iconify-icon>
           </span>
            </div>
         </div>
         <div class="program-card card4" data-aos="fade-up" data-aos-duration="2600">
            <h4>Broadcasting & Perfilman</h4>
            <h5>Jurusan yang mempelajari seni audio & visual dan banyak aspek lainnya. </h5>
            <img src="assetsweb/assets/jurusan/bc.png" alt="">
            <div class="ig-info">
              <iconify-icon class="insta-icon" icon="mdi:instagram"
              style="font-size: 2vw; margin-left: 0.52vw;"></iconify-icon>
           <span>
              <iconify-icon icon="mdi:information-outline" style="font-size: 2vw; margin-left: 0.52vw;">
              </iconify-icon>
           </span>
            </div>
         </div>
         <div class="program-card card5" data-aos="fade-up" data-aos-duration="3000">
            <h4>Animasi</h4>
            <h5>Program keahlian yang mempelajari penguasaan konten dibidang Multimedia</h5>
            <img src="assetsweb/assets/jurusan/ani.png" alt="">
            <div class="ig-info">
              <iconify-icon class="insta-icon" icon="mdi:instagram"
              style="font-size: 2vw; margin-left: 0.52vw;"></iconify-icon>
           <span>
              <iconify-icon icon="mdi:information-outline" style="font-size: 2vw; margin-left: 0.52vw;">
              </iconify-icon>
           </span>
            </div>
         </div>
   </div>
   </div>


   <div class="programcardpage-mobile" data-aos="zoom-in" data-aos-duration="1000">
         <div class="program-card-m card1-m" >
            <h4>Pengembangan Perangkat Lunak & Gim</h4>
            <h5>Lorem ipsum dolor sit amet consectetur adipisicing elit. Vitae, dignissimos.</h5>
            <img src="assetsweb/assets/jurusan/rpl.png" alt="">
            <div style="position: relative; left: 33vw; bottom: 8vw;">
               <iconify-icon class="insta-icon" icon="mdi:instagram"
               style="font-size: 32px; margin-left: 8px;"></iconify-icon>
            <span>
               <iconify-icon icon="mdi:information-outline" style="font-size: 32px; margin-left: 8px;">
               </iconify-icon>
            </span>
            </div>
       
         </div>
         <div class="program-card-m card2-m">
            <h4>Teknik Jaringan Komputer & Telekomunikasi</h4>
            <h5>Lorem ipsum dolor sit amet consectetur adipisicing elit. Vitae, dignissimos.</h5>
            <img src="assetsweb/assets/jurusan/tkj.png" alt="">
            <div style="position: relative; left: 33vw; bottom: 8vw;">
               <iconify-icon class="insta-icon" icon="mdi:instagram"
               style="font-size: 32px; margin-left: 8px;"></iconify-icon>
            <span>
               <iconify-icon icon="mdi:information-outline" style="font-size: 32px; margin-left: 8px;">
               </iconify-icon>
            </span>
            </div>
         </div>
         <div class="program-card-m card3-m">
            <h4>Teknik Elektronika & Industri</h4>
            <h5>Lorem ipsum dolor sit amet consectetur adipisicing elit. Vitae, dignissimos.</h5>
            <img src="assetsweb/assets/jurusan/tei.png" alt="">
            <div style="position: relative; left: 33vw; bottom: 8vw;">
               <iconify-icon class="insta-icon" icon="mdi:instagram"
               style="font-size: 32px; margin-left: 8px;"></iconify-icon>
            <span>
               <iconify-icon icon="mdi:information-outline" style="font-size: 32px; margin-left: 8px;">
               </iconify-icon>
            </span>
            </div>
         </div>
         <div class="program-card-m card4-m">
            <h4>Broadcasting & Perfilman</h4>
            <h5>Lorem ipsum dolor sit amet consectetur adipisicing elit. Vitae, dignissimos.</h5>
            <img src="assetsweb/assets/jurusan/bc.png" alt="">
            <div style="position: relative; left: 33vw; bottom: 8vw;">
               <iconify-icon class="insta-icon" icon="mdi:instagram"
               style="font-size: 32px; margin-left: 8px;"></iconify-icon>
            <span>
               <iconify-icon icon="mdi:information-outline" style="font-size: 32px; margin-left: 8px;">
               </iconify-icon>
            </span>
            </div>
         </div>
         <div class="program-card-m card5-m">
            <h4>Animasi</h4>
            <h5>Lorem ipsum dolor sit amet consectetur adipisicing elit. Vitae, dignissimos.</h5>
            <img src="assetsweb/assets/jurusan/ani.png" alt="">
            <div style="position: relative; left: 33vw; bottom: 8vw;">
               <iconify-icon class="insta-icon" icon="mdi:instagram"
               style="font-size: 32px; margin-left: 8px;"></iconify-icon>
            <span>
               <iconify-icon icon="mdi:information-outline" style="font-size: 32px; margin-left: 8px;">
               </iconify-icon>
            </span>
            </div>
         </div>
   </div>


   <!--portal page-->
   <div class="portal-page"  style="overflow-x: hidden;">
      <img src="assetsweb/assets/Online lesson _Monochromatic.svg" alt="" data-aos="fade-right" data-aos-duration="1000">
      <div class="portal-content" data-aos="fade-left" data-aos-duration="1000">
         <h1>PORTAL BELAJAR</h1>
         <h4>Model pengembangan pembelajaran berbasis web yang dapat digunakan <br class="br-portal-page">
            adalah model pengembangan web-based learning environment</h4>
         <button>Buka Portal Belajar</button>
      </div>
   </div>

   <!--berita tb-->
   <div class="berita" data-aos="zoom-in-down" data-aos-duration="1000">

      <div class="container">

         <h1> BERITA SEPUTAR <br> SMK TARUNA BHAKTI</h1>

         <div class="box-container">

            <div class="box">
               <div class="image">
                  <img src="https://smktarunabhakti.net/wp-content/uploads/2022/11/Kunjin-14-scaled-e1669461671990.jpg"
                     alt="">
               </div>
               <div class="content">
                  <h3>KUNJUNGAN INDUSTRI (KUNJIN) SMK TARUNA BHAKTI – DEPOK </h3>
                  <div class="brt-bottom">
                     <span> Januari 23, 2022 </span>
                     <span><a href="#">Selengkapnya <iconify-icon class="icon-berita"
                              icon="material-symbols:arrow-forward-ios-rounded">
                           </iconify-icon></a></span>
                  </div>
               </div>
            </div>
            <div class="box">
               <div class="image">
                  <img
                     src="https://smktarunabhakti.net/wp-content/uploads/2022/11/SURAT-UNDANGAN-RAPAT-KEGIATAN-AKHIR-TAHUN-KELAS-XII-1.jpg"
                     alt="">
               </div>
               <div class="content">
                  <h3>Undangan Rapat Orang Tua / Wali Siswa Kelas XI dan XII SMK [...]</h3>
                  <div class="brt-bottom">
                     <span> Januari 23, 2022 </span>
                     <span><a href="#">Selengkapnya <iconify-icon class="icon-berita"
                              icon="material-symbols:arrow-forward-ios-rounded"
                            >
                           </iconify-icon></a></span>
                  </div>
               </div>
            </div>
            <div class="box">
               <div class="image">
                  <img src="https://smktarunabhakti.net/wp-content/uploads/2022/11/IMG_2057-scaled-e1669443986455.jpg"
                     alt="">
               </div>
               <div class="content">
                  <h3>Peringatan Hari Guru Nasional Tahun 2022 </h3>
                  <div class="brt-bottom">
                     <span> Januari 23, 2022 </span>
                     <span><a href="#">Selengkapnya <iconify-icon class="icon-berita"
                              icon="material-symbols:arrow-forward-ios-rounded">
                           </iconify-icon></a></span>
                  </div>
               </div>
            </div>
            <div class="box">
               <div class="image">
                  <img
                     src="https://smktarunabhakti.net/wp-content/uploads/2022/11/Kunjungan-photo-bersama-3-e1667472691704.jpg"
                     alt="">
               </div>
               <div class="content">
                  <h3>SMK Pusat Keunggulan (PK) Skema Pemadanan Dukungan </h3>
                  <div class="brt-bottom">
                     <span> Januari 23, 2022 </span>
                     <span><a href="#">Selengkapnya <iconify-icon class="icon-berita"
                              icon="material-symbols:arrow-forward-ios-rounded">
                           </iconify-icon></a></span>
                  </div>
               </div>
            </div>
            <div class="box">
               <div class="image">
                  <img src="https://smktarunabhakti.net/wp-content/uploads/2022/11/IMG_1605-scaled.jpg" alt="">
               </div>
               <div class="content">
                  <h3>KEGIATAN PERTEMUAN ORANG TUA / WALI SISWA </h3>
                  <div class="brt-bottom">
                     <span> Januari 23, 2022 </span>
                     <span><a href="#">Selengkapnya <iconify-icon class="icon-berita"
                              icon="material-symbols:arrow-forward-ios-rounded">
                           </iconify-icon></a></span>
                  </div>
               </div>
            </div>
            <div class="box">
               <div class="image">
                  <img src="https://smktarunabhakti.net/wp-content/uploads/2022/10/LDKS-2-e1666402586304.jpg" alt="">
               </div>
               <div class="content">
                  <h3>Undangan Rapat Orang Tua / Wali Siswa Kelas XI dan XII SMK Taruna </h3>
                  <div class="brt-bottom">
                     <span> Januari 23, 2022 </span>
                     <span><a href="#">Selengkapnya <iconify-icon class="icon-berita"
                              icon="material-symbols:arrow-forward-ios-rounded"
                              >
                           </iconify-icon></a></span>
                  </div>
               </div>
            </div>
            <div class="box">
               <div class="image">
                  <img src="images/img-1.jpg" alt="">
               </div>
               <div class="content">
                  <h3>Undangan Rapat Orang Tua / Wali Siswa Kelas XI dan XII SMK Taruna </h3>
                  <div class="brt-bottom">
                     <span> Januari 23, 2022 </span>
                     <span><a href="#">Selengkapnya <iconify-icon class="icon-berita"
                              icon="material-symbols:arrow-forward-ios-rounded"
                              >
                           </iconify-icon></a></span>
                  </div>
               </div>
            </div>
            <div class="box">
               <div class="image">
                  <img src="images/img-1.jpg" alt="">
               </div>
               <div class="content">
                  <h3>Undangan Rapat Orang Tua / Wali Siswa Kelas XI dan XII SMK Taruna </h3>
                  <div class="brt-bottom">
                     <span> Januari 23, 2022 </span>
                     <span><a href="#">Selengkapnya <iconify-icon class="icon-berita"
                              icon="material-symbols:arrow-forward-ios-rounded"
>
                           </iconify-icon></a></span>
                  </div>
               </div>
            </div>
            <div class="box">
               <div class="image">
                  <img src="images/img-1.jpg" alt="">
               </div>
               <div class="content">
                  <h3>Undangan Rapat Orang Tua / Wali Siswa Kelas XI dan XII SMK Taruna </h3>
                  <div class="brt-bottom">
                     <span> Januari 23, 2022 </span>
                     <span><a href="#">Selengkapnya <iconify-icon class="icon-berita"
                              icon="material-symbols:arrow-forward-ios-rounded">
                           </iconify-icon></a></span>
                  </div>
               </div>
            </div>


         </div>

         <div id="load-more" class="load-more">
            <p>Baca Lainnya</p> <iconify-icon icon="material-symbols:keyboard-arrow-down"></iconify-icon>
         </div>

      </div>

   </div>


<section id="vidio-peta">
  <div class="hero-container" data-aos="zoom-in" data-aos-delay="500">
    <h1 class="judul-vidio ">VIDEO <span>SEPUTAR<br> 
      SMK</span> TARUNA BHAKTI</h1>
    <p class="mb-4 pb-0"> Kenali sekolah SMK Taruna Bhakti melalui Video kami</p>
    <a href="https://www.youtube.com/watch?v=ybiBgVnj7x0" class="glightbox play-btn mb-4"></a>
    <a href="https://www.youtube.com/@SMKTarunaBhaktiDepok" class="about-btn ">Lihat Lebih Banyak</a>
  </div>
  <div data-aos="fade-up" data-aos-duration="2000" class="c-peta">
     <div>
        <iframe class="gambar-peta" src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d15860.251094273804!2d106.86859072696863!3d-6.38590042606772!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e69ebaff005f277%3A0x9fcd41028665eea8!2sSMK%20Taruna%20Bhakti%20Depok!5e0!3m2!1sid!2sid!4v1674792933526!5m2!1sid!2sid" width="100%" height="100%" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
        <!-- <img src="assets/jurusan/Screenshot 2023-01-05 202656.jpg" alt="gambar tidak ada" class="gambar-peta"> -->
     </div>
     <div class="c-peta-right">
        <h1 class="judul-peta">Denah Smk Taruna <br> Bhakti</h1>
        <a href="https://goo.gl/maps/A2XqttJkjji3WduU6"><button>Klik Disini</button></a>
     </div>
  </div>
</section><!-- End Hero Section -->

  <!-- PARTNER KOLABORASI -->
 <div class="judul-kolaborasi" data-aos="zoom-in" data-aos-duration="1000">
    <h1>PARTNER KOLABORASI</h1>
    <h4>lorem ipsum lorem ipsum lorem ipsum lorem ipsumlorem ipsum lorem </h4>
 </div>
 <!-- partial:index.partial.html -->
<div class="c-logo-slider" data-aos="zoom-in" data-aos-duration="1000" style="margin-bottom: 7vw;">
    <div class="logo-slider">
        <div class="item"><a href="#"><img src="https://smks2kosgoropyk.com/wp-content/uploads/2021/04/SMK-Bisa-V1.png" alt="gambar tidak ditemukan" width="130" height="70"></a></div>
        <div class="item"><a href="#"><img src="https://www.dicoding.com/blog/wp-content/uploads/2014/12/dicoding-header-logo.png" alt="gambar tidak ditemukan" width="130" height="70"></a></div>
        <div class="item"><a href="#"><img src="https://sman13bekasi.sch.id/assets/images/setting/disdikjabar.png" alt="gambar tidak ditemukan" width="130" height="70"></a></div>
        <div class="item"><a href="#"><img src="https://smkn4padalarang.sch.id/assets/images/mitra_kerja/kecil_1540891522-logo-tikomdik.jpg" alt="gambar tidak ditemukan" width="130" height="70"></a></div>
        <div class="item"><a href="#"><img src="https://1000logos.net/wp-content/uploads/2020/09/MikroTik-logo.jpg" alt="gambar tidak ditemukan" width="130" height="75"></a></div>
        <div class="item"><a href="#"><img src="https://1000logos.net/wp-content/uploads/2021/04/Adobe-logo.png" alt="gambar tidak ditemukan" width="130" height="75"></a></div>
        <div class="item"><a href="#"><img src="data:image/jpeg;base64,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" alt="gambar tidak ditemukan" width="130" height="75"></a></div>
        <div class="item"><a href="#"><img src="https://emag.directindustry.com/wp-content/uploads/sites/3/Cisco-Logo-1990-1996-700x394-1.png" alt="gambar tidak ditemukan" width="130" height="75"></a></div>

    </div>
</div>
 <!-- partial -->


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
          <button><a href=""><iconify-icon icon="material-symbols:push-pin" style="color: white; margin-right: .2vw;" width="15" height="15"></iconify-icon>
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

 <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
 <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.1/jquery.min.js" ></script>
 <script src="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.9.0/slick.min.js"></script>
 <script>
   AOS.init();
 </script>
 <script>
      $('.logo-slider').slick({
          slidesToShow: 5,
          slidesToScroll: 1,
          dots: true,
          arrows:true,
          infinite: true,
          autoplay:true,
          autoplaySpeed: 2000,
          responsive: [
  {
    breakpoint: 1024,
    settings: {
      slidesToShow: 3,
      slidesToScroll: 2,
      infinite: true,
      arrows:false,
      dots: true
    }
  },
  {
    breakpoint: 600,
    settings: {
      slidesToShow: 2,
      slidesToScroll: 2
    }
  },
  {
    breakpoint: 480,
    settings: {
      slidesToShow: 2,
      slidesToScroll: 1,
      arrows:false
    }
  }
  // You can unslick at a given breakpoint now by adding:
  // settings: "unslick"
  // instead of a settings object
]
      });
      $('.programcardpage-mobile').slick({
          slidesToShow: 1,
          slidesToScroll: 1,
          dots: true,
          arrows:false,
          infinite: true,
          // autoplay:true,
          autoplaySpeed: 2000,
      });


 </script>





 

  <!-- Vendor JS Files -->


  <script src="assetsweb/assets/vendor/glightbox/js/glightbox.min.js"></script>

  <!-- Template Main JS File -->
  <script src="assetsweb/script.js"></script>

</body>

</html>