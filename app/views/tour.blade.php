<!DOCTYPE html>
<html>
<head>
	<title>CEBUXD</title>
	<link href="{{ url('/dist/css/spretche.css') }}" rel="stylesheet">
	<link rel="stylesheet" href="//maxcdn.bootstrapcdn.com/font-awesome/4.3.0/css/font-awesome.min.css">

	<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>
	<script src="{{ url('/dist/js/spretche.js')}}"></script>
	<script>
		(function(){
			$(window).scroll(function(event){
				var scroll = $(window).scrollTop();
				if(scroll > 400){
					$('.navbar').addClass('navbar-fixed');
				}else{
					$('.navbar').removeClass('navbar-fixed');
				}
			});
		})();
	</script>
</head>
<body>
@extends('tour.head')
@yield('body')
@extends('tour.foot')
</body>
</html>