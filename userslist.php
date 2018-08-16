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
        <li class="breadcrumb-item active">Users List</li>
      </ol>
      <!-- Example DataTables Card-->
      <div class="card mb-3">
        <div class="card-header">
          <i class="fa fa-table"></i> Users</div>
        <div class="card-body">
          <div class="table-responsive">
            <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
              <thead>
                <tr>
                  <th>ID</th>
                  <th>Username</th>
                  <th>Password</th>
                  <th>Privilege</th>
                  <th>Action</th>
                </tr>
              </thead>
              <tfoot>
                <tr>
                  <th>ID</th>
                  <th>Username</th>
                  <th>Password</th>
                  <th>Privilege</th>
                  <th>Action</th>
                </tr>
              </tfoot>
              <tbody>
                <?php 
                  include 'php/db.inc.php';

                  $sql = "SELECT * FROM tbl_accounts ORDER BY id DESC";
                  $result = $conn->query($sql);
                  while($row = $result->fetch_assoc()){
                    echo '
                      <tr>
                        <td>'.$row["id"].'</td>
                        <td>'.$row["username"].'</td>
                        <td>'.$row["password"].'</td>
                        <td>'.$row["privilege"].'</td>
                        <td>
                          <a class="btn btn-info btn-block"
                            href="edituser.php?id='.$row["id"].'">Edit</a>
                          <a class="btn btn-danger btn-block"
                            href="php/deleteuser.php?id='.$row["id"].'">Delete</a>
                        </td>
                      </tr>
                    ';
                  }
                ?>          
              </tbody>
            </table>
          </div>
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
