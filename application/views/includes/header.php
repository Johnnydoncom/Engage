<!DOCTYPE html>
<html lang="zxx">

<meta http-equiv="content-type" content="text/html;charset=UTF-8" /><!-- /Added by HTTrack -->
<head>
	<meta charset="UTF-8">
	<title>Business || Responsive HTML 5 Template</title>

	<!-- mobile responsive meta -->
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
	<link rel="stylesheet" href="<?php echo site_url('assets/css/style.css'); ?>">
	<link rel="stylesheet" href="<?php echo site_url('assets/css/responsive.css'); ?>">
	<link rel="stylesheet" href="<?php echo site_url('assets/fonts/flaticon.css'); ?>" />
	<!--favicon-->
	<link rel="shortcut icon" href="<?php echo site_url('assets/images/favicon/favicon.ico'); ?>">

</head>

<body>

<div class="boxed_wrapper">
	<div class="crypto-top-strip crypto-bgcolor">
		<div class="container">
			<div class="row">
				<aside class="col-md-6">
					<ul class="crypto-userinfo">
						<li><i class="fa fa-envelope-o"></i> info@yourdomain.com</li>
						<li><i class="fa fa-phone"></i> +(333) 052 39876</li>
					</ul>
				</aside>
				<aside class="col-md-6">
					<ul class="crypto-user-section">
						<li>
							<div class="crypto-language">
								<ul>
									<li> <a href="#"><i class="fa fa-globe"></i> English</a>
										<ul class="crypto-language-menu">
											<li><a href="#">English</a></li>
											<li><a href="#">Arabic</a></li>
											<li><a href="#">Farsi</a></li>
										</ul>
									</li>
								</ul>
							</div>
						</li>
						<?php if ($this->engage_auth->check()){?>
							<li> <a href="<?php echo site_url('logout'); ?>"><i class="fa fa-user"></i> Logout</a></li>
						<?php }else{?>
						<?php if (!$this->engage_auth->check()){?>
							<li> <a href="<?php echo site_url('login'); ?>"><i class="fa fa-user"></i> Login</a></li>
							<li> <a href="<?php echo site_url('register'); ?>"> <i class="fa fa-sign-in"></i> Sign Up</a></li>
						<?php }?>
					</ul>
				</aside>
			</div>
		</div>
	</div>

	<!-- Menu -->
	<div class="mainmenu-area stricky">
		<div class="container">
			<div class="row">
				<div class="col-md-5">
					<div class="main-logo">
						<a href="<?php echo site_url()?>">
							<img src="<?php echo site_url('assets/images/logo/logo.png');?>" alt="">
						</a>
					</div>
				</div>
				<div class="col-md-5 menu-column">
					<nav class="main-menu">
						<div class="navbar-header">
							<button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
								<span class="icon-bar"></span>
								<span class="icon-bar"></span>
								<span class="icon-bar"></span>
								<span class="icon-bar"></span>
							</button>
						</div>
						<div class="navbar-collapse collapse clearfix">
							<ul class="navigation clearfix">

								<li class="current"><a href="<?php echo site_url();?>">home</a></li>

								<li class="dropdown "><a href="<?php echo site_url('about')?>">about</a>
									<ul>
										<li><a href="about.html">about</a></li>
										<li><a href="team.html">Team</a></li>
										<li><a href="error.html">Error</a></li>
									</ul>
								</li>

								<li class="dropdown"><a href="<?php echo site_url('service')?>">service</a>
									<ul>
										<li><a href="service.html">Services</a></li>
										<li><a href="service-single.html">Service Single</a></li>
									</ul>
								</li>

								<li class="dropdown"><a href="<?php echo site_url('shop')?>">Shop</a>
									<ul>
										<li><a href="shop.html">Products Page</a></li>
										<li><a href="single-product.html">Single Product</a></li>
										<li><a href="shop-cart-page.html">Cart Page</a></li>
										<li><a href="shop-checkout.html">Checkout</a></li>
									</ul>
								</li>

								<li class="dropdown"><a href="#">Blog</a>
									<ul>

										<li><a href="blog-grid.html">Blog Grid</a></li>
										<li><a href="blog-with-sidebar.html">Blog With Sidebar</a></li>
										<li><a href="blog-details.html">Blog Details</a></li>

									</ul>
								</li>

								<li><a href="<?php echo site_url('contact')?>">Contact</a></li>
							</ul>

							<ul class="mobile-menu clearfix">

								<li><a href="index-2.html">home</a></li>

								<li class="current"><a href="about.html">about</a></li>

								<li class="dropdown"><a href="#">service</a>
									<ul>
										<li><a href="service.html">Services</a></li>
										<li><a href="service-single.html">Service Single</a></li>
									</ul>
								</li>

								<li class="dropdown"><a href="#">pages</a>
									<ul>
										<li><a href="shop.html">shop</a></li>
										<li><a href="team.html">Team</a></li>
										<li><a href="error.html">Error</a></li>
									</ul>
								</li>

								<li class="dropdown"><a href="#">Blog</a>
									<ul>

										<li><a href="blog-grid.html">Blog Grid</a></li>
										<li><a href="blog-with-sidebar.html">Blog With Sidebar</a></li>
										<li><a href="blog-details.html">Blog Details</a></li>

									</ul>
								</li>

								<li><a href="contact.html">Contact</a></li>

							</ul>
						</div>
					</nav>
				</div>
				<div class="col-md-2">
					<div class="right-area">
						<div class="link_btn float_right">
							<a href="#" class="thm-btn">GET A Quote?</a>
						</div>
					</div>
				</div>
			</div>

		</div>
	</div>
