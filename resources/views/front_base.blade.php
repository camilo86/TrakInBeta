<!DOCTYPE html>
<html>
	<head>
		<title>TrakIn | @yield('title')</title>
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
    	<link href="{{ URL::asset('css/vendor/bootstrap.min.css') }}" rel="stylesheet">
    	<link href="{{ URL::asset('css/flat-ui.min.css') }}" rel="stylesheet">
    	<link href="{{ URL::asset('css/custom-css.css') }}" rel="stylesheet">
    	<!-- HTML5 shim, for IE6-8 support of HTML5 elements. All other JS at the end of file. -->
    	<!--[if lt IE 9]>
      	<script src="{{ URL::asset('js/vendor/html5shiv.js') }}"></script>
      	<script src="{{ URL::asset('js/vendor/respond.min.js') }}"></script>
    	<![endif]-->	

    	<style>
    		body {
    			background-color: #1abc9c;
    		}
    		html, body, .container {
    			height: 100%;
			}
			.container {
    			display: table;
    			vertical-align: middle;
			}
			.vertical-center-row {
    			display: table-cell;
    			vertical-align: middle;
    			width: 50%;
			}

			.title {
				font-size: 7em;
				color: white;
			}
    	</style>

	</head>
	<body>
		@yield('content')
		<script src="{{ URL::asset('js/vendor/jquery.min.js') }}"></script>
    	<script src="{{ URL::asset('js/vendor/video.js') }}"></script>
    	<script src="{{ URL::asset('js/flat-ui.min.js') }}"></script>
	</body>
</html>