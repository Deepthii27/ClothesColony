<?php 

 include('session_user.php');?>
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
<body class="home" style="background-image: url('photos/c13.jpg'); background-size:100% 100%; background-repeat: no-repeat; ">
	<div id="wrapper">
		<?php include 'header_user.php';?>
		<div id="main" class="haslayout padding-section" style="padding:0px;">
			<div class="container">
				<form class="login-form creataccount-form" action="" method="POST" enctype="multipart/form-data">
					<fieldset>
						<div class="border-left"><h2>BLOUSE MEASURMENT</h2></div>
						<div class="row">
							<div class="form-group col-sm-6 col-xs-12">
								<label>Meterial Type:</label>
								<select  name ="mtype" class="form-control" onchange="showContent(this.value)">
							        <option value="">Select Material type</option>
							        <?php 
							        include('connect.php');
							        $q=mysqli_query($con,"SELECT * from tbl_material ");
							        while($r=mysqli_fetch_array($q)){
							        	?>
							        	<option value="<?php echo $r['m_id'];?>"><?php echo $r['m_type'];?></option>
							        	<?php
							        }
							        ?>
     							</select>
     						</div>
							 <div class="form-group col-sm-6 col-xs-12">
								<label>Choose Design:</label>
								<select  name ="mtype" class="form-control" >
							        <option value="">Select Design type</option>
							        <?php 
							        include('connect.php');
							        $q=mysqli_query($con,"SELECT * from tbl_design_data ");
							        while($r=mysqli_fetch_array($q)){
							        	?>
							        	<option value="<?php echo $r['design_id'];?>"><?php echo $r['design_name'];?></option>
							        	<?php
							        }
							        ?>
     							</select>
     						</div>
     						<div class="form-group col-sm-6 col-xs-12">
								
								<label>Material Price:</label>
								<input type="text" class="form-control" name="mprice" placeholder="" id="mprice" readonly=""><br>
							</div>	
							<div class="form-group col-sm-6 col-xs-12">
								<label>Quantity:</label>
								<input type="text" class="form-control" name="qty" placeholder="Quantity" required="" onchange="quantity(this.value)" autocomplete="off" pattern="[0-9]{1}" title="only numerics" ><br>
							</div>
							<script>
									function quantity(q){
								
									var p=document.getElementById("mprice").value;
								
									var t=q*p;
									
								
									document.getElementById("mprice").value=t;

								}
							</script>
						
							<div class="form-group col-sm-6 col-xs-12">
								<label>Book Date:</label>
								<input type="date" class="form-control" name="bdate" placeholder="" value="<?php echo date('Y-m-d');?>" min="<?php echo date('Y-m-d');?>"><br>
							</div>

							<div class="form-group col-sm-6 col-xs-12">
								<label>delivery Date:</label>
								<input type="date" class="form-control" name="ddate" placeholder="" min="<?php echo date('Y-m-d');?>"><br>
							</div>
							
							<div class="form-group col-sm-6 col-xs-12">
								<label>Sleeve Length:</label>
								<input type="text" class="form-control" name="slength" placeholder="Sleeve Length" required="" autocomplete="off"><br>
							</div>
							<div class="form-group col-sm-6 col-xs-12">
								<label>Around Bust:</label>
								<input type="text" class="form-control" name="AB" placeholder="Around Bust" required="" autocomplete="off"><br>
							</div>
							<div class="form-group col-sm-6 col-xs-12">
								<label>Arround bottom of blouse:</label>
								<input type="text" class="form-control" name="abob" placeholder="Arround bottom of blouse" required="" autocomplete="off"><br>
							</div>
							<div class="form-group col-sm-6 col-xs-12">
								<label>Shoulder to Bust:</label>
								<input type="text" class="form-control" name="stb" placeholder="Shoulder to bust" required="" autocomplete="off"><br>
							</div>
							<div class="form-group col-sm-6 col-xs-12">
								<label>Front neck Depth:</label>
								<input type="text" class="form-control" name="fnd" placeholder="Front Neck depth" required="" autocomplete="off"><br>
							</div>
								<div class="form-group col-sm-6 col-xs-12">
								<label>Armhole Circumference:</label>
								<input type="text" class="form-control" name="ac" placeholder="Armhole circumference" required="" autocomplete="off"><br>
							</div>
							<div class="form-group col-sm-6 col-xs-12">
								<label>Arround Arm:</label>
								<input type="text" class="form-control" name="aa" placeholder="Arround arm" required="" autocomplete="off"><br>
							</div>
							<div class="form-group col-sm-6 col-xs-12">
								<label>Shoulder:</label>
								<input type="text" class="form-control" name="shoulder" placeholder="Shoulder" required="" autocomplete="off"><br>
							</div>

							<div class="form-group col-sm-6 col-xs-12">
								<label>Neck to shoulder:</label>
								<input type="text" class="form-control" name="nts" placeholder="Neck to shoulder" required="" autocomplete="off"><br>
							</div>
							<div class="form-group col-sm-6 col-xs-12">
								<label>Blouse length:</label>
								<input type="text" class="form-control" name="bl" placeholder="Blouse length" required="" autocomplete="off"><br>
							</div>
							<div class="form-group col-sm-6 col-xs-12">
								<label>Back neck Depth:</label>
								<input type="text" class="form-control" name="bnd" placeholder="Back neck depth" required="" autocomplete="off"><br>
							</div>
							

							<div class="form-group col-sm-6 col-xs-12">
								<label>Comment:</label>
								<textarea name="cmt" rows="4" required="" autocomplete="off" placeholder="Comment"></textarea><br>
							</div>
							<div class="form-group col-sm-6 col-xs-12">
								<label>Material Color:</label>
								<input type="color" class="form-control" name="colour" placeholder="" required="" autocomplete="off"><br>	
							</div>
							<div class="form-group col-sm-6 col-xs-12">
								<label> Upload Pattern:</label>
								<input type="file" name="files[]" multiple="" class="form-control"><br>
							</div>
							<div class="form-group col-sm-6 col-xs-12">
								<label> Choose the Size(for reference):</label>
								<select name="size">
									<option selected disabled>Select the Size</option>
									<option value="Small">Small</option>
									<option value="Medium">Medium</option>
									<option value="Large">Large</option>
									<option value="XL">XL</option>
									<option value="XXl">XXL</option>
									<option value="XXXL">XXXL</option>
								</select>
							</div>
							
							
						</div>
						</div>
						<div class="form-group col-sm-6 col-xs-6 full-widthsx">
							<button type="submit" class="theme-btn btn-small" name="submit">Apply</button>
						</div>
					</fieldset>
				</form>
					</div>
				
			
		</div>
	</div>
