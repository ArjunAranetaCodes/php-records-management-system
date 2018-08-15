<?php
 include 'db.inc.php';

 $username  = $_POST["username"];
 $password  = $_POST["password"];
 $privilege  = $_POST["privilege"];

 $sql = "INSERT INTO tbl_accounts (username, password, privilege)
  VALUES ('$username','$password','$privilege')";
 $conn->query($sql);
 $conn->close();

 header("Location:../login.php");