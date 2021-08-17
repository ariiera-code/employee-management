<?php

namespace App\Controllers;

class Employees extends BaseController
{
  public function index()
  {
    $data = [
      'title' => 'Employees Data'
    ];
    return view('welcome_message', $data);
  }
}
