<div id="skrollr-body" class="wrap push">
<nav id="menu" class="panel" role="navigation">
    <ul>
		<li {{($page == 'home')?'class="active"': ""}}><a href="{{ url('') }}"><span>HOME</span></a></li><li {{($page == 'about')?'class="active"': ""}}>
		<a href="{{url('/about')}}"><span>ABOUT</span></a></li><li {{($page == 'resources')?'class="active"': ""}}>
		<a href="{{url('/resources')}}"><span>RESOURCES</span></a></li>
		@if($page == 'resources')
		<li class="resources"><a href="#books" class="smoothScroll"><i class="fa fa-chevron-right"></i> BOOKS</a></li>
		<li class="resources"><a href="#sites" class="smoothScroll"><i class="fa fa-chevron-right"></i> SITES</a></li>
		<li class="resources"><a href="#case-studies" class="smoothScroll"><i class="fa fa-chevron-right"></i> CASE STUDIES</a></li>
		<li class="resources"><a href="#design-videos" class="smoothScroll"><i class="fa fa-chevron-right"></i> DESIGN VIDEOS</a></li>
		<li class="resources"><a href="#tools" class="smoothScroll"><i class="fa fa-chevron-right"></i> TOOLS</a></li>
		<li class="resources"><a href="#seminars" class="smoothScroll"><i class="fa fa-chevron-right"></i> SEMINARS</a></li>
		<li class="resources"><a href="#postings" class="smoothScroll"><i class="fa fa-chevron-right"></i> POSTINGS</a></li>
		@endif
		<li {{($page == 'gallery')?'class="active"': ""}}>
		<a href="{{url('/gallery')}}"><span>GALLERY</span></a></li><li {{($page == 'meeting')?'class="active"': ""}}>
		<a href="{{url('/meeting')}}"><span>MONTHLY MEETING</span></a></li><li {{($page == 'reviews')?'class="active"': ""}}>
		<a href="{{url('/reviews')}}"><span>DESIGN REVIEWS</span></a></li><li {{($page == 'campaign')?'class="active"': ""}}>
		<a href="{{url('/campaign')}}"><span>CAMPAIGN</span></a></li>
	</ul>
</nav>
<div class="navbar {{ $navbar or '' }}">
	<div class="logo">
		<a href="{{url('/')}}">
			<img src="{{ url('/dist/img/logo.png') }}" alt="cebuxd">
			<span><small>CEB</small><span class="ux">UX</span><strong>D</strong></span>
		</a>
	</div>
	<a href="javascript:void(0)" class="menu"><span>MENU</span> <i class="fa fa-bars"></i></a>
	<ul>
		<li {{($page == 'home')?'class="active"': ""}}><a href="{{ url('') }}"><span>HOME</span></a></li><li {{($page == 'about')?'class="active"': ""}}>
		<a href="{{url('/about')}}"><span>ABOUT </span></a></li><li {{($page == 'resources')?'class="active"': ""}}>
		<a href="{{url('/resources')}}"><span>RESOURCES</span></a></li><li><li {{($page == 'gallery')?'class="active"': ""}}>
		<a href="{{url('/gallery')}}"><span>GALLERY</span></a></li><li {{($page == 'meeting')?'class="active"': ""}}>
		<a href="{{url('/meeting')}}"><span>MONTHLY MEETING</span></a></li><li {{($page == 'reviews')?'class="active"': ""}}>
		<a href="{{url('/reviews')}}"><span>DESIGN REVIEWS</span></a></li><li {{($page == 'campaign')?'class="active"': ""}}>
		<a href="{{url('/campaign')}}"><span>CAMPAIGN</span></a></li>
	</ul>
</div>
