<div id="book-{{$page}}" class="clearfix">
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
@if(count($books) == 10)
<script>
$('#btn-book').show();
</script>
@endif