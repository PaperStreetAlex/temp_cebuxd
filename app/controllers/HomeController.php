<?php
class HomeController extends BaseController {
	function getIndex(){
		$data['page'] = 'home';
		return View::make('tour.home',$data);
	}
	function getAbout(){
		return 2;
	}
}