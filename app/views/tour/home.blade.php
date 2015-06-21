@extends('tour')
@section('body')
<div class="gap gap-100">
	<div class="main clearfix">
		<div class="col-50 text-center">
			<div class="inner">
				<h1>CEB<strong><span>UX</span>D</strong></h1>
				<p class="small">Lorem Impsum</p>
				<p class="big">Donor Sit amit</p>
				<p class="big">sit amit</p>
			</div>
		</div>
		<div class="col-50">
			<div class="inner">
				<span style="color:#fff">Something to put here, you decide what.</span>
			</div>
		</div>
		<div class="col-100 text-center padding-1">
			<a href="" class="btn btn-wt-large">READ MORE</a>
		</div>
		<div class="col-100 social">
		<div class="sm-circle">
			<a href=""><i class="fa fa-facebook"></i></a>
		</div>
		<div class="sm-circle">
			<a href=""><i class="fa fa-google-plus"></i></a>
		</div>
		<div class="sm-circle">
			<a href=""><i class="fa fa-instagram"></i></a>
		</div>
		<div class="sm-circle">
			<a href=""><i class="fa fa-pinterest"></i></a>
		</div>
		<div class="sm-circle">
			<a href=""><i class="fa fa-drupal"></i></a>
		</div>
	</div>
</div>

</div>

<div class="bg-white">
	
	<div class="first container">
		<p class="caption-1">Lorem ipsum donor</p>
		<div class="paragraph-1">
			<p class="">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum. Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum</p>
			<a href="" class="btn btn-gr-large">LEARN MORE</a>
		</div>
	</div>
</div>
<div class="bg-black clearfix">
	<div class="col-50 img-row">
		<div class="cover">
			<p>EVENT 1</p>
			<p class="description">More Description Here</p>
		</div>
		<img src="{{ url('/dist/img/sample.jpg') }}">
	</div>
	<div class="col-50 img-row">
		<div class="cover">
			<p>EVENT 1</p>
			<p class="description">More Description Here</p>
		</div>
		<img src="{{ url('/dist/img/sample.jpg') }}">
	</div>
	<div class="col-50 img-row">
		<div class="cover">
			<p>EVENT 1</p>
			<p class="description">More Description Here</p>
		</div>
		<img src="{{ url('/dist/img/sample.jpg') }}">
	</div>
	<div class="col-50 img-row">
		<div class="cover">
			<p>EVENT 1</p>
			<p class="description">More Description Here</p>
		</div>
		<img src="{{ url('/dist/img/sample.jpg') }}">
	</div>
</div>
@stop
@section('foot')
<div class="footer clearfix">
		<div class="col-10"><a href="https://www.facebook.com/pages/Catan-Dental-Care/175040772545953" target="_blank"><i class="fa fa-facebook"></i> <small>Facebook</small></a></div>
		<div class="col-10"><a href="https://twitter.com/catandentalcare" target="_blank"><i class="fa fa-twitter"></i> <small>Twitter</small></a></div>
		<div class="col-10"><a href="https://plus.google.com/u/0/102659523903943983668/about" target="_blank"><i class="fa fa-google-plus"></i> <small>Google +</small></a></div>
		<div class="col-10"><a href="https://foursquare.com/v/catan-dental-care/4f43264fe4b08c6c28a60d0d" target="_blank"><i class="fa fa-foursquare"></i> <small>Foursquare</small></a></div>
		<div class="col-10"><a href="http://www.pinterest.com/catandentalcare/" target="_blank"><i class="fa fa-pinterest"></i> <small>Pinterest</small></a></div>
		<div class="col-10"><a href="http://catandentalcare.tumblr.com/" target="_blank"><i class="fa fa-tumblr"></i> <small>Tumblr</small></a></div>
		<div id="developer" class="col-10"><a  href="javascript:void(0)" target="_blank"><i class="fa fa-code"></i> <small>Developer</small></a></div>
</div>
<div class="foot">
	The Department of Computer Science was established in June 2010. The department used to belong to the former Department of Mathematics and Computer Science. The department is one of the ten departments under the 
</div>
<script type="text/javascript" src="{{ url('/dist/js/skrollr.js')}}"></script>
	<script type="text/javascript">
	skrollr.init({
		smoothScrolling: false,
		mobileDeceleration: 0.004
	});
	</script>
@stop