/* global jQuery */
/*global $ */


 
    $('#galleryCarousel').carousel({
    interval: 4000
    });
    
    // handles the carousel thumbnails
    $('[id^=carousel-selector-]').click( function(){
      var id_selector = $(this).attr("id");
      var parts = id_selector.split("-");
      var id = parts[parts.length - 1]
      id = parseInt(id);
      $('#galleryCarousel').carousel(id);
      $('[id^=carousel-selector-]').removeClass('selected');
      $(this).addClass('selected');
    });
    
    // when the carousel slides, auto update
    $('#galleryCarousel').on('slid', function (e) {
      var id = $('.item.active').data('slide-number');
      id = parseInt(id);
      $('[id^=carousel-selector-]').removeClass('selected');
      $('[id=carousel-selector-'+id+']').addClass('selected');
    });
