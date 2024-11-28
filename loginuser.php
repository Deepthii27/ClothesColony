<!doctype html>
<html class="no-js" lang="">
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title></title>
	<meta name="description" content="">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="apple-touch-icon" href="apple-touch-icon.png">
	<link rel="stylesheet" href="css/bootstrap.min.css">
	<link rel="stylesheet" href="css/font-awesome.min.css">
	<link rel="stylesheet" href="css/owl.carousel.css">
	<link rel="stylesheet" href="css/owl.theme.css">
	<link rel="stylesheet" href="css/prettyPhoto.css" type="text/css">
	<link rel="stylesheet" href="css/jcf.css">
	<link rel="stylesheet" href="css/icomoon.css">
	<link rel="stylesheet" type="text/css" href="css/flaticon.css">
	<link rel="stylesheet" href="css/transitions.css">
	<link rel="stylesheet" href="css/main.css">
	<link rel="stylesheet" href="css/responsive.css">
	<link rel="stylesheet" href="css/color.css">
	<script src="js/vendor/modernizr-2.8.3-respond-1.4.2.min.js"></script>
	<style type="text/css">
	</style>
</head>
<style type="text/css">
	input[type="file"].form-control
	{
	    box-shadow: none;
	    border-radius: 4px;
	    background: none;
	    height: 48px;
	    padding: 8px 15px;
	    width: 100%;
	}
	input[type="tel"].form-control
	{
	    box-shadow: none;
	    border-radius: 4px;
	    background: none;
	    height: 48px;
	    padding: 8px 15px;
	    width: 100%;
	}
	input[type="text"].form-control
	{
	    color: white;
	}
	input[type="email"].form-control
	{
	    color: white;
	}
	input[type="password"].form-control
	{
	    color: white;
	}

	label
	{
	    color: white;
	}
	input,
input::-webkit-input-placeholder {
    font-size: 15px;
    line-height: 3;
    color: white;
}

	</style>
<body style="background-image: url('photos/loginbk.jpg'); background-size:100%;background-repeat: no-repeat;background-size: cover; ">
	<div id="wrapper" style="color:white;">
		<div id="main" class="haslayout padding-section">
			<a  href="index.php"><button style="margin-left:850px;width:250px;" type="submit" class="theme-btn btn-small" >Home</button></a>
			<div class="container">
				<form class="login-form adform" action="" method="POST">
					<fieldset class="row">
					<div class="col-md-3"></div>
						<div class=" col-md-6 col-sm-6 col-xs-6 col-offset-sm-3 reg-customers">
							<div class="border-left">
								<h2 style="color:black;">User Login</h2>
							</div>
							<div class="form-group">
								<label style="color:black;">Email Address</label>
								<input style="color:black"; type="email" class="form-control" name="uemail"  placeholder="Enter user Email address" pattern="[a-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2,4}$" title="xyz@something.com" requiblack />
							</div>
							<div class="form-group">
								<label style="color:black;"v>Password</label>
								<input style="color:black"; type="password" class="form-control" name="upassword" placeholder="Enter valid password">
							</div>
						<div ><a href="forgot.php"><i><b>Forgotten Password</b></i></a></div><br>
							<div class="form-group clearfix">
								<button type="submit" class="theme-btn btn-small" name="user_login">Log In</button>
							</div>
						</div>
						<div class="col-md-3"></div>
					</fieldset>
				</form>	
				
				
				<div class="row">
				<div class="col-md-5"></div>
				<div class="col-md-4">
					<div class="form-group col-sm-6 col-xs-6 full-widthsx">
					<a href="user_login.php"><button type="submit" class="theme-btn btn-small" style="margin-left:-60px;width: 250px;" >Register</button></a>
			
			
				</div>
				<div class="col-md-3"></div>
			</div>
			
			</div>
		</div>
	</div>
	<?php
                  include('connect.php');
                  if(isset($_POST['user_login'])){
                  	 $email=$_POST['uemail'];
                  	 $password=$_POST['upassword'];
                  	 $qry=mysqli_query($con,"SELECT * from tbl_user where email='$email' and password='$password'")or die(mysqli_error($con));
                  	 
                  	 $nums=mysqli_num_rows($qry);
                  	 $row=mysqli_fetch_array($qry);
                  	 if($nums==1){
                  	 	session_start();
                  	 	$_SESSION['u_id']=$row['uid'];
                  	 	$_SESSION['u_name']=$row['full_name'];
                  	 	echo '<script>alert(" '.$row['full_name'] .' is logged in");window.location="user.php";</script>';

                  	 }else{
                  	 	echo '<script>alert("failed to login");window.location="loginuser.php";</script>';
                  	 }
                  }

				?>
	<script src="js/vendor/jquery-1.11.3.min.js"></script>
	<script src="js/vendor/bootstrap.min.js"></script>
	<script src="js/owl.carousel.min.js"></script>
	<script src="js/parallax.js"></script>
	<script src="js/jquery.prettyPhoto.js"></script>
	<script src="js/custom-form/jcf.js"></script>
	<script src="js/custom-form/jcf.checkbox.js"></script>
	<script src="js/custom-form/jcf.select.js"></script>
	<script src="js/custom-form/jcf.radio.js"></script>
	<script src="js/custom-form/jcf.file.js"></script>
	<script src="js/appear.js"></script>
	<script src="http://maps.google.com/maps/api/js?sensor=false"></script>
	<script src="js/gmap3.min.js"></script>
	<script src="js/main.js"></script>
</body>
</html>