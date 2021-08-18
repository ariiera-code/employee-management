<?php

namespace App\Models;

use CodeIgniter\Model;

class JobModel extends Model
{
  protected $table      = 'jobs';
  protected $useTimestamps = true;

  public function getEmployee($slug = false)
  {
    if ($slug == false) {
      return $this->findAll();
    }

    return $this->where(['slug' => $slug])->first();
  }
}
