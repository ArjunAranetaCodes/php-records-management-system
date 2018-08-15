<?php
 include 'db.inc.php';

 $firstname  = $_POST["firstname"];
 $lastname  = $_POST["lastname"];
 $age  = $_POST["age"];
 $gender  = $_POST["gender"];

 $sql = "INSERT INTO tbl_records (firstname, lastname, age, gender)
  VALUES ('$firstname','$lastname','$age', '$gender')";
 $conn->query($sql);
 $conn->close();

 header("Location:../recordslist.php");