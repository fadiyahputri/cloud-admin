<!DOCTYPE html>
<html lang="en">

<head>
  
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <title>Admin Starbhak</title>
  <!-- plugins:css -->
  <link rel="stylesheet" href="{{asset('assets/vendors/feather/feather.css')}}">
  <link rel="stylesheet" href="{{asset('assets/vendors/ti-icons/css/themify-icons.css')}}">
  <link rel="stylesheet" href="{{asset('assets/vendors/css/vendor.bundle.base.css')}}">
  <!-- endinject -->
  {{-- modal --}}
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous"></script>
  {{-- end modal --}}
  <!-- Plugin css for this page -->
  <link rel="stylesheet" href="{{asset('assets/vendors/datatables.net-bs4/dataTables.bootstrap4.css')}}">
  <link rel="stylesheet" href="{{asset('assets/vendors/ti-icons/css/themify-icons.css')}}">
  <link rel="stylesheet" type="text/css" href="{{asset('assets/js/select.dataTables.min.css')}}">
  <!-- End plugin css for this page -->
  <!-- inject:css -->
  <link rel="stylesheet" href="{{asset('assets/css/vertical-layout-light/style.css')}}">
  <!-- endinject -->
  <link rel="shortcut icon" href="{{asset('assets/images/logo tb1.png')}}" />
  @vite('resources/css/app.css')
  {{-- font --}}
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500&display=swap" rel="stylesheet">
  {{-- font awesome --}}
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/css/all.min.css">
  {{-- iconify --}}
  <script src="https://code.iconify.design/iconify-icon/1.0.1/iconify-icon.min.js"></script>
  {{-- css --}}
  <link rel="stylesheet" href="@yield('css')">
  @yield('foldercss')
  <script src="assets/js/jquery.js"></script>
  @yield('jquery')

