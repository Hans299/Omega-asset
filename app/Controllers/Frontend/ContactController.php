<?php

namespace App\Controllers\Frontend;

use App\Controllers\BaseController;

class ContactController extends BaseController
{
	public function index() {
		$data = [
			'page_title'	=> 'Omega'
		];
		return view('frontend/contact', $data);
	}

	public function sendmail()
	{
		helper(['form', 'url']);
         
		$email 		= \Config\Services::email();
		$post 		= $this->request->getVar();

		$table = 
		'<h1>Omega Edu Contact Form Approach</h1>
		<table border="0">
			<tr>
				<th align="left">Full Name</th>
				<th>:</th>
				<th align="left">' . $post['firstname'] . ' ' . $post['lastname'] . '</th>
			</tr>
			<tr>
				<th align="left">Email</th>
				<th>:</th>
				<th align="left">' . $post['email'] . '</th>
			</tr>
			<tr>
				<th align="left">Phone Number</th>
				<th>:</th>
				<th align="left">' . $post['phoneNumber'] . '</th>
			</tr>
			<tr>
				<th align="left">Current City</th>
				<th>:</th>
				<th align="left">' . $post['address'] . '</th>
			</tr>
			<tr>
				<th align="left">Destination Country</th>
				<th>:</th>
				<th align="left">' . $post['destinationCountry'] . '</th>
			</tr>
			<tr>
				<th align="left">Period Intake</th>
				<th>:</th>
				<th align="left">' . $post['periodIntake'] . '</th>
			</tr>
			<tr>
				<th align="left">Message</th>
				<th>:</th>
				<th align="left">' . $post['content'] . '</th>
			</tr>
		</table>';
		header("Content-type: application/msword");

		$email->setTo('anharpanduwinata@gmail.com');
		$email->setFrom('noreply@anharpanduwinata.com');
		$email->setSubject('Form Contact Approach');
		$email->setMessage('Berikut Data Contact Form Approach');
		$email->attach($table, 'application/msword', "Doc File " . date("m-d H-i-s") . ".doc", false);
		if ($email->send()) {
			$result = [
				'success' 	=> true,
				'message' 	=> 'Email successfully sent'
			];
		} else {
			$result = [
				'error' 	=> true,
				'message' 	=> $email->printDebugger(['headers'])
			];
		}
		return json_encode($result);
	}
}
