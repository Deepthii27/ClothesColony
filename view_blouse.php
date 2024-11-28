<?php include('session_user.php');
$id=$_GET['last_id'];?>
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
	<link rel="stylesheet" type="text/css" href="css/dataTables.bootstrap.min.css">
	<link rel="stylesheet" type="text/css" href="css/datatables.css">
	<link rel="stylesheet" type="text/css" href="css/datatables.min.css">
	<link rel="stylesheet" href="css/transitions.css">
	<link rel="stylesheet" href="css/main.css">
	<link rel="stylesheet" href="css/responsive.css">
	<link rel="stylesheet" href="css/color.css">
	<script src="js/vendor/modernizr-2.8.3-respond-1.4.2.min.js"></script>
	<style type="text/css">
	</style>
</head>
<body class="home" style="background-image: url('../photos/IMG-20190326-WA0043.jpg'); background-size:100% 100%; background-repeat: no-repeat; ">
	<div id="wrapper">
		<?php include('header_user.php');?>
		<div id="main" class="haslayout padding-section products-listing product-page">
			<div class="container">
				<div class="row form-group">
							<div class="table-responsive">
						<table class="table table-bordered " >
							<thead>
								<tr>
								
								<th>Material Name</th>
								<th>Quantity</th>
								<th>Book Date</th>
								<th>Delivery Date</th>
								<th>Colour</th>
								<th>Sleeve Length</th>
								<th>Around Bust</th>
								<th>Around Bottom of Blouse</th>
								<th>Shoulder to Bust</th>
								<th>Front Neck Depth</th>
								<th>Armhole Circumference</th>
								<th>Around Arm</th>
								<th>Shoulder</th>
								<th>Neck to Shoulder</th>
								<th>Blouse Length</th>
								<th>Back Neck Depth</th>
								<th>Size</th>
								<th>comment</th>
								<th>Image</th>	
							</tr>
						</thead>
					<tbody>
<?php
include('connect.php');
$user=$_SESSION['u_id'];
$i=1;
$query=mysqli_query($con,"SELECT d.*,m.m_id,m.m_type from `tbl_blouse` d inner join tbl_material m on m.m_id=d.m_id  where b_id='$id'  ") or die(mysqli_error($con));
while ($row=mysqli_fetch_array($query)) {?>
<tr>
	<td><?php echo $row['m_type'];?></td>
	<td><?php echo $row['qty'];?></td>
	<td><?php echo date('d-m-Y',strtotime($row['book_date']));?></td>
	<td><?php echo date('d-m-Y',strtotime($row['delivery_date']));?></td>
	 <td><?php $col=$row['colour'];?>
		<div style="background-color: <?php echo $col;?>; height: 30px; width: 30px; border: 1px solid white;"></div>
	</td>
	<td><?php echo $row['SL'];?></td>
	<td><?php echo $row['AB'];?></td>
	<td><?php echo $row['ABOB'];?></td>
	<td><?php echo $row['SB'];?></td>
	<td><?php echo $row['FND'];?></td>
	<td><?php echo $row['AOC'];?></td>
	<td><?php echo $row['AA'];?></td>
	<td><?php echo $row['shoulder'];?></td>
	<td><?php echo $row['NtoS'];?></td>
	<td><?php echo $row['BL'];?></td>
	<td><?php echo $row['BND'];?></td>
	<td><?php echo $row['size'];?></td>
	<td><?php echo $row['comment'];?></td>
	<td>

			 			<!-- <img src="photos/<?php $img=explode(',', $row['image']); $image=$img[0];
			 			echo $image;?>" width="60" height="60"> -->

			 			<?php 
			 							
										$splittedstring=explode(",",$row['image']);
										foreach ($splittedstring as $key => $value) 
										{
												
										?>
										<img src="photos/<?php echo $value ?>" width="60" height="60">			
										
										<?php
										}
			 							?>

			 			</td>

</tr>
<?php	}?>
</tbody>
</table>	
</div>
</div>
</div>
</div>
</div>
<br>

<?php include('footer_user.php');?>
	<script src="js/vendor/jquery-1.11.3.min.js"></script>
	<script type="text/javascript" src="js/jquery-1.12.4.js"></script>
	<script type="text/javascript" src="dataTables.bootstrap.min.js"></script>
	<script type="text/javascript" src="datatables.js"></script>
	<script type="text/javascript" src="dataTables.min.js"></script>

	<script type="text/javascript" src="js/jquery.dataTables.min.js"></script>
	<script type="text/javascript">
		$(document).ready(function(){
			$('#example').DataTable();
		});
	</script>
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