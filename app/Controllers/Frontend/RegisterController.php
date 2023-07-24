<?php

namespace App\Controllers\Frontend;

use App\Controllers\BaseController;
use App\Models\M_Partner;
use App\Models\M_Student;
use Config\Services;

class RegisterController extends BaseController
{
	public function index()
	{
		$data = [
			'page_title'	=> 'Omega'
		];
		return view('frontend/register/index');
	}
	public function show($link)
	{
		$partner = new M_Partner();
		$result = $partner->getPartner($link);
		if (empty($result)) {
			$result = $partner->getPartner('marketing');
		}
		$data = [
			'partner' 		=> $result,
			'page_title'	=> 'Register | Omega Education',
		];

		if ($result->category == 1) {
			return view('frontend/register/template1', $data);
		} else if ($result->category == 2) {
			return view('frontend/register/template2', $data);
		} else {
			return view('frontend/register/template3', $data);
		}
	}
	public function store()
	{
		$request 			= Services::request();
        $modelStudent 		= new M_Student();

		$phoneNumber 		= $request->getPost('phoneNumber');
        $student 			= $modelStudent->where('msisdn', $phoneNumber)->first();

		$data = [
			'msisdn' 		=> $request->getPost('phoneNumber'),
			'first_name' 	=> $request->getPost('firstName'),
			'last_name' 	=> $request->getPost('lastName'),
			'email' 		=> $request->getPost('email'),
			'birth_date' 	=> $request->getPost('birthPlace'),
			'birth_place' 	=> $request->getPost('birthDate'),
			'city' 			=> $request->getPost('city'),
			'source' 		=> $request->getPost('referrer'),
			'handled_by' 	=> 1,
			'status' 		=> 1,
			'flag' 			=> 1
		];

		if (empty($student)) {
			$modelStudent->saveStudent($data);
		}
		$modelStudent->saveRegisterStudent($data);
		$response = array('success' => true, 'msg'=> 'Success.');
        return json_encode($response);
	}
}
