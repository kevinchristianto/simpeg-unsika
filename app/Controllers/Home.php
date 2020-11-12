<?php

namespace App\Controllers;

class Home extends BaseController
{
	public function index()
	{
		$data = [
			'title' => 'Dashboard',
			'dashboard' => 'active'
		];

		return view('admin/dashboard', $data);
	}
}
