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
		color:white;
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
</head>

<body style="background-image: url('photos/register2.jpg'); background-size:100% 100%; background-repeat: no-repeat:">
	<div id="wrapper" >
		<div id="main" class="haslayout padding-section" >
			<div class="container" >
				<a  href="index.php"><button style="margin-left:850px;width:250px;" type="submit" class="theme-btn btn-small" >Home</button></a>
				<form class="login-form creataccount-form" action="" method="POST" enctype="multipart/form-data">
					<fieldset >
						<div class="border-left"><h2 style="color: white;">USER REGISTRATION FORM</h2></div>

						<div class="row">
							<div class="form-group col-sm-6 col-xs-12">
								<label>Full Name</label>
								<input  type="text" name="fname" class="form-control" placeholder="Enter full name">
							</div>
							<div class="form-group col-sm-6 col-xs-12">
								<label>Image:</label>
								<input type="file" name="image" class="form-control" ><br>
							</div>
						</div>
						<div class="row">
							<div class="form-group col-sm-6 col-xs-12">
								<label>Email Address:</label>
								<input type="email" class="form-control" name="uemail" placeholder="Enter email adress" pattern="[a-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2,4}$" title="xyz@something.com" requiwhite /><br>
							</div>
							<div class="form-group col-sm-6 col-xs-12">
								<label>Phone No:</label>
								<input type="tel" class="form-control" name="phone" placeholder="Enter phone number" pattern="[5-9]{1}[0-9]{9}" title="only numerics" requiwhite /><br>
							</div>
						</div>
						<div class="row">
						<div class="form-group col-sm-6 col-xs-12" style="color:white;">
							<label >Gender:</label>
							<input type="radio" name="gender" value="male" >Male&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<br>
							<input type="radio" name="gender" value="female"  >Female<br>
						</div>
						<div class="form-group col-sm-6 col-xs-12" style="color:white;" >
							<label>Address:</label><br>
							<textarea  style="color:white;" name="add" rows="1" placeholder="Enter proper adress"></textarea><br>
						</div>
						</div>
						<div class="row">
							<div class="form-group col-sm-6 col-xs-12">
								<label>Password:</label>
								<input type="password" name="pass"class="form-control" placeholder="Enter valid password">
							</div>
							<div class="form-group col-sm-6 col-xs-12">
								<label>Confirm Password</label>
								<input type="password" name="cpass" class="form-control" placeholder="Enter valid password">
							</div>
						</div>
						
						<div class="form-group col-sm-6 col-xs-6 full-widthsx">
							<button  style="width: 1000px;margin-left: 50px;" type="submit" class="theme-btn btn-small" name="submit">Register</button>
						</div>
					</div>
				</fieldset>
			</form>
			<div class="row">
				
				<div class="form-group col-sm-6 col-xs-6 full-widthsx">
					<a href="loginuser.php"><button type="submit" class="theme-btn btn-small" style="margin-left:550px;width: 250px;" >Login</button></a>
			
				</div>
				<div class="col-md-3"></div>
			</div>
			
		</div>
	</div>
<?php			
include('connect.php');
if(isset($_POST['submit']))
{
    $file = rand(1000,100000)."-".$_FILES['image']['name'];
    $file_loc = $_FILES['image']['tmp_name'];
    $file_size = $_FILES['image']['size'];
    $imgtype = $_FILES['image']['type'];
    $folder="Photos/";
    $new_size = $file_size/2048;  
    $new_file_name = strtolower($file);
    $final_file=str_replace(' ','-',$new_file_name);
    if($imgtype != "image/jpg" && $imgtype != "image/png" && $imgtype != "image/jpeg" ) 
    {
        echo "<script>alert('File type is not compatible');</script>";
    }
    else 
    {
        if(move_uploaded_file($file_loc,$folder.$final_file))
        {                      
			$fullname=$_POST['fname'];
			$address=$_POST['add'];
			$Gender=$_POST['gender'];
			$Uemail=$_POST['uemail'];
			$Phone=$_POST['phone'];
			$password=$_POST['pass'];
			$changepas=$_POST['cpass'];
			if($password==$changepas)
			{
				$qry=mysqli_query($con,"INSERT INTO `tbl_user`(`uid`, `full_name`, `contact`, `gender`, `address`,`email`, `password`, `image`) VALUES ('','$fullname','$Phone','$Gender','$address','$Uemail','$password','$final_file')")or die(mysqli_error($con));
				  	if($qry)
				        {
				            echo "<script>alert('information added succefully');window.location='index.php';</script>";

				        }
				        else
				        {           
				            echo "<script>alert('Failed to add information');window.location='User_login.php';</script>";
				        }
			}
			else
			{
				echo "<script>alert('Password and Confirm Password Mismatch');window.location='User_login.php';</script>";
			}
		}
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