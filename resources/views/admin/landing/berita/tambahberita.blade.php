<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <!-- icon -->
    <script src="https://code.iconify.design/iconify-icon/1.0.2/iconify-icon.min.js"></script>
    <!-- css -->
    <link rel="stylesheet" href="css/dashboard/landing.css">
    <!-- bootstrap -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js" integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous"></script>

    <script src="https://code.jquery.com/jquery-2.2.4.min.js"></script>

    <script src="https://cdn.ckeditor.com/ckeditor5/36.0.1/classic/ckeditor.js"></script>
    <link href='https://unpkg.com/boxicons@2.0.9/css/boxicons.min.css' rel='stylesheet'>

</head>
<body onload="muncul()">
    <div id="container">
      <nav>
        <div style="width: 30%; display: flex; align-items: center;">
            <div class="logo"></div>
            <span class="tittle">starbhak</span>
            <span class="tittle2">dashboard</span>
        </div>
        <div style="width: 14%; display: flex; align-items: center;">
            <span id="welcome">welcome, admin</span>
            <div class="line"></div>
            <iconify-icon icon="tabler:logout" class="logout" style="color: white;" width="30" height="30"></iconify-icon>
        </div>
    </nav>
        <div id="menu">
            <div id="sidebar">
                <ul>
                    <li >
                        <a class="list-sidebar" href="/admin">
                            <iconify-icon class="box-icon" icon="radix-icons:dashboard" width="23" height="23"></iconify-icon>
                        <div style="width: 70%;">
                            <p class="sec">Dashboard</p>
                        </div>
                        </a>
                    </li>
                    <li >
                        <a class="list-sidebar" href="/dataguru">
                            <iconify-icon class="box-icon" icon="uil:users-alt" width="23" height="23"></iconify-icon>
                        <div style="width: 70%;">
                            <p class="sec">Data Guru</p>
                        </div>
                        </a>
                    </li>
                    <li >
                        <a class="list-sidebar" href="/landing">
                            <iconify-icon class="box-icon active" style="color: white;" icon="quill:paper" width="25" height="23"></iconify-icon>
                        <div style="width: 70%;">
                            <p class="sec active">Landing Page</p>
                        </div>
                        </a>
                    </li>
                </ul>
            </div>
            <div id="content">
                    <div style=" display: flex; align-items: center; margin-bottom: 1%;">
                      <iconify-icon class="box-icon active" style="color: white;" icon="quill:paper" width="25" height="23"></iconify-icon>
                        <p class="title-table">Landing page</p>
                        <span style="font-weight: 700; padding-left: 1%; font-size: 1.5rem;"> >  </span> 
                        <span class="title-table">tambah record</span>
                        <span style="font-weight: 700; padding-left: 1%; font-size: 1.5rem;"> >  </span> 
                        <span class="title-table">berita</span>
                    </div>
                    <span class="text-child">Pastikan isi form dengan benar dan lengkap !</span>
                    <form action="/tambahberita/store" method="POST" enctype="multipart/form-data" autocomplete="off">
                      @csrf
                      <div id="content-berita">
                        <div style="display: flex;">
                            <div class="left-side">
                                <div class="rec-input">
                                    <label class="form-label">Judul Berita</label>
                                    <input type="text" id="judul" name="judul" class="inputan">
                                </div>
                            </div>
                            <div style="width: 0.1rem; height: 9.2vw; background-color: #D9D9D9;"></div>
                            <div class="right-side">
                                <div class="rec-input">
                                    <label class="form-label">Gambar Berita</label>
                                    <input type="file" name="gambar" id="gambar">
                                </div>
                            </div>
                        </div>
                        <div style="padding: 10px 30px 0px 30px;">
                          <textarea name="isiberita" id="isiberita">
                          </textarea>
                        </div>
                        <div class="btn-landingpage">
                            
                          <a href="/landing">
                            <button class="btn-form">
                                Cancel
                                <iconify-icon icon="ph:x-circle-bold" style="color: white; margin-left: 5%;"></iconify-icon>
                            </button>
                          </a>

                          <a href="/tambahberita/store">
                            <button class="btn-form">
                                Submit
                                <iconify-icon icon="ph:x-circle-bold" style="color: white; margin-left: 5%;"></iconify-icon>
                            </button>
                          </a>

                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
    {{-- CKEDITOR --}}
    <script>
      ClassicEditor
          .create( document.querySelector( '#isiberita' ) )
          .catch( error => {
              console.error( error );
          } );
    </script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/html2pdf.js/0.10.1/html2pdf.bundle.min.js" integrity="sha512-GsLlZN/3F2ErC5ifS5QtgpiJtWd43JWSuIgh7mbzZ8zBps+dvLusV+eNQATqgA/HdeKFVgA5v3S/cIrLF7QnIg==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
	<script>
        function formatDoc(cmd, value=null) {
            if(value) {
                document.execCommand(cmd, false, value);
            } else {
                document.execCommand(cmd);
            }
        }
        
        function addLink() {
            const url = prompt('Insert url');
            formatDoc('createLink', url);
        }
        
        const content = document.getElementById('content');
        
        content.addEventListener('mouseenter', function () {
            const a = content.querySelectorAll('a');
            a.forEach(item=> {
                item.addEventListener('mouseenter', function () {
                    content.setAttribute('contenteditable', false);
                    item.target = '_blank';
                })
                item.addEventListener('mouseleave', function () {
                    content.setAttribute('contenteditable', true);
                })
            })
        })
        
        
        const showCode = document.getElementById('show-code');
        let active = false;
        
        showCode.addEventListener('click', function () {
            showCode.dataset.active = !active;
            active = !active
            if(active) {
                content.textContent = content.innerHTML;
                content.setAttribute('contenteditable', false);
            } else {
                content.innerHTML = content.textContent;
                content.setAttribute('contenteditable', true);
            }
        })
        
        
        
        const filename = document.getElementById('filename');
        
        function fileHandle(value) {
            if(value === 'new') {
                content.innerHTML = '';
                filename.value = 'untitled';
            } else if(value === 'txt') {
                const blob = new Blob([content.innerText])
                const url = URL.createObjectURL(blob)
                const link = document.createElement('a');
                link.href = url;
                link.download = `${filename.value}.txt`;
                link.click();
            } else if(value === 'pdf') {
                html2pdf(content).save(filename.value);
            }
        }
    </script>
    <!-- drag and drop -->
    <script>
      const dragText = document.querySelector(".text-drop"),
      form = document.querySelector(".draganddrop"),
      dragText2 = document.querySelector(".text-drop2"),
      btnDrag = document.getElementById("btn-line");

      form.addEventListener("dragover", (event) => {
          dragText.textContent = 'drop here';
          form.classList.add('active');
      });

      form.addEventListener("dragleave", (event) => {
          dragText.textContent = 'Drop and Drag your image here';
          form.classList.remove('active');
      });

      form.addEventListener("drop", (event) => {
          dragText.textContent = 'nama image nya (image.png)';
          form.classList.remove('active');
          dragText2.style.display = "none";
          btnDrag.style.display = "flex";
      });
  </script>
  <!-- end drag and drop -->
    <script>
        jQuery(function ($) {
            $(".sidebar-dropdown > a").click(function() {
                $(".sidebar-submenu").slideUp(300);
                if ($(this).parent().hasClass("active")) {
                    $(".sidebar-dropdown").removeClass("active");
                    $(this).parent().removeClass("active");
                    $('#nav').css('border', 'none');
                    $('#arrow1').css('transform', 'rotate(0deg)');
                } else {
                    $(".sidebar-dropdown").removeClass("active");
                    $(this).next(".sidebar-submenu").slideDown(300);
                    $(this).parent().addClass("active");
                    $('#nav').css('border', '1px solid #c0c0c0');
                    $('#arrow1').css('transform', 'rotate(90deg)');
                    
                }
            });
            $("#close-sidebar").click(function() {
                $(".page-wrapper").removeClass("toggled");
            });
            $("#show-sidebar").click(function() {
                $(".page-wrapper").addClass("toggled");
            });
        });

        $('#something').click(function() {
    location.reload();
    });
        function search2(){
            document.getElementById('icon-search').style.display='none'
            var input = document.getElementById('input-search').value
            if(input.length < 1){
                document.getElementById('icon-search').style.display='block'
            }else if(input,length > 1){
                document.getElementById('icon-search').style.display='none'
            }
        }
        function btn1(){
            document.getElementById('slider').style.marginLeft = '0'
            document.getElementById("idenAdd").classList.add("active")
            document.getElementById("akunAdd").classList.remove("active")
        }
        function btn2(){
            document.getElementById('slider').style.marginLeft = '-122%'
            document.getElementById("idenAdd").classList.remove("active")
            document.getElementById("akunAdd").classList.add("active") 
        }
        function btnedit1(){
            document.getElementById('slideredit').style.marginLeft = '0'
            document.getElementById("idendit").classList.add("active")
            document.getElementById("akunedit").classList.remove("active")
        }
        function btnedit2(){
            document.getElementById('slideredit').style.marginLeft = '-122%'
            document.getElementById("idendit").classList.remove("active")
            document.getElementById("akunedit").classList.add("active") 
        }
    </script>
</body>
</html>