<!doctype html>
<!--[if lt IE 7]>		<html class="no-js lt-ie9 lt-ie8 lt-ie7" lang=""> <![endif]-->
<!--[if IE 7]>			<html class="no-js lt-ie9 lt-ie8" lang=""> <![endif]-->
<!--[if IE 8]>			<html class="no-js lt-ie9" lang=""> <![endif]-->
<!--[if gt IE 8]><!-->	<html class="no-js" lang=""> <!--<![endif]-->

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
		.pic{
			height: 300px!important;
			width: 200px!important;
		}
	</style>
</head>
<body >
	<!--[if lt IE 8]>
		<p class="browserupgrade">You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade your browser</a> to improve your experience.</p>
	<![endif]-->
	<!-- Wrapper Start -->
	<div id="wrapper" style="margin-top:-20px">
		<!-- Header Start -->
		<header id="header" class="haslayout">
			<div class="top-bar haslayout" style="background-color: #BB8FCE;">
				<div class="container">
					<div class="col-md-6 col-sm-3 col-xs-6 pull-left">
						<div class="row">
							<span class="phone">
								<i class="glyphicon glyphicon-phone"></i>
								<em>9632587410</em>
							</span>
							<span class="email">
								<i class="glyphicon glyphicon-send"></i>
								<em><a href="info%40sitename.html">CLOTHES_COLONY@gmail.com</a></em>
							</span>
						</div>
					</div>
					
						</div>
					</div> 
				
			
			<div class="mid-bar haslayout">
				<div class="container">
					
					
						<!-- <div class="dropdown-menu cart-item" aria-labelledby="cart"> 
							<strong class="title">Recently added item(s)</strong>
							<ul class="cart-list">
								<li>
									<div class="product-img">
										<img src="images/img1.jpg" alt="image description">
									</div>
									<div class="detail">
										<span class="product-title">Pearl Izumi Men's E:Motion Tri N1 Neutral Race Shoe</span>
										<span class="quantity">1 x $124.99</span>
									</div>
									<i class="btn-delete-item"><a class="fa fa-remove" href="#"></a></i>
								</li>
								<li>
									<div class="product-img">
										<img src="images/img1.jpg" alt="image description">
									</div>
									<div class="detail">
										<span class="product-title">Pearl Izumi Men's E:Motion Tri N1 Neutral Race Shoe</span>
										<span class="quantity">1 x $124.99</span>
									</div>
									<i class="btn-delete-item">
										<a class="fa fa-remove" href="#"></a>
									</i>
								</li>
							</ul>
							<div class="btn-area">
								<a href="cart.html" class="theme-btn btn-viewall">View All</a>
								<a href="checkout.html" class="theme-btn btn-checkout">Checkout</a>
							</div>
						</div> -->
					</div>
					
				</div>
			</div>
			<nav id="nav" class="haslayout navbar">
				<div class="container">
					<div class="navbar-header">
						<button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
							<span class="sr-only">Toggle navigation</span>
							<span class="icon-bar"></span>
							<span class="icon-bar"></span>
							<span class="icon-bar"></span>
						</button>
					</div>
					<div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
						<ul>
							<li class="active"><a href="index.php">Home</a></li>
							<li><a href="about-us.html">About</a></li>
							<li><a href="item.php">Item</a></li>
							
							<li><a href="contact-us.html">Contacts</a></li>
							
							<li><a href="User_login.php">User Registration</a></li>
								<li class="dropdown">
								<a href="#">login</a>
								<ul class="dropdown-menu">
									
									<li><a href="loginuser.php">User login</a></li>
									<li><a href="admin/index.php">admin login</a></li>
								</ul>
							</li>
						</ul>
					</div>
				</div>
			</nav>
		</header>
		
		<div id="main" class="haslayout padding-section products-listing">
			<div class="container">
				<div class="row">
					<div class="col-lg-14 col-md-11 col-sm-1 pull-right">
						<div id="content" class="haslayout">
							
							<div class="products haslayout">
								<div class="row">
								<?php include 'connect.php';
								$q=mysqli_query($con,"SELECT * FROM tbl_item")or(mysqli_error($con));
								while($row=mysqli_fetch_array($q)){
									?>

									
									<div class="col-sm-4 col-xs-6 product">
										<div class="product-img pic">
											<img src="admin/photos/<?php echo $row['item_image']; ?>" alt="image description" >
											<div class="img-hover">
												<div class="holder">
													<a class="icon glyph-icon flaticon-plus79" href="#"></a>
												</div>
											</div>
											<div class="price-tag">
												<div class="price-holder">Rs.<?php echo $row['item_price']; ?></div>
											</div>
										</div>
										<div class="detail">
											<span class="title" style="text-transform: capitalize;"><?php echo $row['item_name']; ?></span>
											
											<br>
											<a class="theme-btn addtocart-btn" href="loginuser.php">Add to cart</a>
										</div>
										
									</div>
									<?php
									} ?>
									
									</div>
								</div>
							</div>
							
						</div>
					</div>
					
				</div>
			</div>
		</div>
		<!-- Main End -->
		<!-- Footer -->
		<footer id="footer" class="footer haslayout">
			
			<div class="footer-description haslayout small-padding-section" style="background-color: #BB8FCE;">
				<div class="container">
					<div class="col-md-6 col-md-offset-3">
						<div class="row">
							<strong class="logo">
								<a href="index.html">
									<img src="photos/nwlogo.jpg" alt="image">
								</a>
							</strong>
							<div class="description">
								<p><br>But and Design your dress online<br>Think india were India</p>
							</div>
							<span class="copyright"><a href="#"></a></span>
						</div>
					</div>
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

<!-- Mirrored from 786themes.net/html/alteration/women.html by HTTrack Website Copier/3.x [XR&CO'2014], Sat, 22 Dec 2018 06:56:27 GMT -->
</html>