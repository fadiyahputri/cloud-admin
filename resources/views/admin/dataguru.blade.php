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
    <link rel="stylesheet" href="css/dashboard/dataguru.css">
    <!-- bootstrap -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js" integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous"></script>
    <script src="assets/js/jquery.js"></script>

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
                <a class="logout"  href="/logout"><iconify-icon icon="tabler:logout" style="color: white;" width="30" height="30"></iconify-icon></a>
            </div>
        </nav>
        <div id="menu">
            <div id="sidebar">
                <ul>
                    <li >
                        <a href="/admin">
                          <iconify-icon class="box-icon" icon="radix-icons:dashboard" width="23" height="23"></iconify-icon>
                          <p class="sec">Dashboard</p>
                        </a>
                    </li>
                    <li >
                        <a href="/dataguru">
                          <iconify-icon class="box-icon active" icon="uil:users-alt" width="23" height="23"></iconify-icon>
                            <p class="sec active">Data Guru</p>
                        </a>
                    </li>
                    <li >
                        <a href="/landing">
                          <iconify-icon class="box-icon" icon="quill:paper" width="23" height="23"></iconify-icon>
                            <p class="sec">Landing Page</p>
                        </a>
                    </li>
                </ul>
            </div>
            <div id="content">
                <div style="display: flex; align-items: center;">
                    <iconify-icon class="icon-utama" icon="uil:users-alt" width="35" height="35"></iconify-icon>
                    <p class="title-table">data guru</p> 
                </div>
                <hr style="margin: 0.8rem 0;">    
                <span>Data akun guru beserta identitas guru. Tambah data untuk menambahkan akun guru dan edit untuk mengubah data.</span>   

                
                <div id="table" style="width: 100%; margin-top: 2%;">
                    <div style="display: flex; justify-content: space-between;">
                        <p class="title">data guru</p>
                        <div style="display: flex;">
                            <iconify-icon id="icon-search" style="position: absolute;margin-left: 0.5%;margin-top: 0.35%;color: rgba(35, 31, 32, 0.3);" icon="uil:search" width="18" height="18"></iconify-icon>
                            <input id="input-search" type="search" class="search" oninput="search2()" placeholder="Search.....">
                        </div>
                        <!-- Button trigger modal -->
                        <button type="button" class="btn-add" data-bs-toggle="modal" data-bs-target="#addguru">
                            Tambah data
                        </button>
                        
                        
                    </div>
                    <table>
                        <tr style="border-bottom: 1px solid #DFDFDF; border-top: #DFDFDF;">
                            <th>#</th>
                            <th>Nama Guru</th>
                            <th>Username</th>
                            <th>Mata Pelajaran</th>
                            <th>Tanggal Dibuat</th>
                            <th>action</th>
                        </tr>
                        @php
                        $no = 1;
                    @endphp
                    @foreach ($guru as $g)
                    <tr>
                        <td>{{$no++}}</td>
                        <td>{{$g->nama}}</td>
                        <td>{{$g->user->username}}</td>
                        <td>{{$g->matpel}}</td>
                        <td>{{ \Carbon\Carbon::parse($g->created_at)->format('M, d Y')}}</td>
                        <td>
                            <button type="button" data-bs-toggle="modal" data-bs-target="#detailguru" class="btn-action" data-nama='{{$g->nama}}' data-nip="{{$g->nip}}" data-gambar='{{$g->gambar}}'  data-matpel='{{$g->matpel}}' data-jenis_kelamin='{{$g->jenis_kelamin}}' data-alamat="{{$g->alamat}}" data-username="{{$g->user->username}}">
                                <iconify-icon class="icon-action"  icon="ph:info-fill" style="color: white;" width="20" height="20"></iconify-icon>
                            </button>
                            <button data-bs-toggle="modal" data-bs-target="#editguru" class="btn-action" data-nama='{{$g->nama}}' data-nip="{{$g->nip}}" data-matpel='{{$g->matpel}}' data-jenis_kelamin='{{$g->jenis_kelamin}}' data-alamat="{{$g->alamat}}" data-username="{{$g->user->username}}" data-password="{{$g->user->password}}" data-id="{{$g->id}}" data-userid="{{$g->user->id}}">
                                <iconify-icon class="icon-action"  icon="material-symbols:edit-square-outline" style="color: white;" width="20" height="20"></iconify-icon>
                            </button>
                            <button data-bs-toggle="modal" data-bs-target="#hapus" class="btn-action" data-nama='{{$g->nama}}' data-nip="{{$g->nip}}" data-matpel='{{$g->matpel}}' data-jenis_kelamin='{{$g->jenis_kelamin}}' data-alamat="{{$g->alamat}}" data-username="{{$g->user->username}}" data-password="{{$g->user->password}}" data-id="{{$g->id}}" data-userid="{{$g->user->id}}" class="btn-action">
                                <iconify-icon class="icon-action"  icon="ic:baseline-delete" style="color: white;" width="20" height="20"></iconify-icon>
                            </button>
                        </td>
                    </tr>
                    @endforeach
                    </table>
                </div>
            </div>
        </div>
    </div>

