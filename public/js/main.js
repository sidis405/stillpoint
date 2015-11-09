$('.main-carousel').slick({
	arrows: false
});

$('.news-carousel').slick({
	arrows: false,
	infinite: true,
	dots: true,
	slidesToShow: 4,
});

$('.quotes-carousel').slick({	
	infinite: true,	
	slidesToShow: 1,
});

// Shrink header on scroll
  if ($(window).width() > 1023) {
    $(document).on("scroll", function(){
    if
      ($(document).scrollTop() > 100){
      $(".navbar").addClass("shrink");      
    }
    else
    {
      $(".navbar").removeClass("shrink");      
    }
  });
 }
//# sourceMappingURL=main.js.map
