<!--
Author: W3layouts
Author URL: http://w3layouts.com
License: Creative Commons Attribution 3.0 Unported
License URL: http://creativecommons.org/licenses/by/3.0/
-->
<!DOCTYPE html>
<html>
<head>
<title>Elite Shoppy an Ecommerce Online Shopping Category Flat Bootstrap Responsive Website Template | Home :: w3layouts</title>
<!--/tags -->
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="keywords" content="Elite Shoppy Responsive web template, Bootstrap Web Templates, Flat Web Templates, Android Compatible web template, 
Smartphone Compatible web template, free webdesigns for Nokia, Samsung, LG, SonyEricsson, Motorola web design" />
<script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false);
		function hideURLbar(){ window.scrollTo(0,1); } </script>
<!--//tags -->
<link href="<?php echo base_url() ?>asset/css/bootstrap.css" rel="stylesheet" type="text/css" media="all" />
<link href="<?php echo base_url() ?>asset/css/style.css" rel="stylesheet" type="text/css" media="all" />
<link href="<?php echo base_url() ?>asset/css/font-awesome.css" rel="stylesheet"> 
<link href="<?php echo base_url() ?>asset/css/easy-responsive-tabs.css" rel='stylesheet' type='text/css'/>
<!-- //for bootstrap working -->
<link href="//fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i,800" rel="stylesheet">
<link href='//fonts.googleapis.com/css?family=Lato:400,100,100italic,300,300italic,400italic,700,900,900italic,700italic' rel='stylesheet' type='text/css'>

<script type="text/javascript" src="<?php echo base_url(); ?>asset/js/jquery-2.1.4.min.js"></script>
</head>
<body>
<!-- header -->
<div class="header" id="home">
	<div class="container">
		<style type="text/css">
		.warna{color: white;}
		</style>
		<ul>
			<?php if(!$this->session->has_userdata("customer_username")){
		    echo '<li> <a href="#" data-toggle="modal" data-target="#myModal"><i class="fa fa-unlock-alt" aria-hidden="true"></i> Sign In </a></li>
			<li> <a href="'. base_url() . 'Auth/Registrasi" ><i class="fa fa-pencil-square-o" aria-hidden="true"></i> Sign Up </a></li>';
			}else{
				echo '<a class="warna">';
				echo "Hallo &nbsp;";
				echo $this->session->userdata("customer_username");
				echo '<a>
				<li>
					<a href="' .base_url() . 'Auth/profile"><i class=""></i>Profile</a>

				</li>
				<li>
					<a href="' .base_url() . 'Home/Logout"><i class=""></i>logout</a>
				</li>';
				
			}

			?>
			<li><i class="fa fa-phone" aria-hidden="true"></i> Call : 01234567898</li>
			<li><i class="fa fa-envelope-o" aria-hidden="true"></i> <a href="mailto:info@example.com">info@example.com</a></li>
		</ul>
	</div>
</div>
<!-- //header -->
<!-- header-bot -->
<div class="header-bot">
	<div class="header-bot_inner_wthreeinfo_header_mid">
		<div class="col-md-4 header-middle">
			<form action="<?php echo base_url(); ?>Cari_produk/search" method="post">
					<input type="search" name="search" placeholder="Search here..." required="">
					<input type="submit" value=" ">
				<div class="clearfix"></div>
			</form>
		</div>
		<!-- header-bot -->
			<div class="col-md-4 logo_agile">
				<h1><a href="index.html"><span>E</span>lite Shoppy <i class="fa fa-shopping-bag top_logo_agile_bag" aria-hidden="true"></i></a></h1>
			</div>
        <!-- header-bot -->
		<div class="col-md-4 agileits-social top_content">
						<ul class="social-nav model-3d-0 footer-social w3_agile_social">
						    <li class="share">Share On : </li>
							<li><a href="#" class="facebook">
								<div class="front"><i class="fa fa-facebook" aria-hidden="true"></i></div>
								<div class="back"><i class="fa fa-facebook" aria-hidden="true"></i></div></a></li>
							<li><a href="#" class="twitter"> 
								<div class="front"><i class="fa fa-twitter" aria-hidden="true"></i></div>
								<div class="back"><i class="fa fa-twitter" aria-hidden="true"></i></div></a></li>
							<li><a href="#" class="instagram">
								<div class="front"><i class="fa fa-instagram" aria-hidden="true"></i></div>
								<div class="back"><i class="fa fa-instagram" aria-hidden="true"></i></div></a></li>
							<li><a href="#" class="pinterest">
								<div class="front"><i class="fa fa-linkedin" aria-hidden="true"></i></div>
								<div class="back"><i class="fa fa-linkedin" aria-hidden="true"></i></div></a></li>
						</ul>



		</div>
		<div class="clearfix"></div>
	</div>
</div>
<!-- //header-->

