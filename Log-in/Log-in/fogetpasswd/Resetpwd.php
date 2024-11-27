<?php
	//session_start();
	include('connection.php');
?>

<!DOCTYPE html>
<html lang = "en">

<head>

	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1", shrink-to-fit=no">
	<meta name="description" content="Bus Scheduling and Booking System, BusPass">
	<title>Forgot Password</title>
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">
	<!-- Custom fonts for this template -->
	<link href="vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
	
	<!-- Custom styles for this template -->
	<link href="vendor/css/sb-admin.css" rel="stylesheet">
	
</head>

<body class="bg-dark">
<div class="container">
 <div class="card card-login mx-auto mt-5">
  <div class="card-header">Reset Password</div>
  <div class="card-body">
    <div class="text-center mb-4">
     <h4>Forgot Your Password?</h4>
     <p>Enter your Email address and we will send you instructions on how to reset your password.</p>
    </div>
	
	<form method="POST" action="resting.php">
	 <div class="form-group">
	  <div vlass="form-label-group">
	   <input type="email" id="inputEmail" name="email" class="form-control" placeholder="Enter Email Address" required="required" autofocus="autofocus">
	   <label for="inputEmail">Enter Email Address</label>
	  </div>
	  <div vlass="form-label-group">
	   <input type="password" id="password" name="password" class="form-control" placeholder="Enter new password" required="required" autofocus="autofocus">
	   <label for="password">Enter New password</label>
	  </div>
	 </div>
	 <input type="submit" class="btn btn-success btn-block" name="reset-pwd" value="Reset Password">
	 <?php if(isset($_GET['msg'])){
            $msg=$_GET['msg'];
        echo"<p style=text-align:center;color:green>{$msg}.!</p>";
        }?>
	</form>
	
	<div class="text-center">
	 <a class="d-block small" href="../Login.php">Login Page</a>
	</div>
  </div>
 <div>
<div>

<!-- Bootstrap core JavaScript -->
<script src="vendor/jquery/jquery.min.js"></script>
<script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

<!-- Core plugin JavaScript -->
<script src="vendor/jquery-easing/jquery.easing.min.js"></script>

<!-- Inject Sweet Alert JavaScript -->
<script src="vendor/js/swa;.js"></script>

</body>

</html>