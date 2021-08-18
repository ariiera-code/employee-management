<?php

namespace App\Models;

use CodeIgniter\Model;

class EmployeeModel extends Model
{
  protected $table      = 'employees';
  protected $useTimestamps = true;
  protected $allowedFields = ['emp_name', 'emp_email', 'emp_salary', 'emp_photo', 'slug'];

  public function getEmployee($slug = false)
  {
    if ($slug == false) {
      return $this->findAll();
    }

    return $this->where(['slug' => $slug])->first();
  }
}
