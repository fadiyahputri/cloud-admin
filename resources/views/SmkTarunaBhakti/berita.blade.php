@extends('SmkTarunaBhakti.layouts.NavbarAndFooter')

@section('title', 'berita')

@section('webcontent')
<div class="artikel">
    <!-- tanggal, kategori -->
    <div class="artikel-kategori">
      <a href="">Beranda,</a>
      <a href="">Berita</a>
    </div>

    <!-- judul artikel -->
    <div class="artikel-judul">
      <p>
        @foreach ($berita as $berita)
            {{$berita->judul}}
       
      </p>
      <div class="artikel-tanggal">
        <p style="font-size: .9vw; font-weight: normal; text-transform: capitalize; margin-top: -1.5vw;">Posted on <a href="">December 5, 2022</a> | by <a href="">smktarunabhakti</a></p>
      </div>
    </div>

    <!-- isi text artikel -->
    <div id="kotakberita" class="artikel-text" style="font-size: 1vw;">
 
     {!! $berita->isiberita !!}
      
    
  </div>
  <!-- ISI SEJARAH SELESAI -->

  <div class="kategori-berita">
    <h2>KATEGORI BERITA</h2>
    <section class="container-kategoriberita">
      <ul class="child-kategoriberita">
        <li><a href="#">OSIS</a></li>
        <li><a href="#">Surat Edaran</a></li>
        <li><a href="#">Seputar Magang</a></li>
        <li><a href="#">Prestasi</a></li>
        <li><a href="#">Kesiswaan</a></li>
        <li><a href="#">Kurikulum</a></li>
        <li><a href="#">Pertemuan Orang Tua</a></li>
        <li><a href="#">Berita Lainnya</a></li>
      </ul>
      <div class="clear-kategoriberita"></div>
      <div class="clear-kategoriberita"></div>
  
    </section>
  </div>

  <div class="berita-terkini">
    <h2>BERITA TERKINI</h2>
    <div class="container-beritaterkini" style="gap: .5vw; display: block;">
      <div class="box-container-beritaterkini">
        <div class="box-beritaterkini" style="width: 25vw;">
          <div class="image-beritaterkini">
            <img src="https://smktarunabhakti.net/wp-content/uploads/2022/11/Kunjin-14-scaled-e1669461671990.jpg" alt="">
          </div>
          <div class="content-beritaterkini">
            <h3>KUNJUNGAN INDUSTRI (KUNJIN) SMK TARUNA BHAKTI – DEPOK </h3>
            <div class="brt-bottom-beritaterkini">
              <span> Januari 23, 2022 </span>
              <span><a href="#">Selengkapnya <iconify-icon class="icon-berita" icon="material-symbols:arrow-forward-ios-rounded" style="background-color: #F1F1F1; border-radius: 50%; box-sizing: border-box ; padding: 0.4vh; margin-left: 0.2vh; font-size: 1.4vh;"></iconify-icon></a></span>
            </div>
          </div>
        </div>

        <div class="box-beritaterkini" style="width: 25vw;">
          <div class="image-beritaterkini">
            <img src="https://smktarunabhakti.net/wp-content/uploads/2022/11/Kunjin-14-scaled-e1669461671990.jpg" alt="">
          </div>
          <div class="content-beritaterkini">
            <h3>KUNJUNGAN INDUSTRI (KUNJIN) SMK TARUNA BHAKTI – DEPOK </h3>
            <div class="brt-bottom-beritaterkini">
              <span> Januari 23, 2022 </span>
              <span><a href="#">Selengkapnya <iconify-icon class="icon-berita" icon="material-symbols:arrow-forward-ios-rounded" style="background-color: #F1F1F1; border-radius: 50%; box-sizing: border-box ; padding: 0.4vh; margin-left: 0.2vh; font-size: 1.4vh;"></iconify-icon></a></span>
            </div>
          </div>
        </div>

        <div class="box-beritaterkini" style="width: 25vw;">
          <div class="image-beritaterkini">
            <img src="https://smktarunabhakti.net/wp-content/uploads/2022/11/Kunjin-14-scaled-e1669461671990.jpg" alt="">
          </div>
          <div class="content-beritaterkini">
            <h3>KUNJUNGAN INDUSTRI (KUNJIN) SMK TARUNA BHAKTI – DEPOK </h3>
            <div class="brt-bottom-beritaterkini">
              <span> Januari 23, 2022 </span>
              <span><a href="#">Selengkapnya <iconify-icon class="icon-berita" icon="material-symbols:arrow-forward-ios-rounded" style="background-color: #F1F1F1; border-radius: 50%; box-sizing: border-box ; padding: 0.4vh; margin-left: 0.2vh; font-size: 1.4vh;"></iconify-icon></a></span>
            </div>
          </div>
        </div>
      </div>

    </div>


  </div>

  @endforeach
@endsection































