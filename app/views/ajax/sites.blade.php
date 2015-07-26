<div id="site-{{$page}}" class="clearfix">
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
@if(count($sites) == 6)
<script>
$('#btn-site').show();
</script>
@endif