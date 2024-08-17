<?php
session_start();

include("connection.php");
include("functions.php");

// $user_data = check_login($con);

?>


<!DOCTYPE HTML>
<html>
	<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title>Tour Template</title>
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta name="description" content="" />
	<meta name="keywords" content="" />
	<meta name="author" content="" />

  <!-- Facebook and Twitter integration -->
	<meta property="og:title" content=""/>
	<meta property="og:image" content=""/>
	<meta property="og:url" content=""/>
	<meta property="og:site_name" content=""/>
	<meta property="og:description" content=""/>
	<meta name="twitter:title" content="" />
	<meta name="twitter:image" content="" />
	<meta name="twitter:url" content="" />
	<meta name="twitter:card" content="" />

	<link href="https://fonts.googleapis.com/css?family=Quicksand:300,400,500,700" rel="stylesheet">

	<!-- Animate.css -->
	<link rel="stylesheet" href="css/animate.css">
	<!-- Icomoon Icon Fonts-->
	<link rel="stylesheet" href="css/icomoon.css">
	<!-- Bootstrap  -->
	<link rel="stylesheet" href="css/bootstrap.css">

	<!-- Magnific Popup -->
	<link rel="stylesheet" href="css/magnific-popup.css">

	<!-- Flexslider  -->
	<link rel="stylesheet" href="css/flexslider.css">

	<!-- Owl Carousel -->
	<link rel="stylesheet" href="css/owl.carousel.min.css">
	<link rel="stylesheet" href="css/owl.theme.default.min.css">

	<!-- Date Picker -->
	<link rel="stylesheet" href="css/bootstrap-datepicker.css">
	<!-- Flaticons  -->
	<link rel="stylesheet" href="fonts/flaticon/font/flaticon.css">

	<!-- Theme style  -->
	<link rel="stylesheet" href="css/style2.css">




	<!-- Modernizr JS -->
	<script src="js/modernizr-2.6.2.min.js"></script>
	<!-- FOR IE9 below -->
	<!--[if lt IE 9]>
	<script src="js/respond.min.js"></script>
	<![endif]-->

	</head>
	<body>


	<div class="colorlib-loader"></div>

	<div id="page">
		<!-- navbar  -->

		<nav class="colorlib-nav" role="navigation">
			<div class="top-menu">
				<div class="container-fluid">
					<div class="row">
						<div class="col-xs-2">
							<div id="colorlib-logo"><a href="main.php">TRIPIFY</a></div>
						</div>
						<div class="col-xs-10 text-right menu-1">
							<ul>
									<li><a href="main.php">Home</a></li>
									<!-- <li><a href="hotels.html">Top</a></li> -->
									<li class="has-dropdown active">
										<a href="tours.html">Explore</a>
										<ul class="dropdown">
											<li><a href="hotels.php">Hotels</a></li>
											<li><a href="tours.php">Tours</a></li>
										</ul>
									</li>
									<li><a href="blog.php">Blog</a></li>
									<li><a href="#about">About</a></li>
									<!-- <li><a href="about.html">Contributions</a></li> -->
									<li><a href="contactus1.php">Contact</a></li>
								</ul>
						</div>
					</div>
				</div>
			</div>
		</nav>

<!-- navbar -->
		<aside id="colorlib-hero">
			<div class="flexslider">
				<ul class="slides">
			   	<li style="background-image: url(images/cover-img-2.jpg);">
			   		<div class="overlay"></div>
			   		<div class="container-fluid">
			   			<div class="row">
				   			<div class="col-md-6 col-md-offset-3 col-sm-12 col-xs-12 slider-text">
				   				<div class="slider-text-inner text-center">
				   					<!-- <h2>by Aayush Kudalkar</h2> -->
				   					<h1>Blog</h1>
				   				</div>
				   			</div>
				   		</div>
			   		</div>
			   	</li>
			  	</ul>
		  	</div>
		</aside>

		<div id="colorlib-blog">
			<div class="container">
				<div class="row">
					<div class="col-md-8">
						<div class="wrap-division">
							<article class="animate-box">
								<div class="blog-img" style="background-image: url(images/blog-1.jpg);"></div>
								<div class="desc">
									<div class="meta">
										<p>
											<span>Jan 1, 2023 </span>
											<span>admin </span>
											<span><a href="#">2 Comments</a></span>
										</p>
									</div>
									<h2><a href="#">A Definitive Guide to the Best Dining</a></h2>
									<p>Modern India on a platter, served with a smile.

