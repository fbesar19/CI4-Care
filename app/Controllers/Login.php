<?php

namespace App\Controllers;

use App\Models\UserModel;

class Login extends BaseController
{
	protected $userModel;

	public function __construct()
	{
		helper('form');
		$this->userModel = new UserModel();
	}

	public function index()
	{
		return view('login');
	}

	public function cek_login()
	{
		$username = $this->request->getVar('username');
		$password = $this->request->getVar('password');

		$cek = $this->userModel->cek_login($username, $password);

		if (isset($cek['username']) && isset($cek['password'])) {
			session()->set('nama', $cek['username']);
			session()->set('level', 'admin');
			return redirect()->to(base_url('admin'));
		} else {
			session()->setFlashdata('warning', 'Username atau password salah');
			return redirect()->to(base_url('login'));
		}
	}

	public function logout()
	{
		session()->destroy();
		return redirect()->to(base_url());
	}
}
