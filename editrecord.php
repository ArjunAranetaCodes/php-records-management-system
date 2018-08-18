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
          <i class="fa fa-table"></i> Edit Record</div>
        <div class="card-body">
          <?php 
            include 'php/db.inc.php';
            $sql = "SELECT * FROM tbl_records where id = ".$_GET["id"];
            $result = $conn->query($sql);
            $row = $result->fetch_assoc();
          ?>
          <form action="php/updaterecord.php" method="post">
            <input type="hidden" name="id" value="<?php echo $_GET["id"];?>">
            <div class="form-group">
              <label for="firstname">First Name</label>
              <input type="text" class="form-control" id="firstname"
               name="firstname" placeholder="First Name"
               value="<?php echo $row["firstname"];?>">
            </div>
            <div class="form-group">
              <label for="lastname">Last Name</label>
              <input type="text" class="form-control" id="lastname"
               name="lastname" placeholder="Last Name"
               value="<?php echo $row["lastname"];?>">
            </div>
            <div class="form-group">
              <label for="age">Age</label>
              <input type="text" class="form-control" id="age"
               name="age" placeholder="Age"
               value="<?php echo $row["age"];?>">
            </div>
            <div class="form-group">
              <label for="gender">Gender</label>
              <select name="gender" id="gender" class="form-control">
                <option><?php echo $row["gender"];?></option>
                <option>Male</option>
                <option>Female</option>
              </select>
            </div>
            <input type="submit" class="btn btn-primary btn-block"
             value="Update Record">
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
