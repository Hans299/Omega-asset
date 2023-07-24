<?php

namespace App\Controllers\Frontend;

use App\Controllers\BaseController;
use App\Models\M_Event;
use App\Models\M_Registrar;
use Config\Services;

class EventController extends BaseController
{
	public function index()
	{
		$event = new M_Event();
		$result = $event->findAll();

		$data = [
			'events' 		=> $result,
			'page_title'	=> 'Event | Omega Education'
		];
		return view('frontend/register/event/index', $data);
	}
	public function show($link)
	{
		$event = new M_Event();
		$result = $event->where('url_link', $link)->first();
		if (empty($result)) {
			$result = $event->where('url_link', 'marketing')->first();
		}
		$data = [
			'event' 		=> $result,
			'page_title'	=> 'Event | Omega Education',
		];

		return view('frontend/register/event/details', $data);
	}
	public function store()
	{
		$request 		= Services::request();
        $modelRegistrar = new M_Registrar();

		$phoneNumber 	= $request->getPost('phoneNumber');
        $student 		= $modelRegistrar->where('msisdn', $phoneNumber)->first();

		$data = [
			'student_name' 		=> $request->getPost('studentName'),
			'msisdn' 			=> $request->getPost('phoneNumber'),
			'email' 			=> $request->getPost('email'),
			'birth_date' 		=> $request->getPost('birthDate'),
			'address' 			=> $request->getPost('address'),
			'current_education' => $request->getPost('currentEducation'),
			'current_institute' => $request->getPost('currentInstitute'),
			'future_education' 	=> $request->getPost('futureEducation'),
			'future_major' 		=> $request->getPost('futureMajor'),
			'future_country' 	=> $request->getPost('studyDestination'),
			'planning_year' 	=> $request->getPost('periodIntake'),
			'events_id' 		=> $request->getPost('id_event'),
			'status' 			=> 1
		];

		if (empty($student)) {
			$modelRegistrar->saveRegistrar($data);
			$response = array('success' => true, 'msg'=> 'Success.');
		} else {
			$modelRegistrar->saveRegisterStudent($data);
			$response = array('info' => true, 'msg'=> 'Looks like you have registered before.');
		}
        return json_encode($response);
	}
}
