@extends('default')
@section('foldercss')
<link rel="stylesheet" href="{{ URL::asset('css/cssCloud/cloudfolder.css') }}">
@endsection

@section('dropdown')
{{asset('assets/jsblade/dropFile.js')}}
@endsection
@section('sidebar')
{{asset('assets/jsblade/sidebar.js')}}
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
                <a id="dashboard" href="{{url('/clod')}}">
                    <iconify-icon class="dashboardLogo" icon="mdi:file-document-multiple" width="21" height="21"></iconify-icon>
                    <p class="dashboardText">Dashboard</p>
                 </a>
                    <nav class="sidebar-wrapper ">
                        <ul>
                            <li class="sidebar-dropdown">   
                              <a id="nav"  class="folderLogo" href="#nav"><iconify-icon class="iconFolder" icon="material-symbols:menu-book-outline-sharp" width="22" height="22"></iconify-icon>
                              <span class="folderText">Folder</span><iconify-icon id="arrow1"  class="arrow1" icon="material-symbols:keyboard-arrow-right" width="20" height="20"></iconify-icon><iconify-icon id="arrow2" class="arrow2"  icon="material-symbols:keyboard-arrow-down-rounded" width="20" height="20"></iconify-icon></a>
                              <div class="sidebar-submenu">
                                <ul >
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
                            <li><a class="dropdown-item" data-bs-toggle="modal" data-bs-target="#fileBaru">
                                <button type="button">
                                    <iconify-icon icon="mdi:file-document-add-outline" style="margin-right: 8%"></iconify-icon>
                                    File baru
                                </button>
                            </a></li>
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
        <div class="file">
            {{-- sort by --}}
           
                {{-- end sort --}}
                {{-- last update --}}
                <div class="lastUpload">
                    <div>
                        <p  class="textLastUpload">Permendikbud 81A Implementasi K13</p>
                
                    </div>
                    <div id="last-update">
                      
                        {{-- folder/file --}}
                        <div  class="lastUploadFile">
                            <a class="sentuh" href="#" target="_blank">
                            <div class="box-last">
                                <img src="../assets/images/folder.png" class="logoFile" alt="logo file">                   
                                 <div class="fileText">
                                    <p class="fileText1">Semester 1 K13 </p>
                                    <p class="fileText2">23 Feb 2023, 05:46:58</p>
                                </div>
                                <div class="fileitems">
                                    <p>20 items </p>
                                </div>
                                <div class="filesize">
                                    <p class="fileText2">5Gb</p>
                                </div>
                                <div class="filecentang">
                                    <p class="fileText2"> </p> 
                                </div>
                                
                            </div>
                            </a>
                            <div class="titik3 btn-group dropstart">
                                <iconify-icon  type="button" data-bs-toggle="dropdown" aria-expanded="false" id="" icon="carbon:overflow-menu-vertical" width="25" height="25"></iconify-icon>
                                <ul class="dropdown-menu dropdown-menu-end dropdown-menu-lg-start">
                                    <li><a class="dropdown-item" href="#">Hapus File</a></li>
                                  </ul>
                            </div>
                        </div>

                        <div  class="lastUploadFile">
                            <a class="sentuh" href="#" target="_blank">
                            <div class="box-last">
                                <img src="../assets/imgcloud/logopdf.png" class="logoFile" alt="logo file">                   
                                 <div class="fileText">
                                    <p class="fileText1">FMPPs 03 (Penyusunan Kurikulum).pdf</p>
                                    <p class="fileText2">23 Feb 2023, 05:46:58</p>
                                </div>
                                <div class="fileitems">
                                    <p>1 items </p>
                                </div>
                                <div class="filesize">
                                    <p class="fileText2">412Kb</p>
                                </div>
                                <div class="filecentang">
                                    <p class="fileText2"><iconify-icon icon="mdi:tick"></iconify-icon></p>
                                </div>
                                
                            </div>
                            </a>
                            <div class="titik3 btn-group dropstart">
                                <iconify-icon  type="button" data-bs-toggle="dropdown" aria-expanded="false" id="" icon="carbon:overflow-menu-vertical" width="25" height="25"></iconify-icon>
                                <ul class="dropdown-menu dropdown-menu-end dropdown-menu-lg-start">
                                    <li><a class="dropdown-item" href="#">Hapus File</a></li>
                                  </ul>
                            </div>
                        </div>

                        <div  class="lastUploadFile">
                            <a class="sentuh" href="#" target="_blank">
                            <div class="box-last">
                                <img src="../assets/imgcloud/xlsx.png" class="logoFile" alt="logo file">                   
                                 <div class="fileText">
                                    <p class="fileText1">Ringkasan retensi data tahun ajaran 2023 </p>
                                    <p class="fileText2">23 Feb 2023, 05:46:58</p>
                                </div>
                                <div class="fileitems">
                                    <p>1 items </p>
                                </div>
                                <div class="filesize">
                                    <p class="fileText2">233Kb</p>
                                </div>
                                <div class="filecentang">
                                    <p class="fileText2"><iconify-icon icon="mdi:check-all" style="color: #006fb4;"></iconify-icon></p>
                                </div>
                                
                            </div>
                            </a>
                            <div class="titik3 btn-group dropstart">
                                <iconify-icon  type="button" data-bs-toggle="dropdown" aria-expanded="false" id="" icon="carbon:overflow-menu-vertical" width="25" height="25"></iconify-icon>
                                <ul class="dropdown-menu dropdown-menu-end dropdown-menu-lg-start">
                                    <li><a class="dropdown-item" href="#">Hapus File</a></li>
                                  </ul>
                            </div>
                        </div>
                        
                        <div  class="lastUploadFile">
                            <a class="sentuh" href="#" target="_blank">
                            <div class="box-last">
                                <img src="../assets/imgcloud/xlsx.png" class="logoFile" alt="logo file">                   
                                 <div class="fileText">
                                    <p class="fileText1">Ringkasan retensi data tahun ajaran 2023 </p>
                                    <p class="fileText2">23 Feb 2023, 05:46:58</p>
                                </div>
                                <div class="fileitems">
                                    <p>1 items </p>
                                </div>
                                <div class="filesize">
                                    <p class="fileText2">214Kb</p>
                                </div>
                                <div class="filecentang">
                                    <p class="fileText2"><iconify-icon class="centangdua" icon="mdi:tick-all"></iconify-icon></p>
                                </div>
                                
                            </div>
                            </a>
                            <div class="titik3 btn-group dropstart">
                                <iconify-icon  type="button" data-bs-toggle="dropdown" aria-expanded="false" id="" icon="carbon:overflow-menu-vertical" width="25" height="25"></iconify-icon>
                                <ul class="dropdown-menu dropdown-menu-end dropdown-menu-lg-start">
                                    <li><a class="dropdown-item" href="#">Hapus File</a></li>
                                  </ul>
                            </div>
                        </div>
                        {{-- folder/ file end --}}
                       
                       
                        
                    </div>
                </div>
                
                {{-- end last update --}}
            </div>
           
        </div>

  {{-- file --}}
