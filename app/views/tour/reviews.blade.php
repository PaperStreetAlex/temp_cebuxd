@extends('tour')
@section('parallax')
@stop
@section('script')
<script>
$(function(){
   $(window).scroll(function(event){
      var scroll = $(window).scrollTop();
      if(scroll > 200){
         $('.navbar').addClass('navbar-fixed');
      }else{
         $('.navbar').removeClass('navbar-fixed');
      }
   });
   $('#submit').click(function(){
   		var a=$("#site").val(),b=$("#email").val(),c=$("#sname").val(),d=$("#name").val(),e=$("#company").val();f=$("#description").val();
   		if(a.length < 5){
   			$("#error").show();
   			$("#error").html("Please input your valid domain ");
   		}else if(b.length < 3 || validateEmail(b) == false){
   			$("#error").show();
   			$("#error").html("Your valid email is required so we can send the result.");
   			document.getElementById('email').focus();
   		}else{
   			$("#error").hide();
   			$.ajax({
				type: 'POST',
		    	url: '{{url('/ajax/checksite')}}',
		    	data:{a:a,b:b,c:c,d:d,e:e,f:f},
		    	//beforeSend: function(){ },
		    	success:function(i){window.location.reload();},
        	});
   		}
   });
});
function validateEmail(email) {
	var validate = /^([\w-]+(?:\.[\w-]+)*)@((?:[\w-]+\.)*\w[\w-]{0,66})\.([a-z]{2,6}(?:\.[a-z]{2})?)$/i;
	return validate.test(email);
}
</script>
@stop
@section('body')
<div class="section-5">
	<div class="skew-5">
		<div class="row">
			<p class="caption-1">Design Reviews</p>
			<p class="paragraph-1">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor.</p>
		</div>
	</div>
</div>
<div class="section-6 dirty-white">
	<div class="form-large">
		<div class="error" id="error"></div>
		<input type="text" id="site" placeholder="*Domain : www.yousite.com" autofocus required>
		<input type="email" id="email" placeholder="*Email Address" required>
		<input type="name" id="sname" placeholder="Site Name (Optional)">
		<input type="name" id="name" placeholder="Your Name (Optional)">
		<input type="name" id="company" placeholder="Company (Optional)">
		<textarea id="description" placeholder="Other Information (Optional)"></textarea>

		<button class="btn btn-bl-fl-large" id="submit">Submit</button>
	</div>
</div>
<div class="section-7 clearfix" id="section-7">
	<div class="col-20 clearfix">
		<div class="inner text-center">
			<div class="review-circle">
				<i class="fa fa-user-secret"></i>
			</div>
			<p class="title">Usability</p>
		</div>
	</div>
	<div class="col-20">
		<div class="inner text-center">
			<div class="review-circle">
				<i class="fa fa-user-secret"></i>
			</div>
			<p class="title">Usability</p>
		</div>
	</div>
	<div class="col-20">
		<div class="inner text-center">
			<div class="review-circle">
				<i class="fa fa-user-secret"></i>
			</div>
			<p class="title">Usability</p>
		</div>
	</div>
	<div class="col-20">
		<div class="inner text-center">
			<div class="review-circle">
				<i class="fa fa-user-secret"></i>
			</div>
			<p class="title">Usability</p>
		</div>
	</div>
	<div class="col-20">
		<div class="inner text-center">
			<div class="review-circle">
				<i class="fa fa-user-secret"></i>
			</div>
			<p class="title">Usability</p>
		</div>
	</div>
</div>
@stop