<?php 



 include('session_user.php');
 
include('connect.php');
$amt=$_GET['amt'];
$oid=$_GET['oid']; ?>
<!doctype html>
<!--[if lt IE 7]>		<html class="no-js lt-ie9 lt-ie8 lt-ie7" lang=""><![endif]-->
<!--[if IE 7]>			<html class="no-js lt-ie9 lt-ie8" lang=""><![endif]-->
<!--[if IE 8]>			<html class="no-js lt-ie9" lang=""><![endif]-->
<!--[if gt IE 8]><!-->	<html class="no-js" lang=""><!--<![endif]-->

<!-- Mirrored from 786themes.net/html/alteration/cart.html by HTTrack Website Copier/3.x [XR&CO'2014], Sat, 22 Dec 2018 06:56:08 GMT -->
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
</head>
<body>
	<!--[if lt IE 8]>
		<p class="browserupgrade">You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade your browser</a> to improve your experience.</p>
	<![endif]-->
	<div id="wrapper">
		
		<?php include('header_user.php');?>
		<div id="main" class="haslayout padding-section">
			<div class="container">
					<fieldset>
						<h4 class="title">Pay Now</h4>
	           		<form action="" method="post">
						<table class="table table-bordered table-hover table-striped">
							<tr>
								<th>Scan And Pay</th>
								<td colspan="2"><img src="photos/scanner.jpg" width="200px" height="200px"></td>
							</tr>
							<tr>
								<th>Transaction Id</th>
								<td colspan="2"><input type="text" name="no" class="form-control" value="" required></td>
							</tr>
							
							<tr>
								<th>Paying Amount</th>
								<td colspan="2"><input type="text" name="amt" class="form-control" value="<?php echo $amt; ?>" readonly></td>
							</tr>
							<tr>
								<td colspan="3"><input type="submit" name="save" class="btn btn-primary" value="Pay"></td>
							</tr>							
						</table>
					</form>
					<?php include('connect.php');						
						if(isset($_POST['save']))
						{
							$no=$_POST['no'];
						
						$qr=mysqli_query($con,"UPDATE `tbl_order` SET status='pending',`transaction_id`='$no' where `oid`='$oid'");
											 		if($qr)
											 		{
											 			echo '<script>alert("Paid Successfully"); window.location="bill.php";</script>';
											 		}
											 		else{
											 			echo '<script>alert("Failed to pay"); </script>';
											 		}
						}
					?>
                
						
					</fieldset>
				</form>
			</div>
		</div>
		<!-- Footer -->
		<footer id="footer" class="footer haslayout">
			
			<div class="payment haslayout small-padding-section">
				<div class="container">
					<ul>
						<li><i class="fa fa-cc-paypal"></i></li>
						<li><i class="fa fa-cc-visa"></i></li>
						<li><i class="fa fa-cc-mastercard"></i></li>
					</ul>
				</div>
			</div>
		</footer>
		<!-- Footer -->
	</div>
	<!-- Wrapper End -->
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

<!-- Mirrored from 786themes.net/html/alteration/cart.html by HTTrack Website Copier/3.x [XR&CO'2014], Sat, 22 Dec 2018 06:56:09 GMT -->
</html>