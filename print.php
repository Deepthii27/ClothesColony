<?php 
 include('session_user.php'); 
include("connect.php");
	$id = $_GET['oid'];
	$query= mysqli_query($con,"SELECT * FROM `tbl_order`,tbl_user WHERE `tbl_order`.`oid`='$id' and tbl_order.uid=tbl_user.uid");
	$qr=mysqli_fetch_array($query);
?>


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
					 <div class="container">
									
			<div id='DivIdToPrint'>
                <center>
              <table class="table table-bordered table-toprint table-hover" id="tab_logic" style="background-color: white;">
                <thead><tr>
						<th style="text-align: center; line-height: 10%; padding: 2px;" colspan="5">
								<h2> Invoice</h2>
						</th>
						</tr> 
					
					 
					<tr>
					<td colspan="3">
						<p>Clothes Colony</p>
						<p>Mangalore</p>
						<p>Phone:</p>
					
					
					</td> 
					<td colspan="2">
						<h4>Buyer</h4>
						<p>Customer Name:<?php echo $qr['full_name']; ?></p>
						<p>Customer Contact:<?php echo $qr['contact']; ?></p>
						<p>Customer Email:<?php echo $qr['email']; ?></p>
						
					</td>
					
					
		 		
				
		        </tr>
		        <tr>
		        	<th colspan="3"><p>Order date:<?php echo date('d-m-Y',strtotime($qr['odate'])); ?></p></th>
		        	<th colspan="2"><p>Invoice No:<?php echo $qr['Invoiceno']; ?></p></th>
		        </tr>
		        <tr>
		        	<th>Sl.No</th>
		        	<th>Item Name</th>
		        	<th>Price</th>
		        	<th>Quantity</th>
		        	<th>Total</th>

		        </tr>
		        </thead>
		          <tbody>
              	  <?php include("connect.php");
                     
                     $query = mysqli_query($con,"SELECT distinct  tbl_order_details.`qty`, tbl_order_details.`mrp`, tbl_order_details.`total`,item_name FROM `tbl_order_details`,`tbl_item` WHERE tbl_order_details.item_id=tbl_item.item_id and tbl_order_details.`oid` = '$id' ");
                     $i=1;
                    
                     while($row = mysqli_fetch_array($query)){
                  ?>
                  
                  <tr style=" line-height: 90%; font-weight: bold;">

                     <td> <?php echo $i++; ?> </td>
                     <td > <?php echo $row['item_name']; ?> </td>
                     <td style="text-align: right;"> <?php echo $row['mrp']; ?> </td>
                     <td style="text-align: right;"> <?php echo number_format($row['qty'],2); ?> </td>
                     <td style="text-align: right;"> <?php echo number_format($row['total'],2); ?> </td>

                  </tr>
                   <?php } ?>
                  </tbody>
                  
                  
                   <tfoot>

						
						<tr style="font-size: 0.8em;">
						<td colspan="4" style="text-align:left;"><?php 
						$inwrd = $qr['gtotal'];
						echo 'In Words: ';  echo getIndianCurrency($inwrd) .' only'; ?></td>
						<td colspan="1" style="text-align:right;">Grand Total :<b><?php echo number_format($qr['gtotal'],2);?></b></td>
						</tr>
						
						<tr>
							<td colspan="5">Goods once Sold will not be taken back or exchanged</td>
						</tr>
			            
			           </tfoot>
					</table>
				</center>
			</div>	
			<br/> <br/> 
			<center>
			<div class="row">
				<div class="col-md-12 pull-right">
					<input type='button' class="btn btn-primary btn-sm" id='btn' value='Print' onclick='printDiv();'>
				
				<a href="bill.php" class="btn btn-warning btn-sm">Back</a>
				</div>
			</div>
			</center>
		</div>

                     

				</form>
			</div>
		</div>
		<!-- Footer -->
		<footer id="footer" class="footer haslayout">
			
			<div class="footer-description haslayout small-padding-section">
				<div class="container">
					<div class="col-md-6 col-md-offset-3">
						<div class="row">
							
							
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
	<script>
	function printDiv() 
	{
	 
	 	 var divToPrint=document.getElementById('DivIdToPrint');

	    var htmlToPrint = '<head><title></title><style media="print" >tr{page-break-inside: avoid; }</style><link rel="stylesheet" type="text/css" media="screen,print" href="css/bootstrap.css"><link href="font-awesome/css/font-awesome.min.css" media="screen,print" rel="stylesheet" type="text/css"><link href="css/style.css" media="screen,print" rel="stylesheet"><link href="css/bootstrap.min.css" media="screen,print" rel="stylesheet"></head><body>';

	    htmlToPrint += divToPrint.outerHTML;
	    newWin = window.open("");
	    newWin.document.write(htmlToPrint);
	   newWin.focus();
	  
	 	setTimeout(function() {
      newWin.print();
      newWin.close();
                    }, 100);
	}

	
</script>
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
<?php

function getIndianCurrency($number)
{
    $decimal = round($number - ($no = floor($number)), 2) * 100;
    $hundred = null;
    $digits_length = strlen($no);
    $i = 0;
    $str = array();
    $words = array(0 => '', 1 => 'one', 2 => 'two',
        3 => 'three', 4 => 'four', 5 => 'five', 6 => 'six',
        7 => 'seven', 8 => 'eight', 9 => 'nine',
        10 => 'ten', 11 => 'eleven', 12 => 'twelve',
        13 => 'thirteen', 14 => 'fourteen', 15 => 'fifteen',
        16 => 'sixteen', 17 => 'seventeen', 18 => 'eighteen',
        19 => 'nineteen', 20 => 'twenty', 30 => 'thirty',
        40 => 'forty', 50 => 'fifty', 60 => 'sixty',
        70 => 'seventy', 80 => 'eighty', 90 => 'ninety');
    $digits = array('', 'hundred','thousand','lakh', 'crore');
    while( $i < $digits_length ) {
        $divider = ($i == 2) ? 10 : 100;
        $number = floor($no % $divider);
        $no = floor($no / $divider);
        $i += $divider == 10 ? 1 : 2;
        if ($number) {
            $plural = (($counter = count($str)) && $number > 9) ? 's' : null;
            $hundred = ($counter == 1 && $str[0]) ? ' and ' : null;
            $str [] = ($number < 21) ? $words[$number].' '. $digits[$counter]. $plural.' '.$hundred:$words[floor($number / 10) * 10].' '.$words[$number % 10]. ' '.$digits[$counter].$plural.' '.$hundred;
        } else $str[] = null;
    }
    $Rupees = implode('', array_reverse($str));
    $paise = ($decimal) ? "." . ($words[$decimal / 10] . " " . $words[$decimal % 10]) . ' Paise' : '';
    return ($Rupees ? $Rupees . 'rupees ' : '') . $paise;
}
    ?>
