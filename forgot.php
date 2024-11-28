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
<body class="home" style="background-image:url('b3.jpg');background-repeat: no-repeat;background-size: cover;">
	<div id="wrapper">
		<div id="main" class="haslayout padding-section" >
			<div class="container">
				<form class="login-form creataccount-form" action="" method="POST" enctype="multipart/form-data">
					<fieldset>
						<div ><h5>Forgottten password</h5></div>
						<div class="row">
							<div class="form-group col-sm-6 col-xs-12">
								
                            <input type="text" name="email" class="form-control"  placeholder="Enter Email" id="phone">
                            </div>
                                
                                   
                                
							
						
						<div class="form-group col-sm-6 col-xs-6 full-widthsx">
							<button type="submit" class="theme-btn btn-small" name="save">SAVE</button>
						</div>
					</div>
				</fieldset>
			</form>
			<div class="row">
				<div class="col-md-5"></div>
				<div class="col-md-4">
					
			<a href="index.php"><button type="submit" class="btn btn-info" >Home</button></a>
				</div>
				<div class="col-md-3"></div>
			</div>
			
		</div>
	</div>

	 <?php
    include('connect.php');
    if(isset($_POST['save'])){
        $email=$_POST['email'];
            
        $sql = mysqli_query($con,"SELECT * FROM tbl_user where  email='$email'") or die(mysqli_error($con));
        $row = mysqli_fetch_array($sql);
     
        if($row==true){
        	
        //$pno=$row['phonenumber'];
        $email=$row['email'];
        echo "<script>window.location.href='admin/phpmailer/sendmail.php?email=$email';</script>";

        }else{
        	  echo "<script>alert('email does not exists');window.location.href='forgot.php';</script>";

        }
        
        // if($sql == true)
        // {
        //     require('textlocal.class.php');

        //     $textlocal = new Textlocal('vedashreehd1402@gmail.com', 'Vedashree@1421');

        //     $numbers = array($pno);
        //     $sender = 'TXTLCL';
        //     $message = 'Dear User, Your Phone number is matched!! Your password is ' .$pass;

        //     try {
        //         $result = $textlocal->sendSms($numbers, $message, $sender);
        //         print_r($result);
        //     } catch (Exception $e) {
        //         die('Error: ' . $e->getMessage());
        //     }


            // echo"
            // <script>
            // alert('Message Sent....');
            // window.location='loginuser.php';
            // </script>
            // ";
        // }
            
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