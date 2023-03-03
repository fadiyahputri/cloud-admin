@extends('SmkTarunaBhakti.layouts.NavbarAndFooter2')

@section('title', 'Ruang Pembelajaran Umum Smk Taruna Bhakti')

@section('webcontent')
    
  <!-- ISI SERTIFIKAT -->

  <div class="artikel">
    <!-- tanggal, kategori -->
    <div class="artikel-kategori">
      <a href="">Beranda,</a>
      <a href="">Ruang pembelajaran Umum </a>
    </div>

    <!-- judul artikel -->
    <div class="artikel-judul">
      <p>Ruang pembelajaran Umum</p>
    </div>

    <!-- isi text artikel -->

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

                        <div class="mySlides animate">
                          <img src="https://www.man3banyumas.sch.id/wp-content/uploads/2021/12/Lab-Komputer-MAN-3-Banyuams-4.jpg" alt="slide" />
                        </div>
                      
                        <div class="mySlides animate">
                          <img src="https://www.man3banyumas.sch.id/wp-content/uploads/2021/12/Lab-Komputer-MAN-3-Banyumas-5.jpg" alt="slide" />
                        </div>
                      
                        <div class="mySlides animate">
                          <img src="https://www.smpn1kalasan.sch.id/asset/img_galeri/P1170235.jpg" alt="slide" />
                        </div>
                      
                        <div class="mySlides animate">
                          <img src="https://www.smpn1kalasan.sch.id/asset/img_galeri/DSC03808.jpg" alt="slide" />
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
      <div class="fasilitas-p card2">
        <div class="deskripsi-fasilitas-right">
          <h4>Perpustakaan</h4>
          <p>SMK Taruna Bhakti Depok memiliki Ruang Perpustakaan dengan luas ruangan : 8 m X 4 m = 32 m2 Letak perpustakaan berada pada lantai 3 gedung bagian Barat yang diapit oleh Laboratorium RPL Medium dan MM Advance. Terdapat 3 lemari besar 1 rak buku terbuat dari besi dan 2 rak kayu besar menjulang tinggi yang berisi ratusan buku dengan berbagai macam judul dan tema.</p>
          <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#exampleModal2">
            Detail
          </button>

          <!-- Modal -->
          <div class="modal-dialog modal-dialog-centered">
            <div class="modal fade" id="exampleModal2" tabindex="-1" aria-labelledby="exampleModalLabel"
              aria-hidden="true" style="margin-top: 3.1vw;">
              <div class="modal-dialog">
                <div class="modal-content">
                  <div class="modal-header">
                    <h1 class="modal-title fs-5" id="exampleModalLabel">Perpustakaan</h1>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                  </div>
                  <div class="modal-body">
                    <picture>
                      <div class="carousel-container">

                        <!-- UKURAN FOTO 1920X1080 -->

                        <div class="mySlides1 animate">
                          <img src="http://espansakotasalatiga.sch.id/perpustakaan/foto_berita/68maxresdefault.jpg" alt="slide" />
                        </div>
                      
                        <div class="mySlides1 animate">
                          <img src="https://i0.wp.com/pcnukendal.com/wp-content/uploads/2018/11/perpus.jpeg?fit=1920%2C1080&ssl=1" alt="slide" />
                        </div>
                      
                        <div class="mySlides1 animate">
                          <img src="https://rancangrekaruang.id/wp-content/uploads/2022/11/Interior-Yogyakarta-Desain-Perpustakaan-view-0.jpg" alt="slide" />
                        </div>
                      
                        <div class="mySlides1 animate">
                          <img src="https://i0.wp.com/pcnukendal.com/wp-content/uploads/2018/11/perpus.jpeg?fit=1920%2C1080&ssl=1" alt="slide" />
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
                        <iconify-icon icon="radix-icons:ruler-square" style="font-size: 2.5vh"></iconify-icon> ||
                        <b>Luas</b>: 32 m² (Perpustakaan) <br>
                        <iconify-icon icon="material-symbols:menu-book-outline" style="font-size: 2.5vh"></iconify-icon> || <b>Jumlah
                          buku</b>:
                        100++<br>
                        <iconify-icon icon="material-symbols:location-on"
                          style="font-size: 2.5vh"></iconify-icon> || <b>Letak</b>: lantai 3 gedung bagian Barat <br>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
        <img src="https://www.reportase9.com/wp-content/uploads/2022/03/P_20220329_145913.jpg" alt="">
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
  let dots = document.querySelectorAll(".dots");
  let dots1 = document.querySelectorAll(".dots1");



  if (slideIndex > slides.length - 1) slideIndex = 0;
  if (slideIndex < 0) slideIndex = slides.length - 1;
  
  // hide all slides
  slides.forEach((slide) => {
    slide.style.display = "none";
  });
  slides1.forEach((slide) => {
    slide.style.display = "none";
  });

  
  // show one slide base on index number
  slides[slideIndex].style.display = "block";
  slides1[slideIndex].style.display = "block";

  
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