{{-- modal --}}
    <!-- modal add-->
    @include('admin/modalAdd')
    <!-- end modal add -->

    <!-- modal edit -->
   @include('admin/modalEdit')
    <!-- end modal edit -->

    <!-- modal detail -->
    @include('admin/modalView')
    <!-- end modal detail -->

    <!-- modal hapus -->
    @include('admin/modalHapus')
    <!-- end modal hapus -->
{{-- end modal --}}

    <script>
        const buttons = document.querySelectorAll('.btn'),
        formPages = document.getElementById('form-add'),
        bars = document.querySelectorAll('.bar-circle')   

let pageStates = {
    oldPageNum: null,
    currentPage: null,
}

const pageTransform = () => {
    formPages.forEach(page => {        
        page.style.transform = `translateX(-${(pageStates.currentPage) * 100}%)`
    })
}

const handleClasses = () => {     

    bars.forEach(bar => {
        bar.classList.remove('active')
    })

    if(bars[pageStates.currentPage]) {
        for(let i = 0; i < pageStates.currentPage + 1; i++) {
            bars[i].classList.add('active')
        }
    } else {
        bars.forEach(bar => {
            bar.classList.add('active')
            bar.classList.add('done')
        })
    }
}

const indexFinder = (el) => {    
    let i = 0;
    for(; el = el.previousElementSibling; i++);
    return i;
}

const pageHandler = (e) => {
    e.preventDefault()

    const navData = e.currentTarget.getAttribute('data-nav')
    pageStates.oldPageNum = indexFinder(e.currentTarget.parentElement)
    
    if(navData == "prev") {
        pageStates.currentPage = pageStates.oldPageNum - 1
    } else {
        pageStates.currentPage = pageStates.oldPageNum + 1
    }    

    pageTransform()
    handleClasses()
}


const barHandler = (e) => {
    e.preventDefault()
    pageStates.currentPage = indexFinder(e.currentTarget)

    pageTransform()
    handleClasses()
}

buttons.forEach(button => {
    button.addEventListener('click', pageHandler)
})

bars.forEach(bar => {
    bar.addEventListener('click', barHandler)
})

    </script>
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
    {{-- modal --}}
    <script>
                $('#detailguru').on('show.bs.modal',function(event){
        var button = $(event.relatedTarget)
        var nama = button.data('nama')
        var nip = button.data('nip')
        var matpel = button.data('matpel')
        var jenis_kelamin = button.data('jenis_kelamin')
        var alamat = button.data('alamat')
        var username = button.data('username')
        var gambar = button.data('gambar')

        var modal = $(this)
        modal.find('#inptnama').text(nama)
        modal.find('#inptnip').text(nip)
        modal.find('#inptmatpel').text(matpel)
        modal.find('#inptgender').text(jenis_kelamin)
        modal.find('#inptalamat').text(alamat)
        modal.find('#inptusername').text(username)
        if(gambar.length > 0 && gambar.val != ''){
            modal.find('#inptgambar').attr("src",'/assets/images/profile-picture/gambar_guru/'+gambar)     
        }else{
            if(jenis_kelamin=="Laki-laki"){
                modal.find('#inptgambar').attr("src",'/assets/images/profile-picture/gambar_guru/default-boy.jpg')
            }else{
                modal.find('#inptgambar').attr("src",'/assets/images/profile-picture/gambar_guru/default-women.jpg')
            }   
        }
        
        }) 

        $('#editguru').on('show.bs.modal',function(event){
        var button = $(event.relatedTarget)
        var nama = button.data('nama')
        var nip = button.data('nip')
        var matpel = button.data('matpel')
        var jenis_kelamin = button.data('jenis_kelamin')
        var alamat = button.data('alamat')
        var username = button.data('username')
        var password = button.data('password')
        var id = button.data('id')
        var userid = button.data('userid')
        var gambar = button.data('gambar')

        var modal = $(this)
        modal.find('#name').val(nama)
        modal.find('#nipedit').val(nip)
        modal.find('#matpeledit').val(matpel)
        modal.find('#jenis_kelamin').val(jenis_kelamin)
        modal.find('#alamat').val(alamat)
        modal.find('#username').val(username)
        modal.find('#password').val(password)
        modal.find('#id').val(id)
        modal.find('#userid').val(userid)
        modal.find('#gambar').val(gambar)
        }) 

        $('#hapus').on('show.bs.modal',function(event){
        var button = $(event.relatedTarget)
        var nama = button.data('nama')
        var nip = button.data('nip')
        var matpel = button.data('matpel')
        var jenis_kelamin = button.data('jenis_kelamin')
        var alamat = button.data('alamat')
        var username = button.data('username')
        var password = button.data('password')
        var id = button.data('id')
        var userid = button.data('userid')

        var modal = $(this)
        modal.find('#name').val(nama)
        modal.find('#nipedit').val(nip)
        modal.find('#matpeledit').val(matpel)
        modal.find('#gender').val(jenis_kelamin)
        modal.find('#alamat').val(alamat)
        modal.find('#username').val(username)
        modal.find('#password').val(password)
        modal.find('#id').val(id)
        modal.find('#userid').val(userid)
        }) 
    </script>
    {{-- end modal --}}
</body>
</html>