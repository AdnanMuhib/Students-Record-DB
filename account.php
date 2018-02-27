<?php 
include 'db/db_connection.php';
$FullName = $_POST['FullName'];
$Email = $_POST['Email'];
$regNo = $_POST['regNo'];
$new_user = "Insert into student(name,email,regNo) values('$FullName', '$Email', '$regNo')";
$is_registered = $conn -> query($new_user);
if ($is_registered > 0) {
	echo "<br / > User Successfully Registered";
	header("location: index.php?msg=success");

}
?>