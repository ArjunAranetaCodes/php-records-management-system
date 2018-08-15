<?php
 session_start();
 include 'db.inc.php';

 $username = $_POST["username"];
 $password = $_POST["password"];

 $sql = "SELECT * FROM tbl_accounts WHERE username = '$username' 
  AND password = '$password'";
 $result = $conn->query($sql);
 $row = $result->fetch_assoc();

 if($result->num_rows > 0){
  $_SESSION["username"] = $username;
  header("Location:../userslist.php");
 }else{
  echo "0 results";
 }
 $conn->close();