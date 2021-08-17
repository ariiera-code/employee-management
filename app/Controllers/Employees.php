<?php

namespace App\Controllers;

use App\Models\EmployeesModel;

class Employees extends BaseController
{
  protected $employeesModel;

  public function __construct()
  {
    $this->employeesModel = new EmployeesModel();
  }

  public function index()
  {
    $employees = $this->employeesModel->findAll();
    $data = [
      'title' => 'Employees Data',
      'employees' => $employees
    ];


    return view('employees/index', $data);
  }
}
