<?php
Route::group(array('prefix' => 'ajax'), function(){
	Route::controller('/', 'AjaxController');
});
Route::get('seed/book',function(){
	$book = array(
		'name' => 'What You See Isn’t What Your Brain Gets',
		'description' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor.',
		'link' => 'http://google.com',
		'author' => 'Steve Jobs'
	);
	$i = 0;
	for($i=0;$i<10;$i++){
		$b = new Studie;;
		$b->name = $book['name'];
		$b->description = $book['description'];
		$b->link = $book['link'];
		$b->author = $book['author'];
		$b->save();
	}
});
Route::controller('/','HomeController');
