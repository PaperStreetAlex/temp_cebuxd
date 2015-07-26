<div id="study-{{$page}}" class="clearfix">
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
@if(count($studies) == 6)
<script>
$('#btn-study').show();
</script>
@endif