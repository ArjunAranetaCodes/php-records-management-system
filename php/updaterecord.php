<?php
 include 'db.inc.php';
 $id = $_POST["id"];
 $firstname = $_POST["firstname"];
 $lastname = $_POST["lastname"];
 $age = $_POST["age"];
 $gender = $_POST["gender"];

 $sql = "UPDATE tbl_records SET 
  firstname = '$firstname',
  lastname = '$lastname',
  age = '$age',
  gender = '$gender' WHERE id = $id";
  
 $conn->query($sql);
 $conn->close();

 header("Location:../recordslist.php");