<!-- banner -->
<div class="ban-top">
	<div class="container">
		<div class="top_nav_left">
			<nav class="navbar navbar-default">
			  <div class="container-fluid">
				<!-- Brand and toggle get grouped for better mobile display -->
				<div class="navbar-header">
				  <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
					<span class="sr-only">Toggle navigation</span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
				  </button>
				</div>
				<!-- Collect the nav links, forms, and other content for toggling -->
				<div class="collapse navbar-collapse menu--shylock" id="bs-example-navbar-collapse-1">
				  <ul class="nav navbar-nav menu__list">
					<li class="active menu__item menu__item--current"><a class="menu__link" href="<?php echo base_url(); ?>Home">Home <span class="sr-only">(current)</span></a></li>
					<li class=" menu__item"><a class="menu__link" href="<?php echo base_url(); ?>Produkpria">Shope</a></li>
					<li class="dropdown menu__item">
						<a href="#" class="dropdown-toggle menu__link" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Women's wear <span class="caret"></span></a>
							<ul class="dropdown-menu multi-column columns-3">
								<div class="agile_inner_drop_nav_info">
									<div class="col-sm-3 multi-gd-img">
										<ul class="multi-column-dropdown">
											<li><a href="womens.html">Clothing</a></li>
											<li><a href="womens.html">Wallets</a></li>
											<li><a href="womens.html">Footwear</a></li>
											<li><a href="womens.html">Watches</a></li>
											<li><a href="womens.html">Accessories</a></li>
											<li><a href="womens.html">Bags</a></li>
											<li><a href="womens.html">Caps & Hats</a></li>
										</ul>
									</div>
									<div class="col-sm-3 multi-gd-img">
										<ul class="multi-column-dropdown">
											<li><a href="womens.html">Jewellery</a></li>
											<li><a href="womens.html">Sunglasses</a></li>
											<li><a href="womens.html">Perfumes</a></li>
											<li><a href="womens.html">Beauty</a></li>
											<li><a href="womens.html">Shirts</a></li>
											<li><a href="womens.html">Sunglasses</a></li>
											<li><a href="womens.html">Swimwear</a></li>
										</ul>
									</div>
									<div class="col-sm-6 multi-gd-img multi-gd-text ">
										<a href="womens.html"><img src="images/top1.jpg" alt=" "/></a>
									</div>
									<div class="clearfix"></div>
								</div>
							</ul>
					</li>
					<li class="menu__item dropdown">
					   <a class="menu__link" href="#" class="dropdown-toggle" data-toggle="dropdown">Short Codes <b class="caret"></b></a>
								<ul class="dropdown-menu agile_short_dropdown">
									<li><a href="icons.html">Web Icons</a></li>
									<li><a href="typography.html">Typography</a></li>
								</ul>
					</li>
					<li class="menu__item"><a class="menu__link" href="<?php echo base_url(); ?>Contact">Contact</a></li>
					<li class=" menu__item"><a class="menu__link" href="<?php echo base_url(); ?>Home/data_belanja">
                        <?php 
                            $cart =$this->cart->contents();
                            $jumlahqty =0;
                            foreach ($cart as $item){
                            $jumlahqty = $jumlahqty + $item['qty'];
                         ?>
                        <?php } ?>
                        <span style="color: red; margin-top: -20px; margin-top: 17px;background-color: #4569cd;color: #eddbdb;font-size: 12px;width: 18px;height: 17px;text-align: center;position: absolute;top: -2px;border-radius: 50%;">
                            
                            <?php echo $jumlahqty; ?>
                        </span>
                        <i class="fa fa-cart-arrow-down keranjang" aria-hidden="true">&nbsp;Keranjang Belanja lagi</i>
                        </a>

					</li>
				  </ul>
				</div>
			  </div>
			</nav>	
		</div>
		<!-- <div class="top_nav_right">
			<div class="wthreecartaits wthreecartaits2 cart cart box_1"> 
						<form action="#" method="post" class="last"> 
						<input type="hidden" name="cmd" value="_cart">
						<input type="hidden" name="display" value="1">
						<button class="w3view-cart" type="submit" name="submit" value=""><i class="fa fa-cart-arrow-down" aria-hidden="true"></i></button>
					</form>  
  
						</div>
		</div> -->
		<div class="clearfix"></div>
	</div>
</div>

<div class="flash-data" data-flashdata="<?= $this->session->flashdata('flash'); ?>"></div>

<?php if ($this->session->flashdata('flash') ) : ?>

