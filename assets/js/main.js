$(document).ready(function() {
  $(window).on('scroll', function() {
    // $('#navBar').toggleClass('stiky', function() {
    // $(window).scrollY > 0
    if( $(window).scrollTop() ) {
      $('#navBar').addClass('stiky');
    } else {
      $('#navBar').removeClass('stiky');
    }
  });
});