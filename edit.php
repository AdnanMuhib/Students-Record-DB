<?php 
include 'db/db_connection.php';
$id = $_GET['id'];
$query = "select * from student where ID = $id";
$record = $conn -> query($query);
$name = "";
$email = "";
$registration = "";
foreach ($record as $key => $value) {
	$name = $value['name'];
	echo "$name";
	$email = $value['email'];
	echo "$email";
	$registration = $value['regNo'];
	echo "$registration";
}
?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8" />
	<?php
	 
	// include all js file
	include 'js/jsfile.php';
	// include all css files
	include 'css/cssfiles.php'; 
	?>
	<link rel="stylesheet" type="text/css" href="style.css">
	<title>Home</title>
</head>
<body>
<div class="navbar-wrapper">
    <div class="container-fluid">
        <nav class="navbar navbar-fixed-top navbar-inverse">
            <div class="container">
                <div class="navbar-header">
                    <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    </button>
                    <a class="navbar-brand" href="index.php"><!-- <img src="images/logo.png" width="50" height="50" class="img img-responsive"> --></a>
                </div>
                <div id="navbar" class="navbar-collapse collapse">
                    <ul class="nav navbar-nav">
                        <li class="active"><a href="index.php" class="">Home</a></li>
                        
                         <li class="apply"><a href="job.php">Register User</a></li>
                    </ul>
                </div>
            </div>
        </nav>
    </div>
</div>
<div class="row" style="margin-top: 10%;">
    <div class="col-md-12">
        <div class="col-md-12">
            <div class="modal-dialog" style="margin-bottom:0">
                <div class="modal-content">
                    <div class="panel-heading">
                        <h3 class="panel-title">Register</h3>
                    </div>
                    <div class="panel-body">
                        <form role="form" method="post" action="edit_submit.php">
                            <fieldset>
                            	<?php
                            	echo '<div class="form-group">
                                    <input class="form-control" placeholder="Full Name" name="FullName" type="text"  value="'.$name.'" required>
                                </div>
                                <div class="form-group">
                                    <input class="form-control" placeholder="E-mail" name="Email" type="email" value="'.$email.'"  required>
                                </div>
                                <div class="form-group">
                                    <input class="form-control" placeholder="Registration Number" name="regNo" type="text" value="'.$registration.'" required>
                                </div>
                                <input type="hidden" name="Id" value="'.$_GET['id'].'">';
                            	?>

                                <input type="submit" class="btn btn-lg btn-primary" value="Update Record">
                            </fieldset>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
</body>
</html>