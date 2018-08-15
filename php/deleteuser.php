<?php
 include 'db.inc.php';
 $id = $_GET["id"];

 $sql = "DELETE FROM tbl_accounts where id = $id";
 $conn->query($sql);
 $conn->close();

 header("Location:../userslist.php");