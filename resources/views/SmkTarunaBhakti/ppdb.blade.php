@extends('SmkTarunaBhakti.layouts.NavbarAndFooter')

@section('title', 'PPDB')

@section('webcontent')
<div class="artikel">
    <!-- tanggal, kategori -->
    <div class="artikel-kategori">
      <a href="">Beranda,</a>
      <a href="">PPDB</a>
    </div>

    <!-- judul artikel -->
    <div class="artikel-judul">
      <p>Info PPDB SMK Taruna Bhakti Depok</p>
      <p class="detail-judul">Berikut informasi mengenai Penerimaan Peserta Didik Baru SMK Taruna Bhakti Depok</p>
    </div>

    <!-- isi text artikel -->
    <div class="artikel-text" style="font-size: 1vw;">
      <div class="slideshow-container">
        <div class="slideshow-inner" style="display: flex; align-items: center;">
    
          <div class="prev-btn">
            <a class="prev" onclick='plusSlides(-1)'>&#10094;</a>
          </div>
    
          <div class="mySlides fade">
            <img  src='assetsweb/assets/ppdb/Brosur-Web-Layout-09-1536x1536.png' style='width: 100%;' alt="Brosur PPDB 1"/>
          </div>
        
          <div class="mySlides fade">
            <img  src='assetsweb/assets/ppdb/Brosur-Pisah-01.png' style='width: 100%;' alt="Brosur PPDB 2"/>
          </div>
        
          <div class="mySlides fade">
            <img  src='assetsweb/assets/ppdb/Brosur-Pisah-02.png' style='width: 100%;' alt="Brosur PPDB 3"/>
          </div>
        
          <div class="mySlides fade">
            <img  src='assetsweb/assets/ppdb/Brosur-Pisah-03.png' style='width: 100%;' alt="Brosur PPDB 4"/>
          </div>
        
          <div class="mySlides fade">
            <img  src='assetsweb/assets/ppdb/Brosur-Pisah-04.png' style='width: 100%;' alt="Brosur PPDB 5"/>
          </div>
        
          <div class="mySlides fade">
            <img  src='assetsweb/assets/ppdb/Brosur-Pisah-05.png' style='width: 100%;' alt="Brosur PPDB 6"/>
          </div>
        
          <div class="mySlides fade">
            <img  src='assetsweb/assets/ppdb/Brosur-Pisah-06.png' style='width: 100%;' alt="Brosur PPDB 7"/>
          </div>
        
          <div class="mySlides fade">
            <img  src='assetsweb/assets/ppdb/Brosur-Pisah-07-min.png' style='width: 100%;' alt="Brosur PPDB 8"/>
          </div>
        
          <div class="mySlides fade">
            <img  src='assetsweb/assets/ppdb/Brosur-Pisah-08.png' style='width: 100%;' alt="Brosur PPDB 9"/>
          </div>
        
          <!-- <div class="mySlides fade">
            <img  src='assets/ppdb/Brosur-Pisah-08.png' style='width: 100%;' alt="pelican"/>
          </div> -->
      
    
          <div class="next-btn">
            <a class="next" onclick='plusSlides(1)'>&#10095;</a>
          </div>
        </div>
        <br/>
        
        
        <div class="many-dot">
          <span class="dot" onclick='currentSlide(1)'></span>
          <span class="dot" onclick='currentSlide(2)'></span>
          <span class="dot" onclick='currentSlide(3)'></span>
          <span class="dot" onclick='currentSlide(4)'></span>
          <span class="dot" onclick='currentSlide(5)'></span>
          <span class="dot" onclick='currentSlide(6)'></span>
          <span class="dot" onclick='currentSlide(7)'></span>
          <span class="dot" onclick='currentSlide(8)'></span>
          <span class="dot" onclick='currentSlide(9)'></span>
        </div>
      </div>
    </div>
   </div>
@endsection