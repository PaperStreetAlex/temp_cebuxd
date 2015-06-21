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
	<style type="text/css">
	* {
		padding:0;
		margin:0;
	}

	html, body {
		height:100%;
	}

	.skrollr-desktop body {
		height:100% !important;
	}

	body {
		font-family:sans-serif;
	}

	p {
		margin:1em 0;
	}

	.parallax-image-wrapper {
		position:fixed;
		left:0;
		width:100%;
		overflow:hidden;
	}

	.parallax-image-wrapper-50 {
		height:50%;
		top:-50%;
	}

	.parallax-image-wrapper-100 {
		height:100%;
		top:-100%;
	}

	.parallax-image {
		display:none;
		position:absolute;
		bottom:0;
		left:0;
		width:100%;
		background-repeat:no-repeat;
		background-position:center;
		background-size:cover;
	}

	.parallax-image-50 {
		height:200%;
		top:-50%;
	}

	.parallax-image-100 {
		height:100%;
		top:0;
	}

	.parallax-image.skrollable-between {
		display:block;
	}

	.no-skrollr .parallax-image-wrapper {
		display:none !important;
	}

	#skrollr-body {
		height:100%;
		overflow:visible;
		position:relative;
	}

	.gap {
		background:transparent center no-repeat;
		background-size:cover;
	}

	.skrollr .gap {
		background:transparent !important;
	}

	.gap-50 {
		height:50%;
	}

	.gap-100 {
		height:578px;
	}

	.header, .content {
		background:#fff;
		padding:1em;

		-webkit-box-sizing:border-box;
		-moz-box-sizing:border-box;
		box-sizing:border-box;
	}

	.content-full {
		height:100%;
	}

	#done {
		height:100%;
	}
	</style>
</head>
<body>
<div class="parallax-image-wrapper parallax-image-wrapper-100" data-anchor-target=".navbar + .gap" data-bottom-top="transform:translate3d(0px, 200%, 0px)" data-top-bottom="transform:translate3d(0px, 0%, 0px)">
	<div class="parallax-image parallax-image-100" style="background-image:url('/dist/img/mockup4.jpg')" data-anchor-target=".navbar + .gap" data-bottom-top="transform: translate3d(0px, -80%, 0px);" data-top-bottom="transform: translate3d(0px, 60%, 0px);"></div>
</div>
<div id="skrollr-body">
<div class="navbar highlight">
	<div class="logo">
		<a href="">
			<img src="{{ url('/dist/img/logo.png') }}" alt="cebuxd">
			<span><small>CEB</small>UX<strong>D</strong></span>
		</a>
	</div>
	<ul>
		<li {{($page == 'home')?'class="active"': ""}}><a href=""><span>HOME</span></a></li><li>
		<a href=""><span>ABOUT US </span></a></li><li>
		<a href=""><span>EVENTS</span></a></li><li>
		<a href=""><span>OUR TEAM</span></a></li><li>
		<a href=""><span>BLOG</span></a></li><li>
		<a href=""><span>CONTACT US</span></a></li><li>
	</ul>
</div>

@yield('body')
@yield('foot')
</div>
</body>
</html>