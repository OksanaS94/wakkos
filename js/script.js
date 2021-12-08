document.addEventListener("DOMContentLoaded", function () {

 $(document).on ("click", ".svg-container svg", function () {
  $('.menu_popup').slideToggle('active_menu-popup');
  $('.svg-container svg').toggleClass('svg-active');
})

$(document).on ("click", ".menu_popup-close", function () {
 $('.menu_popup').slideToggle('active_menu-popup');
 $('.svg-container svg').toggleClass('svg-active');
})


});