The thing about modern India is that it refuses to be put into a box. And that’s the thing about the food at The Bombay Canteen as well. </p>
								</div>
							</article>
							<article class="animate-box">
								<div class="blog-img" style="background-image: url(images/blog-2.jpg);"></div>
								<div class="desc">
									<div class="meta">
										<p>
											<span>Jan 2, 2023 </span>
											<span>admin </span>
											<span><a href="#">1 Comments</a></span>
										</p>
									</div>
									<h2><a href="#">How These 5 People Found The Path to Their Dream Trip</a></h2>
									<p>Last year I announced a case study program in which I would work with a cross-section of readers and help them plan and organize their trips, walking them through all the stages of travel planning and creating a roadmap to getting them on the road.</p>
								</div>
							</article>
							<article class="animate-box">
								<div class="blog-img" style="background-image: url(images/blog-3.jpg);"></div>
								<div class="desc">
									<div class="meta">
										<p>
											<span>Jan 3, 2023 </span>
											<span>admin </span>
											<span><a href="#">0 Comments</a></span>
										</p>
									</div>
									<h2><a href="#">Our Secret Island Boat Tour Is just for You</a></h2>
									<p>You’ve probably already seen our extra amenities and activities? There are a lot of them and you can enjoy any. But today we want to make a special accent on the Island boat tours.</p>
								</div>
							</article>
						</div>
						<div class="row">
							<div class="col-md-12">
								<ul class="pagination">
									<li class="disabled"><a href="#">&laquo;</a></li>
									<li class="active"><a href="#">1</a></li>
									<li><a href="#">2</a></li>
									<li><a href="#">3</a></li>
									<li><a href="#">4</a></li>
									<li><a href="#">&raquo;</a></li>
								</ul>
							</div>
						</div>
					</div>

					<div class="col-md-4">
						<div class="sidebar-wrap">
							<div class="side animate-box">
								<h3 class="sidebar-heading">Recent Post</h3>
								<div class="blog-entry-side">
									<a href="blog.html" class="blog-post">
										<span class="img" style="background-image: url(images/blog-3.jpg);"></span>
										<div class="desc">
											<span class="date">Jan 1, 2023</span>
											<h3>Our Secret Island Boat Tour Is just for You</h3>
											<span class="cat">Tour</span>
										</div>
									</a>
								</div>
								<div class="blog-entry-side">
									<a href="blog.html" class="blog-post">
										<span class="img" style="background-image: url(images/blog-2.jpg);"></span>
										<div class="desc">
											<span class="date">Jan 2, 2023</span>
											<h3>How These 5 People Found The Path to Their Dream Trip</h3>
											<span class="cat">Hotel</span>
										</div>
									</a>
								</div>
								<div class="blog-entry-side">
									<a href="blog.html" class="blog-post">
										<span class="img" style="background-image: url(images/blog-3.jpg);"></span>
										<div class="desc">
											<span class="date">Jan 3, 2023</span>
											<h3>Our Secret Island Boat Tour Is just for You</h3>
											<span class="cat">Cruises</span>
										</div>
									</a>
								</div>
							</div>
							<div class="side animate-box">
								<div class="sidebar-heading">Categories</div>
								<ul class="category">
									<li><a href="#"><i class="icon-check"></i> Car rental<span>(2)</span></a></li>
									<li><a href="#"><i class="icon-check"></i> Flight<span>(2)</span></a></li>
									<li><a href="#"><i class="icon-check"></i> Activities<span>(3)</span></a></li>
									<li><a href="#"><i class="icon-check"></i> Hotel<span>(5)</span></a></li>
									<li><a href="#"><i class="icon-check"></i> Tour<span>(2)</span></a></li>
									<li><a href="#"><i class="icon-check"></i> Travel<span>(3)</span></a></li>
									<li><a href="#"><i class="icon-check"></i> Night<span>(2)</span></a></li>
									<li><a href="#"><i class="icon-check"></i> Cruises<span>(2)</span></a></li>
								</ul>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>

		<div id="colorlib-subscribe" style="background-image: url(images/img_bg_2.jpg);" data-stellar-background-ratio="0.5">
			<div class="overlay"></div>
			<div class="container">
				<div class="row">
					<div class="col-md-6 col-md-offset-3 text-center colorlib-heading animate-box">
						<h2> </h2>
						<p> </p>
						<form class="form-inline qbstp-header-subscribe">
							<div class="row">
								<div class="col-md-12 col-md-offset-0">
									<div class="form-group">
										<!-- <input type="text" class="form-control" id="email" placeholder="Enter your email">
										<button type="submit" class="btn btn-primary">Subscribe</button> -->
									</div>
								</div>
							</div>
						</form>
					</div>
				</div>
			</div>
		</div>

		<footer id="colorlib-footer" role="contentinfo">
			<div class="container">
				<div class="row row-pb-md">
					<div class="col-md-3 colorlib-widget">
						<h4>Tripify</h4>
						<p></p>
						<p>
							<ul class="colorlib-social-icons">
								<li><a href="#"><i class="icon-twitter"></i></a></li>
								<li><a href="#"><i class="icon-facebook"></i></a></li>
								<li><a href="#"><i class="icon-linkedin"></i></a></li>
								<li><a href="#"><i class="icon-dribbble"></i></a></li>
							</ul>
						</p>
					</div>
					<div class="col-md-2 colorlib-widget">
						<h4>Book Now</h4>
						<p>
							<ul class="colorlib-footer-links">
								<li><a href="#">Flight</a></li>
								<li><a href="#">Hotels</a></li>
								<li><a href="#">Tour</a></li>
								<li><a href="#">Car Rent</a></li>
								<li><a href="#">Beach &amp; Resorts</a></li>
								<li><a href="#">Cruises</a></li>
							</ul>
						</p>
					</div>
					<div class="col-md-2 colorlib-widget">
						<h4>Top Deals</h4>
						<p>
							<ul class="colorlib-footer-links">
								<li><a href="#">Hotel Taj</a></li>
								<li><a href="#">Goa Emprise</a></li>
								<li><a href="#">Manali</a></li>
								<li><a href="#">Dubai Package</a></li>
								<li><a href="#">Ooty</a></li>
							</ul>
						</p>
					</div>
					<div class="col-md-2">
						<h4>Blog Post</h4>
						<ul class="colorlib-footer-links">
							<li><a href="#">The Ultimate Packing List For Female Travelers</a></li>
							<li><a href="#">How These 5 People Found The Path to Their Dream Trip</a></li>
							<li><a href="#">A Definitive Guide to the Best Dining and Drinking Venues in the City</a></li>
						</ul>
					</div>

					<div class="col-md-3 col-md-push-1">
						<h4>Contact Information</h4>
						<ul class="colorlib-footer-links">
							<li>  Location: Pune, Maharashtra, India</li>
							<li><a href="tel://1234567920">(+91) 8308796082</a></li>
							<li><a href="mailto:info@yoursite.com">trpifyofficial@gmail.com</a></li>
							<li><a href="#">tripify.com</a></li>
						</ul>
					</div>
				</div>
				<div class="row">
					<div class="col-md-12 text-center">
						<p>
							<!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
							<section class="footer">
									<span>Created By Group 196 | &#169 2023 All rights reserved.</span>
									<div class="social">
											<!-- <li>
													<a href="" target="_blank" rel="noreferrer"><i class="fa fa-globe"></i></a>
													<a href="" target="_blank" rel="noreferrer"><i class="fa fa-github"></i></a>
													<a href="" target="_blank" rel="noreferrer"><i class="fa fa-linkedin-square"></i></a>
											</li> -->
									</div>
							</section>
							<!--footer-->

	<div class="gototop js-top">
		<a href="#" class="js-gotop"><i class="icon-arrow-up2"></i></a>
	</div>

	<!-- jQuery -->
	<script src="js/jquery.min.js"></script>
	<!-- jQuery Easing -->
	<script src="js/jquery.easing.1.3.js"></script>
	<!-- Bootstrap -->
	<script src="js/bootstrap.min.js"></script>
	<!-- Waypoints -->
	<script src="js/jquery.waypoints.min.js"></script>
	<!-- Flexslider -->
	<script src="js/jquery.flexslider-min.js"></script>
	<!-- Owl carousel -->
	<script src="js/owl.carousel.min.js"></script>
	<!-- Magnific Popup -->
	<script src="js/jquery.magnific-popup.min.js"></script>
	<script src="js/magnific-popup-options.js"></script>
	<!-- Date Picker -->
	<script src="js/bootstrap-datepicker.js"></script>
	<!-- Stellar Parallax -->
	<script src="js/jquery.stellar.min.js"></script>

	<!-- Main -->
	<script src="js/main.js"></script>

	</body>
</html>
