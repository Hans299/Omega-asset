<?php

namespace App\Controllers;

use App\Models\UserModel;
use Config\Services;

class AuthController extends BaseController
{
    public function index()
    {
        return view('auth/login');
    }

    public function login()
    {
        $session = session();
        $model = new UserModel();
        $msisdn = $this->request->getVar('username');
        $password = $this->request->getVar('password');

        $data = $model->where('msisdn', $msisdn)->first();

        if ($data) {
            $pass = $data['password'];

            if ($pass === $password) {
                $session_data = [
                    'first_name'    => $data['first_name'],
                    'msisdn'        => $data['msisdn'],
                    'address'       => $data['address'],
                    'status'        => $data['status'],
                    'handled_by'    => $data['handled_by'],
                    'admission_by'  => $data['admission_by'],
                    'authenticated' => TRUE
                ];
                $session->set($session_data);
                return redirect()->to(base_url('/account/dashboard'));
            } else {
                $session->setFlashdata('msg', 'Wrong Password');
                return redirect()->to(base_url('/auth/login'));
            }
        } else {
            $session->setFlashdata('msg', 'Email not Found');
            return redirect()->to(base_url('/auth/login'));
        }
    }

    public function logout()
    {
        $session = session();
        $session->destroy();
        return redirect()->to(base_url('/auth/login'));
    }

    public function forgetPassword()
    {
        helper(['form']);
        return view('auth/forget');
    }

    public function forgetPasswordPost()
    {
        $request = Services::request();

        $model = new UserModel();
        $phone = $request->getPost('name');
        $data = $model->where('msisdn', $phone)->first();

        $db = db_connect();
        $result = $db->query("SELECT * FROM omega_users WHERE id = '" . $data['admission_by'] . "' OR id = '" . $data['handled_by'] . "' ");

        foreach ($result->getResult() as $row) {
            $fullname = $row->fullname;
        }

        return json_encode([
            "data" => $fullname
        ]);
    }
}
