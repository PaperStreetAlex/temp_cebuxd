@extends('tour')

@section('script')
<script>
	$(function(){
		$(window).scroll(function(event){
			var scroll = $(window).scrollTop();
			if(scroll > 400){
				$('.navbar').addClass('navbar-fixed');
			}else{
				$('.navbar').removeClass('navbar-fixed');
			}
		});
	});
</script>
@stop
@section('parallax')
<div class="parallax-image-wrapper parallax-image-wrapper-100" data-anchor-target=".navbar + .gap" data-bottom-top="transform:translate3d(0px, 200%, 0px)" data-top-bottom="transform:translate3d(0px, 0%, 0px)">
	<div class="parallax-image parallax-image-100" style="background-image:url('/dist/img/mockup4.jpg')" data-anchor-target=".navbar + .gap" data-bottom-top="transform: translate3d(0px, -80%, 0px);" data-top-bottom="transform: translate3d(0px, 60%, 0px);"></div>
</div>
@stop


@section('body')
<div class="gap gap-100">
	<div class="main clearfix">
		<div class="col-50 text-center" id="first">
			<div class="inner">
				<h1>CEB<strong><span>UX</span>D</strong></h1>
				<p class="small">Lorem Impsum</p>
				<p class="big">Donor Sit amit</p>
				<p class="big">sit amit</p>
			</div>
		</div>
		<div class="col-50 text-center" id="second">
			<div class="inner">
				
			</div>
		</div>
		<div class="col-100 text-center padding-1">
			<a href="#cebuxd" class="smoothScroll btn btn-wt-large">READ MORE</a>
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

<div  id="cebuxd" class="section-1 dark-blue">
	<div class="first container">
		<p class="caption-1">About Cebuxd</p>
		<div class="paragraph-1">
			<p class="">In early 2014, Lee Wells, a UX designer from Lexmark Int’l. had the crazy idea of starting a design community here in Cebu. It all started when he was helping scout for possible UX designers to add to the Lexmark’s design team in their Cebu offices. He came upon a design community in Manila and wondered if there was a similar community in Cebu. There was none. That’s when he, together with his colleagues in Cebu, Chester and Cecille first conceived the idea of starting a UX community in Cebu.</p>
			<p>They created the Facebook page and picked the name, CebUxD, and created a simple orange and blue logo.</p>
			<p>CebUxD then was just a community of three.</p>
		</div>
		<a href="{{ url('/about')}}" class="btn btn-gr-large">MORE ABOUT US</a>
	</div>
</div>
<div class="section-2 dirty-white">
	<div class="skew">
        <div class="header-inner">
        	<div class="profile-div clearfix">
        		<?php $i = 0;?>
        		@foreach($members as $member)
        		@if($i < 4)
        		<div class="col-25">
        			<div class="profile">
        				<img src="{{$member->thumb}}" alt="{{$member->name}}">
        				
        				<p class="pr-speech">{{ $member->description }}</p>
        				<p class="pr-name">{{ $member->name }}</p>
        				<p class="pr-position">{{ $member->position }}</p>
        			</div>
        		</div>
        		@endif
        		<?php $i++; ?>
        		@endforeach
        	</div>
        	<div class="text-center" style="padding-top:60px">
        		<a href="{{ url('/about')}}" class="btn btn-bl-large">MEET OUR TEAM</a>
        	</div>

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