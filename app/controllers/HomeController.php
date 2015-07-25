<?php
class HomeController extends BaseController {
	function getIndex(){
		$data['page'] = 'home';
		return View::make('tour.home',$data);
	}
	function getAbout(){
		$data['page'] = 'about';
		return View::make('tour.about',$data);
	}
	function getResources(){
		$data = ['page' => 'resources','navbar' => 'navbar-fixed'];
		return View::make('tour.resources',$data);
	}
	function getGallery(){
		$data['page'] = 'gallery';
		return View::make('tour.gallery',$data);
	}
	function getMeetings(){
		$data['page'] = 'meetings';
		return View::make('tour.meetings',$data);
	}
	function getReviews(){
		$data['page'] = 'reviews';
		return View::make('tour.reviews',$data);
	}
	function getCampaigns(){
		$data['page'] = 'campaigns';
		return View::make('tour.campaigns',$data);
	}
}