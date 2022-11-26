@extends('default')
@section('css')
css/cssCloud/cloud.css
@endsection
@section('content')

<div id="container">
    {{-- side bar --}}
    <div id="containerSideBar" class="ml-2 h-screen" style="width: 25%">
    <div id="sidebar" class="ml-2 h-screen" style="width: 20%">
        <div class="flex  items-center justify-center w-ful">
            <img class="w-1/5 " style="margin-top: 3%;margin-left: 2%" src="assets/imgcloud/logotb.png" alt="">
            <p style="font-family: 'Poppins', sans-serif;margin-top: 3%;font-weight: 500;font-size: 14px" class="w-2/5 ">SMK Taruna Bhakti</p>
        </div>
        {{-- content side bar --}}
        <div class="page-wrapper chiller-theme toggled" style="margin-top: 12%;width: 100%">
            <div class=" flex-col" style="margin-left: 6% " >
                <a href="{{url('/clod')}}" id="dashboard" class="flex items-center gap-2  hover:no-underline  rounded-xl  " style="background-color: white;color: #6C7383; margin-bottom: 4%;width: 100%;height: 7vh;" >
                    <iconify-icon class="ml-6" icon="mdi:file-document-multiple" width="21" height="21"></iconify-icon>
                    <p class="font-normal text-xl ">Dashboard</p>
                 </a>
                
                    <nav id="nav" style="position: absolute;top: 23%;left: 7%;height: 47px;width: 93%;border-radius: 12px;" class="sidebar-wrapper ">   
                        <ul>
                            <li class="sidebar-dropdown">
                              <a id="navs" class="rounded-xl" style="display: flex;align-items: center;background-color: #169FCF;margin-bottom: 4%;width: 100%;height: 7vh;color: white" href="#"><iconify-icon icon="material-symbols:menu-book-outline-sharp" width="22" height="22"></iconify-icon><span class="font-medium text-xl" style="margin-left: 4%;" >Folder</span><iconify-icon id="arrow1"  class="arrow1" icon="material-symbols:keyboard-arrow-right" width="20" height="20"></iconify-icon><iconify-icon id="arrow2" class="arrow2"  icon="material-symbols:keyboard-arrow-down-rounded" width="20" height="20"></iconify-icon></a>
                              <div style="margin-top: 2%" class="sidebar-submenu">
                                <ul >
                                  <li><a href="#dash1"><iconify-icon icon="material-symbols:menu-book-outline-sharp" width="22" height="22"></iconify-icon><p >Folder 1 </p></a></li>
                                  <li><a href="#"><iconify-icon icon="material-symbols:menu-book-outline-sharp" width="22" height="22"></iconify-icon><p>Folder 2    </p></a></li>
                                </ul>
                              </div>
                            </li>   
                        </ul>        
                    </nav>
            </div>
        </div>
       
    </div>
</div>
    {{-- side bar end --}}
    {{-- conten --}}
    <div class="w-full">
        {{-- nav --}}
        <div>
            <div id="user" class="navbar-menu-wrapper d-flex align-items-center justify-content-end ml-28" >
                <input style="box-shadow: 0px 3px 4px rgba(0, 0, 0, 0.25);margin-right: 60%;width: 27%;height: 5vh;padding: 2% 2% 2% 2%" class="rounded-2xl  placeholder:text-black mt-7 box-border"  type="text" placeholder="Search...." style="background-color: #FAFAFA">
                <div id="KotakUser">
                    <ul class="navbar-nav navbar-nav-right">
                        <li class="nav-item nav-profile dropdown">
                          <a class="flex items-center justify-center" href="#" data-toggle="dropdown" id="profileDropdown">
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
            <div >
             
            </div>
        </div>
        {{-- navbar end --}}
        {{-- file --}}
        <div style="width: 93%;box-sizing: border-box;padding: 3% 3% 5% 3%;margin-left: 3%;height: 80%;margin-left: 20px;background-color: #e2efff;margin-top: 3%;border-radius: 20px" >
            {{-- sort by --}}
            <p class="text-2xl" style="font-weight: bold;margin-left: 1%;margin-bottom: 3%">File Folder 1</p>
            <div class="flex w-full gap-5 ml-0" style="box-sizing: border-box">
                <a href="#word"  class="  rounded-2xl bg-white flex items-center sentuh" style="width: 25%; box-shadow: 0px 3px 3px 0px rgba(0, 0, 0, 0.19);height: 16vh; ">
                    <div class="flex items-center">
                        <img src="assets/imgcloud/logoword.png" class=" ml-6" alt="" style="width: 33%">                   
                         <div class="ml-2">
                            <p class="font-bold text-xl mr-4">Word</p>
                            <p class="font-light text-sm">20 file</p>
                        </div>
                    </div>
                </a>
                <a href="#excel"  class="  rounded-2xl bg-white flex items-center sentuh" style="width: 25%; box-shadow: 0px 3px 3px 0px rgba(0, 0, 0, 0.19);height: 16vh; ">
                    <div class="flex items-center">
                        <img src="assets/imgcloud/logoexcel.png" class=" ml-6" alt="" style="width: 33%">                   
                         <div class="ml-2">
                            <p class="font-bold text-xl mr-4">Excel</p>
                            <p class="font-light text-sm">20 file</p>
                        </div>
                    </div>
                </a>
                <a href="#ppt"  class="  rounded-2xl bg-white flex items-center sentuh" style="width: 25%; box-shadow: 0px 3px 3px 0px rgba(0, 0, 0, 0.19);height: 16vh; ">
                    <div class="flex items-center">
                        <img src="assets/imgcloud/logoppt.png" class=" ml-6" alt="" style="width: 33%">                   
                         <div class="ml-2">
                            <p class="font-semibold text-lg mr-4">PowerPoint</p>
                            <p class="font-light text-sm">20 file</p>
                        </div>
                    </div>
                </a>
                <a href="#pdf"  class="  rounded-2xl bg-white flex items-center sentuh" style="width: 25%; box-shadow: 0px 3px 3px 0px rgba(0, 0, 0, 0.19);height: 16vh; ">
                    <div class="flex items-center">
                        <img src="assets/imgcloud/logopdf.png" class=" ml-6" alt="" style="width: 30%">                   
                         <div class="ml-2">
                            <p class="font-bold text-xl mr-4">PDF</p>
                            <p class="font-light text-sm">20 file</p>
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
                    $('#navs').css('border', 'none');
                    $('#arrow1').css('display', 'block');
                    $('#arrow2').css('display', 'none');
                    
                } else {
                    $(".sidebar-dropdown").removeClass("active");
                    $(this).next(".sidebar-submenu").slideDown(300);
                    $(this).parent().addClass("active");
                    $('#navs').css('border', '1px solid black');
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