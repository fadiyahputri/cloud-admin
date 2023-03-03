@extends('SmkTarunaBhakti.layouts.NavbarAndFooter2')

@section('title', 'Sarana Dan Prasarana Smk Taruna Bhakti')

@section('webcontent')
      <!-- ISI SERTIFIKAT -->

  <div class="artikel">
    <!-- tanggal, kategori -->
    <div class="artikel-kategori">
      <a href="">Beranda,</a>
      <a href="">Fasilitas</a>
    </div>

    <!-- judul artikel -->
    <div class="artikel-judul">
      <p>Sarana Dan Prasarana Sekolah</p>
    </div>

    <!-- isi text artikel -->
    

    <div class="p-artikel">
      <div class="fasilitas-p card1">
        <img src="assetsweb/assetsfasilitas/assets/fasilitas1.png" alt="">
        <div class="deskripsi-fasilitas-left">
          <h4>SMK Taruna Bhakti</h4>
          <p>Seperti fasilitas sekolah milik Yayasan Taruna Bhakti lainnya, SMK Taruna Bhakti memiliki Gedung
            milik sendiri dengan luas lantai bangungan sebesar 3.651 m², dan terdiri dari empat lantai.</p>
          <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#exampleModal1">
            Detail
          </button>

          <!-- Modal -->
          <div class="modal-dialog modal-dialog-centered">
            <div class="modal fade" id="exampleModal1" tabindex="-1" aria-labelledby="exampleModalLabel"
              aria-hidden="true" style="margin-top: 3.1vw;">
              <div class="modal-dialog">
                <div class="modal-content">
                  <div class="modal-header">
                    <h1 class="modal-title fs-5" id="exampleModalLabel">SMK Taruna Bhakti</h1>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                  </div>
                  <div class="modal-body">
                    <picture>
                      <div class="carousel-container">

                        <!-- UKURAN FOTO 1920X1080 -->

                        <div class="mySlides animate">
                          <img src="assetsweb/assetsfasilitas/tb2.jpg" alt="slide" />
                        </div>
                      
                        <div class="mySlides animate">
                          <img src="assetsweb/assetsfasilitas/gedung1.jpg" alt="slide" />
                        </div>
                      
                        <div class="mySlides animate">
                          <img src="assetsweb/assetsfasilitas/gedung2.jpg" alt="slide" />
                        </div>
                      
                        <div class="mySlides animate">
                          <img src="assetsweb/assetsfasilitas/gedung3.jpg" alt="slide" />
                        </div>
                      

                      
                        <!-- Next and previous buttons -->
                        <a class="prev" onclick="prevSlide()">&#10094;</a>
                        <a class="next" onclick="nextSlide()">&#10095;</a>
                      
                        <!-- The dots/circles -->
                        <div class="dots-container">
                          <span class="dots" onclick="currentSlide(1)"></span>
                          <span class="dots" onclick="currentSlide(2)"></span>
                          <span class="dots" onclick="currentSlide(3)"></span>
                          <span class="dots" onclick="currentSlide(4)"></span>
                        </div>
                      </div>
                    </picture>
                    <div style="margin-top: 18px;">
                      <b> Detail Fasilitas </b> <br>
                      <div style="margin-top: 0.69vw;">
                        <iconify-icon icon="ic:twotone-construction" style="font-size: 2.5vh"></iconify-icon> ||
                        <b>Dibuka</b>: 16 Juni 2004 <br>
                        <iconify-icon icon="radix-icons:ruler-square" style="font-size: 2.5vh"></iconify-icon> ||
                        <b>Luas</b>:
                        3.651 m² (Gedung Utama) <br>
                        <iconify-icon icon="ic:twotone-height" style="font-size: 2.5vh"></iconify-icon> ||
                        <b>Tinggi</b>: 4
                        lantai <br>
                        <iconify-icon icon="material-symbols:meeting-room-outline"
                          style="font-size: 2.5vh"></iconify-icon> || <b>Ruang Belajar</b>: 28 <br>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>

    <br>

    <div class="p-artikel">
        <div class="fasilitas-p card6">
          <div class="deskripsi-fasilitas-right">
            <h4>Parkir Motor Peserta Didik</h4>
            <p>Terdapat dua tempat parkir khusus peserta didik SMK Taruna Bhakti. Tempat parkir ini masing-masing dapat
              menampung kendaraan kurang lebih 150 sepeda motor.</p>
            <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#exampleModal6">
              Detail
            </button>
  
            <!-- Modal -->
            <div class="modal-dialog modal-dialog-centered">
              <div class="modal fade" id="exampleModal6" tabindex="-1" aria-labelledby="exampleModalLabel"
                aria-hidden="true" style="margin-top: 3.1vw;">
                <div class="modal-dialog">
                  <div class="modal-content">
                    <div class="modal-header">
                      <h1 class="modal-title fs-5" id="exampleModalLabel">Parkir Motor Peserta Didik</h1>
                      <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body">
                      <picture>
                        <div class="carousel-container">
  
                          <!-- UKURAN FOTO 1920X1080 -->
  
                          <div class="mySlides1 animate">
                            <img src="assetsweb/assetsfasilitas/assets/fasilitas6.png" alt="slide" />
                          </div>
                        
                          <div class="mySlides1 animate">
                            <img src="assetsweb/assetsfasilitas/assets/fasilitas6.png" alt="slide" />
                          </div>
                        
                          <div class="mySlides1 animate">
                            <img src="assetsweb/assetsfasilitas/assets/fasilitas6.png" alt="slide" />
                          </div>
                        
                          <div class="mySlides1 animate">
                            <img src="assetsweb/assetsfasilitas/assets/fasilitas6.png" alt="slide" />
                          </div>
       
                      
                          <!-- Next and previous buttons -->
                          <a class="prev" onclick="prevSlide()">&#10094;</a>
                          <a class="next" onclick="nextSlide()">&#10095;</a>
                        
                          <!-- The dots/circles -->
                          <div class="dots-container">
                            <span class="dots1" onclick="currentSlide(1)"></span>
                            <span class="dots1" onclick="currentSlide(2)"></span>
                            <span class="dots1" onclick="currentSlide(3)"></span>
                            <span class="dots1" onclick="currentSlide(4)"></span>
                          </div>
                        </div>
                      </picture>
                      <div style="margin-top: 18px;">
                        <b> Detail Fasilitas </b> <br>
                        <div style="margin-top: 0.69vw;">
                          <iconify-icon icon="ic:ri:parking-box-fill" style="font-size: 2.5vh"></iconify-icon> ||
                          <b>Jumlah Parkir</b>: 2 (Satu tertutup atap dan Satu terbuka) <br>
                          <iconify-icon icon="fluent-mdl2:parking-solid" style="font-size: 2.5vh"></iconify-icon> ||
                          <b>Parkir Akses Mobil</b>: Tersedia (Parkir terbuka) <br>
                          <iconify-icon icon="radix-icons:ruler-square" style="font-size: 2.5vh"></iconify-icon> ||
                          <b>Luas</b>:
                          24 m² (Parkir tertutup atap) dan 29.2 m² (Parkir terbuka) <br>
                          <iconify-icon icon="mdi:floor-plan" style="font-size: 2.5vh"></iconify-icon> || <b> Jumlah
                            Penumpangan Motor</b>: 150 (total maksimal untuk kedua parkir) <br>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <img src="assetsweb/assetsfasilitas/assets/fasilitas6.png" alt="">
        </div>
      </div>

    <br>

    <div class="p-artikel">
        <div class="fasilitas-p card1">
          <img src="https://www.smpn1kalasan.sch.id/asset/img_galeri/DSC03808.jpg" alt="">
          <div class="deskripsi-fasilitas-left">
            <h4>Laboratorium Bahasa</h4>
            <p>SMK Taruna Bhakti memiliki 2 Laboratorium Bahasa yang berada pada gedung bagian Timur lantai 3. Di dalam Lab. Bahasa masing-masing memiliki seperangkat peralatan audio video untuk kegiatan pembelajaran Bahasa dengan kapasitas 20 siswa dengan masing-masing siswa menempati 1 meja multimedia.</p>
            <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#exampleModal1">
              Detail
            </button>
  
            <!-- Modal -->
            <div class="modal-dialog modal-dialog-centered">
              <div class="modal fade" id="exampleModal1" tabindex="-1" aria-labelledby="exampleModalLabel"
                aria-hidden="true" style="margin-top: 3.1vw;">
                <div class="modal-dialog">
                  <div class="modal-content">
                    <div class="modal-header">
                      <h1 class="modal-title fs-5" id="exampleModalLabel">Laboratorium Bahasa</h1>
                      <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body">
                      <picture>
                        <div class="carousel-container">
  
                          <!-- UKURAN FOTO 1920X1080 -->
  
                          <div class="mySlides2 animate">
                            <img src="https://www.man3banyumas.sch.id/wp-content/uploads/2021/12/Lab-Komputer-MAN-3-Banyuams-4.jpg" alt="slide" />
                          </div>
                        
                          <div class="mySlides2 animate">
                            <img src="https://www.man3banyumas.sch.id/wp-content/uploads/2021/12/Lab-Komputer-MAN-3-Banyumas-5.jpg" alt="slide" />
                          </div>
                        
                          <div class="mySlides2 animate">
                            <img src="https://www.smpn1kalasan.sch.id/asset/img_galeri/P1170235.jpg" alt="slide" />
                          </div>
                        
                          <div class="mySlides2 animate">
                            <img src="https://www.smpn1kalasan.sch.id/asset/img_galeri/DSC03808.jpg" alt="slide" />
                          </div>
                        
  
                        
                          <!-- Next and previous buttons -->
                          <a class="prev" onclick="prevSlide()">&#10094;</a>
                          <a class="next" onclick="nextSlide()">&#10095;</a>
                        
                          <!-- The dots/circles -->
                          <div class="dots-container">
                            <span class="dots2" onclick="currentSlide(1)"></span>
                            <span class="dots2" onclick="currentSlide(2)"></span>
                            <span class="dots2" onclick="currentSlide(3)"></span>
                            <span class="dots2" onclick="currentSlide(4)"></span>
                          </div>
                        </div>
                      </picture>
                      <div style="margin-top: 18px;">
                        <b> Detail Fasilitas </b> <br>
                        <div style="margin-top: 0.69vw;">
                          <iconify-icon icon="material-symbols:meeting-room-outline-rounded" style="font-size: 2.5vh"></iconify-icon> ||
                          <b>Jumlah</b>: 2 Laboratorium <br>
                          <iconify-icon icon="material-symbols:reduce-capacity" style="font-size: 2.5vh"></iconify-icon> ||
                          <b>kapasitas</b>: 20 Orang <br>
                          <iconify-icon icon="material-symbols:location-on" style="font-size: 2.5vh"></iconify-icon> ||
                          <b>Letak</b>: gedung bagian Timur lantai 3 <br>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>



    <br>

    <div class="p-artikel">
      <div class="fasilitas-p card4">
        <div class="deskripsi-fasilitas-right">
          <h4>Lapangan Olah Raga</h4>
          <p>Lapangan sekolah berupa lapangan serba guna yang dapat digunakan untuk upacara bendera. Selain sarana bermain saat istirahat, lapangan juga berfungsi sebagai lapangan olahraga khsusnya Futsal, Volly, Bulu Tangkis sekaligus sebagai titik kumpul untuk kegiatan yang melibatkan orang banyak. Pada hari Jum'at lapangan juga difungsikan untuk sholat sunnah Jamaah umum.</p>
          <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#exampleModal4">
            Detail
          </button>

          <!-- Modal -->
          <div class="modal-dialog modal-dialog-centered">
            <div class="modal fade" id="exampleModal4" tabindex="-1" aria-labelledby="exampleModalLabel"
              aria-hidden="true" style="margin-top: 3.1vw;">
              <div class="modal-dialog">
                <div class="modal-content">
                  <div class="modal-header">
                    <h1 class="modal-title fs-5" id="exampleModalLabel">Lapangan Olah Raga</h1>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                  </div>
                  <div class="modal-body">
                    <picture>
                      <div class="carousel-container">

                        <!-- UKURAN FOTO 1920X1080 -->

                        <div class="mySlides3 animate">
                          <img src="https://sman1marabahan.sch.id/media_library/posts/large/eafad615f07c4d7b02ab380b95f481f8.jpg" alt="slide" />
                        </div>
                        <div class="mySlides3 animate">
                          <img src="https://sman1marabahan.sch.id/media_library/posts/large/eafad615f07c4d7b02ab380b95f481f8.jpg" alt="slide" />
                        </div>
                        <div class="mySlides3 animate">
                          <img src="https://sman1marabahan.sch.id/media_library/posts/large/eafad615f07c4d7b02ab380b95f481f8.jpg" alt="slide" />
                        </div>
                        <div class="mySlides3 animate">
                          <img src="https://sman1marabahan.sch.id/media_library/posts/large/eafad615f07c4d7b02ab380b95f481f8.jpg" alt="slide" />
                        </div>

                        <!-- Next and previous buttons -->
                        <a class="prev" onclick="prevSlide()">&#10094;</a>
                        <a class="next" onclick="nextSlide()">&#10095;</a>
                      
                        <!-- The dots/circles -->
                        <div class="dots-container">
                          <span class="dots3" onclick="currentSlide(1)"></span>
                          <span class="dots3" onclick="currentSlide(2)"></span>
                          <span class="dots3" onclick="currentSlide(3)"></span>
                          <span class="dots3" onclick="currentSlide(4)"></span>
                        </div>
                      </div>
                    </picture>
                    <div style="margin-top: 18px;">
                      <b> Detail Fasilitas </b> <br>
                      <div style="margin-top: 0.69vw;">
                        <iconify-icon icon="fe:activity" style="font-size: 2.5vh"></iconify-icon> ||
                        <b>Fungsi</b>: -<br>
                        <iconify-icon icon="radix-icons:ruler-square" style="font-size: 2.5vh"></iconify-icon> ||
                        <b>Luas</b>:
                       - <br>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
        <img src="https://sman1marabahan.sch.id/media_library/posts/large/eafad615f07c4d7b02ab380b95f481f8.jpg" alt="">
      </div>
    </div>

    <br>

    <div class="p-artikel">
      <div class="fasilitas-p card5">
        <img src="https://smktarunabhakti.net/wp-content/uploads/2020/07/photo_2020-07-27-14.18.20-min-1024x579.jpeg" alt="">
        <div class="deskripsi-fasilitas-left">
          <h4>LAB SAMSUNG</h4>
          <p>Diharapkan fasilitas Lab Samsung ini dapat memberikan manfaat yang maksimal kepada siswa, guru maupun komunitas khususnya di Smk Taruna Bhakti Depok pada umumnya dalam pemanfaatan teknologi untuk proses belajar mengajar yang lebih interaktif, kreatif, inovatif dan menyenangkan. </p>
          <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#exampleModal5">
            Detail
          </button>

          <!-- Modal -->
          <div class="modal-dialog modal-dialog-centered">
            <div class="modal fade" id="exampleModal5" tabindex="-1" aria-labelledby="exampleModalLabel"
              aria-hidden="true" style="margin-top: 3.1vw;">
              <div class="modal-dialog">
                <div class="modal-content">
                  <div class="modal-header">
                    <h1 class="modal-title fs-5" id="exampleModalLabel">Mushola Raudhotul Ilmi</h1>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                  </div>
                  <div class="modal-body">
                    <picture>
                      <div class="carousel-container">

                        <!-- UKURAN FOTO 1920X1080 -->

                        <div class="mySlides4 animate">
                          <img src="https://smktarunabhakti.net/wp-content/uploads/2020/07/photo_2020-07-27-14.18.20-min-1024x579.jpeg" alt="slide" />
                        </div>
                      
                        <div class="mySlides4 animate">
                          <img src="https://smktarunabhakti.net/wp-content/uploads/2020/07/photo_2020-07-27-14.18.20-min-1024x579.jpeg" alt="slide" />
                        </div>
                      
                        <div class="mySlides4 animate">
                          <img src="https://smktarunabhakti.net/wp-content/uploads/2020/07/photo_2020-07-27-14.18.20-min-1024x579.jpeg" alt="slide" />
                        </div>
                      
                        <div class="mySlides4 animate">
                          <img src="https://smktarunabhakti.net/wp-content/uploads/2020/07/photo_2020-07-27-14.18.20-min-1024x579.jpeg" alt="slide" />
                        </div>
                      
                        
                      

                      
                        <!-- Next and previous buttons -->
                        <a class="prev" onclick="prevSlide()">&#10094;</a>
                        <a class="next" onclick="nextSlide()">&#10095;</a>
                      
                        <!-- The dots/circles -->
                        <div class="dots-container">
                          <span class="dots4" onclick="currentSlide(1)"></span>
                          <span class="dots4" onclick="currentSlide(2)"></span>
                          <span class="dots4" onclick="currentSlide(3)"></span>
                          <span class="dots4" onclick="currentSlide(4)"></span>
                        </div>
                      </div>
                    </picture>
                    <div style="margin-top: 18px;">
                      <b> Detail Fasilitas </b> <br>
                      <div style="margin-top: 0.69vw;">
                        <iconify-icon icon="ic:twotone-construction" style="font-size: 2.5vh"></iconify-icon> ||
                        <b>Dibangun</b>: - <br>
                        <iconify-icon icon="material-symbols:meeting-room-outline-rounded" style="font-size: 2.5vh"></iconify-icon> ||
                        <b>Jumlah</b>: - <br>
                        <iconify-icon icon="material-symbols:reduce-capacity" style="font-size: 2.5vh"></iconify-icon> ||
                        <b>kapasitas</b>: -<br>
                        <iconify-icon icon="material-symbols:location-on" style="font-size: 2.5vh"></iconify-icon> ||
                        <b>Letak</b>: -<br>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>

  </div>
  </div>
  <!-- ISI SERTIFIKAT -->
