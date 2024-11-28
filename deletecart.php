<?php include('session_user.php'); ?>
    <?php
	include('connect.php');
		$cat=$_GET['delcart'];
		

		$sql=mysqli_query($con,"DELETE FROM `tbl_cart` WHERE cartid='$cat'") or die(mysqli_error());
		if($sql)
		{

			echo '<script>alert("succefully Deleted"); window.location="cart.php";</script>';
		}else
		{
				
				echo '<script>alert("Failed to Delete"); window.location="cart.php";</script>';
			

		}
?>
    