<?php include('session_user.php');?>
<?php
	include('connect.php');
		$user=$_SESSION['u_id'];
		$sql=mysqli_query($con,"SELECT * FROM `tbl_user` WHERE uid='$user'") or die(mysqli_error($con));
		$rows=mysqli_fetch_array($sql);
?>
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
<body class="home"  onload="showFashion1()" style="background-image: url('photos/IMG-20190326-WA0043.jpg'); background-size:100% 100%; background-repeat: no-repeat; ">
	<div id="wrapper">
		<?php include('header_user.php');?>
		<div id="main" class="haslayout padding-section" style="padding:0px;">
			<div class="container">
				<form  action="" method="POST" enctype="multipart/form-data">
					<fieldset class="row">
					<div class="col-md-3"></div>
						<div class=" col-md-6 col-sm-6 col-xs-6 col-offset-sm-3 reg-customers">
							<div class="border-left">
								<h2>USER PROFILE</h2>
							</div>
							<div class="col-md-6">
								<label>User Image:</label>
								<img src="photos/<?php echo $rows['image'];?>" height="350" width="200" class="img-circle">
							</div>
				
							<div class="col-md-6">
							<div class="row">
								<div class="col-md-12">
									<h3>Name: <?php echo $rows['full_name']; ?></h3>
								</div>
							</div>
							<div class="row">
								<div class="col-md-12">
									<h3>Contact: <?php echo $rows['contact']; ?></h3>
								</div>
							</div>
							<div class="row">
								<div class="col-md-12">
									<h3>Gender: <?php echo $rows['gender']; ?></h3>
								</div>
							</div>
							<div class="row">
								<div class="col-md-12">
									<h3>Address: <?php echo $rows['address']; ?></h3>
								</div>
							</div>
							<div class="row">
								<div class="col-md-12">
									<h3>Email: <?php echo $rows['email']; ?></h3>
								</div>
							</div>
							</div>
							<div class="form-group clearfix">
							
							</div>
							</div>
					</fieldset>
				</form>
				<a href="edituser.php"><button type="submit" class="theme-btn btn-small" >Edit</button></a>
			</div>
		</div>
	</div>	
<?php include('footer_user.php');?>
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