@endsection

@section('linkjs')
<script>
    let slideIndex = 0;
showSlides();

// Next-previous control
function nextSlide() {
  slideIndex++;
  showSlides();
  timer = _timer; // reset timer
}

function prevSlide() {
  slideIndex--;
  showSlides();
  timer = _timer;
}

// Thumbnail image controlls
function currentSlide(n) {
  slideIndex = n - 1;
  showSlides();
  timer = _timer;
}

function showSlides() {
  let slides = document.querySelectorAll(".mySlides");
  let slides1 = document.querySelectorAll(".mySlides1");
  let slides2 = document.querySelectorAll(".mySlides2");
  let slides3 = document.querySelectorAll(".mySlides3");
  let slides4 = document.querySelectorAll(".mySlides4");
  let slides5 = document.querySelectorAll(".mySlides5");
  let dots = document.querySelectorAll(".dots");
  let dots1 = document.querySelectorAll(".dots1");
  let dots2 = document.querySelectorAll(".dots2");
  let dots3 = document.querySelectorAll(".dots3");
  let dots4 = document.querySelectorAll(".dots4");
  let dots5 = document.querySelectorAll(".dots5");

  if (slideIndex > slides.length - 1) slideIndex = 0;
  if (slideIndex < 0) slideIndex = slides.length - 1;
  
  // hide all slides
  slides.forEach((slide) => {
    slide.style.display = "none";
  });
  slides1.forEach((slide) => {
    slide.style.display = "none";
  });
  slides2.forEach((slide) => {
    slide.style.display = "none";
  });
  slides3.forEach((slide) => {
    slide.style.display = "none";
  });
  slides4.forEach((slide) => {
    slide.style.display = "none";
  });
  slides5.forEach((slide) => {
    slide.style.display = "none";
  });
  
  // show one slide base on index number
  slides[slideIndex].style.display = "block";
  slides1[slideIndex].style.display = "block";
  slides2[slideIndex].style.display = "block";
  slides3[slideIndex].style.display = "block";
  slides4[slideIndex].style.display = "block";
  slides5[slideIndex].style.display = "block";
  
  dots.forEach((dot) => {
    dot.classList.remove("active");
  });
  
  dots[slideIndex].classList.add("active");
  //
  dots1.forEach((dot) => {
    dot.classList.remove("active");
  });
  
  dots1[slideIndex].classList.add("active");
  //
  dots2.forEach((dot) => {
    dot.classList.remove("active");
  });
  
  dots2[slideIndex].classList.add("active");
  //
  dots3.forEach((dot) => {
    dot.classList.remove("active");
  });
  
  dots3[slideIndex].classList.add("active");
  //
  dots4.forEach((dot) => {
    dot.classList.remove("active");
  });
  
  dots4[slideIndex].classList.add("active");
  //
  dots5.forEach((dot) => {
    dot.classList.remove("active");
  });
  
  dots5[slideIndex].classList.add("active");
}

// autoplay slides --------
let timer = 7; // sec
const _timer = timer;

// this function runs every 1 second
setInterval(() => {
  timer--;

  if (timer < 1) {
    nextSlide();
    timer = _timer; // reset timer
  }
}, 1000); // 1sec
  </script>
@endsection