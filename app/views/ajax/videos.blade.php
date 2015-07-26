<div id="video-{{$page}}" class="clearfix">
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
@if(count($videos) == 4)
<script>
$('#btn-video').show();
</script>
@endif