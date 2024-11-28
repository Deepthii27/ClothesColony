

<?php
 include('session_user.php');
$oid=$_GET['oid'];
  $amt=$_GET['payamt'];
include('connect.php'); ?>
<!doctype html>
<!--[if lt IE 7]>		<html class="no-js lt-ie9 lt-ie8 lt-ie7" lang=""><![endif]-->
<!--[if IE 7]>			<html class="no-js lt-ie9 lt-ie8" lang=""><![endif]-->
<!--[if IE 8]>			<html class="no-js lt-ie9" lang=""><![endif]-->
<!--[if gt IE 8]><!-->	<html class="no-js" lang=""><!--<![endif]-->

<!-- Mirrored from 786themes.net/html/alteration/cart.html by HTTrack Website Copier/3.x [XR&CO'2014], Sat, 22 Dec 2018 06:56:08 GMT -->
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title>BootStrap HTML5 CSS3 Theme</title>
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
						 <div class="container">    
      <div class="col-md-1"></div>
      <div class="col-md-11">
      	<div class="panel panel-primary">
      		<div class="panel-heading">
      			<h2 style="text-align:center;"></h2>
      		</div>
      			<form action="" method="post">
            <div class="form-group">
              <label>Select Pay Option</label>
              <input type="radio" name="payop" value="cash on delivery">Cash on Delivery
              <input type="radio" name="payop" value="upi" checked>UPI
            </div>
            <input type="submit" name="pay" value="Submit" class="btn btn-warning">
          </form>
          <?php include('connect.php');
            if(isset($_POST['pay']))
            {
              $payop=$_POST['payop'];
              $sql=mysqli_query($con,"UPDATE `tbl_order` SET `status`='$payop' WHERE `oid`='$oid'");
              if($sql)
              {
                if($payop=='cash on delivery')
                {
                  echo '<script>alert("Your product will be delivered soon,Thank you"); window.location="bill.php";</script>';
                }
                else if($payop=='upi')
                {
                  echo '<script>alert("Pay Now"); window.location="pay.php?amt='.$amt.'&&oid='.$oid.'";</script>';
                }
              }
              else
              {
                echo '<script>alert("Failed, try again"); window.location="payoption.php?oid='.$oid.'&&payamt='.$amt.'";</script>';
              }
            }
           ?>
      	</div>
      </div>
    </div>
            
						
					</fieldset>
				</form>
			</div>
		</div>
		<!-- Footer -->
		<footer id="footer" class="footer haslayout">
			<div class="getstarted haslayout small-padding-section" style="background-color:#0492C2";>
				<div class="container" >
					
					<h3 style="margin-left:200px";>Free Shipping On All Orders Over 2499</h3>
					<a class="theme-btn" href="#">get started</a>
				</div>
			</div>
			<div class="footer-description haslayout small-padding-section">
				<div class="container">
					<div class="col-md-6 col-md-offset-3">
						<div class="row">
							<strong class="logo">
								<a href="index.html">
									<img src="photos/nwlogo.jpg" alt="image description">
								</a>
							</strong>
							
						<span class="copyright"> <a href="#"></a></span>
					</div>
					</div>
				</div>
			</div>
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