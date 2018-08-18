<!DOCTYPE html>
<html lang="en">

<?php include 'header.php'; ?>

<body class="fixed-nav sticky-footer bg-dark" id="page-top">
  <!-- Navigation-->
  <?php include 'navbar.php'?>

  <div class="content-wrapper">
    <div class="container-fluid">
      <!-- Breadcrumbs-->
      <ol class="breadcrumb">
        <li class="breadcrumb-item">
          <a href="#">Dashboard</a>
        </li>
        <li class="breadcrumb-item active">Records</li>
      </ol>
      <!-- Example DataTables Card-->
      <div class="card mb-3">
        <div class="card-header">
          <i class="fa fa-table"></i> Add Record</div>
        <div class="card-body">
          <form action="php/addrecord.php" method="post">
            <div class="form-group">
              <label for="firstname">First Name</label>
              <input type="text" class="form-control" id="firstname"
               name="firstname" placeholder="First Name">
            </div>
            <div class="form-group">
              <label for="lastname">Last Name</label>
              <input type="text" class="form-control" id="lastname"
               name="lastname" placeholder="Last Name">
            </div>
            <div class="form-group">
              <label for="age">Age</label>
              <input type="text" class="form-control" id="age"
               name="age" placeholder="Age">
            </div>
            <div class="form-group">
              <label for="gender">Gender</label>
              <select name="gender" id="gender" class="form-control">
                <option>Male</option>
                <option>Female</option>
              </select>
            </div>
            <input type="submit" class="btn btn-primary btn-block"
             value="Add Record">
          </form>
        </div>
      </div>
    </div>
    <!-- /.container-fluid-->
    <!-- /.content-wrapper-->

    <?php include 'modals.php';?>
    <?php include 'footer.php';?>
  </div>
</body>

</html>
