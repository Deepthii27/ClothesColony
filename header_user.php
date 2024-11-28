<header id="header" class="haslayout" style="margin-top:-19px;">
			<div class="top-bar haslayout">
				<div class="container" >
					<div class="col-md-6 col-sm-3 col-xs-6 pull-left">
						<div class="row">
							<span class="phone">
								<i class="glyphicon glyphicon-phone"></i>
								<em>+91 9632587410 </em>
							</span>
							<span class="email">
								<i class="glyphicon glyphicon-send"></i>
								<em><a href="">CLOTHES_COLONY@GMAIL.COM</a></em>
							</span>
						</div>
					</div>
					
						</div>
					</div> 
				</div>
			</div>
			
			<div class="mid-bar haslayout" style="margin-top:-90px;background-color:black;">
				<div class="container"><div class="cart pull-right btn-dropdown btn-cart">
						<form action="cart.php" method="post" class="last"> 
                                         <button type="submit" class="" name="cart">
                                        <i class="fa fa-cart-plus"></i>
                                    </button>
                                    (<span ><?php include('connect.php');
                                    $sq=mysqli_query($con,"select count(*) from tbl_cart where uid='$user' and status='in_cart'");
                                    $rest=mysqli_fetch_array($sq); echo $rest[0];
                                 ?></span> items)
                             </form>
						
					
					</div>
					
				</div>
			</div>
			<nav id="nav" class="haslayout navbar" style="margin-top:-40px;" >
				<div class="container">
					<div class="navbar-header">
						<button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
							<span class="sr-only">Toggle navigation</span>
							<span class="icon-bar"></span>
							<span class="icon-bar"></span>
							<span class="icon-bar"></span>
						</button>
					</div>
					<div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
						<ul>
							<li class="active"><a href="user.php">Home</a></li>
							
							
							<li class="dropdown">
								<a href="#">Stiching Types</a>
								<ul class="dropdown-menu">
									<li><a href="pant.php">Pant</a></li>
									<li><a href="blouse.php">Blouse</a></li>
									<li><a href="frock.php">Frock</a></li>
									<li><a href="top.php">top</a></li>
									<li><a href="gown.php">gown</a></li>
									<!-- <li><a href="btshirt.php">Gents T-Shirt</a></li>
									<li><a href="gtshirt.php">Ladies T-Shirt</a></li> -->
								</ul>
							</li>
							<li class="dropdown">
								<a href="#">Orders</a>
								<ul class="dropdown-menu">
								   <li><a href="viewappy.php">View Orders</a></li>
									<li><a href="orderitem.php">Product orders</a></li>
									
								</ul>
							</li>
							
							<li><a href="itemdetails.php">Product</a></li>
							
							<li><a href="view_design.php">design view</a></li>
							<li><a href="feed.php">Feedback</a></li>
							<li><a href="bill.php">Bill</a></li>
							
							
								<li class="dropdown">
								<a href="#">Account</a>
								<ul class="dropdown-menu">
								    <li><a href="user_profile.php">Profile</a></li>
									<li><a href="changepass.php">Change Password</a></li>
									<li><a href="logout.php">Logout</a></li>
								</ul>
							</li>
						</ul>
					</div>
				</div>
			</nav>
		</header>