<?php 



 include('session_user.php');
 
include('connect.php');
?>
<!doctype html>
<!--[if lt IE 7]>       <html class="no-js lt-ie9 lt-ie8 lt-ie7" lang=""><![endif]-->
<!--[if IE 7]>          <html class="no-js lt-ie9 lt-ie8" lang=""><![endif]-->
<!--[if IE 8]>          <html class="no-js lt-ie9" lang=""><![endif]-->
<!--[if gt IE 8]><!-->  <html class="no-js" lang=""><!--<![endif]-->

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
<body style="background-image: url('photos/IMG-20190326-WA0043.jpg'); background-size:100% 100%; background-repeat: no-repeat; ">
        <div id="wrapper">
        
        <?php include('header_user.php');?>
        <div id="main" class="haslayout padding-section">
            <div class="container">
                    <fieldset>
                     

 <table class="table table-bordered table-striped table-hover">
                    <tr>
                        <th>SL.NO</th>
                        
                        <th>Product Name</th>
                        <th>Qty</th>
                        <th>Mrp</th>
                        <th>Total</th>
                       
                        <th>Bill Date</th>
                        <th>Status</th>
                    
                    </tr>
                <?php
                    include('connect.php');$i=1;
                    
                    $sql1=mysqli_query($con,"select tbl_order.*,tbl_order_details.*,tbl_user.uid,tbl_item.item_id,tbl_item.item_name from `tbl_order`,tbl_user,tbl_order_details,tbl_item where tbl_user.uid=tbl_order.uid  and tbl_order_details.oid=tbl_order.oid and tbl_order_details.item_id=tbl_item.item_id and tbl_order.uid='$user'") or die(mysqli_error($con));
                    while($rr=mysqli_fetch_array($sql1)) {
                    ?>
                    
                <tr>
                    
                    <td> <?php echo $i++; ?></td>
                     <td> <?php echo $rr['item_name']; ?></td>
                    <td><?php echo $rr['qty']; ?></td>

                    <td><?php echo $rr['mrp']; ?></td>
                    
                    <td><?php echo $rr['total']; ?></td>
                    
                    
                    
                    
                  
                    <td><?php echo date('d-m-Y',strtotime($rr['odate']));?></td>
                    <td> <?php echo $rr['status']; ?></td>
                    
</td>

            
                    
                    
                </tr>
<?php
     }
?>
                    </table>
                        

                        
                    </fieldset>
                </form>
            </div>
        </div>
        <!-- Footer -->
       <footer id="footer" class="footer haslayout">
            
            <div class="footer-description haslayout small-padding-section" style="background-color:pink ">
                <div class="container">
                    <div class="col-md-6 col-md-offset-3">
                        <div class="row">
                            <strong class="logo">
                                <a href="index.html">
                                    <img src="photos/nwlogo.jpg" style="height:110px;width:150px;" alt="image description">
                                </a>
                            </strong>
                            <div class="description">
                                <p><br>Buy and Design your dress online<br>Think india were India</p>
                            </div>
                            <span class="copyright"> <a href="#"></a></span>
                        </div>
                    </div>
                </div>
            </div>
            
        </footer>
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


</html> 


