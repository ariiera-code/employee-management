<?php

namespace App\Controllers;

use App\Models\EmployeeModel;

class Employees extends BaseController
{
  protected $employeesModel;

  public function __construct()
  {
    $this->employeesModel = new EmployeeModel();
  }

  public function index()
  {
    $data = [
      'title' => 'Employee List',
      'employees' => $this->employeesModel->getEmployee()
    ];


    return view('employees/index', $data);
  }

  public function create()
  {
    $data = [
      'title' => 'Add Employee',
    ];
    return view('employees/create', $data);
  }

  public function show($slug)
  {
    $data = [
      'title' => 'Employees Data',
      'employee' => $this->employeesModel->getEmployee($slug)
    ];

    if (empty($data['employee'])) {
      throw new \CodeIgniter\Exceptions\PageNotFoundException('Data employee' . $slug . 'not found');
    }

    return view('employees/show', $data);
  }

  public function store()
  {
    $title      = $this->request->getPost('emp_name');
    $slug       = url_title($title, '-', true);
    $this->employeesModel->save([
      'emp_name' => $title,
      'slug' => $slug,
      'emp_email' => $this->request->getVar('emp_email'),
      'emp_salary' => $this->request->getVar('emp_salary'),
      'emp_photo' => $this->request->getVar('emp_photo')
    ]);
    $this->request->getVar();

    return redirect()->to('/employees');
  }
}
