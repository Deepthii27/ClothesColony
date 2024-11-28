					<div class="table-responsive">
						<table class="table table-bordered" >
							
							<thead>
								<tr>
								
								<th>Material Name</th>
								<th>Quantity</th>
								<th>Book Date</th>
								<th>Delivery Date</th>
								<th>Colour</th>
								<th>Sleeve Length</th>
								<th>sleeve Width</th>
								<th>Chest</th>
								<th>Waist</th>
								<th>Hip</th>
								<th>Bodice</th>
								<th>Sklength</th>
								<th>Length</th>
								<th>Sweep</th>
								<th>Shoulder</th>
							    <th>Size</th>
							    <th>Comment</th>
								<th>Image</th>
								<th>Status</th>
								
							</tr>
						</thead>
					<tbody>
<?php
include('connect.php');
include 'session_user.php';
$user=$_SESSION['u_id'];
$i=1;
$query=mysqli_query($con,"SELECT f.*,m.m_id,m.m_type from `tbl_frock` f inner join tbl_material m on m.m_id=f.m_id    where uid='$user' ") or die(mysqli_error($con));
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
	<td><?php echo $row['SW'];?></td>
	<td><?php echo $row['chest'];?></td>
	<td><?php echo $row['waist'];?></td>
	<td><?php echo $row['hip'];?></td>
	<td><?php echo $row['bodice'];?></td>
	<td><?php echo $row['SKlength'];?></td>
	<td><?php echo $row['length'];?></td>
	<td><?php echo $row['sweep'];?></td>
	<td><?php echo $row['shoulder'];?></td>
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
			 			<td><?php echo $row['status'];?></td>
	
</tr>
<?php	}?>
</tbody>

</table>	
</div>
</div>
