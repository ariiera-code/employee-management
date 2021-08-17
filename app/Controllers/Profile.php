<?php

namespace App\Controllers;

class Profile extends BaseController
{
  public function index()
  {
    $data = [
      'title' => 'Profile'
    ];
    return view('welcome_message', $data);
  }
}
