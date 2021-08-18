<?= $this->extend('layout/template'); ?>
<?= $this->section('content'); ?>
<div class="container" style="margin-top: 8rem; padding: 0 12rem;">
  <form action="/employees/store" method="post">
  <?= csrf_field(); ?>
    <div class="form-group">
      <label for="fullname">Fullname</label>
      <input type="text" class="form-control" id="fullname" placeholder="John Stones" name="emp_name" autofocus required>
    </div>
    <div class="form-group">
      <label for="email">Email</label>
      <input type="email" class="form-control" id="email" placeholder="example@mail.com" name="emp_email">
    </div>
    <!-- <div class="mb-3">
      <div class="input-group is-invalid">
        <div class="input-group-prepend">
          <label class="input-group-text" for="validatedInputGroupSelect">Job</label>
        </div>
        <select class="custom-select" id="validatedInputGroupSelect" name="job_id">
          <option value="">Choose...</option>
          <option value="1">One</option>
        </select>
      </div>
    </div> -->
    <div class="form-group mb-4">
      <label for="emp_salary">Salary</label>
      <input type="number" class="form-control" id="emp_salary" placeholder="1000000" name="emp_salary">
    </div>
    <div class="custom-file mb-3">
      <input type="file" class="custom-file-input" id="validatedCustomFile" name="emp_photo">
      <label class="custom-file-label" for="validatedCustomFile">Choose photo...</label>
    </div>
    <button type="submit" class="btn btn-primary mt-2">Add Data</button>
  </form>
</div>
<?= $this->endSection(); ?>