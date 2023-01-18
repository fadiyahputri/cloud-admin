@extends('default')
@section('foldercss')
<link rel="stylesheet" href="{{ URL::asset('css/cssCloud/cloudfolder.css') }}">
@endsection
@section('jquery')

@endsection
@section('content')

<div id="container">
    {{-- side bar --}}
    <div id="containerSideBar">
    <div id="sidebar">
        <div class="logo">
            <img class="logoStarbhak" src="{{URL::asset('assets/imgcloud/logotb.png')}}" alt="logo starbhak">
            <p class="logoText">SMK Taruna Bhakti</p>
        </div>
        {{-- content side bar --}}
        <div class="page-wrapper chiller-theme toggled">
            <div class="pageWrapper2" >
                <a style="background-color:#169FCF;color: white" id="dashboard" href="{{url('/clod')}}">
                    <iconify-icon class="dashboardLogo" icon="mdi:file-document-multiple" width="21" height="21"></iconify-icon>
                    <p class="dashboardText">Dashboard</p>
                 </a>
                    <nav class="sidebar-wrapper ">   
                        <ul>
                            <li  class="sidebar-dropdown">   
                              <a style="background-color: white;" id="nav"  class="folderLogo" href="#nav"><iconify-icon style="color: #6C7383;" class="iconFolder" icon="material-symbols:menu-book-outline-sharp" width="22" height="22"></iconify-icon>
                              <span style="color: #6C7383;" class="folderText">Folder</span><iconify-icon style="color: #6C7383;" id="arrow1"  class="arrow1" icon="material-symbols:keyboard-arrow-right" width="20" height="20"></iconify-icon><iconify-icon  id="arrow2" class="arrow2"  icon="material-symbols:keyboard-arrow-down-rounded" width="20" height="20"></iconify-icon></a>
                              <div class="sidebar-submenu">
                                <ul>
                                  @foreach ($datafolder as $itemfolder)
                                    <li>
                                        <a href="{{route('folder', $itemfolder->id)}}"><iconify-icon icon="material-symbols:menu-book-outline-sharp" width="22" height="22"></iconify-icon><p>{{$itemfolder->nama_folder}}</p></a>
                                    </li>
                                     @endforeach  
                                </ul>
                              </div>
                            </li>   
                        </ul>        
                    </nav>
                    <div class="dropup-center dropup" id="add" style="color: white">
                        <button type="button" data-bs-toggle="dropdown" aria-expanded="false" id="addDropup">
                            <iconify-icon icon="material-symbols:add" style="color: white;"></iconify-icon>
                          Baru
                        </button>
                        <ul class="dropdown-menu">
                          
                            <li><a class="dropdown-item" data-bs-toggle="modal" data-bs-target="#folderBaru">
                                <button type="button">
                                    <iconify-icon icon="mdi:folder-add-outline" style="margin-right: 8%"></iconify-icon>
                                    Folder baru
                                </button>    
                            </a></li>
                          
                        </ul>
                    </div>
            </div>
            
        </div>
       
    </div>
</div>
    {{-- side bar end --}}
    {{-- conten --}}
    <div class="navbarReal">
        {{-- nav --}}
        <div>
            <div id="user">
                <div class="input">
                    <iconify-icon class="searchLogo" icon="ic:round-search"></iconify-icon>
                    <input class="searchInput" type="text" placeholder="Search....">
                </div>
                <div id="KotakUser">
                    <ul>
                        <li>
                          <a class="profileDropDown" href="#" data-toggle="dropdown" id="profileDropdown">
                            <img src="{{URL::asset('assets/images/logoAdmin2.png')}}" class="logoadmin" alt="profile"/>
                          
                          </a>
                          <div class="dropdown-menu dropdown-menu-right navbar-dropdown" aria-labelledby="profileDropdown">
                            <a class="dropdown-item">
                              <i class="ti-settings text-primary"></i>
                              Settings
                            </a>
                            <a href="{{route('logout')}}" class="dropdown-item">
                              <i class="ti-power-off text-primary"></i>
                              Logout
                            </a>
                          </div>
                        </li>
                
                      </ul>
                </div>
            </div>
            <div>
            </div>
        </div>
        {{-- navbar end --}}
        {{-- file --}}
        <div class="file" style="align-content: center;justify-content: center">
        <p class="fileLocation">File Folder </p>
            {{-- sort by --}}
            <div class="row sortBy">
                @foreach ($file as $file)
                <a href="" style="width: 23%" class="recWord">
                    <div class="wordContent">
                        <img src="{{URL::asset('assets/imgcloud/'.$file->tipe_file.'.png')}}" class="wordLogo" alt="logo word">                   
                        <div style="width: 100%;" class="groupWordText">
                            <p style="font-size: 1rem;font-weight: 600;padding: 0;width: 120%;" class="wordText1">{{ Str::limit($file->file, 10) }}</p>
                            <p class="wordText2">{{$file->created_at}}</p>
                        </div>
                    </div>
                </a>
                @endforeach
               
                </div>
                {{-- end sort --}}
               
                
            </div>
           
        </div>
    </div>
          <!-- Modal -->
    {{-- folder --}}
<div class="modal fade" id="folderBaru" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header">
          <h1 class="modal-title fs-5 fw-semibold" id="exampleModalLabel">Folder baru</h1>
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <form action="/clod/folder/store" method="POST" enctype="multipart/form-data">
            @csrf
            <div class="modal-body">
                    <input style="width: 100%;padding: 1% 5%;height: 3vw;" type="text" name="nama_folder" class="nama-folder" placeholder="nama folder">
                    <input style="display: none;" name="name" type="text" value="">
            </div>
            <div class="modal-footer">
                <button type="button" class="btn-modal" data-bs-dismiss="modal">Batal</button>
                <button type="submit" class="btn-modal" style="color: #006fb4;">Simpan</button>
            </div>
        </form>
      </div>
    </div>
  </div>

  {{-- file --}}
<div class="modal fade" id="fileBaru" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-xl">
      <div class="modal-content">
        <div class="modal-header">
          <h1 class="modal-title fs-5 fw-semibold" id="exampleModalLabel">File baru</h1>
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <form action="/folder/file/store" method="POST" enctype="multipart/form-data">
            @csrf
            <div class="modal-body d-flex justify-center;" style="padding-right: 5%;padding-left: 5%">
                    {{-- <label for="file">Pilih file</label> --}}
                            <div class="file-input-wrapper" style="width: 120%; height: 50vh;display: flex;justify-content: center; align-content: center; flex-direction: column;border: 1px dashed rgb(138, 138, 138);border-radius: 13px">
                                
                                <button style="background-color: white;width: 100%;height: 100%;color: #006fb4;" class="btn-file-input">
                                    <iconify-icon icon="ic:round-cloud-upload" style="color: #006fb4;" width="120" height="120"></iconify-icon>
                                    <p style="font-size: 20px; color: rgb(71, 71, 71); font-weight: 500">Drag Or Click</p>

                                 
                                </button> 
                                <span id="img_text"></span>  
                                <input style="" id="image" class="pilih-file" type="file" multiple placeholder="Select Files" name="file" id="file" style="margin-left: 11%"/>
                    
                                
                            </div>
                      
                            
                                              
            </div>
            <div class="modal-footer">
                <button type="button" class="btn-modal2" data-bs-dismiss="modal">Batal</button>
                <button type="submit" name="submit" class="btn-modal2" style="color: #006fb4;">Simpan</button>
            </div>
        </form>
      </div>
    </div>
  </div>
  {{-- end modal --}}
    <script>
       
      </script>
</div>
@endsection