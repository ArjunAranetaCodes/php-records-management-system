<?php
 include 'db.inc.php';
 $id = $_POST["id"];
 $username = $_POST["username"];
 $password = $_POST["password"];
 $privilege = $_POST["privilege"];

 $sql = "UPDATE tbl_accounts SET 
  username = '$username',
  password = '$password',
  privilege = '$privilege' WHERE id = $id";
  
 $conn->query($sql);
 $conn->close();

 header("Location:../userslist.php");