<?php			
include('connect.php');
$user=$_SESSION['u_id'];
if(isset($_POST['submit']))
    {
        $targetDir = "photos/";
        $allowTypes = array('jpg','png','jpeg','gif');
        $statusMsg = $errorMsg = $insertValuesSQL = $errorUpload = $errorUploadType = '';
        $Mtype=$_POST['mtype'];
        $Qty=$_POST['qty'];
        $Bookdate=$_POST['bdate'];
        $Deliverydate=$_POST['ddate'];
        $colour=$_POST['colour'];
        $slength=$_POST['slength'];
		$ab=$_POST['AB'];
		$abob=$_POST['abob'];
		$stb=$_POST['stb'];
		$fnd=$_POST['fnd'];
        $ac=$_POST['ac'];
        $aa=$_POST['aa'];
        $shoulder=$_POST['shoulder'];
        $Nts=$_POST['nts'];
        $BL=$_POST['bl'];
        $bnd=$_POST['bnd'];
        $cmt=$_POST['cmt']; 
         $mprice=$_POST['mprice'];                              
         $did=$_POST['did'];                              
         $size=$_POST['size'];                              
        foreach($_FILES['files']['name'] as $key=>$val){
            // File upload path
            $fileName = basename($_FILES['files']['name'][$key]);
            $targetFilePath = $targetDir . $fileName;
            
            // Check whether file type is valid
            $fileType = pathinfo($targetFilePath,PATHINFO_EXTENSION);
            if(in_array($fileType, $allowTypes)){
                // Upload file to server
                if(move_uploaded_file($_FILES["files"]["tmp_name"][$key], $targetFilePath)){
                    // Image db insert sql
                    $insertValuesSQL .=$fileName.',';
                }else{
                    $errorUpload .= $_FILES['files']['name'][$key].',';
                }
            }else{
                $errorUploadType .= $_FILES['files']['name'][$key].',';
            }
        }
        
        if(!empty($insertValuesSQL)){
            $insertValuesSQL = trim($insertValuesSQL,',');
            // Insert image file name into database
            // $insert = mysqli_query($con,"INSERT INTO `tbl_design`(`fabric_id`, `m_id`, `qty`, `colour`, `cust_id`, `comment`, `book_date`, `delivery_date`, `NtoSM`, `BL`, `SL`, `AB`, `ABOB`, `SB`, `FND`, `AOC`, `AA`, `Shoulder`, `BND`, `front_image`) VALUES ('','$Mtype','$Qty','$colour','$user','$cmt','$Bookdate','$Deliverydate','$Nts','$BL','$slength','$ab','$abob','$stb','$fnd','$ac','$aa','$shoulder','$bnd','$insertValuesSQL')") or die(mysqli_error($con));
           
 $insert = mysqli_query($con,"INSERT INTO `tbl_blouse`(`b_id`, `m_id`, `qty`, `book_date`, `delivery_date`, `colour`, `SL`, `AB`, `ABOB`, `SB`, `FND`, `AOC`, `AA`, `shoulder`, `NtoS`, `BL`, `BND`, `comment`, `image`, `uid`,`materialprice`,`design_id`,`size`) VALUES ('','$Mtype','$Qty','$Bookdate','$Deliverydate','$colour','$slength','$ab','$abob','$stb','$fnd','$ac','$aa','$shoulder','$Nts','$BL','$bnd','$cmt','$insertValuesSQL','$user','$mprice','$did','$size')") or die(mysqli_error($con));


            if($insert){
                $errorUpload = !empty($errorUpload)?'Upload Error: '.$errorUpload:'';
                $errorUploadType = !empty($errorUploadType)?'File Type Error: '.$errorUploadType:'';
                $errorMsg = !empty($errorUpload)?'<br/>'.$errorUpload.'<br/>'.$errorUploadType:'<br/>'.$errorUploadType;
                $last_id=mysqli_insert_id($con);

              echo '<script> alert("Details are uploaded successfully.");window.location="view_blouse.php?last_id='.$last_id.'";</script>';
            }
            
            else
            {
              echo '<script> alert("Sorry, there was an error uploading your details.");window.location="blouse.php";</script>';
            }
            }
    
  }

?>
<script src="js/vendor/jquery-1.11.3.min.js"></script>
<script src="js/vendor/bootstrap.min.js"></script>
<script>
        function showContent(a) {
          
            
          if (window.XMLHttpRequest) {
            // code for IE7+, Firefox, Chrome, Opera, Safari
            xmlhttp=new XMLHttpRequest();
          } else { // code for IE6, IE5
            xmlhttp=new ActiveXObject("Microsoft.XMLHTTP");
          }
          xmlhttp.onreadystatechange=function() {
            if (this.readyState==4 && this.status==200) {
              var vals=this.responseText;
         
              var arr=vals.split("|");
             
              
              document.getElementById('mprice').value=arr[0];
             
            }
          }
          xmlhttp.open("GET","getcontent1.php?cid="+a,true);
          xmlhttp.send();
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
	<?php include('footer_user.php');?>

</html>