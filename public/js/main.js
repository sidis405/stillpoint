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

// Minimalistic scrollspy
var lastId,
    topMenu = $(".navbar"),
    topMenuHeight = topMenu.outerHeight()+15,
    // All list items
    menuItems = topMenu.find("a"),
    // Anchors corresponding to menu items
    scrollItems = menuItems.map(function(){
      var item = $($(this).attr("href"));
      if (item.length) { return item; }
    });

// Bind click handler to menu items
// so we can get a fancy scroll animation
menuItems.click(function(e){
  var href = $(this).attr("href"),
      offsetTop = href === "#" ? 0 : $(href).offset().top-$('.navbar').height();
  $('html, body').stop().animate({ 
      scrollTop: offsetTop
  }, 300);
  e.preventDefault();
});

// Bind to scroll
$(window).scroll(function(){
   // Get container scroll position
   var fromTop = $(this).scrollTop()+topMenuHeight;
   
   // Get id of current scroll item
   var cur = scrollItems.map(function(){
     if ($(this).offset().top < fromTop)
       return this;
   });
   // Get the id of the current element
   cur = cur[cur.length-1];
   var id = cur && cur.length ? cur[0].id : "";
   
   if (lastId !== id) {
       lastId = id;
       // Set/remove active class
       menuItems
         .parent().removeClass("active")
         .end().filter("[href=#"+id+"]").parent().addClass("active");
   }                   
});


// Gallery animation
 // $(document).ready(function() {

 //  var start = -137;
 //  var full = 360;

 //  var current = start;

 //  $('.planet').each(function(){

 //    // console.log(current);
 //      // $(this).css('transform', 'rotate('+current+'deg) translateX(125px) rotate('+(-1)*parseInt(current)+'deg)');
 //      current += 30;

 //      var curr_el = this;

 //      $(curr_el).animate({step: function()}, 3000, function(){
 //        console.log($(this));
 //        $(curr_el).animate({transform: 'rotate('+current-full+'deg) translateX(125px) rotate('+(-1)*parseInt(current-full)+'deg)'}, 0);
 //      })        


 //      // $(this).animate({transform: 'rotate('+current+'deg)'},
 //      //   2000, function() { 
 //      //   $(this).animate({
 //      //    transform: 'rotate(150deg)'},
 //      //     0);
 //      // });


 //  })
   
 // });

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
//# sourceMappingURL=main.js.map
