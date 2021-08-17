<?php

namespace App\Controllers;

class Profile extends BaseController
{
  public function index()
  {
    $data = [
      'title' => 'Profile'
    ];
    return view('profile/index', $data);
  }
}
