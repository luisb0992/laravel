<!DOCTYPE html>
<html>
	<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>{{ config('app.name') }}</title>
    <!-- Tell the browser to be responsive to screen width -->
    <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
    <!-- Bootstrap 3.3.5 -->
    <link rel="stylesheet" href="{{asset('css/bootstrap.min.css')}}">
    <!-- Font Awesome -->
    <link rel="stylesheet" href="{{asset('css/font-awesome.css')}}">
    <!-- Theme style -->
    <link rel="stylesheet" href="{{asset('css/AdminLTE.min.css')}}">
    <link rel="stylesheet" type="text/css" href="{{asset('css/glyphicons.css')}}">
    <!-- AdminLTE Skins. Choose a skin from the css/skins
         folder instead of downloading all of them to reduce the load. -->
    <link rel="stylesheet" href="{{asset('css/_all-skins.min.css')}}">
    <link rel="stylesheet" type="text/css" href="{{asset('css/sistema.css')}}">
    <link rel="shortcut icon" href="{{asset('img/logo.png')}}">
  </head>
	<body class="hold-transition login-page">
	  <div class="login-box">
	    <div class="login-logo">
	    <center><img class="img-responsive" src="{{ asset('img/logo.png') }}" alt="Logo" style="height:75px"></center>
	      <a href="#"><b>{{ config('app.name') }}</b></a>
	    </div><!-- /.login-logo -->
	    <div class="login-box-body">
	      <p class="login-box-msg">-Solo Personal Autorizado-</p>
	     
	      <div id="login">
		      	<form  method="POST" v-on:submit.prevent="login">
		          {{ csrf_field() }}
		        <div class="form-group has-feedback">
		          <input  class="form-control" type="text" name="email" v-model="user" placeholder="Usuario" required>
		          <span class="glyphicon glyphicon-envelope form-control-feedback"></span>
		        </div>
		        <div class="form-group has-feedback">
		          <input id="password" class="form-control" type="password" v-model="password" placeholder="Password" required>
		          <span class="glyphicon glyphicon-lock form-control-feedback"></span>
		        </div>

		        <div class="form-group">
		            <button id="b-login" type="submit" class="btn btn-primary btn-block btn-flat">Login</button>
		        </div>
		      </form> 
	      </div>
	      
	    </div><!-- /.login-box-body -->
	  </div><!-- /.login-box -->

	  <script type="text/javascript" src="{{asset('js/sistema.js')}}"></script>
	  <script type="text/javascript">
	  	window.routes = {
			    'auth' : '{{ route('auth') }}',
			  }
	  </script>
	</body>
</html>
