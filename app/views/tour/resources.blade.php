@extends('tour')
@section('parallax')
@stop
@section('script')
<script>
	$(function(){
		$('#bookPage').val('1');
		$('#sitePage').val('1');
		$('#videoPage').val('1');
		$('#toolPage').val('1');
		$('#studyPage').val('1');
		$('iframe').attr('width','100%');
	});
	function showBook(id){
		alert(id);
	}
	function loadBook(){
		var url = "{{url()}}",a = parseInt($("#bookPage").val());
		$.ajax({
			type: "POST",
		    url: url+"/ajax/books",
		    data:{a:a},
		    beforeSend: function(){ $("#btn-book").before('<div id=""><i class="fa fa-spin"><i class="fa fa-circle-o-notch fa-2x"></fa></i></div>'); $("#btn-book").hide();},
		    success:function(i){$('#book-'+a).after(i),$('#bookPage').val(parseInt(a + 1)); ajaxErrorHandler();},
        	error:function(){ajaxErrorHandler();}
        });
	}
	function loadSites(){
		var url = "{{url()}}",a = parseInt($("#sitePage").val());
		$.ajax({
			type: "POST",
		    url: url+"/ajax/sites",
		    data:{a:a},
		    beforeSend:function(){$("#btn-site").before('<div id=""><i class="fa fa-spin"><i class="fa fa-circle-o-notch fa-2x"></fa></i></div>'); $("#btn-site").hide();},
		    success:function(i){$('#site-'+a).after(i),$('#sitePage').val(parseInt(a + 1)); ajaxErrorHandler();},
        	error:function(){ajaxErrorHandler();}
        });
	}
	function loadVideos(){
		var url = "{{url()}}",a = parseInt($("#videoPage").val());
		$.ajax({
			type: "POST",
		    url: url+"/ajax/videos",
		    data:{a:a},
		    beforeSend:function(){$("#btn-video").before('<div id=""><i class="fa fa-spin"><i class="fa fa-circle-o-notch fa-2x"></fa></i></div>'); $("#btn-video").hide();},
		    success:function(i){$('#video-'+a).after(i),$('#videoPage').val(parseInt(a + 1));$('iframe').attr('width','100%'); ajaxErrorHandler();},
        	error:function(){ajaxErrorHandler();}
        });
	}
	function loadTools(){
		var url = "{{url()}}",a = parseInt($("#toolPage").val());
		$.ajax({
			type: "POST",
		    url: url+"/ajax/tools",
		    data:{a:a},
		    beforeSend:function(){$("#btn-tool").before('<div id=""><i class="fa fa-spin"><i class="fa fa-circle-o-notch fa-2x"></fa></i></div>');$("#btn-tool").hide();},
		    success:function(i){$('#tool-'+a).after(i),$('#toolPage').val(parseInt(a + 1)); ajaxErrorHandler();},
		    error:function(){ajaxErrorHandler();}
        });
	}
	function loadStudies(){
		var url = "{{url()}}",a = parseInt($("#studyPage").val());
		$.ajax({
			type: "POST",
		    url: url+"/ajax/studies",
		    data:{a:a},
		    beforeSend:function(){$("#btn-study").before('<div id=""><i class="fa fa-spin"><i class="fa fa-circle-o-notch fa-2x"></fa></i></div>');$("#btn-study").hide();},
		    success:function(i){$('#study-'+a).after(i),$('#studyPage').val(parseInt(a + 1)); ajaxErrorHandler();},
		    error:function(){ajaxErrorHandler();}
        });
	}
</script>
@stop
@section('body')
<div class="sub-nav">
	<ul>
		<li><a href="#books" class="smoothScroll">UX BOOKS</a></li>
		<li><a href="#sites" class="smoothScroll">UX SITES</a></li>
		<li><a href="#case-studies" class="smoothScroll">UX CASE STUDIES</a></li>
		<li><a href="#design-videos" class="smoothScroll">UX DESIGN VIDEOS</a></li>
		<li><a href="#tools" class="smoothScroll">UX TOOLS</a></li>
		<li><a href="#seminars" class="smoothScroll">UX SEMINARS</a></li>
	</ul>
</div>
<?php $info = "Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum. Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum"; ?>
<div class="section-4 dark-blue clearfix" id="books">
	<div class="row clearfix">
		<p class="caption-3">UX BOOKS</p> 
		<input type="hidden" id="bookPage" value="1">
		<p class="info hidden-on-mobile">{{ $info }} </p>
		<div id="book-1" class="clearfix">
		@foreach($books as $book)
		<div class="col-20">
			<div class="inner">
				<div class="book clearfix">
					<div class="col-100">
						<div class="inner">
							<a href="javascript:void(0)" onclick="showBook({{$book->id}})"><img src="{{ $book->thumb }}" alt="{{$book->name}}"></a>
						</div>
					</div>
				</div>
				
				<div class="book-description">
					<p class="title"><a href="javascript:void(0)">{{ $book->name }}</a></p>
					<p class="info" >{{ (strlen($book->description) > 50) ? substr($book->description, 0, 50) . '...' : $book->description; }}</p>
				</div>
			</div>
		</div>
		@endforeach
		</div>
	</div>
	@if(count($books) == 10)
		<div class="text-center" style="padding:30px 0">
			<a href="javascript:void(0)" id="btn-book" class="btn btn-wt-normal" onclick="loadBook()">LOAD MORE</a>
		</div>
	@endif
