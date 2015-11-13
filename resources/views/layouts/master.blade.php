<!DOCTYPE html>
<html lang="en">
  <head>
    <title>Stillpoint</title>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="A description of the page">
    <!-- Google Fonts-->
    <link href="https://fonts.googleapis.com/css?family=Sanchez:400,400italic" rel="stylesheet" type="text/css">
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:400,300" rel="stylesheet" type="text/css">
    <link rel="stylesheet" href="/css/vendor.css">
    <link rel="stylesheet" href="/css/style.css">
    @yield('headers')
  </head>
  <body id="top">

    <script>
      window.fbAsyncInit = function() {
        FB.init({
          appId      : '198258987176383',
          xfbml      : true,
          version    : 'v2.5'
        });
      };

      (function(d, s, id){
         var js, fjs = d.getElementsByTagName(s)[0];
         if (d.getElementById(id)) {return;}
         js = d.createElement(s); js.id = id;
         js.src = "//connect.facebook.net/en_US/sdk.js";
         fjs.parentNode.insertBefore(js, fjs);
       }(document, 'script', 'facebook-jssdk'));
    </script>

    @yield('content')
  </body>
  <script src="/js/vendor.js"></script>
  <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyAx9KUDj1tNjrnOjWivzS4GAJ9Cke8RIvM"></script>
  <script src="/js/main.js"></script>
</html>