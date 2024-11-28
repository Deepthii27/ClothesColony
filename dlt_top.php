<?php

include('connect.php'); 
$F_id=$_GET['fid'];
$qry=mysqli_query($con,"delete from tbl_design where fabric_id='$F_id'")or die(mysqli_error($con));
if($qry)
{
	echo '<script>
		alert("Deleted successfully!!"); window.location="view_top.php";
		</script>';
}
else
{
		echo '<script>
		alert("Unsuccessful"); window.location="view_top.php";
		</script>';
}

?>