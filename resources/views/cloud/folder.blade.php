@extends('default')
@section('foldercss')
<link rel="stylesheet" href="{{ URL::asset('css/cssCloud/cloudfolder.css') }}">
@endsection
@section('jquery')
<script src="{{ URL::asset('assets/js/jquery.js') }}"></script>
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
                    <div class="groupAdd">
                        <div class="line"></div>
                        <div id="add">  
                            <div class="btnAdd">
                                <iconify-icon icon="ic:twotone-plus" width="20" height="29"></iconify-icon>
                                
                               <a href="{{route('createfolder',$ids)}}"><p class="addText">Baru</p></a>
                            </div>
                        </div>
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
                <a href="{{url('/file')}}"  class="recWord">
                    <div class="wordContent">
                        <img src="{{URL::asset('assets/imgcloud/logoword.png')}}" class="wordLogo" alt="logo word">                   
                        <div class="groupWordText">
                            <p class="wordText1">Word</p>
                            <p class="wordText2">20 files</p>
                        </div>
                    </div>
                </a>
                <a href="{{url('/file')}}"  class="recExcel">
                    <div class="excelContent">
                        <img src="{{URL::asset('assets/imgcloud/logoexcel.png')}}" class="excelLogo" alt="logo excel">                   
                        <div class="groupExcelText">
                            <p class="excelText1">Excel</p>
                            <p class="excelText2">20 files</p>
                        </div>
                    </div>
                </a>
                <a href="{{url('/file')}}"  class="recPpt">
                    <div class="pptContent">
                        <img src="{{URL::asset('assets/imgcloud/logoppt.png')}}" class="pptLogo" alt="logo ppt">                   
                        <div class="groupPptText">
                            <p class="pptText1">PowerPoint</p>
                            <p class="pptText2">20 files</p>
                        </div>
                    </div>
                </a>
                <a href="{{url('/file')}}"  class="recPdf">
                    <div class="pdfContent">
                        <img src="{{URL::asset('assets/imgcloud/logopdf.png')}}" class="pdfLogo" alt="logo pdf">                   
                        <div class="groupPdfText">
                            <p class="pdfText1">PDF</p>
                            <p class="pdfText2">20 files</p>
                        </div>
                    </div>
                </a>
                </div>
                {{-- end sort --}}
                @foreach ($file as $file)
                <div class="recFolder">
                    <div class="contentFolder">
                        <div class="nama-file">{{$file->file}}</div>
                        <div class="timestamp">{{$file->tipe_file}}</div>
                        <div class="tipe-file">{{ \Carbon\Carbon::parse($file->created_at)->diffForHumans()}}</div>
                        <div class="kumpulan-action">
                            <a href="{{ URL::asset('foldercloud/'.$file->folder->cloud->folder_name.'/'.$file->folder->nama_folder.'/'. $file->file ) }}" target="_blank" rel="noopener noreferrer"><button class="btn-informasi"><i class="fa-sharp fa-solid fa-circle-info"></i></button></a>    
                            <a href="/file/{{$file->id}}/editfile"><button class="btn btn-primary me-2"><i class="fa-sharp fa-solid fa-pen-to-square"></i></button></a> 
                            <a href="/folder/file/delete/{{$file->id}}"><button type="submit" class="btn-delete"><i class="fa-sharp fa-solid fa-trash"></i></button></a>
                        </div>
                    </div>                    
                </div>
                @endforeach
            </div>
           
        </div>
    </div>
    
    <script>
        jQuery(function ($) {
            $(".sidebar-dropdown > a").click(function() {
                $(".sidebar-submenu").slideUp(300);
                if ($(this).parent().hasClass("active")) {
                    $(".sidebar-dropdown").removeClass("active");
                    $(this).parent().removeClass("active");
                    $('#nav').css('border', 'none');
                    $('#arrow1').css('display', 'block');
                    $('#arrow2').css('display', 'none');
                    
                    
                } else {
                    $(".sidebar-dropdown").removeClass("active");
                    $(this).next(".sidebar-submenu").slideDown(300);
                    $(this).parent().addClass("active");
                    $('#nav').css('border', '1px solid #c0c0c0');
                    $('#arrow1').css('display', 'none');
                    $('#arrow2').css('display', 'block');
                    
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
      </script>
</div>
@endsection