<?php
class AjaxController extends BaseController {
	function postBooks(){
		$page = \Input::get('a') + 1;
		$skip = \Input::get('a') * 10;
		$books = Book::orderBy('created_at','desc')->skip($skip)->take(10)->get();
		$data = ['page' => $page, 'books' => $books];
		return View::make('ajax.books',$data);
	}
	function postSites(){
		$page = \Input::get('a') + 1;
		$skip = \Input::get('a') * 6;
		$books = Site::orderBy('created_at','desc')->skip($skip)->take(6)->get();
		$data = ['page' => $page, 'sites' => $books];
		return View::make('ajax.sites',$data);
	}
	function postVideos(){
		$page = \Input::get('a') + 1;
		$skip = \Input::get('a') * 4;
		$books = Video::orderBy('created_at','desc')->skip($skip)->take(4)->get();
		$data = ['page' => $page, 'videos' => $books];
		return View::make('ajax.videos',$data);
	}
	function postTools(){
		$page = \Input::get('a') + 1;
		$skip = \Input::get('a') * 4;
		$meetups = \Meetup::orderBy('id','desc')->skip($skip)->take(4)->get();
		$slides = \Slide::all();
		$data = ['page' => $page, 'meetups' => $meetups, 'slides' => $slides];
		return View::make('ajax.tools',$data);
	}
	function postStudies(){
		$page = \Input::get('a') + 1;
		$skip = \Input::get('a') * 6;
		$studies = \Studie::orderBy('created_at','desc')->skip($skip)->take(6)->get();
		$data = ['page' => $page, 'studies' => $studies];
		return View::make('ajax.studies',$data);
	}
	function anyChecksite(){
		$domain = \Input::get('a');
		if(strpos($domain, "http://") !== false || strpos($domain, "https://") !== false){
			echo true;
		}else{
			$domain = "http://".$domain;
		}
		//RUN THIS TO VALIDATE URL
		//$result = $this->curlValidation($domain);
		$review = new \Review;
		$review->domain = $domain;
		$review->email = \Input::get('b');
		$review->site_name = \Input::get('c');
		$review->user_name = \Input::get('d');
		$review->user_company = \Input::get('e');
		$review->info = \Input::get('f');
		$review->save();
		return 1;
	}
}