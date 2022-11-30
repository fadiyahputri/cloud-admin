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
                <a id="dashboard" class="flex items-center gap-2  hover:no-underline text-white  rounded-xl  " style="background-color: #169FCF;margin-bottom: 4%;width: 100%;height: 7vh;" href="">
                    <iconify-icon class="ml-6" icon="mdi:file-document-multiple" width="21" height="21"></iconify-icon>
                    <p class="font-normal text-xl ">Dashboard</p>
                 </a>
                
                    <nav id="nav" style="position: absolute;top: 23%;left: 7%;height: 47px;width: 93%;border-radius: 12px;" class="sidebar-wrapper ">   
                        <ul>
                            <li class="sidebar-dropdown">
                              <a style="display: flex;align-items: center" href="#"><iconify-icon icon="material-symbols:menu-book-outline-sharp" width="22" height="22"></iconify-icon><span class="font-medium text-xl" style="margin-left: 4%;" >Folder</span><iconify-icon id="arrow1"  class="arrow1" icon="material-symbols:keyboard-arrow-right" width="20" height="20"></iconify-icon><iconify-icon id="arrow2" class="arrow2"  icon="material-symbols:keyboard-arrow-down-rounded" width="20" height="20"></iconify-icon></a>
                              <div style="margin-top: 2%" class="sidebar-submenu">
                                <ul >
                                  <li><a href="{{url('/folder')}}"><iconify-icon icon="material-symbols:menu-book-outline-sharp" width="22" height="22"></iconify-icon><p >Folder 1 </p></a></li>
                                  <li><a href="#"><iconify-icon icon="material-symbols:menu-book-outline-sharp" width="22" height="22"></iconify-icon><p>Folder 2    </p></a></li>
                                </ul>
                              </div>
                            </li>   
                        </ul>        
                    </nav>
                    <div id="add">
                        <div class="flex items-center justify-center text-white" style="margin-left: 2%;font-weight: bold">
                            <iconify-icon icon="ic:twotone-plus" width="20" height="29"></iconify-icon>
                            <a href="/clod/folder/create"><button>Tambah Folder</button></a>
                        </div>
                    </div>
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
        <div style="width: 93%;box-sizing: border-box;padding: 7% 3% 5% 3%;margin-left: 3%;height: 80%;margin-left: 20px;background-color: #e2efff;margin-top: 3%;border-radius: 20px" >
            {{-- sort by --}}
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
                {{-- last update --}}
                <div>
                    <div class="flex items-center">
                        <p class="text-2xl" style="font-weight: bold;margin-top: 7%;margin-left: 1%">Last Upload</p>
                    <a href=""  style="font-weight: 500;margin-top: 6.7%;margin-left: 66%;display: flex" >
                        <p class="text-xl">see more</p>
                        <iconify-icon class="ml-1 mt-1 text-black" icon="material-symbols:keyboard-arrow-right" width="20" height="20"></iconify-icon>
                    </a> 
                    </div>
                    <div id="last-update">
                        <div  class="flex items-center" style="background-color: white;width: 30%;height: 18vh;border-radius: 20px; box-shadow: 0px 3px 3px 0px rgba(0, 0, 0, 0.19)">
                            <a class="sentuh" href="https://stackoverflow.com/questions/5404839/how-do-i-refresh-a-page-using-javascript" >
                            <div class="box-last">
                                <img src="assets/imgcloud/logoword.png" class=" ml-6" alt="" style="width: 30%">                   
                                 <div class="ml-2 mb-4">
                                    <p class="font-bold text-base mr-4 " style="width: 92%">Jadwal X PP</p>
                                    <p class="font-light text-xs">18/12/2022 08:06</p>
                                </div>
                                
                            </div>
                            </a>
                            <a href="" class="titik3"><iconify-icon id="something" style="z-index: 20" icon="carbon:overflow-menu-vertical" width="20" height="20"></iconify-icon></a>
                        </div>
                        <div  class="flex items-center" style="background-color: white;width: 30%;height: 18vh;border-radius: 20px; box-shadow: 0px 3px 3px 0px rgba(0, 0, 0, 0.19)">
                            <a class="sentuh" href="https://stackoverflow.com/questions/5404839/how-do-i-refresh-a-page-using-javascript" >
                            <div class="box-last">
                                
                                <img src="assets/imgcloud/logoword.png" class=" ml-6" alt="" style="width: 30%">                   
                                 <div class="ml-2 mb-4">
                                    <p class="font-bold text-base mr-4 " style="width: 92%">Jadwal X PP</p>
                                    <p class="font-light text-xs">18/12/2022 08:06</p>
                                </div>
                                
                            </div>
                            </a>
                            <a href="" class="titik3"><iconify-icon id="something" style="z-index: 20" icon="carbon:overflow-menu-vertical" width="20" height="20"></iconify-icon></a>
                        </div>
                        <div  class="flex items-center" style="background-color: white;width: 30%;height: 18vh;border-radius: 20px; box-shadow: 0px 3px 3px 0px rgba(0, 0, 0, 0.19)">
                            <a class="sentuh" href="https://stackoverflow.com/questions/5404839/how-do-i-refresh-a-page-using-javascript" >
                            <div class="box-last">
                                
                                <img src="assets/imgcloud/logoword.png" class=" ml-6" alt="" style="width: 30%">                   
                                 <div class="ml-2 mb-4">
                                    <p class="font-bold text-base mr-4 " style="width: 92%;">Jadwal X PP</p>
                                    <p class="font-light text-xs">18/12/2022 08:06</p>
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