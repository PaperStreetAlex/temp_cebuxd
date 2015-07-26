<div id="tool-{{$page}}" class="clearfix">
@foreach($meetups as $meetup)
	<div class="col-50 tools">
		<div class="inner">
			<p class="title"><a href="javascript:void(0)">CEBUXD MEET UP {{$meetup->id}}</a></p>
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
@if(count($meetups) == 4)
<script>
$('#btn-tool').show();
</script>
@endif
@if($meetup == NULL)
<script>
$('#tool-load').html('no result');
</script>
@endif