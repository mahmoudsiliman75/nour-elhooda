$(document).ready(function() {

  // START:: STIKY NAVBAR
  $(window).on('scroll', function() {
    if( $(window).scrollTop() ) {
      $('#navBar').addClass('stiky');
    } else {
      $('#navBar').removeClass('stiky');
    }
  });
  // END:: STIKY NAVBAR

  
});