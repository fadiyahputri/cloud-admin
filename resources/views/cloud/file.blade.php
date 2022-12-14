@extends('default')
@section('css')
css/cssCloud/cloudfolder.css
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
                                  <li><a href="{{url('/folder')}}"><iconify-icon icon="material-symbols:menu-book-outline-sharp" width="22" height="22"></iconify-icon><p >Folder 1 </p></a></li>
                                  <li><a href="#"><iconify-icon icon="material-symbols:menu-book-outline-sharp" width="22" height="22"></iconify-icon><p>Folder 2    </p></a></li>
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
                               <a href="/clod/folder/create"><p class="addText">Baru</p></a>
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
        <p class="fileLocation">File Folder 1/Word</p>
            {{-- sort by --}}
            <div class="sortBy">
                <a href=""  class="recWord">
                    <div class="wordContent">
                        <img src="assets/imgcloud/logoword.png" class="wordLogo" alt="logo word">                   
                        <div class="groupWordText">
                            <p class="wordText1">Word</p>
                            <p class="wordText2"></p>
                        </div>
                    </div>
                </a>
                <a href="#excel"  class="recExcel">
                    <div class="excelContent">
                        <img src="assets/imgcloud/logoword.png" class="excelLogo" alt="logo excel">                   
                        <div class="groupExcelText">
                            <p class="excelText1">Word</p>
                            <p class="excelText2"></p>
                        </div>
                    </div>
                </a>
                <a href="#ppt"  class="recPpt">
                    <div class="pptContent">
                        <img src="assets/imgcloud/logoword.png" class="pptLogo" alt="logo ppt">                   
                        <div class="groupPptText">
                            <p class="pptText1">Word</p>
                            <p class="pptText2"></p>
                        </div>
                    </div>
                </a>
                <a href="#pdf"  class="recPdf">
                    <div class="pdfContent">
                        <img src="assets/imgcloud/logoword.png" class="pdfLogo" alt="logo pdf">                   
                        <div class="groupPdfText">
                            <p class="pdfText1">Word</p>
                            <p class="pdfText2"></p>
                        </div>
                    </div>
                </a>
                </div>
                {{-- end sort --}}
               
                
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