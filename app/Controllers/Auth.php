<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use App\Models\MAuth;
use App\Models\MUser;

class Auth extends BaseController
{
	public function __construct()
	{
		helper('form');
	}
	public function index()
	{

		$data['title'] = 'Login';

		return view('auth/login', $data);
	}

	public function cek_login()
	{
		$session = session();
		$MUser = new MUser();
		//jika valid
		$email			= $this->request->getPost('email');
		$password		= $this->request->getPost('password');
		// input last login
		// $data1 = [
		// 	'email'			=> $this->request->getPost('email'),
		// 	'updated_at' 	=> date('Y-m-d H:i:s'),
		// ];
		// $MAuth = new MAuth();
		// $query = $MAuth->lastlogin($data1);
		// if (!$query) {
		// 	return redirect()->back()->with('fail', "Something went wrong");
		// } else {
		// 	return redirect()->to('auth')->with('success', "Account created successfully");
		// }
		// cek login 
		$data = $MUser->where('email', $email)->first();
		if ($data) {
			$pass = $data['password'];
			$verify = password_verify($password, $pass);
			if ($verify) {
				# code...
				$session_data = [
					'id'	=> $data['id'],
					'name'	=> $data['name'],
					'email'	=> $data['email'],
					'logged_in'	=> TRUE
				];
				$session->set($session_data);
				return redirect()->to('/dashboard');
			} else {
				$session->setFlashdata('msg', 'Wrong Password');
				return redirect()->to('/auth');
			}
			# code...
		} else {
			$session->setFlashdata('msg', 'Akun tidak ditemukan');
			return redirect()->to('/auth');
		}
	}

	public function index_register()
	{

		$data['title'] = 'Register';

		return view('auth/register', $data);
	}

	public function register()
	{

		// validate input text
		$validationRule = [
			'email' => [
				'rules' => 'required|max_length[100]|valid_email|is_unique[user.email]'
			],
			'username' => [
				'rules' => 'required|min_length[4]|max_length[30]|is_unique[user.username]'
			],
			'password' => [
				'rules' => 'required|min_length[4]|max_length[50]'
			],
			'password_confirm' => [
				'rules' => 'matches[password]'
			]
		];

		if (!$this->validate($validationRule)) {
			$error = $this->validator->getErrors();
			$error_val = array_values($error);
			die(json_encode([
				'status' => false,
				'response' => $error_val[0]
			]));
		}

		// input data
		$data['email'] = $this->request->getPost('email');
		$data['username'] = $this->request->getPost('username');
		$data['password'] = password_hash($this->request->getPost('password'), PASSWORD_DEFAULT);

		// load model
		$userModel = new \App\Models\User();

		// insert data
		$register = $userModel->insert($data);

		// build data
		$data = [
			'id' => $register,
			'username' => $data['username'],
		];

		// set session
		session()->set('auth', $data);

		// send response
		return $this->response->setJSON([
			'status' => true,
			'response' => 'Success Register',
			'redirect' => base_url('product')
		]);
	}

	public function logout()
	{
		$session = session();
		$session->destroy();
		return redirect()->to('/auth');
	}
}
