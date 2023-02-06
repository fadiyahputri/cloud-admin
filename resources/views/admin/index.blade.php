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
    <link rel="stylesheet" href="css/dashboard/index.css">
    <!-- bootstrap -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js" integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous"></script>
    <!-- font awesome -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.1/css/all.min.css" integrity="sha512-MV7K8+y+gLIBoVD59lQIYicR65iaqukzvf/nwasF0nqhPay5w/9lJmVM2hMDcnK1OnMGCdVK+iQrJ7lzPJQd1w==" crossorigin="anonymous" referrerpolicy="no-referrer" />

</head>
<body onload="muncul()">
    <div id="container">
        <nav>
            
            <div class="logo"></div>
            <span class="tittle">starbhak</span>
            <span class="tittle2">dashboard</span>
                <span id="welcome">welcome, <span id="welcome">admin</span></span>
                <div class="line"></div>
                <a class="logout"  href="/logout"><iconify-icon icon="tabler:logout" style="color: white;" width="30" height="30"></iconify-icon></a>
                
        </nav>
        <div id="menu">
            <div id="sidebar">
                <ul>
                    <li >
                        <a href="index.html">
                        <div class="box-icon">
                            <iconify-icon style="color: white;" icon="radix-icons:dashboard" width="23" height="23"></iconify-icon>
                        </div>
                        <div style="width: 70%;">
                            <p>Dashboard</p>
                        </div>
                        </a>
                    </li>
                    <li >
                        <a href="/dataguru">
                        <div class="box-icon" style="background-color: white;">
                            <iconify-icon style="color: black;" icon="uil:users-alt" width="23" height="23"></iconify-icon>
                        </div>
                        <div style="width: 70%;">
                            <p class="sec">Data Guru</p>
                        </div>
                        </a>
                    </li>
                    <li >
                        <a href="/landing">
                        <div class="box-icon" style="background-color: white;">
                            <iconify-icon style="color: black;" icon="quill:paper" width="25" height="23"></iconify-icon>
                        </div>
                        <div style="width: 70%;">
                            <p class="sec">Landing Page</p>
                        </div>
                        </a>
                    </li>
                </ul>
            </div>
            <div id="content">
                <div id="hero" style="">
                    <button style="width: 9%; height: 2.5vw; margin: 19% 0 0 4%; border-radius: 0.5rem; border: none; box-shadow: 0px 3px 2px rgba(0, 0, 0, 0.25);"></button>
                </div>
                <div id="con-2">
                    <div id="table">
                        <div style="display: flex; justify-content: space-between;">
                            <p class="title">Recent activity</p>
                            <div style="display: flex;">
                                <iconify-icon id="icon-search" style="position: absolute;margin-left: 0.5%;margin-top: 0.35%;color: rgba(35, 31, 32, 0.3);" icon="uil:search" width="18" height="18"></iconify-icon>
                                <input id="input-search" type="search" class="search" oninput="search2()" placeholder="Search.....">
                            </div>
                            <div class="btn-group d-flex justify-content-center align-items-center" style="width: fit-content; height: 2vw;">
                                <button class="btn btn-secondary dropdown-toggle" type="button" id="defaultDropdown" data-bs-toggle="dropdown" data-bs-auto-close="true" aria-expanded="false" style="font-size: 0.7rem;  background-color: #2C3E50;">
                                    Data guru
                                </button>
                                <ul class="dropdown-menu" aria-labelledby="defaultDropdown">
                                  <li><a class="dropdown-item" href="#">Data guru</a></li>
                                </ul>
                            </div>
                            {{-- <!-- <div class="nav-data navbar navbar-expand-sm navbar-dark navbar-fixed ">
                                <ul style="width: 100%;"  class="navbar-nav ms-auto">
                                    <li style="padding: 0;width: 100%;" class="nav-item dropdown">
                                      <a  class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                        <span style="font-size: 0.8rem; color: white;">Data Guru</span>
                                      </a>
                                      <div class="dropdown-menu dropdown-menu-end animate slideIn" aria-labelledby="navbarDropdown" >
                                        <a class="dropdown-item" href="#"></a>  
                                        <a class="dropdown-item" href="#"></a>
                                      </div>
                                    </li>
                                  </ul>
                            </div> --> --}}
                        </div>
                        <table>
                            <tr style="border-bottom: 1px solid #DFDFDF; border-top: #DFDFDF;">
                                <th>#</th>
                                <th>Nama Guru</th>
                                <th>username</th>
                                <th>Nama pelajaran</th>
                                <th>Tanggal Dibuat</th>
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
                                <td>{{$g->created_at}}</td>
                            </tr>
                            @endforeach  
                        </table>
                    </div>
                    <div id="con-right">
                            <div class="wrapper">
                            <header>
                                <div class="icons">
                                    <span id="prev" class="material-symbols-rounded"><i class="fa-solid fa-arrow-left" id="prev"></i></span>
                                    </div>
                                <span class="current-date"></span>
                                <div class="icons">
                                    <span id="next" class="material-symbols-rounded"><i class="fa-solid fa-arrow-right" id="next"></i></span>
                                </div>
                            </header>
                                <div class="calendar">
                                    <ul class="weeks" id="ulnya">
                                    <li>Sun</li>
                                    <li>Mon</li>
                                    <li>Tue</li>
                                    <li>Wed</li>
                                    <li>Thu</li>
                                    <li>Fri</li>
                                    <li>Sat</li>
                                    </ul>
                                    <hr class="garisatas">
                                    <ul class="days"></ul>
                                    <hr class="garisbawah">
                                </div>
                            </div> 

                        <div id="status" style="display: flex; align-items: center; padding: 5% 9%;">
                            <div class="profile"></div>
                            <div style="margin-left: 3%;">
                                <span class="admin">Admin</span>
                                <div style="display: flex; align-items: center;">
                                    <div style="width: 0.6vw; height: 0.6vw; border-radius: 1rem; background-color: greenyellow; margin-right: 5%;"></div>
                                    <span style="font-weight: 500;">Online</span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <script>
        const daysTag = document.querySelector(".days"),
        currentDate = document.querySelector(".current-date"),
        prevNextIcon = document.querySelectorAll(".icons span");

        // getting new date, current year and month
        let date = new Date(),
        currYear = date.getFullYear(),
        currMonth = date.getMonth();

        // storing full name of all months in array
        const months = ["January", "February", "March", "April", "May", "June", "July",
                    "August", "September", "October", "November", "December"];

        const renderCalendar = () => {
            let firstDayofMonth = new Date(currYear, currMonth, 1).getDay(), // getting first day of month
            lastDateofMonth = new Date(currYear, currMonth + 1, 0).getDate(), // getting last date of month
            lastDayofMonth = new Date(currYear, currMonth, lastDateofMonth).getDay(), // getting last day of month
            lastDateofLastMonth = new Date(currYear, currMonth, 0).getDate(); // getting last date of previous month
            let liTag = "";

            for (let i = firstDayofMonth; i > 0; i--) { // creating li of previous month last days
                liTag += `<li class="inactive">${lastDateofLastMonth - i + 1}</li>`;
            }

            for (let i = 1; i <= lastDateofMonth; i++) { // creating li of all days of current month
                // adding active class to li if the current day, month, and year matched
                let isToday = i === date.getDate() && currMonth === new Date().getMonth() 
                            && currYear === new Date().getFullYear() ? "active" : "";
                liTag += `<li class="${isToday}">${i}</li>`;
            }

            for (let i = lastDayofMonth; i < 6; i++) { // creating li of next month first days
                liTag += `<li class="inactive">${i - lastDayofMonth + 1}</li>`
            }
            currentDate.innerText = `${months[currMonth]} ${currYear}`; // passing current mon and yr as currentDate text
            daysTag.innerHTML = liTag;
        }
        renderCalendar();

        prevNextIcon.forEach(i => { // getting prev and next icons
            i.addEventListener("click", () => { // adding click event on both icons
                // if clicked icon is previous icon then decrement current month by 1 else increment it by 1
                currMonth = i.id === "prev" ? currMonth - 1 : currMonth + 1;

                if(currMonth < 0 || currMonth > 11) { // if current month is less than 0 or greater than 11
                    // creating a new date of current year & month and pass it as date value
                    date = new Date(currYear, currMonth, new Date().getDate());
                    currYear = date.getFullYear(); // updating current year with new date year
                    currMonth = date.getMonth(); // updating current month with new date month
                } else {
                    date = new Date(); // pass the current date as date value
                }
                renderCalendar(); // calling renderCalendar function
            });
        });

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
    </script>
</body>
</html>