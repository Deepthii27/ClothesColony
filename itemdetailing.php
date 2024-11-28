<?php include('session_user.php');
include('connect.php');
$Iid=$_GET['I_id'];
$sql=mysqli_query($con,"SELECT t.*,c.* FROM `tbl_item` t inner join tbl_cate c on c.cid=t.cid WHERE item_id='$Iid'") or die(mysqli_error($con));
		$rows=mysqli_fetch_array($sql);?>
<!doctype html>
<!--[if lt IE 7]>		<html class="no-js lt-ie9 lt-ie8 lt-ie7" lang=""> <![endif]-->
<!--[if IE 7]>			<html class="no-js lt-ie9 lt-ie8" lang=""> <![endif]-->
<!--[if IE 8]>			<html class="no-js lt-ie9" lang=""> <![endif]-->
<!--[if gt IE 8]><!-->	<html class="no-js" lang=""> <!--<![endif]-->

<!-- Mirrored from 786themes.net/html/alteration/product-detail.html by HTTrack Website Copier/3.x [XR&CO'2014], Sat, 22 Dec 2018 06:56:58 GMT -->
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
		.xxl:hover{
			color: blue;
			border: 2px solid grey;

		}
	</style>
</head>
<body>
	<!--[if lt IE 8]>
		<p class="browserupgrade">You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade your browser</a> to improve your experience.</p>
	<![endif]-->
	<!-- Wrapper Start -->
	<div id="wrapper">
		<!-- Header Start -->
	<?php include('header_user.php');?>
		
		<div id="main" class="haslayout padding-section products-listing product-page">
			<div class="container">
				<div class="row">
					<div class="col-lg-9 col-md-9 col-sm-12">
						<div id="content" class="haslayout">
							<div class="product-detail haslayout">
								<div class="row">
									<div class="col-sm-5 col-xs-6 slider-product">
										<div class="product-slider">
											<div id="sync1">
												<div class="item">
													<a class="prettyPhoto" data-rel="prettyPhoto[product]" href="images/shop/larg-image/img1.jpg">
														<img src="admin/photos/<?php echo $rows['item_image'];?>" >
													</a>
												</div>
												<!-- <div class="item">
													<a class="prettyPhoto" data-rel="prettyPhoto[product]" href="images/shop/larg-image/img2.jpg">
														<img src="images/shop/larg-image/img2.jpg" alt="image description">
													</a>
												</div>
												<div class="item">
													<a class="prettyPhoto" data-rel="prettyPhoto[product]" href="images/shop/larg-image/img3.jpg">
														<img src="images/shop/larg-image/img3.jpg" alt="image description">
													</a>
												</div>
												<div class="item">
													<a class="prettyPhoto" data-rel="prettyPhoto[product]" href="images/shop/larg-image/img4.jpg">
														<img src="images/shop/larg-image/img4.jpg" alt="image description">
													</a>
												</div> -->
											</div>
											<!-- <div id="sync2">
												<div class="item"><img src="images/shop/thumbnail/img1.jpg" alt="image description"></div>
												<div class="item"><img src="images/shop/thumbnail/img2.jpg" alt="image description"></div>
												<div class="item"><img src="images/shop/thumbnail/img3.jpg" alt="image description"></div>
												<div class="item"><img src="images/shop/thumbnail/img4.jpg" alt="image description"></div>
											</div> -->
										</div>
									</div>
									
									<div class="col-sm-7 col-xs-6 product-description">
										<div class="border-left">
											<h3><?php echo $rows['item_name'];?></h3>
										</div>
										<div class="description">
											<!-- <p>
												<a href="#" class="review">
													<i class="fa fa-pencil"></i>
													<em>Write the first review</em>
												</a>
												<span class="product-reference">Reference : 8282285</span>
											</p> -->
											<form action="add_cartval.php" method="post">
											<p><?php echo $rows['item_description'];?></p>
											<input type="hidden" name="prid" value="<?php echo $rows['item_id']; ?>">
											Rs:<input type="number" name="price" value="<?php echo $rows['item_price'];?>" id="price" readonly >
											<label>Size</label>
												<select name="size">
													<option value="s">Small</option>
													<option value="m">Medium</option>
													<option value="l">Large</option>
													<option value="xl">Xl</option>
													<option value="xxl">XXl</option>
													<option value="xxl">XXXl</option>
												</select>
											
											<div class="row">
												<div class="col-md-3"><p>Qty:<input type="number" value="1" min="1"  pattern="[0-9]{1,3}" title="Numbers 1 digit to 3 digits" class="form-control"  onchange="funPrice(this.value);"  name="qty"></p> </div>
												<div class="col-md-3"><p>Price<input type="text"  class="form-control" id="fp"   readonly="" value="<?php echo $rows['item_price'];?>">
												<input type="hidden"  value="<?php echo $rows['item_price']; ?>">
												
												</p>
											</div>
										</div>
											
											
										</div>
										
										<!-- <div class="product-color">
											<strong class="label">color:</strong>
											<ul>
												<li><a href="#"></a></li>
												<li><a href="#"></a></li>
												<li><a href="#"></a></li>
											</ul>
										</div> -->
										<div class="products-btns">
											 <a href="#" class="addtocart color-ff text-uppercase">
                                       
                                          
                                          
                                         
                                       
											 
                                         
                                          
                                         
                                          <button type="submit" class="addtocart color-ff text-uppercas" name="cart" style="padding: 10px;">
                                          ADD CART
                                          </button>
                                    </form></a>

                                       
											
										</div>
									</div>
								</div>
								
								
							</div>
						</div>
					</div>
					
				</div>
			</div>
			<!-- Products Start -->
			
			<!-- Products End -->
		</div>
		<!-- Main End -->
		<!-- Footer -->
		<?php include 'footer_user.php'; ?>
		<!-- Footer -->
		<!-- Modal Box Start -->
		<div class="modal fade bs-example-modal-sm" tabindex="-1" role="dialog">
			<div class="modal-dialog newsletter size-table">
				<div class="modal-content">
					<button type="button" class="close" data-dismiss="modal" aria-label="Close"><span class="icon-close" aria-hidden="true"></span></button>
					<div class="content-box">
						
						<div class="table-responsive"> 
							<table class="table">
								<thead>
									<tr>
										<th>&nbsp;</th>
										<th>XS</th>
										<th>s</th>
										<th>m</th>
										<th>l</th>
										<th>XL</th>
										<th>XXL</th>
									</tr>
								</thead>
								<tbody>
									<tr>
										<td>Chest</td>
										<td>34-36</td>
										<td>36-38</td>
										<td>38-40</td>
										<td>41-43</td>
										<td>44-46</td>
										<td>47-49</td>
									</tr>
									<tr>
										<td>Waist</td>
										<td>26-28</td>
										<td>29-31</td>
										<td>32-34</td>
										<td>35-37</td>
										<td>38-40</td>
										<td>41-43</td>
									</tr>
									<tr>
										<td>Inseam</td>
										<td>31</td>
										<td>31.5</td>
										<td>32</td>
										<td>32.5</td>
										<td>33</td>
										<td>33.5</td>
									</tr>
									<tr>
										<td>Short Inseam</td>
										<td>-</td>
										<td>28</td>
										<td>29</td>
										<td>30</td>
										<td>31</td>
										<td>-</td>
									</tr>
									<tr>
										<td>Tall Inseam</td>
										<td>-</td>
										<td>31.5</td>
										<td>32.5</td>
										<td>33.5</td>
										<td>34.5</td>
										<td>-</td>
									</tr>
								</tbody>
							</table>
						</div>
					</div>
				</div>
			</div>
		</div>
		<!-- Modal Box End -->
	</div>
	 <script type="text/javascript">
            function funPrice(entry)
            {
                var vprice=parseFloat(document.getElementById('price').value);
                 var tprice=entry * vprice;
            	console.log(vprice);

                document.getElementById('fp').value=tprice;
               
               
            }
        </script>
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

<!-- Mirrored from 786themes.net/html/alteration/product-detail.html by HTTrack Website Copier/3.x [XR&CO'2014], Sat, 22 Dec 2018 06:57:19 GMT -->
</html>
