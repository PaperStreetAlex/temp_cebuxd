@extends('tour')
@section('parallax')
@stop
@section('script')
<script>
function test(){
	$('.masonry').masonry({
  // options
  itemSelector: '.item',
  columnWidth:0
});
}
</script>
<style>
.masonry{
	padding-top:63px;
	background:#31353B
}
.item{
	background:#000;
	cursor:pointer;
	position:relative;
}
.item .item-description{
	opacity:0;
	position:absolute;
	bottom:0;
	left:0;
	width:100%;
	text-align:center;
	background:rgba(0,0,0,0.7);
	white-space:nowrap;
	overflow:hidden;
	text-overflow:ellipsis;
}
.item .title{
	color:#fff;
}
.item:hover .item-description{
	opacity:1;
}
.img-container img{
	width:100%;
	display:block;
	opacity:0.7;
	-webkit-filter: grayscale(100%);
	filter: grayscale(100%);
}
.item:hover img{
	opacity:1;
	-webkit-filter: grayscale(0%);
	filter: grayscale(0%);
}
</style>
@stop
@section('body')
<div class="masonry clearfix">
<?php $i = 0;?>
<?php
	$arr = [
		['title' => 'array 1', 'img' => 'https://fbcdn-sphotos-h-a.akamaihd.net/hphotos-ak-xpf1/v/t1.0-9/10923562_10205967358525607_1682157634371538567_n.jpg?oh=c0b5b87f7f530075e459790725d53e2e&oe=5644DB41&__gda__=1447804990_1c0714862edca1256fe687182eb2a3dc', 'grid' => 'item-1'],
		['title' => 'array 2', 'img' => 'https://fbcdn-sphotos-d-a.akamaihd.net/hphotos-ak-xpf1/t31.0-8/s720x720/10557104_705048769562924_4934918700589373577_o.jpg', 'grid' => 'item-2'],
		['title' => 'array 3', 'img' => 'https://fbcdn-sphotos-b-a.akamaihd.net/hphotos-ak-xtp1/v/t1.0-9/s720x720/1922439_844430412241197_597615490_n.jpg?oh=2f4d32ef09e71ec76b8a44f2f2a0dae3&oe=563F57EE&__gda__=1444247397_e0ccccf046b3573ba3b687ed9b29d2a7', 'grid' => 'item-1'],
		['title' => 'bon iver beach boys', 'img' => 'http://localhost:8000/dist/img/sample.jpg', 'grid' => 'item-1'],
		['title' => 'home magnetic zeros edward sharpe', 'img' => 'https://fbcdn-sphotos-h-a.akamaihd.net/hphotos-ak-xpa1/v/t1.0-9/1528610_10202016785492723_1614612752_n.jpg?oh=e38433cbfae93f5cbf2ada6a8b2b94f9&oe=565AAA32&__gda__=1448440301_48a56c1d8ccd9d4b6ac81126a321ebdc', 'grid' => 'item-1'],
	];
?>
<?php for($i=0;$i<30;$i++){ ?>
<?php $x = rand(0,4); ?>


<div class="item col-30">
	<div class="img-container" >
		<img src="{{ $arr[$x]['img'] }}">
	</div>
	<div class="item-description">
		<p class="title">{{$arr[$x]['title']}}
	</div>
</div>



<?php } ?>
</div>

@stop