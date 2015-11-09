// $('.main-carousel').css('margin-top', $('.navbar').height()/2);

$('.main-carousel').slick({
	arrows: false
});

$('.news-carousel').slick({
	arrows: false,
	infinite: true,
	dots: true,
	slidesToShow: 4,
  responsive: [
    {
      breakpoint: 1450,
      settings: {
        slidesToShow: 3      
      }
    },
    {
      breakpoint: 1199,
      settings: {
        slidesToShow: 2        
      }
    },
    {
      breakpoint: 900,
      settings: {
        slidesToShow: 2        
      }
    },
    {
      breakpoint: 767,
      settings: {
        slidesToShow: 1        
      }
    }
  ]
});

$('.quotes-carousel').slick({	
	infinite: true,	
	slidesToShow: 1
});

// Shrink header on scroll
  if ($(window).width() > 1450) {
    $(document).on("scroll", function(){
    if
      ($(document).scrollTop() > 50){
      $(".navbar").addClass("shrink");      
    }
    else
    {
      $(".navbar").removeClass("shrink");      
    }
  });
 } else {
  $('.navbar').addClass("shrink")
 }

 $(document).ready(function() {

    function initialize() {
      var myLatlng = new google.maps.LatLng(41.9223124,12.5162724);
      var mapOptions = {
        zoom: 16,
        scrollwheel: false,
        center: myLatlng
      }
      var map = new google.maps.Map(document.getElementById('map-canvas'), mapOptions);

      var marker = new google.maps.Marker({
          position: myLatlng,
          map: map,
          title: 'Still Point'
      });
    }

    google.maps.event.addDomListener(window, 'load', initialize);


});