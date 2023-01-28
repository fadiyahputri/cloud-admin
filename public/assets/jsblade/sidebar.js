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