<?php endif; ?>
<!-- //banner-top -->
<!-- Modal1 -->
		<div class="modal fade" id="myModal" tabindex="-1" role="dialog">
			<div class="modal-dialog">
				<!-- Modal content-->
				<div class="modal-content">
					<div class="modal-header">
						<button type="button" class="close" data-dismiss="modal">&times;</button>
					</div>
						<div class="modal-body modal-body-sub_agile">
						<div class="col-md-8 modal_body_left modal_body_left1">
						<h3 class="agileinfo_sign">Sign In <span>Now</span></h3>
						<p style="color: red;">
							<?php echo validation_errors(); ?>
							<?php if(isset($loginerror)) { ?>
							<?php echo $loginerror; ?><?php } ?>
						</p>
									<form action="<?php echo base_url(); ?>Home/loginSubmit" method="post">
							<div class="styled-input agile-styled-input-top">
								<input type="text" name="customer_username" required="">
								<label>username</label>
								<span></span>
							</div>
							<div class="styled-input">
								<input type="password" name="customer_password" required=""> 
								<label>Password</label>
								<span></span>
							</div> 
							<input type="submit" value="Sign In">
					</form>
						<ul class="social-nav model-3d-0 footer-social w3_agile_social top_agile_third">
							<li><a href="#" class="facebook">
									<div class="front"><i class="fa fa-facebook" aria-hidden="true"></i></div>
			
									<div class="back"><i class="fa fa-facebook" aria-hidden="true"></i></div>
							    </a>
						</li>
							<li><a href="#" class="twitter"> 
									<div class="front"><i class="fa fa-twitter" aria-hidden="true"></i></div>
									<div class="back"><i class="fa fa-twitter" aria-hidden="true"></i></div>
								</a>
							</li>
							<li><a href="#" class="instagram">
									<div class="front"><i class="fa fa-instagram" aria-hidden="true"></i></div>
									<div class="back"><i class="fa fa-instagram" aria-hidden="true"></i></div>
								</a>
							</li>
							<li><a href="#" class="pinterest">
									<div class="front"><i class="fa fa-linkedin" aria-hidden="true"></i></div>
									<div class="back"><i class="fa fa-linkedin" aria-hidden="true"></i></div>
								</a>
							</li>
						</ul>
							<div class="clearfix"></div>
							<p><a href="#" data-toggle="modal" data-target="#myModal2" > Don't have an account?</a></p>

						</div>
						<div class="col-md-4 modal_body_right modal_body_right1">
							<img src="images/log_pic.jpg" alt=" "/>
						</div>
						<div class="clearfix"></div>
					</div>
				</div>
				<!-- //Modal content-->
			</div>
		</div>
<!-- //Modal1 -->
<!-- Modal2 -->
		<div class="modal fade" id="myModal2" tabindex="-1" role="dialog">
			<div class="modal-dialog">
				<!-- Modal content-->
				<div class="modal-content">
					<div class="modal-header">
						<button type="button" class="close" data-dismiss="modal">&times;</button>
					</div>
						<div class="modal-body modal-body-sub_agile">
						<div class="col-md-8 modal_body_left modal_body_left1">
						<h3 class="agileinfo_sign">Sign Up <span>Now</span></h3>
						 <form action="#" method="post">
							<div class="styled-input agile-styled-input-top">
								<input type="text" name="Name" required="">
								<label>Name</label>
								<span></span>
							</div>
							<div class="styled-input">
								<input type="email" name="Email" required=""> 
								<label>Email</label>
								<span></span>
							</div> 
							<div class="styled-input">
								<input type="password" name="password" required=""> 
								<label>Password</label>
								<span></span>
							</div> 
							<div class="styled-input">
								<input type="password" name="Confirm Password" required=""> 
								<label>Confirm Password</label>
								<span></span>
							</div> 
							<input type="submit" value="Sign Up">
						</form>
						  <ul class="social-nav model-3d-0 footer-social w3_agile_social top_agile_third">
								<li><a href="#" class="facebook">
										<div class="front"><i class="fa fa-facebook" aria-hidden="true"></i></div>
										<div class="back"><i class="fa fa-facebook" aria-hidden="true"></i></div>
									</a>
								</li>
								<li><a href="#" class="twitter"> 
										<div class="front"><i class="fa fa-twitter" aria-hidden="true"></i></div>
										<div class="back"><i class="fa fa-twitter" aria-hidden="true"></i></div>
									</a>
								</li>
								<li><a href="#" class="instagram">
										<div class="front"><i class="fa fa-instagram" aria-hidden="true"></i></div>
										<div class="back"><i class="fa fa-instagram" aria-hidden="true"></i></div>
									</a>
								</li>
								<li><a href="#" class="pinterest">
										<div class="front"><i class="fa fa-linkedin" aria-hidden="true"></i></div>
										<div class="back"><i class="fa fa-linkedin" aria-hidden="true"></i></div>
									</a>
								</li>
						    </ul>
										<div class="clearfix"></div>
										<p><a href="#">By clicking register, I agree to your terms</a></p>

						</div>
						<div class="col-md-4 modal_body_right modal_body_right1">
							<img src="images/log_pic.jpg" alt=" "/>
						</div>
						<div class="clearfix"></div>
					</div>
				</div>
				<!-- //Modal content-->
			</div>
		</div>
<!-- //Modal2 -->
