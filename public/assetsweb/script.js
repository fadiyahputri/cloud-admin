
//navbar start
// search-box open close js code
let navbar = document.querySelector(".navbar");
let searchBox = document.querySelector(".search-box .bx-search");
// let searchBoxCancel = document.querySelector(".search-box .bx-x");

searchBox.addEventListener("click", ()=>{
  navbar.classList.toggle("showInput");
  if(navbar.classList.contains("showInput")){
    searchBox.classList.replace("bx-search" ,"bx-x");
  }else {
    searchBox.classList.replace("bx-x" ,"bx-search");
  }
});

// sidebar open close js code
let navLinks = document.querySelector(".nav-links");
let menuOpenBtn = document.querySelector(".navbar .bx-menu");
let menuCloseBtn = document.querySelector(".nav-links .bx-x");
menuOpenBtn.onclick = function() {
navLinks.style.left = "0";
}
menuCloseBtn.onclick = function() {
navLinks.style.left = "-100%";
}


// sidebar submenu open close js code
  //to profil
  let textprofil = document.querySelector(".textprofil");
textprofil.onclick = function() {
 navLinks.classList.toggle("show1");
}

let profilArrow = document.querySelector(".profil-arrow");
profilArrow.onclick = function() {
  navLinks.classList.toggle("show1");
}

//to kurikulum
let kurikulumArrow = document.querySelector(".kurikulum-arrow");
kurikulumArrow.onclick = function() {
  navLinks.classList.toggle("show4");
}
let textkurikulum = document.querySelector(".textkurikulum");
textkurikulum.onclick = function() {
  navLinks.classList.toggle("show4");
}

//to mutu
let mutuArrow = document.querySelector(".mutu-arrow");
mutuArrow.onclick = function() {
  navLinks.classList.toggle("show2");
}

let mututext = document.querySelector("#mutu");
mututext.onclick = function() {
 navLinks.classList.toggle("show2");
}

//to Sertifikasi internasional
let Sertifikasitext = document.querySelector("#Sertifikasi");
Sertifikasitext.onclick = function() {
  navLinks.classList.toggle("show5");
}
let SertifikasiArrow = document.querySelector(".Sertifikasi-arrow");
SertifikasiArrow.onclick = function() {
  navLinks.classList.toggle("show5");
}

//to kesiswaan
let KesiswaanArrow = document.querySelector(".Kesiswaan-arrow");
KesiswaanArrow.onclick = function() {
  navLinks.classList.toggle("show3");
}
let Kesiswaantext = document.querySelector(".Kesiswaantext");
Kesiswaantext.onclick = function() {
  navLinks.classList.toggle("show3");
}

  //to fasilitas
  let Fasilitastext = document.querySelector(".Fasilitastext");
  Fasilitastext.onclick = function() {
    navLinks.classList.toggle("show6");
  }
  let FasilitasArrow = document.querySelector(".Fasilitas-arrow");
  FasilitasArrow.onclick = function() {
    navLinks.classList.toggle("show6");
  }
  
  //navbar end 

// PPDB
var slideIndex = 1;

var myTimer;

var slideshowContainer;

window.addEventListener("load",function() {
  showSlides(slideIndex);
  myTimer = setInterval(function(){plusSlides(1)}, 4000);
  
  //COMMENT OUT THE LINE BELOW TO KEEP ARROWS PART OF MOUSEENTER PAUSE/RESUME
  slideshowContainer = document.getElementsByClassName('slideshow-inner')[0];
  
  //UNCOMMENT OUT THE LINE BELOW TO KEEP ARROWS PART OF MOUSEENTER PAUSE/RESUME
  // slideshowContainer = document.getElementsByClassName('slideshow-container')[0];
  
  slideshowContainer.addEventListener('mouseenter', pause)
  slideshowContainer.addEventListener('mouseleave', resume)
})

// NEXT AND PREVIOUS CONTROL
function plusSlides(n){
  clearInterval(myTimer);
  if (n < 0){
    showSlides(slideIndex -= 1);
  } else {
  showSlides(slideIndex += 1); 
  }
  
  //COMMENT OUT THE LINES BELOW TO KEEP ARROWS PART OF MOUSEENTER PAUSE/RESUME
  
  if (n === -1){
    myTimer = setInterval(function(){plusSlides(n + 2)}, 4000);
  } else {
    myTimer = setInterval(function(){plusSlides(n + 1)}, 4000);
  }
}

//Controls the current slide and resets interval if needed
function currentSlide(n){
  clearInterval(myTimer);
  myTimer = setInterval(function(){plusSlides(n + 1)}, 4000);
  showSlides(slideIndex = n);
}

function showSlides(n){
  var i;
  var slides = document.getElementsByClassName("mySlides");
  var dots = document.getElementsByClassName("dot");
  if (n > slides.length) {slideIndex = 1}
  if (n < 1) {slideIndex = slides.length}
  for (i = 0; i < slides.length; i++) {
      slides[i].style.display = "none";
  }
  for (i = 0; i < dots.length; i++) {
      dots[i].className = dots[i].className.replace(" active", "");
  }
  slides[slideIndex-1].style.display = "block";
  dots[slideIndex-1].className += " active";
}

pause = () => {
  clearInterval(myTimer);
}

resume = () =>{
  clearInterval(myTimer);
  myTimer = setInterval(function(){plusSlides(slideIndex)}, 4000);
}
//PPDB SELESAI

  
//berita start

let loadMoreBtn = document.querySelector('#load-more');
let currentItem = 3;

loadMoreBtn.onclick = () =>{
   let boxes = [...document.querySelectorAll('.container .box-container .box')];
   for (var i = currentItem; i < currentItem + 3; i++){
      boxes[i].style.display = 'inline-block';
   }
   currentItem += 3;

   if(currentItem >= boxes.length){
      loadMoreBtn.style.display = 'none';
   }
}

//berita end 

