 <?php 
include 'db/db_connection.php';
$get_users = "Select * from users;";
$users = $conn -> query($get_users);
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
                    </ul>
                </div>
            </div>
        </nav>
    </div>
</div>

<div class="row" style="margin-top: 5%;">
    <div class="col-md-12">
        <div class="col-md-12">
            <div class="modal-dialog" style="margin-bottom:0">
                <div class="modal-content">
                    <div class="panel-heading">
                        <h3 class="panel-title">Add Student</h3>
                    </div>
                    <div class="panel-body">
                        <form role="form" method="post" action="account.php">
                            <fieldset>
                                <div class="form-group">
                                    <input class="form-control" placeholder="Full Name" name="FullName" type="text"  required>
                                </div>
                                <div class="form-group">
                                    <input class="form-control" placeholder="E-mail" name="Email" type="email"  required>
                                </div>
                                <div class="form-group">
                                    <input class="form-control" placeholder="Registration Number" name="regNo" type="text" value="" required>
                                </div>
                                <input type="submit" class="btn btn-lg btn-primary" value="Add Student">
                            </fieldset>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<div class="row" style="text-align: center;">
	<div class="col-md-8 col-md-offset-2">
 <table class="table" style="border:2px solid grey;">
        <thead >
            <tr style="border:2px solid grey;">
                <th scope="col">Name</th>
                <th scope="col">Email</th>
                <th scope="col">Registration Number</th>
            </tr>
        </thead> 
        <tbody>
        	<?php 
        	$query = "Select * from student";
        	$students = $conn -> query($query);
        	foreach ($students as $key => $std) {
        		echo '<tr>
                <td>'.
                 $std['name'].  
                '</td>
                <td>'.
                 $std['email'].
                '</td>
                <td>'.$std['regNo'].
                '</td>
                <td>
                <a href="edit.php?id='.$std['ID'].'"><span class="btn btn-primary">Edit</span></a>
                </td>
                <td>
                    <a href="delete.php?id='.$std['ID'].'"><span class="btn btn-danger">Delete</span></a>
                </td>
            </tr>';
        	}
        	?>
            
        </tbody>
</table>
</div>
</div>
</body>
</html>
