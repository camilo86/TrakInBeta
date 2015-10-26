<!DOCTYPE html>
<html>
	<head>
		<title>TrakIn | @yield('title')</title>
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
    	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css">
        <link href="{{ URL::asset('css/flat-ui.min.css') }}" rel="stylesheet">
        <link href="{{ URL::asset('css/custom-css.css') }}" rel="stylesheet">
    	<!-- HTML5 shim, for IE6-8 support of HTML5 elements. All other JS at the end of file. -->
    	<!--[if lt IE 9]>
      	<script src="{{ URL::asset('js/vendor/html5shiv.js') }}"></script>
      	<script src="{{ URL::asset('js/vendor/respond.min.js') }}"></script>
    	<![endif]-->

         <!-- ... -->
         <script type="text/javascript" src="{{ URL::asset('js/vendor/jquery.min.js') }}"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js"></script>
        
        <script type="text/javascript" src="{{ URL::asset('js/script.js') }}"></script>
        <script type="text/javascript" src="{{ URL::asset('js/vendor/video.js') }}"></script>
        
        <script type="text/javascript" src="{{ URL::asset('bower_components/moment/min/moment.min.js') }}"></script>
        <script type="text/javascript" src="{{ URL::asset('bower_components/eonasdan-bootstrap-datetimepicker/build/js/bootstrap-datetimepicker.min.js') }}"></script>

         <link rel="stylesheet" href="{{ URL::asset('bower_components/eonasdan-bootstrap-datetimepicker/build/css/bootstrap-datetimepicker.min.css') }}" />


	</head>
	<body>
		@yield('content')


	</body>
</html>