<?php

$FName = $_GET['FName'];
$LName = $_GET['LName'];

// Takes 4 Parameters
// 1 - hostname
// 2 - username
// 3 - password
// 4 - databasename
$Con = mysqli_connect("localhost", "root", "", "userdb");

// Takes 2 parameters
// 1 - connection string
// 2- query
mysqli_query($Con, "INSERT INTO `tblstudents`( `Name`, `Email`) 
VALUES ('$FName', '$LName')");

// echo $FName . "<br>" . $LName;

header("Location:First.php");
?>