<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1">
<title>SAMI</title>

	<!-- Fonts -->
   <link href='//fonts.googleapis.com/css?family=Roboto:400,300' rel='stylesheet' type='text/css'>
   <link rel="shortcut icon" href="favicon.ico" />

   <!-- THEMA ADMIN 
		========================================= -->

	<!-- Bootstrap Core CSS -->
    <link href="{{ asset('/tema-admin/bower_components/bootstrap/dist/css/bootstrap.min.css') }}" rel="stylesheet">

     <!-- MetisMenu CSS -->
    <link href="{{ asset('/tema-admin/bower_components/metisMenu/dist/metisMenu.min.css') }}" rel="stylesheet">

    <!-- Timeline CSS -->
    <link href="{{ asset('/tema-admin/dist/css/timeline.css') }}" rel="stylesheet">

    <!-- Custom CSS -->
    <link href="{{ asset('/tema-admin/dist/css/sb-admin-2.css') }}" rel="stylesheet">

    <!-- Morris Charts CSS -->
    <link href="{{ asset('/tema-admin/bower_components/morrisjs/morris.css') }}" rel="stylesheet">

    <!-- Custom Fonts -->
    <link href="{{ asset('/tema-admin/bower_components/font-awesome/css/font-awesome.min.css') }}" rel="stylesheet" type="text/css">

    <link rel="stylesheet" type="text/css" href="{{ asset('/css/style.css') }}">

</head>

<body>
	<div id="wrapper">
		@yield('content')
	</div>

   	<!-- jQuery -->
    <script src="{{ asset('/tema-admin/bower_components/jquery/dist/jquery.min.js') }}"></script>

    <!-- Bootstrap Core JavaScript -->
    <script src="{{ asset('/tema-admin/bower_components/bootstrap/dist/js/bootstrap.min.js') }}"></script>

    <!-- Metis Menu Plugin JavaScript -->
    <script src="{{ asset('/tema-admin/bower_components/metisMenu/dist/metisMenu.min.js') }}"></script>

    <!-- Morris Charts JavaScript -->
    <script src="{{ asset('/tema-admin/bower_components/raphael/raphael-min.js') }}"></script>
    <script src="{{ asset('/tema-admin/bower_components/morrisjs/morris.min.js') }}"></script>
    <script src="{{ asset('/tema-admin/js/morris-data.js') }}"></script>

    <!-- Custom Theme JavaScript -->
    <script src="{{ asset('/tema-admin/dist/js/sb-admin-2.js') }}"></script>

</body>
</html>