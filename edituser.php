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
<body class="home"  onload="showFashion1()" style="background-image: url('photos/IMG-20190326-WA0043.jpg'); background-size:100% 100%; background-repeat: no-repeat; ">
	
	<div id="wrapper">
	<?php include('header_user.php');?>
		<div id="main" class="haslayout padding-section" >
			<div class="container">
				<form class="login-form creataccount-form" action="" method="POST" enctype="multipart/form-data">
					<fieldset>
						<div class="border-left"><h2>USER REGISTRATION FORM</h2></div>
						<div class="row">
							<div class="form-group col-sm-6 col-xs-12">
								<label>Full Name</label>
								<input type="text" class="form-control" name="fname" value="<?php echo $rows['full_name'];?>" >
							</div>
							<div class="form-group col-sm-6 col-xs-12">
								<label>Image:</label>
								 <img src="photos/<?php echo $rows['image']; ?>" alt="No Image" height="100" width="200" class="img-rounded" >
							<input type="file" name="image" class="form-control"><br>
							</div>
						</div>
						<div class="row">
							<div class="form-group col-sm-6 col-xs-12">
								<label>Email Address:</label>
								<input type="text" class="form-control" name="email" value="<?php echo $rows['email'];?>" >
							</div>
							<div class="form-group col-sm-6 col-xs-12">
								<label>Phone No:</label>
								<input type="tel" class="form-control" name="phone" value="<?php echo $rows['contact'];?>">
							</div>
						</div>
						<div class="row">
						<div class="form-group col-sm-6 col-xs-12">
							<label>Gender:</label>
							<input type="radio" name="gender" value="male"<?php if($rows['gender']=="male"){ echo "checked";}?>>Male
								<input type="radio" name="gender" value="female"<?php if($rows['gender']=="female"){echo "checked";}?> >Female
						</div>
						<div class="form-group col-sm-6 col-xs-12" >
							<label>Address:</label><br>
							<textarea name="add" rows=4 ><?php echo ($rows['address']);?></textarea><br>
						</div>
						</div>
						
						<div class="form-group col-sm-6 col-xs-6 full-widthsx">
							<a href="edituser.php"><button type="submit" class="theme-btn btn-small" name="submit">Register changed</button></a>
						</div>
					</div>
				</fieldset>
			</form>	
		</div>
	</div>
<?php			
include('connect.php');
if(isset($_POST['submit']))
{
    if(isset($_FILES['image']['name']))
    {
    	$file = rand(1000,100000)."-".$_FILES['image']['name'];
    	$file_loc = $_FILES['image']['tmp_name'];
    	$file_size = $_FILES['image']['size'];
    	$imgtype = $_FILES['image']['type'];
    	$folder="Photos/";
    	$new_size = $file_size/2048;  
    	$new_file_name = strtolower($file);
    	$final_file=str_replace(' ','-',$new_file_name);

    	if(move_uploaded_file($file_loc,$folder.$final_file))
    	{           

    		$fullname=$_POST['fname'];
    		$Uemail=$_POST['email'];
    		$Phone=$_POST['phone'];
    		$Gender=$_POST['gender'];
    		$address=$_POST['add'];
    		$qry=mysqli_query($con,"UPDATE `tbl_user` SET`full_name`='$fullname',`contact`='$Phone',`gender`='$Gender',`address`='$address',`email`='$Uemail',`image`='$final_file' WHERE  `uid`='$user'") or die(mysqli_error($con));
    		if($qry)
    		{
    			echo "<script>alert('Done'); </script>";
    		}
    		else{
    			echo "<script>alert('Failed); </script>";
    		}

    	}
    }  

    $fullname=$_POST['fname'];
    $Uemail=$_POST['email'];
    $Phone=$_POST['phone'];
    $Gender=$_POST['gender'];
    $address=$_POST['add'];
    $qry=mysqli_query($con,"UPDATE `tbl_user` SET`full_name`='$fullname',`contact`='$Phone',`gender`='$Gender',`address`='$address',`email`='$Uemail' WHERE  `uid`='$user'") or die(mysqli_error($con));
    if($qry)
    {
    	echo "<script>alert('Done'); </script>";
    }
    else{
    	echo "<script>alert('Failed); </script>";
    }
}
?>
                                                



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