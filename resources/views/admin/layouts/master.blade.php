<!DOCTYPE html>
<!--[if IE 8]> <html lang="en" class="ie8 no-js"> <![endif]-->
<!--[if IE 9]> <html lang="en" class="ie9 no-js"> <![endif]-->
<!--[if !IE]><!-->
<html lang="en" class="no-js">
<!--<![endif]-->
<head>
	<meta charset="utf-8"/>
	<title>Admin Panel | AIUB Hotel</title>
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta content="width=device-width, initial-scale=1" name="viewport"/>
	<meta content="" name="description"/>
	<meta content="" name="author"/>
	<meta name="csrf-token" content="{{ csrf_token() }}">

	<!-- Bootstrap 3.3.7 -->
  <link rel="stylesheet" href="{{asset('assets/stylesheets/bootstrap.min.css')}}">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="{{asset('assets/stylesheets/font-awesome.min.css')}}">
  <!-- Ionicons -->
  <link rel="stylesheet" href="{{asset('assets/stylesheets/ionicons.min.css')}}">
  <!-- Theme style -->
  <link rel="stylesheet" href="{{asset('assets/stylesheets/AdminLTE.min.css')}}">
  <!-- AdminLTE Skins. Choose a skin from the css/skins
       folder instead of downloading all of them to reduce the load. -->
  <link rel="stylesheet" href="{{asset('assets/stylesheets/_all-skins.min.css')}}">
  <!-- jQuery 3 -->
<script src="{{asset('assets/scripts/jquery.min.js')}}"></script>
<!-- Bootstrap 3.3.7 -->
<script src="{{asset('assets/scripts/bootstrap.min.js')}}"></script>
<!-- AdminLTE App -->
<script src="{{asset('assets/scripts/adminlte.min.js')}}"></script>
	<script>
		$.ajaxSetup({
			headers: {
				'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
			}
		});
	</script>
</head>
<body class="hold-transition skin-blue sidebar-mini">
<div class="wrapper">



@include ('admin.layouts.topmenu')

@include ('admin.layouts.leftmenu')

@yield('pageextra')
	<div class="content-wrapper">
@include('admin.inc.content-header')
@yield('pagebody')
	</div>
@include('admin.layouts.footer')
</div>
</body>
</html>

