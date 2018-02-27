<?php 
include 'db/db_connection.php';
$Id = $_GET['id'];
$query = "Delete from student where ID = $Id";
$res = $conn->query($query);
header("location: index.php?msg=success");
?>