</div>
<div class="section-4 dirty-white clearfix" id="sites">
	<div class="row clearfix">
		<p class="caption-4">UX SITES</p> 
		<p class="info custom-info hidden-on-mobile">{{ $info }} </p>
		<input type="hidden" id="sitePage" value="1">
		<div class="clearfix" id="site-1">
		@foreach($sites as $site)
		<div class="col-50">
			<div class="inner">
				<div class="site clearfix">
					<a href="{{$site->link}}" target="_blank">
						<div class="col-100">
							<img src="{{ $site->thumb }}" style="width:100%">
						</div>
						<div class="site-hover">
							<div class="site-link">
								<i class="fa fa-3x fa-chain"></i>
							</div>
						</div>
					</a>
				</div>
				<p class="title"><a href="{{$site->link}}" target="_blank">{{$site->name}}</a></p>
				<p class="info custom-info">{{ (strlen($site->description) > 100) ? substr($site->description, 0, 100) . '...' : $site->description; }}</p>
			</div>
		</div>
		@endforeach
		</div>
	</div>
	@if(count($sites) == 6)
	<div class="text-center" style="padding:30px 0">
		<a href="javascript:void(0)" onclick="loadSites()" id="btn-site" class="btn btn-bl-normal">LOAD MORE</a>
	</div>
	@endif
</div>
<div class="section-4 bg-white clearfix" id="case-studies">
	<div class="row clearfix">
		<p class="caption-4">UX CASE STUDIES</p> 
		<p class="info custom-info hidden-on-mobile">{{ $info }} </p>
		<input type="text" id="studyPage" value="1">
		<div id="study-1" class="clearfix">
		@foreach($studies as $study)
		<div class="col-50">
			<div class="inner">
				<div class="case-studies">
					<div class="inner">
						<p class="title caption-5"><a href="{{ $study->link }}" target="_blank">{{ $study->name}}</a></p>
						<p class="info">{{ (strlen($study->description) > 600) ? substr($study->description, 0, 600) . '...' : $study->description; }}</p>
						<p class="author"><div class="author-info"><strong>Author :</strong> {{$study->author}}</div></p>
					</div>
				</div>
			</div>
		</div>
		@endforeach
		</div>
	</div>
	@if(count($studies) == 6)
	<div class="text-center" style="padding:30px 0">
		<a href="javascript:void(0)" class="btn btn-bl-normal" onclick="loadStudies()" id="btn-study">LOAD MORE</a>
	</div>
	@endif
</div>
<div class="section-4 dark-blue clearfix" id="design-videos">
	<div class="row clearfix">
		<p class="caption-3">UX DESIGN VIDEOS</p> 
		<p class="info hidden-on-mobile">{{ $info }} </p>
		<input type="hidden" id="videoPage" value="1">
		<div class="clearfix" id="video-1">
		@foreach($videos as $video)
		<div class="col-50">
			<div class="inner">
				<div class="design-videos clearfix">
					<div class="col-100">
						{{$video->link}}
					</div>
				</div>
				<p class="title"><a href="javascript:void(0)">{{$video->name}}</a></p>
				<p class="info">{{ (strlen($video->description) > 600) ? substr($video->description, 0, 600) . '...' : $video->description; }}</p>
			</div>
		</div>
		@endforeach
		</div>
	</div>
	@if(count($videos) == 4)
	<div class="text-center" style="padding:30px 0">
		<a href="javascript:void(0)" onclick="loadVideos()" id="btn-video" class="btn btn-wt-normal">LOAD MORE</a>
	</div>
	@endif
</div>
<div class="section-4 bg-black clearfix" id="tools">
	<div class="row clearfix">
		<p class="caption-3">UX TOOLS</p> 
		<p class="info hidden-on-mobile">{{ $info }} </p>
		<input type="hidden" id="toolPage" value="1">
		<div class="clearfix" id="tool-1">
		@foreach($meetups as $meetup)
			<div class="col-50 tools">
				<div class="inner">
					<p class="title"><a href="javascript:void(0)">CEBUXD MEET UP {{$meetup->id}}</a> <span class="date-side">{{ date('F d, Y (h:i a)',strtotime($meetup->date)) }}</span></p>
					<p class="info">{{ (strlen($meetup->description) > 500) ? substr($meetup->description, 0, 500) . '...' : $meetup->description; }}</p>
					<div class="tool-links">
						@foreach($slides as $slide)
							@if($slide->meetup_id == $meetup->id)
								<p><a href="{{url('/dist/docs/'.$slide->link)}}"><i class="fa fa-file-o" style="font-size:16px"></i> {{$slide->name}}</a></p>
							@endif
						@endforeach
					</div>
				</div>
			</div>
		@endforeach
		</div>
	</div>
	@if(count($meetups) == 4)
	<div class="text-center" style="padding:30px 0">
		<a href="javascript:void(0)" id="btn-tool" onclick="loadTools()" class="btn btn-wt-normal">LOAD MORE</a>
	</div>
	@endif
</div>
<div class="section-4 dirty-white clearfix" id="seminars">
	<div class="row clearfix">
		<p class="caption-4">UX SEMINARS</p> 
		<p class="info custom-info hidden-on-mobile">{{ $info }} </p>
		
	</div>
	<div class="text-center" style="padding:30px 0">
		<a href="javascript:void(0)" class="btn btn-bl-normal">LOAD MORE</a>
	</div>
</div>

@stop