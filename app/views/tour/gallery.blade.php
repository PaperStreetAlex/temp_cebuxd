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
		['title' => 'array 1', 'img' => 'http://www.studiowow.nl/wp-content/uploads/wow_wallpaper_1280_1024_aardbei.png?x=1', 'grid' => 'item-1'],
		['title' => 'array 2', 'img' => 'http://cdn.shopify.com/s/files/1/0278/3039/files/ui_hero4.jpg?1348', 'grid' => 'item-2'],
		['title' => 'array 3', 'img' => 'http://marketingland.com/wp-content/ml-loads/2014/08/ux-honeycomb-morville.png', 'grid' => 'item-1'],
		['title' => 'bon iver beach boys', 'img' => 'data:image/jpeg;base64,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', 'grid' => 'item-1'],
		['title' => 'home magnetic zeros edward sharpe', 'img' => 'http://irama.org/wp/assets/uploaded/2010/09/aperture-guide-to-user-experience.png', 'grid' => 'item-1'],
		['title' => 'home magnetic zeros edward sharpe', 'img' => 'http://media.mediatemple.netdna-cdn.com/wp-content/uploads/uploader/images/wallpaper-calendar-november-10/ux_cake__69.png', 'grid' => 'item-1'],
		['title' => 'home magnetic zeros edward sharpe', 'img' => 'http://cdn.shopify.com/s/files/1/0278/3039/files/desktop_WORKSHOP.jpg?1334', 'grid' => 'item-1'],
	
	];
?>
<?php for($i=0;$i<50;$i++){ ?>
<?php $x = rand(0,6); ?>


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