<?php

namespace App\Controllers\Frontend;

use App\Controllers\BaseController;
use App\Models\M_Team;
use Config\Services;

class TeamController extends BaseController
{
	public function index()
	{
		$team		= new M_Team();
		$data = [
			'page_title'	=> 'Team Member | Omega Education',
			'chiefs' 		=> $team->showChief(),
			'teams' 		=> $team->showTeam(),
		];
		return view('frontend/team/index', $data);
	}

	public function member($link) 
	{
		$team		= new M_Team();
		$data = [
			'link'			=> $link,
			'page_title'	=> 'Member | Omega Education',
			'member' 		=> $team->getTeam($link)
		];
		return view('frontend/team/detail', $data);
	}
}
