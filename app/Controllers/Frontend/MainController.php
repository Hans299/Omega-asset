<?php

namespace App\Controllers\Frontend;

use App\Controllers\BaseController;
use App\Models\M_Team;
use App\Models\M_Blog;
use App\Models\M_Visit;

class MainController extends BaseController
{

	public function index()
	{
		$blog		= new M_Blog();
		$data = [
			'blog' 	=> $blog->showLatestPost(),
		];
		return view('frontend/index', $data);
	}

	public function about() 
	{
		$team		= new M_Team();
		$data = [
			'page_title'	=> 'About Us | Omega Education',
			'chiefs' 		=> $team->showChief(),
		];
		return view('frontend/about', $data);
	}
}