</head>
<body>
  @yield('content')
  <script src="{{asset('assets/js/jquery.js')}}"></script>
  <script>
    (function ($) {
      /**
       * Create drag and drop element.
       */
      var customDragandDrop = function (element) {
        $(element).addClass("kwt-file__input");
        var element = $(element).wrap(
          `<div class="kwt-file"><div class="kwt-file__drop-area"><span class='kwt-file__choose-file ${
            element.attributes.data_btn_text
              ? "" === element.attributes.data_btn_text.textContent
                ? ""
                : "kwt-file_btn-text"
              : ""
          }'>${
            element.attributes.data_btn_text
              ? "" === element.attributes.data_btn_text.textContent
                ? `<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512" fill="currentColor"><path d="M67.508 468.467c-58.005-58.013-58.016-151.92 0-209.943l225.011-225.04c44.643-44.645 117.279-44.645 161.92 0 44.743 44.749 44.753 117.186 0 161.944l-189.465 189.49c-31.41 31.413-82.518 31.412-113.926.001-31.479-31.482-31.49-82.453 0-113.944L311.51 110.491c4.687-4.687 12.286-4.687 16.972 0l16.967 16.971c4.685 4.686 4.685 12.283 0 16.969L184.983 304.917c-12.724 12.724-12.73 33.328 0 46.058 12.696 12.697 33.356 12.699 46.054-.001l189.465-189.489c25.987-25.989 25.994-68.06.001-94.056-25.931-25.934-68.119-25.932-94.049 0l-225.01 225.039c-39.249 39.252-39.258 102.795-.001 142.057 39.285 39.29 102.885 39.287 142.162-.028A739446.174 739446.174 0 0 1 439.497 238.49c4.686-4.687 12.282-4.684 16.969.004l16.967 16.971c4.685 4.686 4.689 12.279.004 16.965a755654.128 755654.128 0 0 0-195.881 195.996c-58.034 58.092-152.004 58.093-210.048.041z" /></svg>`
                : `${element.attributes.data_btn_text.textContent}`
              : `<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512" fill="currentColor"><path d="M67.508 468.467c-58.005-58.013-58.016-151.92 0-209.943l225.011-225.04c44.643-44.645 117.279-44.645 161.92 0 44.743 44.749 44.753 117.186 0 161.944l-189.465 189.49c-31.41 31.413-82.518 31.412-113.926.001-31.479-31.482-31.49-82.453 0-113.944L311.51 110.491c4.687-4.687 12.286-4.687 16.972 0l16.967 16.971c4.685 4.686 4.685 12.283 0 16.969L184.983 304.917c-12.724 12.724-12.73 33.328 0 46.058 12.696 12.697 33.356 12.699 46.054-.001l189.465-189.489c25.987-25.989 25.994-68.06.001-94.056-25.931-25.934-68.119-25.932-94.049 0l-225.01 225.039c-39.249 39.252-39.258 102.795-.001 142.057 39.285 39.29 102.885 39.287 142.162-.028A739446.174 739446.174 0 0 1 439.497 238.49c4.686-4.687 12.282-4.684 16.969.004l16.967 16.971c4.685 4.686 4.689 12.279.004 16.965a755654.128 755654.128 0 0 0-195.881 195.996c-58.034 58.092-152.004 58.093-210.048.041z" /></svg>`
          }</span>${element.outerHTML}</span><span class="kwt-file__msg">${
            "" === element.placeholder ? "or drop files here" : `${element.placeholder}`
          }</span><div class="kwt-file__delete"></div></div></div>`
        );
        var element = element.parents(".kwt-file");
    
        // Add class on focus and drage enter event.
        element.on("dragenter focus click", ".kwt-file__input", function (e) {
          $(this).parents(".kwt-file__drop-area").addClass("is-active");
        });
    
        // Remove class on blur and drage leave event.
        element.on("dragleave blur drop", ".kwt-file__input", function (e) {
          $(this).parents(".kwt-file__drop-area").removeClass("is-active");
        });
    
        // Show filename when change file.
        element.on("change", ".kwt-file__input", function (e) {
          let filesCount = $(this)[0].files.length;
          let textContainer = $(this).next(".kwt-file__msg");
          if (1 === filesCount) {
            let fileName = $(this).val().split("\\").pop();
            textContainer
              .text(fileName)
              .next(".kwt-file__delete")
              .css("display", "block");
          } else if (filesCount > 1) {
            textContainer
              .text(filesCount + " files selected")
              .next(".kwt-file__delete")
              .css("display", "inline-block");
          } else {
            textContainer.text(
              `${
                "" === this[0].placeholder
                  ? "or drop files here"
                  : `${this[0].placeholder}`
              }`
            );
            $(this)
              .parents(".kwt-file")
              .find(".kwt-file__delete")
              .css("display", "none");
          }
        });
    
        // Delete selected file.
        element.on("click", ".kwt-file__delete", function (e) {
          let deleteElement = $(this);
          deleteElement.parents(".kwt-file").find(`.kwt-file__input`).val(null);
          deleteElement
            .css("display", "none")
            .prev(`.kwt-file__msg`)
            .text(
              `${
                "" ===
                $(this).parents(".kwt-file").find(".kwt-file__input")[0].placeholder
                  ? "or drop files here"
                  : `${
                      $(this).parents(".kwt-file").find(".kwt-file__input")[0].placeholder
                    }`
              }`
            );
        });
      };
    
      $.fn.kwtFileUpload = function (e) {
        var _this = $(this);
        $.each(_this, function (index, element) {
          customDragandDrop(element);
        });
        return this;
      };
    })(jQuery);
    
    // Plugin initialize
    jQuery(document).ready(function ($) {
      $(".demo1").kwtFileUpload();
    });
    
  </script>

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
  <!-- plugins:js -->
  <script src="{{asset('assets/vendors/js/vendor.bundle.base.js')}}"></script>
  <!-- endinject -->
  <!-- Plugin js for this page -->
  <script src="{{asset('assets/vendors/chart.js/Chart.min.js')}}"></script>
  <script src="{{asset('assets/vendors/datatables.net/jquery.dataTables.js')}}"></script>
  <script src="{{asset('assets/vendors/datatables.net-bs4/dataTables.bootstrap4.js')}}"></script>
  <script src="{{asset('assets/js/dataTables.select.min.js')}}"></script>

  <!-- End plugin js for this page -->
  <!-- inject:js -->
  <script src="{{asset('assets/js/off-canvas.js')}}"></script>
  <script src="{{asset('assets/js/hoverable-collapse.js')}}"></script>
  <script src="{{asset('assets/js/template.js')}}"></script>
  <script src="{{asset('assets/js/settings.js')}}"></script>
  <script src="{{asset('assets/js/todolist.js')}}"></script>
  <!-- endinject -->
  <!-- Custom js for this page-->
  <script src="{{asset('assets/js/dashboard.js')}}"></script>
  <script src="{{asset('assets/js/Chart.roundedBarCharts.js')}}"></script>
  <!-- End custom js for this page-->
</body>

</html>