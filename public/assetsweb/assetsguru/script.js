
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

