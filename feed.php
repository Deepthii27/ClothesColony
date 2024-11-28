<?php include('session_user.php');?>
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
	</style>
</head>
<body class="home"  onload="showFashion1()" style="background-image: url('photos/feedback1.jpg'); background-size:100% 100%; background-repeat: no-repeat; ">
	<div id="wrapper">
		<?php include('header_user.php');?>
		<div id="main" class="haslayout padding-section" style="padding:0px;">
			<div class="container">
				<form class="login-form creataccount-form" action="" method="POST" enctype="multipart/form-data">
					<fieldset>
						<div class="border-left"><h2>Feed back</h2></div>
						<div class="row">
							
								
							<div class="form-group col-sm-6 col-xs-12">
								<label>Message:</label>
								<textarea name="cmt" rows="4" required="" autocomplete="off" placeholder="write a feedback"></textarea><br>
							</div>
							
						</div>
						
						<div class="form-group col-sm-6 col-xs-6 full-widthsx">
							<button type="submit" class="theme-btn btn-small" name="submit">Apply</button>
						</div>
					</div>
				</fieldset>
			</form>
</div>
	</div>
<?php			
include('connect.php');
$user=$_SESSION['u_id'];
if(isset($_POST['submit']))
    {
        $msg=$_POST['cmt'];
        $q=mysqli_query($con,"INSERT INTO `tbl_feedback`(`feed_id`,`uid`, `message`, `date`) VALUES ('','$user','$msg',now())");
        if($q){
              echo '<script> alert("successfully sent.");window.location="user.php";</script>';
            }
            else
            {
              echo '<script> alert("Sorry, error");window.location="user.php";</script>';
            
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
	<?php include('footer_user.php');?>

</html>