<div class="modal fade" id="fileBaru" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-l">
      <div class="modal-content">
        <div class="modal-header d-flex flex-column" style="width: 100%;justify-content: center;align-content: center">
          <div style="display: flex;flex-direction: column;justify-content: center;align-content: center;width: 100%">
            <h1 class="modal-title fs-5 fw-semibold d-flex justify-center text-center fs-4" id="exampleModalLabel">Upload your files</h1>
          <p class="d-flex justify-center text-center">File should be Word, Excel, PowerPoint, PDF</p>
          </div>
        </div>
        <form action="/folder/file/store" method="POST" enctype="multipart/form-data">
            @csrf
            <div class="modal-body d-flex flex-column justify-center;" style="padding-right: 5%;padding-left: 5%">
                    {{-- <label for="file">Pilih file</label> --}}
                            <div class="file-input-wrapper" style="width: 100%; height: 40vh;display: flex;justify-content: center; align-content: center; flex-direction: column;border: 1px dashed rgb(138, 138, 138);border-radius: 13px">
                                
                                <button style="background-color: white;width: 100%;height: 100%;color: #006fb4;" class="btn-file-input">
                                    <iconify-icon icon="ic:round-cloud-upload" style="color: #006fb4;" width="80" height="80"></iconify-icon>
                                    <p style="font-size: 17px; color: rgb(71, 71, 71); font-weight: 500">Drag Or Click</p>

                                 
                                </button> 
                                
                                <input style="" id="image" class="pilih-file" type="file"  multiple="multiple" placeholder="Select Files" name="file" style="margin-left: 11%"/>
                                <input style="display: none" type="text" name="id" value="{{$ids}}">
                                
                            </div>
                            <div class="hasil-file" style="width: 100%; height: 8vh; background-color: #D7E9FF; padding: 1% 3%; display: flex; align-items: center; border-radius: 10px; margin-top: 3%;">
                                <span style="width: 90%" id="img_text"></span> 
                                <iconify-icon class="kwt-file_delete" id="btn-x" icon="ic:baseline-close" style="color: red;position: absolute;left: 85%;" width="30" height="30"></iconify-icon>
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