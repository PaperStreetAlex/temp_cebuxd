@extends('tour')
@section('parallax')
@stop
@section('script')
<script>
	
</script>
@stop
@section('body')
<div class="sub-nav">
	<ul>
		<li><a href="#books" class="smoothScroll">BOOKS</a></li>
		<li><a href="#sites" class="smoothScroll">SITES</a></li>
		<li><a href="#case-studies" class="smoothScroll">CASE STUDIES</a></li>
		<li><a href="#design-videos" class="smoothScroll">DESIGN VIDEOS</a></li>
		<li><a href="#tools" class="smoothScroll">TOOLS</a></li>
		<li><a href="#seminars" class="smoothScroll">SEMINARS</a></li>
		<li><a href="#postings" class="smoothScroll">POSTINGS</a></li>
	</ul>
</div>
<?php $info = "Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum. Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum"; ?>
<div class="section-4 dark-blue clearfix" id="books">
	<div class="row clearfix">
		<p class="caption-3">UX BOOKS</p> 
		<p class="info hidden-on-mobile">{{ $info }} </p>
		<?php $i = 0;?>
		<?php for($i=0;$i<10;$i++){ ?>
		<div class="col-20">
			<div class="inner">
				<div class="book clearfix">
					<div class="col-100">
						<div class="inner">
							<a href="javascript:void(0)" onclick="showBook(id)"><img src="http://www.gstatic.com/tv/thumb/movieposters/25574/p25574_p_v7_ae.jpg" style="width:100%"></a>
						</div>
					</div>
				</div>
				<div class="book-description">
					<p class="title"><a href="javascript:void(0)">TITLE OF THE BOOK LOREM IPSUM</a></p>
					<p class="info" >{{ (strlen($info) > 20) ? substr($info, 0, 50) . '...' : $info; }}</p>
				</div>
			</div>
		</div>
		<?php } ?>
	</div>
	<div class="text-center" style="padding:30px 0">
		<a href="javascript:void(0)" class="btn btn-wt-normal">LOAD MORE</a>
	</div>
</div>
<div class="section-4 dirty-white clearfix" id="sites">
	<div class="row clearfix">
		<p class="caption-4">UX SITES</p> 
		<p class="info custom-info hidden-on-mobile">{{ $info }} </p>
		<?php $i = 0;?>
		<?php for($i=0;$i<4;$i++){ ?>
		<div class="col-50">
			<div class="inner">
				<div class="site clearfix">
					<a href="javascript:void(0)" onclick="showBook(id)">
						<div class="col-100">
							<img src="{{ url('/dist/img/site.png') }}" style="width:100%">
						</div>
						<div class="site-hover">
							<div class="site-link">
								<i class="fa fa-3x fa-chain"></i>
							</div>
						</div>
					</a>
				</div>
				<p class="title"><a href="javascript:void(0)">TITLE OF THE BOOK</a></p>
				<p class="info custom-info">{{ (strlen($info) > 20) ? substr($info, 0, 100) . '...' : $info; }}</p>
			</div>
		</div>
		<?php } ?>
	</div>
	<div class="text-center" style="padding:30px 0">
		<a href="javascript:void(0)" class="btn btn-bl-normal">LOAD MORE</a>
	</div>
</div>
<div class="section-4 bg-white clearfix" id="case-studies">
	<div class="row clearfix">
		<p class="caption-4">CASE STUDIES</p> 
		<p class="info custom-info hidden-on-mobile">{{ $info }} </p>
		<?php $i = 0;?>
		<?php for($i=0;$i<4;$i++){ ?>
		<div class="col-50">
			<div class="inner">
				<div class="case-studies">
					<div class="inner">
						<p class="title caption-5"><a href="javascript:void(0)">TITLE OF THE BOOK - CASE STUDY ABOUT UX DESIGN </a></p>
						<p class="info custom-info">{{ (strlen($info) > 600) ? substr($info, 0, 600) . '...' : $info; }}</p>
						<p class="author">Author : John Doe</p>
					</div>
				</div>
			</div>
		</div>
		<?php } ?>
	</div>
	<div class="text-center" style="padding:30px 0">
		<a href="javascript:void(0)" class="btn btn-bl-normal">LOAD MORE</a>
	</div>
