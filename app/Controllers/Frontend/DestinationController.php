<?php

namespace App\Controllers\Frontend;

use App\Controllers\BaseController;

class DestinationController extends BaseController
{
	public function index()
	{
		$data = [
			'page_title'	=> 'Omega'
		];
		return view('frontend/index');
	}
	public function australia() 
	{
		$data = [
			'page_title'	=> 'Omega'
		];
		return view('frontend/destination/australia', $data);
	}
	public function canada() 
	{
		$data = [
			'page_title'	=> 'Omega'
		];
		return view('frontend/destination/canada', $data);
	}
	public function china() 
	{
		$data = [
			'page_title'	=> 'Omega'
		];
		return view('frontend/destination/china', $data);
	}
	public function malaysia() 
	{
		$data = [
			'page_title'	=> 'Omega'
		];
		return view('frontend/destination/malaysia', $data);
	}
	public function newzealand() 
	{
		$data = [
			'page_title'	=> 'Omega'
		];
		return view('frontend/destination/newzealand', $data);
	}
	public function singapore() 
	{
		$data = [
			'page_title'	=> 'Omega'
		];
		return view('frontend/destination/singapore', $data);
	}
	public function unitedkingdom() 
	{
		$data = [
			'page_title'	=> 'Omega'
		];
		return view('frontend/destination/unitedkingdom', $data);
	}
	public function unitedstates() 
	{
		$data = [
			'page_title'	=> 'Omega'
		];
		return view('frontend/destination/unitedstates', $data);
	}
}
