<?php
include 'config.php';
$admin=new Admin();


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
</head>
<body class="home" style="margin-top:-20px;" >
	<div id="wrapper" >
		<header id="header" class="haslayout">
			<div class="top-bar haslayout" style="background-color: #3b0024;">
				<div class="container">
					<div class="col-md-6 col-sm-3 col-xs-6 pull-left" >
						<div class="row">
							<span class="phone">
								<i class="glyphicon glyphicon-phone"></i>
								<em>+91 9895920720</em>
							</span>
							<span class="email">
								<i class="glyphicon glyphicon-send"></i>
								<em><a href="info%40sitename.html">CLOTHESCOLONY@GMAIL.COM</a></em>
							</span>
						</div>
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
							
							<li><a href="contact-us.html">Contact</a></li>
							
							<li><a href="User_login.php">User Registration</a></li>
								<li class="dropdown">
								<a href="#">login</a>
								<ul class="dropdown-menu">
									
									<li><a href="loginuser.php">User login</a></li>
									
								</ul>
							</li>
						</ul>
					</div>
				</div>
			</nav>
		</header>
		
		<!-- Header End -->
		<!-- Slider Start -->
		<div class="banner haslayout" >
			<div class="slider-caption" style="margin-bottom: 300px;">
				<div class="box">
					<div class="holder">
						<div class="frame">
						<div class="border-center">
								<h1>CLOTHES COLONY</h1>
							</div>
							 <div class="border-center" >
								<span class="title">BUY AND DESIGN YOUR DRESS ONLINE</span>
							</div> 
							
							<div class="description">
								<!-- <p>Claritas est etiam processus dynamicus, qui sequitur mutationem consuetudium lectorum.</p> -->
							</div>
							<!-- <a class="theme-btn" href="#">DESIGN Now</a> -->
						</div>
					</div>
				</div>
			</div>
			<div id="home-slider" class="home-slider">
				<div class="item">
					<video  autoplay muted  style="width:100%;" loop >
  <source src="images/home-slider/a.mp4" type="video/mp4">
</video>
				</div>
				<div class="item">
					<video  autoplay muted  style="width:100%;" loop >
  <source src="images/home-slider/b.mp4" type="video/mp4">
</video>
				</div>
				<div class="item">
					<video  autoplay muted  style="width:100%;" loop >
  <source src="images/home-slider/c.mp4" type="video/mp4">
</video>
				</div>
			</div>
		</div>
		<!-- Slider End -->
		<!-- Main Start -->
		<div id="main">
			<!-- About Us Start -->
			<section class="aboutus padding-section haslayout" style="background-image:url('photos/contact1.jpg');background-repeat: no-repeat;background-size: cover;">
				<div class="container">
					<div class="section-heading">
						<div class="heading">
							<h2>CLOTHES COLONY</h2>
							<!-- <span class="subheading">Lorem ipsum dolor sit consectetuer</span> -->
						</div>
					</div>
					<div class="col-sm-10 col-sm-offset-1">
						<div class="row">
							<div class="row">
								<div class="col-sm-5">
									<figure class="frame-img">
										<img src="photos/nwlogo.jpg">
									</figure>
								</div>
								<div class="col-sm-7" >
									<div class="border-left">
										<h3>about us</h3>
									</div>
									<div class="description"  >
										<p style="margin: left 100px";>We hold expertise in providing women traditional and western wear. A tailor is a person who makes, repairs, or alters clothing professionally, especially suits and mens clothing.  </p>
										<p>Tailors can specialize in alterations or in sewing custom garments. those who do alterations ensure that clothes fit customers properly. they make changes to garments, such as heming pants to make them shorter or taking in seams to make clothing smaller.</p>
									</div>
									
								</div>
							</div>
						</div>
					</div>
				</div>
			</section>
			<!-- About Us End -->
			<!-- Products Start -->
			<section class="products padding-section haslayout">
				<div class="container" style="padding-bottom: 80px;">
					
						<center><h3>FEATURED PRODUCT</h3></center>
					
					<div id="product-slider" class="product-slider haslayout">
						
