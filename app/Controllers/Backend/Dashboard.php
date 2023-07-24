<?php

namespace App\Controllers\Backend;

use App\Controllers\BaseController;

class Dashboard extends BaseController
{
	public function index()
	{
		$data = [
			'page_title'	=> 'Omega'
		];
		return view('backend/leads/index', $data);
	}
}
