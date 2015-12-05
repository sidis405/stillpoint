// $('.main-carousel').css('margin-top', $('.navbar').height()/2);

$('.gallery-item').magnificPopup({
  type: 'image',
  gallery:{
    enabled:true
  }
});


$('.open-news-modal').magnificPopup({
  type:'inline',
  midClick: true // Allow opening popup on middle mouse click. Always set it to true if you don't provide alternative source in href.
});

$('.news-modal').addClass('mfp-hide')

$('.main-carousel').slick({	
  autoplay: true
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
	slidesToShow: 1,
  arrows: true
});

// Shrink header on scroll
  if ($(window).width() > 1450 && window.location.href.indexOf("/articolo") < 0 && window.location.href.indexOf("/privacy-policy") < 0) {
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
      offsetTop = href === "#" ? 0 : $(href).offset().top-$('.navbar-header').height();
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
          icon: 'img/map-icon.png',
          title: 'Still Point'
      });
    }

    google.maps.event.addDomListener(window, 'load', initialize);


});

$(document).ready(function () {
    if(window.location.href.indexOf("/articolo") > -1) {
       $('.navbar').addClass('shrink');
       $('#news-page').css('margin-top', $('.navbar').height());
    }
});


$('#contact_form').submit(function(e){
  e.preventDefault();

  // alert('invia mail');

  sendContactMail();

})

function sendContactMail() {

    var token = $('meta[name="_token"]').attr('content');

    // console.log(last_activity);
    var formData = $('#contact_form').serializeArray();

    $.ajax({
        url: "/contact_send",
        type: 'POST',
        data: {_token : token, form: formData},
        success: function(data) {

            // alert('mail spedita');

            $('#contact_form').html('<div class="success_contact">Grazie per averci contattato. Vi risponderemo il prima possibile.</div>');

            return false;
        },
        error: function(XMLHttpRequest, textstatus, error) {

            return false;

        }
    });

    return false;


}

/*
 * Copyright (C) 2012 PrimeBox (info@primebox.co.uk)
 * 
 * This work is licensed under the Creative Commons
 * Attribution 3.0 Unported License. To view a copy
 * of this license, visit
 * http://creativecommons.org/licenses/by/3.0/.
 * 
 * Documentation available at:
 * http://www.primebox.co.uk/projects/cookie-bar/
 * 
 * When using this software you use it at your own risk. We hold
 * no responsibility for any damage caused by using this plugin
 * or the documentation provided.
 */
