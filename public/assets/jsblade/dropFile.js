  // Plugin initialize
  jQuery(document).ready(function ($) {
    $(".demo1").kwtFileUpload();
  });
  $( document ).ready(function() {



});
  (function($) {
$('input[type="file"]').bind('change', function() {
  $("#img_text").html($('input[type="file"]').val());
  $("#btn-x").css("display","block")
});

window.setInterval(function () {
  var navChars = 1;
  $('#img_text').filter(function() {
  if($(this).text().length < navChars){
    $("#btn-x").css("display","none")
  }
});
$("#btn-x").click(function(){
$("#btn-x").css("display","none")
$(".pilih-file").val('').clone(true);
$("#img_text").css('display','none');

});
}, 100);

})(jQuery)