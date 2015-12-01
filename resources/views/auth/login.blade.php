<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Admin | Stillpoint</title>
  
    <link href="https://fonts.googleapis.com/css?family=Roboto:400,300,300italic,400italic,100,100italic,700" rel="stylesheet" type="text/css">
    <link rel="stylesheet" href="/adm/styles/vendor.css">
    <!-- Google font-->
    <link href="https://fonts.googleapis.com/css?family=Roboto:400,300,300italic,400italic,100,100italic,700" rel="stylesheet" type="text/css">
    <link rel="stylesheet" href="/adm/styles/style.css">
    <script src="/adm/scripts/modernizr.js"></script>
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

<div class="admin-container col-md-offset-5 col-md-2">


<div class="avatar"><img src="/adm/img/logo-admin.png" alt=""></div>

<form  method="POST" action="/auth/login" class="form-horizontal">

{!! csrf_field() !!}

  <div class="form-group">
    <label for="email" class="col-sm-12 login-label control-label">Email</label>
    <div class="col-sm-12">
      <input type="email" name="email" value="{{ old('email') }}" class="form-control" id="email" placeholder="Email">
    </div>
  </div>
  <div class="form-group">
    <label for="password" class="col-sm-12 login-label control-label">Password</label>
    <div class="col-sm-12">
      <input type="password"  name="password" class="form-control" placeholder="Password">
    </div>
  </div>
  <div class="form-group">
    <div class="col-sm-10">
      <div class="checkbox">
        <label>
          <input type="checkbox"> Remember me
        </label>
      </div>
    </div>
  </div>
  <div class="form-group">
    <div class="col-sm-12">
      <button type="submit" class="btn btn-default btn-success col-sm-12">Login</button>
    </div>
  </div>
</form>

</div>

    <script src="/adm/scripts/vendor.js"></script>
  <script src="/adm/scripts/main.js"></script>

</body>

</html>

