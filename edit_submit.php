<?php 
include 'db/db_connection.php';
$FullName = $_POST['FullName'];
$Email = $_POST['Email'];
$regNo = $_POST['regNo'];
$Id = $_POST['Id'];
$query = "UPDATE `student` SET `name` = '$FullName', `email` = '$Email', `regNo` = '$regNo' WHERE `student`.`ID` = $Id ";
$res = $conn->query($query);
header("location: index.php?msg=success");
?>