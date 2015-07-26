<!DOCTYPE html>
<html>
<head>
	<title>Cebuxd {{ ($page == 'home')?'':" | ".ucfirst($page) }}</title>
	<meta name="viewport" content="initial-scale=1.0, user-scalable=no">

	<link href="{{ url('/favicon.ico') }}" rel="shortcut icon">
	<link href="{{ url('/dist/css/spretche.css') }}" rel="stylesheet">
	<link rel="stylesheet" href="//maxcdn.bootstrapcdn.com/font-awesome/4.3.0/css/font-awesome.min.css">

	<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>
	<script src="{{ url('/dist/js/smoothscroll.js')}}"></script>
	<script src="{{ url('/dist/js/bigslide.js')}}"></script>
	<script src="{{ url('/dist/js/spretche.js')}}"></script>
	<script src="{{ url('/dist/js/masonry.js')}}"></script>
	<style>
		.body-bg{
			background:url('{{url('/dist/img/mockup4.jpg')}}');
			background-size:auto 100%;
			background-position:center center;
		}
	</style>
	<script>
    	$(document).ready(function() {
        	$('.menu').bigSlide();
    	});
	</script>
	@yield('script')
</head>
@if($page == 'gallery')
<body onload="test()">
@else
<body>
@endif
@yield('parallax')
@include('tour.head')
@yield('body')
@include('tour.foot')
</div>
</body>
</html>