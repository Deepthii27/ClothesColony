<?php include('session_user.php');

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
						<table class="table cart-table">
							<tr>
                <th>SL.NO</th>
                <th>Product</th>
                <th>Quantity</th>
                <th>Price </th>
               
                <th>Total </th>
                <th>Action </th>
                
              </tr>
            <?php
              include('connect.php');$i=1;
              
              $sql1=mysqli_query($con,"SELECT tbl_cart.`qty`,tbl_cart.`price`,tbl_item.`item_id`,cartid,tbl_cart.`total`,item_image FROM `tbl_cart`,`tbl_item` WHERE tbl_cart.`uid`='$user' and tbl_cart.item_id=tbl_item.item_id and tbl_cart.`status`='in_cart'") or die(mysqli_error($con)); $ntotal=0;
              while($rr=mysqli_fetch_array($sql1)) { $prid=$rr['item_id'];
              ?>
          <form action="upcart.php?cid=<?php echo $rr['cartid']; ?>" method="post">
            <tr>
              <td><?php echo $i++;?></td>
              <td><img src="admin/photos/<?php echo $rr['item_image']; ?>" height="70" width="70" class="img-circle">
               </td>
              <td><input type="number" name="qty" id="qty" value="<?php echo $rr['qty']; ?>" readonly style="width: 65px;" class="form-control"></td>
              <td><input type="text" name="price" id="price" value="<?php echo $rr['price']; ?>" style="width: 85px;" class="form-control" readonly></td>
             
              <td><input type="text" name="total" id="total" value="<?php echo $rr['total']; ?>" style="width: 135px;" class="form-control" readonly></td>
              <td> <a href="deletecart.php?delcart=<?php echo $rr['cartid']; ?>" class="btn btn-danger"><i class="fa fa-trash"></i></a></td>
            </tr>
            </form>
            <?php $ntotal=$ntotal + $rr['total']; } ?>
            <form action="" method="post">
            <tr>
              <th colspan="5" style="text-align:center; ">Grand Total</th>
              <td colspan="6" >Rs. <input type="text" name="gtotal" id="gtot" value="<?php echo $ntotal; ?>" readonly><br><input type="submit" name="calculate" class="btn btn-warning" value="Confirm Order"></td>
            </tr>
            </form>
            <?php include('connect.php');
                if(isset($_POST['calculate']))
                      {
                        if($_POST['gtotal']=='0')
                        {
                          echo '<script>alert("Sorry, your cart is empty");  </script>';
                        }
                        else
                        {
                        $gtotal=$_POST['gtotal'];
                        $sl=mysqli_query($con,"SELECT * FROM tbl_order ORDER BY invoiceno DESC limit 1"); 
						$rws=mysqli_num_rows($sl);
						$read=mysqli_fetch_array($sl);
						if($rws>0)
						{
							$inno=++$read['invoiceno'];
						}
						else
						{
							$inno='IN001';
						}
                        $sq=mysqli_query($con,"INSERT INTO `tbl_order`(`oid`, `uid`, `odate`, `gtotal`, `status`,`invoiceno`) VALUES ('','$user',now(),'$gtotal','ordered','$inno')");
                        $oid=mysqli_insert_id($con);
                        $qry=mysqli_query($con,"select * from tbl_cart where uid='$user' and status='in_cart'");
                        
                        while ($row=mysqli_fetch_array($qry)) {
                          $cartid=$row['cartid'];
                          $qty=$row['qty'];
                          $price=$row['price'];
                          $prid=$row['item_id'];
                          
                          $total=$row['total'];

                          $sql=mysqli_query($con,"INSERT INTO `tbl_order_details`(`odid`, `oid`, `item_id`, `qty`, `mrp`, `total`) VALUES ('','$oid','$prid','$qty','$price','$total')");
                          $exe=mysqli_query($con,"UPDATE tbl_cart SET status='ordered' where cartid='$cartid'");
                        }
                        
                                    
                        echo '<script>alert("Your order has been placed"); window.location="payoption.php?oid='.$oid.'&&payamt='.$gtotal.'";  </script>';
                                    
                      }
                  }

            ?>

              </table>
                
						
					</fieldset>
				</form>
			</div>
		</div>
		<!-- Footer -->
		<footer id="footer" class="footer haslayout">
			
			<div class="footer-description haslayout small-padding-section">
				<div class="container">
					<div class="col-md-6 col-md-offset-3">
						<div class="row">
							<strong class="logo">
								<a href="index.html">
									<img src="photos/nwlogo.jpg" alt="image description">
								</a>
							</strong>
							<div class="description">
								<h2>Clothes Colony</h2>
							</div>
							<span class="copyright"><a href="#"></a></span>
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