(function($){
  $.cookieBar = function(options,val){
    if(options=='cookies'){
      var doReturn = 'cookies';
    }else if(options=='set'){
      var doReturn = 'set';
    }else{
      var doReturn = false;
    }
    var defaults = {
      message: 'We use cookies to track usage and preferences.', //Message displayed on bar
      acceptButton: true, //Set to true to show accept/enable button
      acceptText: 'I Understand', //Text on accept/enable button
      declineButton: false, //Set to true to show decline/disable button
      declineText: 'Disable Cookies', //Text on decline/disable button
      policyButton: false, //Set to true to show Privacy Policy button
      policyText: 'Privacy Policy', //Text on Privacy Policy button
      policyURL: '/privacy-policy/', //URL of Privacy Policy
      autoEnable: true, //Set to true for cookies to be accepted automatically. Banner still shows
      acceptOnContinue: false, //Set to true to silently accept cookies when visitor moves to another page
      expireDays: 365, //Number of days for cookieBar cookie to be stored for
      forceShow: false, //Force cookieBar to show regardless of user cookie preference
      effect: 'slide', //Options: slide, fade, hide
      element: 'body', //Element to append/prepend cookieBar to. Remember "." for class or "#" for id.
      append: false, //Set to true for cookieBar HTML to be placed at base of website. Actual position may change according to CSS
      fixed: false, //Set to true to add the class "fixed" to the cookie bar. Default CSS should fix the position
      bottom: false, //Force CSS when fixed, so bar appears at bottom of website
      zindex: '', //Can be set in CSS, although some may prefer to set here
      redirect: String(window.location.href), //Current location
      domain: String(window.location.hostname), //Location of privacy policy
      referrer: String(document.referrer) //Where visitor has come from
    };
    var options = $.extend(defaults,options);
    
    //Sets expiration date for cookie
    var expireDate = new Date();
    expireDate.setTime(expireDate.getTime()+(options.expireDays*24*60*60*1000));
    expireDate = expireDate.toGMTString();
    
    var cookieEntry = 'cb-enabled={value}; expires='+expireDate+'; path=/';
    
    //Retrieves current cookie preference
    var i,cookieValue='',aCookie,aCookies=document.cookie.split('; ');
    for (i=0;i<aCookies.length;i++){
      aCookie = aCookies[i].split('=');
      if(aCookie[0]=='cb-enabled'){
          cookieValue = aCookie[1];
      }
    }
    //Sets up default cookie preference if not already set
    if(cookieValue=='' && doReturn!='cookies' && options.autoEnable){
      cookieValue = 'enabled';
      document.cookie = cookieEntry.replace('{value}','enabled');
    }
    if(options.acceptOnContinue){
      if(options.referrer.indexOf(options.domain)>=0 && String(window.location.href).indexOf(options.policyURL)==-1 && doReturn!='cookies' && doReturn!='set' && cookieValue!='accepted' && cookieValue!='declined'){
        doReturn = 'set';
        val = 'accepted';
      }
    }
    if(doReturn=='cookies'){
      //Returns true if cookies are enabled, false otherwise
      if(cookieValue=='enabled' || cookieValue=='accepted'){
        return true;
      }else{
        return false;
      }
    }else if(doReturn=='set' && (val=='accepted' || val=='declined')){
      //Sets value of cookie to 'accepted' or 'declined'
      document.cookie = cookieEntry.replace('{value}',val);
      if(val=='accepted'){
        return true;
      }else{
        return false;
      }
    }else{
      //Sets up enable/accept button if required
      var message = options.message.replace('{policy_url}',options.policyURL);
      
      if(options.acceptButton){
        var acceptButton = '<a href="" class="cb-enable">'+options.acceptText+'</a>';
      }else{
        var acceptButton = '';
      }
      //Sets up disable/decline button if required
      if(options.declineButton){
        var declineButton = '<a href="" class="cb-disable">'+options.declineText+'</a>';
      }else{
        var declineButton = '';
      }
      //Sets up privacy policy button if required
      if(options.policyButton){
        var policyButton = '<a target="_blank" href="'+options.policyURL+'" class="cb-policy">'+options.policyText+'</a>';
      }else{
        var policyButton = '';
      }
      //Whether to add "fixed" class to cookie bar
      if(options.fixed){
        if(options.bottom){
          var fixed = ' class="fixed bottom"';
        }else{
          var fixed = ' class="fixed"';
        }
      }else{
        var fixed = '';
      }
      if(options.zindex!=''){
        var zindex = ' style="z-index:'+options.zindex+';"';
      }else{
        var zindex = '';
      }
      
      //Displays the cookie bar if arguments met
      if(options.forceShow || cookieValue=='enabled' || cookieValue==''){
        if(options.append){
          $(options.element).append('<div id="cookie-bar"'+fixed+zindex+'><p>'+message+acceptButton+declineButton+policyButton+'</p></div>');
        }else{
          $(options.element).prepend('<div id="cookie-bar"'+fixed+zindex+'><p>'+message+acceptButton+declineButton+policyButton+'</p></div>');
        }
      }
      
      //Sets the cookie preference to accepted if enable/accept button pressed
      $('#cookie-bar .cb-enable').click(function(){
        document.cookie = cookieEntry.replace('{value}','accepted');
        if(cookieValue!='enabled' && cookieValue!='accepted'){
          window.location = options.redirect;
        }else{
          if(options.effect=='slide'){
            $('#cookie-bar').slideUp(300,function(){$('#cookie-bar').remove();});
          }else if(options.effect=='fade'){
            $('#cookie-bar').fadeOut(300,function(){$('#cookie-bar').remove();});
          }else{
            $('#cookie-bar').hide(0,function(){$('#cookie-bar').remove();});
          }
          return false;
        }
      });
      //Sets the cookie preference to declined if disable/decline button pressed
      $('#cookie-bar .cb-disable').click(function(){
        var deleteDate = new Date();
        deleteDate.setTime(deleteDate.getTime()-(864000000));
        deleteDate = deleteDate.toGMTString();
        aCookies=document.cookie.split('; ');
        for (i=0;i<aCookies.length;i++){
          aCookie = aCookies[i].split('=');
          if(aCookie[0].indexOf('_')>=0){
            document.cookie = aCookie[0]+'=0; expires='+deleteDate+'; domain='+options.domain.replace('www','')+'; path=/';
          }else{
            document.cookie = aCookie[0]+'=0; expires='+deleteDate+'; path=/';
          }
        }
        document.cookie = cookieEntry.replace('{value}','declined');
        if(cookieValue=='enabled' && cookieValue!='accepted'){
          window.location = options.redirect;
        }else{
          if(options.effect=='slide'){
            $('#cookie-bar').slideUp(300,function(){$('#cookie-bar').remove();});
          }else if(options.effect=='fade'){
            $('#cookie-bar').fadeOut(300,function(){$('#cookie-bar').remove();});
          }else{
            $('#cookie-bar').hide(0,function(){$('#cookie-bar').remove();});
          }
          return false;
        }
      });
    }
  };
})(jQuery);

$(document).ready(function(){
  $.cookieBar({
    message: "Stillpoint utilizza cookies di terze parti. Continuando la navigazione ne accetti l'utilizzo. ",
    policyButton: true,
    policyText: 'Maggiori informazioni',
    policyURL: 'privacy-policy',
    acceptText: 'Ok',
    fixed: true,
    bottom: true   
  });
});

//# sourceMappingURL=main.js.map
