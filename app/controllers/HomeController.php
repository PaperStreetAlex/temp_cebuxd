<?php
class HomeController extends BaseController {
	function getIndex(){
		$data['members'] = Member::all();
		$data['page'] = 'home';
		return View::make('tour.home',$data);
	}
	function getAbout(){
		$data['members'] = Member::all();
		$data['page'] = 'about';
		return View::make('tour.about',$data);
	}
	function getResources(){
		$books = Book::orderBy('created_at','desc')->take(10)->get();
		$sites = Site::orderBy('created_at','desc')->take(6)->get();
		$videos = Video::orderBy('created_at','desc')->take(4)->get();
		$meetups =  Meetup::orderBy('id','desc')->take(4)->get();
		$slides = Slide::all();
		$studies = Studie::orderBy('created_at','desc')->take(6)->get();
		$data = ['page' => 'resources','navbar' => 'navbar-fixed', 'books' => $books,'sites' => $sites,'videos' => $videos,'meetups' => $meetups, 'slides' => $slides,'studies'=>$studies];
		return View::make('tour.resources',$data);
	}
	function getGallery(){
		$data = ['page' => 'gallery','navbar' => 'navbar-fixed'];
		return View::make('tour.gallery',$data);
	}
	function getMeeting(){
		$data['page'] = 'meeting';
		return View::make('tour.meetings',$data);
	}
	function getReviews(){
		$data['page'] = 'reviews';
		return View::make('tour.reviews',$data);
	}
	function getCampaign(){
		$data['page'] = 'campaign';
		return View::make('tour.campaign',$data);
	}
}