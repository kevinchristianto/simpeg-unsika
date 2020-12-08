<?php

namespace App\Controllers;

class Auth extends BaseController
{
	protected $session;

	public function __construct()
	{
		$this->session = \Config\Services::session();
	}

	public function index()
	{
		$redirect = $this->is_login();

		if ($redirect != FALSE) {
			return redirect()->to($redirect);
		}

		return redirect()->to(ENDPOINT_AUTH_SSO . '?app_code=' . APP_CODE);
	}

	public function handleLogin()
	{
		helper('authorization');

		//validate token with jwt decode
		if (checkToken($this, $this->request->getGet('Authorization'))) {
			$decodedToken = decodedToken($this, $this->request->getGet('Authorization'));

			//add session tambahan disini
			//bisa sesuaikan dengan role user di masing-masing aplikasi
			$session = array(
				//di bawah ini session default yg tidak boleh dihapus.
				'sess_in' => true,
				// 'profile' => (array) $decodedToken->profile,
				'account' => (array) @$decodedToken->account,
				'endpoint_logout' => @$decodedToken->endpoint_logout,
				'endpoint_profile' => @$decodedToken->endpoint_profile,
				'access_token' => $this->request->getVar('Authorization'),
				//end default token

			);
			//register session			
			$this->session->set($session);
			//redirect ke halaman dashboard
			//sesuaikan dengan role user
			$redirect = $this->is_login();
			return redirect()->to($redirect);
		} else {
			return redirect()->to(ENDPOINT_AUTH_SSO . '?app_code=' . APP_CODE);
		}
	}

	private function is_login()
	{
		if (session('sess_in')) {
			//disini buat redirect 
			//sesuai level user yg ada di role akses db masing-masing aplikasi
			return base_url('pegawai'); //ini hanya contoh : dialihkan ke halaman dashboard admin
		} else {
			return false;
		}
	}

	public function handleLogout()
	{
		$endpoint_logout = session('endpoint_logout');	//endpoint logout on sso
		$this->session->destroy();
		return redirect()->to($endpoint_logout);
	}
}
