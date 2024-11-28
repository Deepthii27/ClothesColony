<?php 
include('session_user.php'); 
include('connect.php');
	$c_id=$_GET['cid'];
	
		$qty=$_POST['qty'];
		$price=$_POST['price'];
		
		$total=($qty * $price);
		

		$sql=mysqli_query($con,"update tbl_cart set qty='$qty',price='$price',total='$total' where cartid='$c_id' and uid='$user'") or die(mysqli_error());
		if($sql)
						 		{
						 			echo '<script> window.location="cart.php";</script>';
						 		}
						 		else{
						 			echo '<script>window.location="cart.php";  </script>';
						 		}
	

	


 ?>