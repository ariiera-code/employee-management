<?= $this->extend('layout/template'); ?>
<?= $this->section('content'); ?>
<div class="hero">
  <div class="container py-5">
    <div class="row pt-5">
      <div class="col pt-5">
        <h3 class="mb-3">Employee List</h4>
          <table class="table table-hover">
            <thead class="bg-primary">
              <tr>
                <th scope="col">ID</th>
                <th scope="col">Name</th>
                <th scope="col">Email</th>
                <th scope="col">Photo</th>
                <th scope="col">Job</th>
                <th scope="col">Salary</th>
                <th scope="col">Created</th>
                <th scope="col">Updated</th>
              </tr>
            </thead>
            <tbody class="bg-white">
              <?php foreach ($employees as $employee) :
                ?>
                <tr>
                  <th scope="row"><?= $employee['id']; ?></th>
                  <td><?= $employee['emp_name']; ?></td>
                  <td><?= $employee['emp_email']; ?></td>
                  <td><img class="img-fluid" style="height:2rem; width:2rem;" src="/img/emp_photo/<?= $employee['emp_photo']; ?>" alt="<?= $employee['emp_photo']; ?>"></td>
                  <td><?= $employee['job_id']; ?></td>
                  <td><?= $employee['emp_salary']; ?></td>
                  <td><?= $employee['created_at']; ?></td>
                  <td><?= $employee['updated_at']; ?></td>
                </tr>
              <?php endforeach; ?>
            </tbody>
          </table>
      </div>
    </div>
  </div>
</div>
<?= $this->endSection(); ?>