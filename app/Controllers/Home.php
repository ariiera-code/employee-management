<?php

namespace App\Controllers;

class Home extends BaseController
{
	public function index()
	{
		$data = [
			'title' => 'Home | Employee Management'
		];
		return view('welcome_message', $data);
	}
}
