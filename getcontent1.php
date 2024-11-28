<?php
include("connect.php");
$cid = $_GET['cid'];

//get tax
$query = mysqli_query($con,"SELECT * FROM `tbl_material` WHERE m_id = '$cid'") or die(mysqli_error($con));
$row = mysqli_fetch_array($query);

	
	echo $row['m_amount'];
?>