<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Admin | StillPoint</title>
  
    <link href="https://fonts.googleapis.com/css?family=Roboto:400,300,300italic,400italic,100,100italic,700" rel="stylesheet" type="text/css">
    <link rel="stylesheet" href="/adm/styles/vendor.css">
    <!-- Google font-->
    <link href="https://fonts.googleapis.com/css?family=Roboto:400,300,300italic,400italic,100,100italic,700" rel="stylesheet" type="text/css">
    <link rel="stylesheet" href="/adm/styles/style.css">
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

  @yield('content')

  @yield('footer_extras')
    <script src="/adm/scripts/vendor.js"></script>
  <script src="/adm/scripts/main.js"></script>

</body>

</html>