</div>
<div class="section-4 dark-blue clearfix" id="design-videos">
	<div class="row clearfix">
		<p class="caption-3">DESIGN VIDEOS</p> 
		<p class="info hidden-on-mobile">{{ $info }} </p>
		<?php $i = 0;?>
		<?php for($i=0;$i<4;$i++){ ?>
		<div class="col-50">
			<div class="inner">
				<div class="design-videos clearfix">
					<div class="col-100">
						<iframe class="design-videos" width="100%" height="315" src="https://www.youtube.com/embed/5VeNBQmb8bk" frameborder="0" allowfullscreen></iframe>
					</div>
				</div>
				<p class="title"><a href="javascript:void(0)">TITLE OF THE BOOK</a></p>
				<p class="info">{{ (strlen($info) > 600) ? substr($info, 0, 600) . '...' : $info; }}</p>
			</div>
		</div>
		<?php } ?>
	</div>
	<div class="text-center" style="padding:30px 0">
		<a href="javascript:void(0)" class="btn btn-wt-normal">LOAD MORE</a>
	</div>
</div>
<div class="section-4 bg-black clearfix" id="tools">
	<div class="row clearfix">
		<p class="caption-3">UX TOOLS</p> 
		<p class="info hidden-on-mobile">{{ $info }} </p>
		<?php $i = 0;?>
		<?php for($i=0;$i<4;$i++){ ?>
		<div class="col-50">
			<div class="inner">
				<div class="site clearfix">
					<a href="javascript:void(0)" onclick="showBook(id)">
						<div class="col-100">
							<img src="{{ url('/dist/img/site.png') }}" style="width:100%">
						</div>
						<div class="site-hover">
							<div class="site-link">
								<i class="fa fa-3x fa-chain"></i>
							</div>
						</div>
					</a>
				</div>
				<p class="title"><a href="javascript:void(0)">TITLE OF THE BOOK</a></p>
				<p class="info">{{ (strlen($info) > 100) ? substr($info, 0, 100) . '...' : $info; }}</p>
			</div>
		</div>
		<?php } ?>
	</div>
	<div class="text-center" style="padding:30px 0">
		<a href="javascript:void(0)" class="btn btn-bl-normal">LOAD MORE</a>
	</div>
</div>
<div class="section-4 dirty-white clearfix" id="seminars">
	<div class="row clearfix">
		<p class="caption-4">UX SEMINARS</p> 
		<p class="info custom-info hidden-on-mobile">{{ $info }} </p>
		<?php $i = 0;?>
		<?php for($i=0;$i<4;$i++){ ?>
		<div class="col-50">
			<div class="inner">
				<div class=" clearfix">
					<a href="javascript:void(0)" onclick="showBook(id)">
						<div class="col-100">
							<img src="{{ url('/dist/img/sample.jpg') }}" style="width:100%">
						</div>
					</a>
				</div>
				<p class="title"><a href="javascript:void(0)">EVENT NAME</a></p>
				<p class="title">WHERE : PLUTO</p>
				<p class="title">WHEN : DECEMBER 30, 2015 (7:30 AM - 1:30 PM) </p>
				<p class="info custom-info">{{ (strlen($info) > 20) ? substr($info, 0, 100) . '...' : $info; }}</p>
			</div>
		</div>
		<?php } ?>
	</div>
	<div class="text-center" style="padding:30px 0">
		<a href="javascript:void(0)" class="btn btn-bl-normal">LOAD MORE</a>
	</div>
</div>
<div class="section-4 bg-white clearfix" id="postings">
	<div class="row clearfix">
		<p class="caption-4">UX POSTINGS</p> 
		<p class="info custom-info hidden-on-mobile">{{ $info }} </p>
		<?php $i = 0;?>
		<?php for($i=0;$i<4;$i++){ ?>
		<div class="col-50">
			<div class="inner">
				<div class="site clearfix">
					<a href="javascript:void(0)" onclick="showBook(id)">
						<div class="col-100">
							<img src="{{ url('/dist/img/site.png') }}" style="width:100%">
						</div>
						<div class="site-hover">
							<div class="site-link">
								<i class="fa fa-3x fa-chain"></i>
							</div>
						</div>
					</a>
				</div>
				<p class="title"><a href="javascript:void(0)">TITLE OF THE BOOK</a></p>
				<p class="info custom-info">{{ (strlen($info) > 20) ? substr($info, 0, 100) . '...' : $info; }}</p>
			</div>
		</div>
		<?php } ?>
	</div>
	<div class="text-center" style="padding:30px 0">
		<a href="javascript:void(0)" class="btn btn-bl-normal">LOAD MORE</a>
	</div>
</div>
@stop