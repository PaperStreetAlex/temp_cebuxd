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
   $('.section-3').css('cursor','s-resize');
   $('.section-2').css('cursor','n-resize');
   $('.section-3').click(function(){
      $('.section-3').css('padding-top','20px');
      $(this).find('.invi').slideDown(500);
      $('.section-2').find('.invi').slideUp(500);
      $(this).find('.semi-invi').slideDown(500);
   });
   $('.section-2').click(function(){
      $(this).find('.invi').slideDown(500);
      $('.section-3').css('padding-top','90px');
      $('.section-3').find('.invi').slideUp(500);
      $('.section-3').find('.semi-invi').slideUp(500);
   });
});
</script>
@stop
@section('body')
<div class="dirty-white clearfix">
   <div class="section-3 dark-blue">
      <div class="container">
          <p class="title custom-title">ABOUT CEBUXD</p>
         <div class="paragraph-2 semi-invi">
            <p class="">In early 2014, Lee Wells, a UX designer from Lexmark Int’l. had the crazy idea of starting a design community here in Cebu. It all started when he was helping scout for possible UX designers to add to the Lexmark’s design team in their Cebu offices. He came upon a design community in Manila and wondered if there was a similar community in Cebu. There was none. That’s when he, together with his colleagues in Cebu, Chester and Cecille first conceived the idea of starting a UX community in Cebu.</p>
            <p class="">They created the Facebook page and picked the name, CebUxD, and created a simple orange and blue logo.</p>
         </div>
         <div class="paragraph-2 invi">
            <p>CebUxD then was just a community of three.</p>
            <p>Now, CebUxD has become a community of almost 300. A community made up of students, developers, designers, artists, PMs, business owners, investors and design enthusiasts all with one common goal: to learn more about UX and put Cebu in the UX map together.</p>
            <p class="title custom-title">Mission / Vision / Goals</p>
            <p>CebUxD’s goal is to help grow and cultivate UX in Cebu. With that, we aspire to inspire students and professionals to design and develop for users and influence businesses to invest on UX. We aim to create a community in Cebu where UX practitioners and enthusiasts can freely share design ideas and experiences.</p>
         </div>
      </div>
   </div>
   <div class="section-2 dirty-white custom-s2">
      <div class="skew custom-s2-inner">
         <div class="profile-div clearfix">
            <?php $i = 0 ?>
            @foreach($members as $member)
            @if($i < 4)
            <div class="col-25">
               <div class="profile">
                  <img src="{{$member->thumb}}" alt="{{$member->name}}">
                  <p class="pr-speech">{{ $member->description}}</p>
                  <p class="pr-name">{{ $member->name }}</p>
                  <p class="pr-position">{{ $member->position }}</p>
               </div>
            </div>
            @endif
            <?php $i++; ?>
            @endforeach
         </div>
      </div>
      <div class="invi">
         <div class="profile-div clearfix">
            <?php $i = 0 ?>
            @foreach($members as $member)
            @if($i > 3)
            <div class="col-25">
               <div class="profile">
                  <img src="http://simplesnowboarding.com/site/wp-content/uploads/2012/11/Profile-Pics-Simple-Snowboarding-Canada-2013-30-Andy-Stewart.jpg">
                  <p class="pr-speech">{{ $member->description }}</p>
                  <p class="pr-name">{{ $member->name }}</p>
                  <p class="pr-position">{{ $member->position }}</p>
               </div>
            </div>
            @endif
            <?php $i++; ?>
            @endforeach
         </div>
      </div>
   </div>

@stop