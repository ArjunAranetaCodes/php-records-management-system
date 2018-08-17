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
        <li class="breadcrumb-item active">Users</li>
      </ol>
      <!-- Example DataTables Card-->
      <div class="card mb-3">
        <div class="card-header">
          <i class="fa fa-table"></i> Edit User</div>
        <div class="card-body">
          <?php 
            include 'php/db.inc.php';
            $sql = "SELECT * FROM tbl_accounts where id = ".$_GET["id"];
            $result = $conn->query($sql);
            $row = $result->fetch_assoc();
          ?>
          <form action="php/updateuser.php" method="post">
            <input type="hidden" name="id" value="<?php echo $row["id"];?>">
            <div class="form-group">
              <label for="username">Username</label>
              <input type="text" class="form-control" id="username"
               name="username" placeholder="Username"
               value="<?php echo $row["username"];?>">
            </div>
            <div class="form-group">
              <label for="password">Password</label>
              <input type="text" class="form-control" id="password"
               name="password" placeholder="Password"
               value="<?php echo $row["password"];?>">
            </div>
            <div class="form-group">
              <label for="privilege">Privilege</label>
              <select name="privilege" id="privilege" class="form-control">
                <option><?php echo $row["privilege"];?></option>
                <option>User</option>
                <option>Admin</option>
              </select>
            </div>
            <input type="submit" class="btn btn-primary btn-block"
             value="Update User">
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