<?php
$st=$admin->ret("SELECT * FROM `tbl_item` LIMIT 5");
while($r=$st->fetch(PDO::FETCH_ASSOC)){
	?>
<div class="item product">
							<div class="product-img">
								<img src="admin/photos/<?php echo $r['item_image']; ?>" style="width:900px;" alt="image description">
								<div class="cart-badge">
									<span class="corner"></span>
								</div>
								<div class="img-hover">
									<div class="holder">
										<a class="icon glyph-icon flaticon-plus79" href="loginuser.php"></a>
									</div>
								</div>
							</div>
							<div class="detail">
								<span class="title"><?php echo $r['item_name']; ?></span>
								<span class="stars">
									<i class="fa fa-star"></i>
									<i class="fa fa-star"></i>
									<i class="fa fa-star"></i>
									<i class="fa fa-star"></i>
									<i class="fa fa-star"></i>
								</span>
								<span class="price">Rs <?php echo $r['item_price']; ?></span>
							</div>
						</div>



						


	<?php
}

?>
						




					</div>
				</div>
			</section>
		
			<section class="company-info padding-section haslayout">
				<div class="container">
					<div class="row">
						<div class="col-md-4 col-sm-12 col-xs-12">
							<div class="col service">
								<div class="border-left">
									<h3>Our Services</h3>
								</div>
								<figure>
									<img src="photos/contact4.jpg" alt="image description">
								</figure>
								<div class="description">
									<p>Tailors can specialize in alternation or in sewing custom garments. those who do alternations ensure that clothes fit customers properly. they make changes to garments, such as hemming pants to make the shorter or taking in seams to mke clothing smaller.</p>
								</div>
								
							</div>
						</div>
						<div class="col-md-4 col-sm-6 col-xs-6">
							<div class="col formation">
								<div class="border-left">
									<h3>information</h3>
								</div>
								<div class="description">
									<p>We hold expertise in providing women traditional and western wear. A tailor is a person who makes, repairs, or alters clothing professionally, especially suits and mens clothing.</p>
								</div>
								<ul>
									<li>THINK INDIA WEAR INDIA. Design your dress online. please contact us.</li>
									<li>Traditional and moder style of dress will be there tailors stictes the dress.</li>
									<li>easy to use this website.</li>
									
								</ul>
							</div>
						</div>
						<div class="col-md-4 col-sm-6 col-xs-6">
							<div class="col info">
								<div class="border-left">
									<h3>Company address</h3>
								</div>
								<div class="description">
									<p>Please contact us. We help on your dress new design. If you want to be designing.</p>
								</div>
								<ul class="address-info">
									<li>
										<i class="fa fa-map-marker"></i>
										<address>Kanadka near Vaidhyanatha temple,Shaktinagara ,mangalore</address>
									</li>
									<li>
										<i class="fa fa-mobile-phone"></i>
										<em>+91 9632587410</em>
									</li>
									<li>
										<i class="fa fa-paper-plane"></i>
										<em><a href="">CLOTHES_COLONY@GMAIL.COM</a></em>
									</li>
								</ul>
								
							</div>
						</div>
					</div>
				</div>
			</section>
			
		</div>
		
		<footer id="footer" class="footer haslayout">
			<div class="brands haslayout padding-section">
				<div class="container">
					
				</div>
			</div>
			<div class="getstarted haslayout small-padding-section" style="background-color:#3b0024";>
				<div class="container" style="background-color:3b0024";>
					<h3 style="margin-left:300px"; >THINK INDIA WEAR INDIA</h3>
					<!-- <a class="theme-btn" href="#">get started</a> -->
				</div>
			</div>
			<div class="footer-description haslayout small-padding-section" style="background-color:#3b0024;">
				<div class="container">
					<div class="col-md-6 col-md-offset-3">
						<div class="row">
							<strong class="logo">
								<a href="index.html">
									<img src="photos/nwlogo.jpg" alt="image description">
								</a>
							</strong>
							<div class="description">
								<p><br> Buy and Design Your dress Online<br>THINK INDIA WEAR INDIA</p>
							</div>
							<span class="copyright"></a></span>
						</div>
					</div>
				</div>
			</div>
			
		</footer>
	
	</div>
	
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