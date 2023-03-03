@extends('SmkTarunaBhakti.layouts.NavbarAndFooter2')

@section('title', 'Ruang Pembelajaran Khusus Smk Taruna Bhakti')

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
      <p>Ruang Belajar Khusus</p>
    </div>

    <!-- isi text artikel -->

    <div class="p-artikel">
      <div class="fasilitas-p card1">
        <img src="https://www.smkgelorajayanusantara.sch.id/wp-content/uploads/2021/08/WhatsApp-Image-2021-08-30-at-13.35.31.jpeg" alt="">
        <div class="deskripsi-fasilitas-left">
          <h4>Teknik Komputer dan Jaringan</h4>
          <p>Jurusan Teknik Komputer dan jaringan (TKJ) SMK Taruna Bhakti Depok memiliki 3 laboratorium yaitu Laboratorium Network dan Laboratorium Network Advance</p>
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
                    <h1 class="modal-title fs-5" id="exampleModalLabel">Teknik Komputer dan Jaringan</h1>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                  </div>
                  <div class="modal-body">
                    <picture>
                      <div class="carousel-container">

                        <!-- UKURAN FOTO 1920X1080 -->

                        <div class="mySlides animate">
                          <img src="https://www.smkgelorajayanusantara.sch.id/wp-content/uploads/2021/08/WhatsApp-Image-2021-08-30-at-13.35.31.jpeg" alt="slide" />
                        </div>
                      
                        <div class="mySlides animate">
                          <img src="https://www.smkgelorajayanusantara.sch.id/wp-content/uploads/2021/08/WhatsApp-Image-2021-08-30-at-13.35.31.jpeg" alt="slide" />
                        </div>
                      
                        <div class="mySlides animate">
                          <img src="https://www.smkgelorajayanusantara.sch.id/wp-content/uploads/2021/08/WhatsApp-Image-2021-08-30-at-13.35.31.jpeg" alt="slide" />
                        </div>
                      
                        <div class="mySlides animate">
                          <img src="https://www.smkgelorajayanusantara.sch.id/wp-content/uploads/2021/08/WhatsApp-Image-2021-08-30-at-13.35.31.jpeg" alt="slide" />
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
                        <b>Dibuka</b>: - <br>
                        <iconify-icon icon="material-symbols:reduce-capacity" style="font-size: 2.5vh"></iconify-icon> ||
                        <b>kapasitas</b>: - <br>
                        <iconify-icon icon="material-symbols:location-on" style="font-size: 2.5vh"></iconify-icon> ||
                        <b>Letak</b>: - <br>
                        <iconify-icon icon="material-symbols:mdi:feature-highlight"
                          style="font-size: 2.5vh"></iconify-icon> || <b>Fasilitas</b>: -<br>
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
          <h4>Multimedia</h4>
          <p>Jurusan Multimedia (MM) SMK Taruna Bhakti Depok memiliki 2 laboratorium yaitu Laboratorium MM Medium dan Laboratorium MM Advance. Kedua laboratorium ini berada pada lantai yang sama tetapi dipisah oleh Laboratorium RPL Advance dan Ruang Perpustakaan.</p>
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
                    <h1 class="modal-title fs-5" id="exampleModalLabel">Multimedia</h1>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                  </div>
                  <div class="modal-body">
                    <picture>
                      <div class="carousel-container">

                        <!-- UKURAN FOTO 1920X1080 -->

                        <div class="mySlides1 animate">
                          <img src="https://lib.uinsgd.ac.id/images/ruang-multimedia.JPG" alt="slide" />
                        </div>
                      
                        <div class="mySlides1 animate">
                          <img src="https://lib.uinsgd.ac.id/images/ruang-multimedia.JPG" alt="slide" />
                        </div>
                      
                        <div class="mySlides1 animate">
                          <img src="https://lib.uinsgd.ac.id/images/ruang-multimedia.JPG" alt="slide" />
                        </div>
                      
                        <div class="mySlides1 animate">
                          <img src="https://lib.uinsgd.ac.id/images/ruang-multimedia.JPG" alt="slide" />
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
                        <iconify-icon icon="ic:twotone-construction" style="font-size: 2.5vh"></iconify-icon> ||
                        <b>Dibuka</b>: - <br>
                        <iconify-icon icon="material-symbols:reduce-capacity" style="font-size: 2.5vh"></iconify-icon> ||
                        <b>kapasitas</b>: - <br>
                        <iconify-icon icon="material-symbols:location-on" style="font-size: 2.5vh"></iconify-icon> ||
                        <b>Letak</b>: - <br>
                        <iconify-icon icon="material-symbols:mdi:feature-highlight"
                          style="font-size: 2.5vh"></iconify-icon> || <b>Fasilitas</b>: -<br>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
        <img src="https://lib.uinsgd.ac.id/images/ruang-multimedia.JPG" alt="">
      </div>
    </div>

    <br>

    <div class="p-artikel">
      <div class="fasilitas-p card3">
        <img src="https://1.bp.blogspot.com/-xQLwKt6Qw-Q/Xbm7wkHwwiI/AAAAAAAAAtU/sRyvlmREn_MdAvtUMz3gVUsybWhoX1fvQCLcBGAsYHQ/s1600/IMG-20190426-WA0090.jpeg" alt="">
        <div class="deskripsi-fasilitas-left">
          <h4>Teknik Elektronika Industri</h4>
          <p>Jurusan Teknik Elektronika Industri (TEI) SMK Taruna Bhakti Depok memiliki 1 Laboratorium yang diberi nama sama dengan jurusannya yaitu Laboratorium Teknik Elektronika Industri</p>
          <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#exampleModal3">
            Detail
          </button>

          <!-- Modal -->
          <div class="modal-dialog modal-dialog-centered">
            <div class="modal fade" id="exampleModal3" tabindex="-1" aria-labelledby="exampleModalLabel"
              aria-hidden="true" style="margin-top: 3.1vw;">
              <div class="modal-dialog">
                <div class="modal-content">
                  <div class="modal-header">
                    <h1 class="modal-title fs-5" id="exampleModalLabel">Teknik Elektronika Industri</h1>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                  </div>
                  <div class="modal-body">
                    <picture>
                      <div class="carousel-container">

                        <!-- UKURAN FOTO 1920X1080 -->

                        <div class="mySlides2 animate">
                          <img src="https://1.bp.blogspot.com/-xQLwKt6Qw-Q/Xbm7wkHwwiI/AAAAAAAAAtU/sRyvlmREn_MdAvtUMz3gVUsybWhoX1fvQCLcBGAsYHQ/s1600/IMG-20190426-WA0090.jpeg" alt="slide" />
                        </div>

                        <div class="mySlides2 animate">
                          <img src="https://1.bp.blogspot.com/-xQLwKt6Qw-Q/Xbm7wkHwwiI/AAAAAAAAAtU/sRyvlmREn_MdAvtUMz3gVUsybWhoX1fvQCLcBGAsYHQ/s1600/IMG-20190426-WA0090.jpeg" alt="slide" />
                        </div>

                        <div class="mySlides2 animate">
                          <img src="https://1.bp.blogspot.com/-xQLwKt6Qw-Q/Xbm7wkHwwiI/AAAAAAAAAtU/sRyvlmREn_MdAvtUMz3gVUsybWhoX1fvQCLcBGAsYHQ/s1600/IMG-20190426-WA0090.jpeg" alt="slide" />
                        </div>

                        <div class="mySlides2 animate">
                          <img src="https://1.bp.blogspot.com/-xQLwKt6Qw-Q/Xbm7wkHwwiI/AAAAAAAAAtU/sRyvlmREn_MdAvtUMz3gVUsybWhoX1fvQCLcBGAsYHQ/s1600/IMG-20190426-WA0090.jpeg" alt="slide" />
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
                        <iconify-icon icon="ic:twotone-construction" style="font-size: 2.5vh"></iconify-icon> ||
                        <b>Dibuka</b>: - <br>
                        <iconify-icon icon="material-symbols:reduce-capacity" style="font-size: 2.5vh"></iconify-icon> ||
                        <b>kapasitas</b>: - <br>
                        <iconify-icon icon="material-symbols:location-on" style="font-size: 2.5vh"></iconify-icon> ||
                        <b>Letak</b>: - <br>
                        <iconify-icon icon="material-symbols:mdi:feature-highlight"
                          style="font-size: 2.5vh"></iconify-icon> || <b>Fasilitas</b>: -<br>
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
          <h4>Rekayasa Perangkat Lunak
        </h4>
          <p>Jurusan Rekayasa Perangkat Lunak (RPL) SMK Taruna Bhakti Depok memiliki 2 laboratorium yaitu Laboratorium RPL Medium dan Laboratorium RPL Advance. Laboratorium RPL Medium berada pada lantai 4 berdekatan dengan Laboratorium Teknik Elektronika Industri. </p>
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
                    <h1 class="modal-title fs-5" id="exampleModalLabel">Rekayasa Perangkat Lunak
                    </h1>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                  </div>
                  <div class="modal-body">
                    <picture>
                      <div class="carousel-container">

                        <!-- UKURAN FOTO 1920X1080 -->

                        <div class="mySlides3 animate">
                          <img src="https://informatika.politap.ac.id/public/app/fasilitas/1660277913-6mYFK.jpg" alt="slide" />
                        </div>
                        <div class="mySlides3 animate">
                          <img src="https://informatika.politap.ac.id/public/app/fasilitas/1660277913-6mYFK.jpg" alt="slide" />
                        </div>
                        <div class="mySlides3 animate">
                          <img src="https://informatika.politap.ac.id/public/app/fasilitas/1660277913-6mYFK.jpg" alt="slide" />
                        </div>
                        <div class="mySlides3 animate">
                          <img src="https://informatika.politap.ac.id/public/app/fasilitas/1660277913-6mYFK.jpg" alt="slide" />
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
                        <iconify-icon icon="ic:twotone-construction" style="font-size: 2.5vh"></iconify-icon> ||
                        <b>Dibuka</b>: - <br>
                        <iconify-icon icon="material-symbols:reduce-capacity" style="font-size: 2.5vh"></iconify-icon> ||
                        <b>kapasitas</b>: - <br>
                        <iconify-icon icon="material-symbols:location-on" style="font-size: 2.5vh"></iconify-icon> ||
                        <b>Letak</b>: - <br>
                        <iconify-icon icon="material-symbols:mdi:feature-highlight"
                          style="font-size: 2.5vh"></iconify-icon> || <b>Fasilitas</b>: -<br>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
        <img src="https://informatika.politap.ac.id/public/app/fasilitas/1660277913-6mYFK.jpg" alt="">
      </div>
    </div>

    <br>

    <div class="p-artikel">
      <div class="fasilitas-p card5">
        <img src="https://binaqurani.sch.id/wp-content/uploads/2022/01/Bina-Qurani-Alat-Pendukung-Broadcasting-Photo-by-Caleb-O-Pexels.jpg" alt="">
        <div class="deskripsi-fasilitas-left">
          <h4>Broadcasting</h4>
          <p>Jurusan Broadcasting SMK Taruna Bhakti memiliki satu Laboratorium dan satu Studio Broadcast. Laboratorium Broadcasting berada pada Gedung bagian Barat lantai satu yang bersebelahan dengan Ruang Kelompok Kerja Kurikulum.</p>
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
                    <h1 class="modal-title fs-5" id="exampleModalLabel">Broadcasting</h1>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                  </div>
                  <div class="modal-body">
                    <picture>
                      <div class="carousel-container">

                        <!-- UKURAN FOTO 1920X1080 -->

                        <div class="mySlides4 animate">
                          <img src="https://binaqurani.sch.id/wp-content/uploads/2022/01/Bina-Qurani-Alat-Pendukung-Broadcasting-Photo-by-Caleb-O-Pexels.jpg" alt="slide" />
                        </div>
                      
                        <div class="mySlides4 animate">
                          <img src="https://binaqurani.sch.id/wp-content/uploads/2022/01/Bina-Qurani-Alat-Pendukung-Broadcasting-Photo-by-Caleb-O-Pexels.jpg" alt="slide" />
                        </div>
                      
                        <div class="mySlides4 animate">
                          <img src="https://binaqurani.sch.id/wp-content/uploads/2022/01/Bina-Qurani-Alat-Pendukung-Broadcasting-Photo-by-Caleb-O-Pexels.jpg" alt="slide" />
                        </div>
                      
                        <div class="mySlides4 animate">
                          <img src="https://binaqurani.sch.id/wp-content/uploads/2022/01/Bina-Qurani-Alat-Pendukung-Broadcasting-Photo-by-Caleb-O-Pexels.jpg" alt="slide" />
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
                        <b>Dibuka</b>: - <br>
                        <iconify-icon icon="material-symbols:reduce-capacity" style="font-size: 2.5vh"></iconify-icon> ||
                        <b>kapasitas</b>: - <br>
                        <iconify-icon icon="material-symbols:location-on" style="font-size: 2.5vh"></iconify-icon> ||
                        <b>Letak</b>: - <br>
                        <iconify-icon icon="material-symbols:mdi:feature-highlight"
                          style="font-size: 2.5vh"></iconify-icon> || <b>Fasilitas</b>: -<br>
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
  let dots = document.querySelectorAll(".dots");
  let dots1 = document.querySelectorAll(".dots1");
  let dots2 = document.querySelectorAll(".dots2");
  let dots3 = document.querySelectorAll(".dots3");
  let dots4 = document.querySelectorAll(".dots4");
 

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

  
  // show one slide base on index number
  slides[slideIndex].style.display = "block";
  slides1[slideIndex].style.display = "block";
  slides2[slideIndex].style.display = "block";
  slides3[slideIndex].style.display = "block";
  slides4[slideIndex].style.display = "block";
 
  
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