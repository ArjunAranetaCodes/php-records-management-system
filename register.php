<!DOCTYPE html>
<html lang="en">

<?php include 'header.php'; ?>

<body class="bg-dark">
  <div class="container">
    <div class="card card-register mx-auto mt-5">
      <div class="card-header">Register an Account</div>
      <div class="card-body">
        <form method="post" action="php/register.php">
          <div class="form-group">
            <label for="exampleInputEmail1">Username</label>
            <input class="form-control" name="username" id="exampleInputEmail1" type="text" aria-describedby="emailHelp" placeholder="Enter username">
          </div>
          <div class="form-group">
            <label for="privilege">Privilege</label>
            <select name="privilege" id="privilege" class="form-control">
              <option>User</option>
              <option>Admin</option>
            </select>
          </div>
          <div class="form-group">
            <div class="form-row">
              <div class="col-md-6">
                <label for="password">Password</label>
                <input class="form-control" name="password" id="password" type="password" placeholder="Password">
              </div>
              <div class="col-md-6">
                <label for="confirmpassword">Confirm password</label>
                <input class="form-control" id="confirmpassword" type="password" placeholder="Confirm password">
              </div>
            </div>
          </div>

          <input type="submit" class="btn btn-primary btn-block" value="Register"/>
        </form>
        <div class="text-center">
          <a class="d-block small mt-3" href="login.php">Login Page</a>
        </div>
      </div>
    </div>
  </div>

  <?php include 'footer.php'; ?>
  <script type="text/javascript">
    var password = document.getElementById("password");
    var confirm_password = document.getElementById("confirmpassword");

    function validatePassword(){
      if(password.value != confirm_password.value){
        confirm_password.setCustomValidity("Password don't match");
      }else{
        confirm_password.setCustomValidity('');
      }
    }

    password.onchange = validatePassword;
    confirm_password.onkeyup = validatePassword;
  </script>
</body>

</html>
