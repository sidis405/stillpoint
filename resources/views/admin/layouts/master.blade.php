<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="apple-touch-icon" sizes="57x57" href="/favicons/apple-touch-icon-57x57.png">
    <link rel="apple-touch-icon" sizes="60x60" href="/favicons/apple-touch-icon-60x60.png">
    <link rel="apple-touch-icon" sizes="72x72" href="/favicons/apple-touch-icon-72x72.png">
    <link rel="apple-touch-icon" sizes="76x76" href="/favicons/apple-touch-icon-76x76.png">
    <link rel="apple-touch-icon" sizes="114x114" href="/favicons/apple-touch-icon-114x114.png">
    <link rel="apple-touch-icon" sizes="120x120" href="/favicons/apple-touch-icon-120x120.png">
    <link rel="apple-touch-icon" sizes="144x144" href="/favicons/apple-touch-icon-144x144.png">
    <link rel="apple-touch-icon" sizes="152x152" href="/favicons/apple-touch-icon-152x152.png">
    <link rel="apple-touch-icon" sizes="180x180" href="/favicons/apple-touch-icon-180x180.png">
    <link rel="icon" type="image/png" href="/favicons/favicon-32x32.png" sizes="32x32">
    <link rel="icon" type="image/png" href="/favicons/favicon-194x194.png" sizes="194x194">
    <link rel="icon" type="image/png" href="/favicons/favicon-96x96.png" sizes="96x96">
    <link rel="icon" type="image/png" href="/favicons/android-chrome-192x192.png" sizes="192x192">
    <link rel="icon" type="image/png" href="/favicons/favicon-16x16.png" sizes="16x16">

    <title>Admin | Kastner &amp; Pallavicino</title>
  
    <link href="https://fonts.googleapis.com/css?family=Roboto:400,300,300italic,400italic,100,100italic,700" rel="stylesheet" type="text/css">
    <link rel="stylesheet" href="/adm/styles/vendor.css">
    <!-- Google font-->
    <link href="https://fonts.googleapis.com/css?family=Roboto:400,300,300italic,400italic,100,100italic,700" rel="stylesheet" type="text/css">
    <link rel="stylesheet" href="/adm/styles/style.css">
    <link rel="stylesheet" href="/adm/styles/admin.css">
    <script src="/adm/scripts/modernizr.js"></script>

    @yield('header_extras')

    <!-- Bootstrap Core CSS -->

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
        <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->

</head>

<body>

  @include('layouts.errors')
  
  @include('admin.layouts.sidebar')

  @yield('content')

    <script src="/adm/scripts/vendor.js"></script>
  <script src="/adm/scripts/main.js"></script>
  <script src="/adm/scripts/admin.js"></script>
  @yield('footer_extras')

</body>

</html>

