@extends('default')
@section('css')
css/cssCloud/cloud.css
@endsection
@section('content')

<div id="container">
    {{-- side bar --}}
    <div id="containerSideBar">
    <div id="sidebar">
        <div class="logo">
            <img class="logoStarbhak" src="assets/imgcloud/logotb.png" alt="logo starbhak">
            <p class="logoText">SMK Taruna Bhakti</p>
        </div>
        {{-- content side bar --}}
        <div class="page-wrapper chiller-theme toggled">
            <div class="pageWrapper2" >
                <a id="dashboard" href="#dashboard">
                    <iconify-icon class="dashboardLogo" icon="mdi:file-document-multiple" width="21" height="21"></iconify-icon>
                    <p class="dashboardText">Dashboard</p>
                 </a>
                    <nav class="sidebar-wrapper ">   
                        <ul>
                            <li class="sidebar-dropdown">   
                              <a id="nav"  class="folderLogo" href="#"><iconify-icon   icon="material-symbols:menu-book-outline-sharp" width="22" height="22"></iconify-icon>
                              <span class="folderText">Folder</span><iconify-icon id="arrow1"  class="arrow1" icon="material-symbols:keyboard-arrow-right" width="20" height="20"></iconify-icon><iconify-icon id="arrow2" class="arrow2"  icon="material-symbols:keyboard-arrow-down-rounded" width="20" height="20"></iconify-icon></a>
                              <div class="sidebar-submenu">
                                <ul>
                                    @foreach ($datafolder as $itemfolder)
                                    <li>
                                        <a href="{{ route('folder', ['id'=> $itemfolder->id]) }}"><iconify-icon icon="material-symbols:menu-book-outline-sharp" width="22" height="22"></iconify-icon><p>{{$itemfolder->nama_folder}}</p></a>
                                    </li>
                                     @endforeach                            
                                </ul>
                              </div>
                            </li>   
                        </ul>        
                    </nav>
                            <div class="dropup-center dropup" id="add">
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
                              
                            {{-- <div class="btnAdd">
                                <iconify-icon icon="ic:twotone-plus" width="20" height="29"></iconify-icon>
                               <a href="/clod/folder/create"><p class="addText">Baru</p></a>
                            </div> --}}
            </div>
            
        </div>
       
    </div>
</div>
    {{-- side bar end --}}

    <!-- Modal -->
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
                    <input type="text" name="nama_folder" class="nama-folder" placeholder="nama folder">
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

<div class="modal fade" id="fileBaru" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-xl">
      <div class="modal-content">
        <div class="modal-header">
          <h1 class="modal-title fs-5 fw-semibold" id="exampleModalLabel">File baru</h1>
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <form action="/folder/file/store" method="POST" enctype="multipart/form-data">
            @csrf
            <div class="modal-body d-flex justify-center">
                <div class="dragAndDrop">
                    <iconify-icon icon="material-symbols:folder-open-rounded" style="color: #169fcf; margin-top: 5%" width="100" height="100"></iconify-icon>
                    <p class="drag-text">Drop disini</p>
                    <p style="font-size: 17px; margin-bottom: 1%;">atau</p>
                    {{-- <label for="file">Pilih file</label> --}}
                    <input id="demo1" class="pilih-file" type="file" multiple placeholder="Select Files" name="file" id="file" style="margin-left: 11%"/>
                    <input type="text" value="" name="id" id="" style="display: none">
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

    {{-- content --}}
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
                            <img src="assets/images/logoAdmin2.png" class="logoadmin" alt="profile"/>
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
            <div class="sortBy">
                <a href="#word"  class="recWord">
                    <div class="wordContent">
                        <img src="assets/imgcloud/logoword.png" class="wordLogo" alt="logo word">                   
                        <div class="groupWordText">
                            <p class="wordText1">Word</p>
                            <p class="wordText2">20 files</p>
                        </div>
                    </div>
                </a>
               
                <a href="#excel"  class="recExcel">
                    <div class="excelContent">
                        <img src="assets/imgcloud/logoexcel.png" class="excelLogo" alt="logo excel">                   
                        <div class="groupExcelText">
                            <p class="excelText1">Excel</p>
                            <p class="excelText2">20 files</p>
                        </div>
                    </div>
                </a>
                <a href="#ppt"  class="recPpt">
                    <div class="pptContent">
                        <img src="assets/imgcloud/logoppt.png" class="pptLogo" alt="logo ppt">                   
                        <div class="groupPptText">
                            <p class="pptText1">PowerPoint</p>
                            <p class="pptText2">20 files</p>
                        </div>
                    </div>
                </a>
                <a href="#pdf"  class="recPdf">
                    <div class="pdfContent">
                        <img src="assets/imgcloud/logopdf.png" class="pdfLogo" alt="logo pdf">                   
                        <div class="groupPdfText">
                            <p class="pdfText1">PDF</p>
                            <p class="pdfText2">20 files</p>
                        </div>
                    </div>
                </a>
                </div>
                {{-- end sort --}}
                {{-- last update --}}
                <div class="lastUpload">
                    <div class="flex items-center">
                        <p class="textLastUpload">Last Upload</p>
                    <a href="" class="seeMore">
                        <p class="seeMoreText">see more</p>
                        <iconify-icon class="seeMoreIcon" icon="material-symbols:keyboard-arrow-right" width="20" height="20"></iconify-icon>
                    </a> 
                    </div>
                    <div id="last-update">
                        <div  class="lastUploadFile">
                            <a class="sentuh" href="https://stackoverflow.com/questions/5404839/how-do-i-refresh-a-page-using-javascript" >
                            <div class="box-last">
                                <img src="assets/imgcloud/logoword.png" class="logoFile" alt="logo file">                   
                                 <div class="fileText">
                                    <p class="fileText1">Jadwal X PPLG</p>
                                    <p class="fileText2">18/12/2022 08:06</p>
                                </div>
                                
                            </div>
                            </a>
                            <a href="" class="titik3"><iconify-icon id="something" icon="carbon:overflow-menu-vertical" width="20" height="20"></iconify-icon></a>
                        </div>
                        <div  class="lastUploadFile">
                            <a class="sentuh" href="https://stackoverflow.com/questions/5404839/how-do-i-refresh-a-page-using-javascript" >
                            <div class="box-last">
                                <img src="assets/imgcloud/logoword.png" class="logoFile" alt="logo file">                   
                                 <div class="fileText">
                                    <p class="fileText1">Jadwal X PPLG</p>
                                    <p class="fileText2">18/12/2022 08:06</p>
                                </div>
                                
                            </div>
                            </a>
                            <a href="" class="titik3"><iconify-icon id="something" style="z-index: 20" icon="carbon:overflow-menu-vertical" width="20" height="20"></iconify-icon></a>
                        </div>
                        <div  class="lastUploadFile">
                            <a class="sentuh" href="https://stackoverflow.com/questions/5404839/how-do-i-refresh-a-page-using-javascript" >
                            <div class="box-last">
                                <img src="assets/imgcloud/logoword.png" class="logoFile" alt="logo file">                   
                                 <div class="fileText">
                                    <p class="fileText1">Jadwal X PPLG</p>
                                    <p class="fileText2">18/12/2022 08:06</p>
                                </div>
                                
                            </div>
                            </a>
                            <a href="" class="titik3"><iconify-icon id="something" style="z-index: 20" icon="carbon:overflow-menu-vertical" width="20" height="20"></iconify-icon></a>
                        </div>
                    </div>
                </div>
                
                {{-- end last update --}}
            </div>
           
        </div>
    </div>
    
    
</div>
@endsection