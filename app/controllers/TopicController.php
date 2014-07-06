<?php 

class TopicController extends BaseController {

	public function index(){
		$topics = 'Topic::all()';
		return View::make('site.index');
	}
	
}