// OWL Carousel / One slide

$(document).ready(function() {
 
  $("#owl-demo").owlCarousel({
 
      navigation : false, // Show next and prev buttons
      slideSpeed : 100,
      paginationSpeed : 500,
      autoPlay: true,
      rewindSpeed: 500,
      singleItem:true
 
      // "singleItem:true" is a shortcut for:
      // items : 1, 
      // itemsDesktop : false,
      // itemsDesktopSmall : false,
      // itemsTablet: false,
      // itemsMobile : false
 
  });
 
});




/* Footer to bottom
$(document).ready(function() {
 if ($(document).height() <= $(window).height()) {
  $("footer").addClass("navbar-fixed-bottom");
 }
});
*/