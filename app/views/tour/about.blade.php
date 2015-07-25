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
         <div class="paragraph-2 semi-invi">
            <p class="">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum. Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum</p>
         </div>
         <div class="paragraph-2 invi">
            <p class="">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum. Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum</p>
         </div>
      </div>
   </div>
   <div class="section-2 dirty-white custom-s2">
      <div class="skew custom-s2-inner">
         <div class="profile-div clearfix">
            <?php $i = 0 ?>
            <?php for($i=0;$i<4;$i++){ ?>
            <div class="col-25">
               <div class="profile">
                  <img src="http://simplesnowboarding.com/site/wp-content/uploads/2012/11/Profile-Pics-Simple-Snowboarding-Canada-2013-30-Andy-Stewart.jpg">
                  <p class="pr-speech">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor.</p>
                  <p class="pr-name">John Doe</p>
               </div>
            </div>
            <?php } ?>
         </div>
      </div>
      <div class="invi">
         <div class="profile-div clearfix">
            <?php $i = 0 ?>
            <?php for($i=0;$i<8;$i++){ ?>
            <div class="col-25">
               <div class="profile">
                  <img src="http://simplesnowboarding.com/site/wp-content/uploads/2012/11/Profile-Pics-Simple-Snowboarding-Canada-2013-30-Andy-Stewart.jpg">
                  <p class="pr-speech">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor.</p>
                  <p class="pr-name">John Doe</p>
               </div>
            </div>
            <?php } ?>
         </div>
      </div>
   </div>

@stop