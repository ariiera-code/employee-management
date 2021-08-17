<?php

namespace App\Controllers;

class Users extends BaseController
{
  public function index()
  {
    $data = [
      'title' => 'Users Data'
    ];
    return view('users/index', $data);
  }
}
