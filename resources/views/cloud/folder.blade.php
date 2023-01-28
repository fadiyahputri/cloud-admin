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
        <p class="fileLocation">File @foreach ($datafolder2 as $item){{$item->nama_folder}}
            
        @endforeach</p>
            {{-- sort by --}}
            <div class="sortBy">
                <a href="{{route('file', ['tipe' => 'docx','id'=>$ids])}}"  class="recWord">
                    <div class="wordContent">
                        <img src="{{URL::asset('assets/imgcloud/logoword.png')}}" class="wordLogo" alt="logo word">                   
                        <div class="groupWordText">
                            <p class="wordText1">Word</p>
                            <p class="wordText2">{{$docx}} files</p>
                        </div>
                    </div>
                </a>
                <a href="{{route('file', ['tipe' => 'xlsx','id'=>$ids])}}"  class="recExcel">
                    <div class="excelContent">
                        <img src="{{URL::asset('assets/imgcloud/logoexcel.png')}}" class="excelLogo" alt="logo excel">                   
                        <div class="groupExcelText">
                            <p class="excelText1">Excel</p>
                            <p class="excelText2">{{$xlsx}} files</p>
                        </div>
                    </div>
                </a>
                <a href="{{route('file', ['tipe' => 'pptx','id'=>$ids])}}"  class="recPpt">
                    <div class="pptContent">
                        <img src="{{URL::asset('assets/imgcloud/logoppt.png')}}" class="pptLogo" alt="logo ppt">                   
                        <div class="groupPptText">
                            <p class="pptText1">PowerPoint</p>
                            <p class="pptText2">{{$pptx}} files</p>
                        </div>
                    </div>
                </a>
                <a href="{{route('file', ['tipe' => 'pdf','id'=>$ids])}}"  class="recPdf">
                    <div class="pdfContent">
                        <img src="{{URL::asset('assets/imgcloud/logopdf.png')}}" class="pdfLogo" alt="logo pdf">                   
                        <div class="groupPdfText">
                            <p class="pdfText1">PDF</p>
                            <p class="pdfText2">{{$pdf}} files</p>
                        </div>
                    </div>
                </a>
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