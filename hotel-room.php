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


    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>TRIPIFY</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <!-- <link rel="stylesheet" href="css/style.css"> -->
    <link rel="stylesheet" href="css/responsive.css">
    <link rel="apple-touch-icon" sizes="180x180" href="img/apple-touch-icon.png">
    <link rel="icon" type="image/png" sizes="32x32" href="img/favicon-32x32.png">
    <link rel="icon" type="image/png" sizes="16x16" href="im/favicon-16x16.png">
    <link rel="manifest" href="/site.webmanifest">

	<link rel="stylesheet" href="css/nav.css">


	</head>
	<body>

	<div class="colorlib-loader"></div>

	<!-- <div id="page">
		<nav class="colorlib-nav" role="navigation">
			<div class="top-menu">
				<div class="container-fluid">
					<div class="row">
						<div class="col-xs-2"> -->

							<!-- <div id="colorlib-logo"><a imghref="index.html">TRIPIFY</a></div> -->

						<!-- <img class="img2" src="./img/tripify-high-resolution-logo-color-on-transparent-background.png"  width="110px" height="80px"
            style="margin-top: -25px;margin-left: -30px;" alt="">
						</div>
						<div class="col-xs-10 text-right menu-1">
							<ul> -->


		<!-- </nav> -->


		<!--navbar-->
 <nav class="navbar glass" style="height: 110px;">
        <span style="padding-top: 45px;"><a href="#home"><img class="img2" src="./img/tripify-high-resolution-logo-color-on-transparent-background.png" width="110px" height="80px"
            style="margin-top: -70px;margin-left: -10px;">
                <h1 class="logo"></h1></a></span>
        <ul class="nav-links">
            <li><a href="index0.php" id="pri" class="cir_border">Home</a></li>
            <li><a href="index0.php#events"  id="sec" class="cir_border">Top</a></li>
            <li><a href="index0.php#explore" id="tri" class="cir_border">Explore</a></li>
            <li><a href="index0.php#about" id="quad" class="cir_border">About</a></li>
            <!-- <li><a href="login.php" class="cir_border">JoinUs</a></li> -->
            <li><a href="index0.php#contribution" id="quint" class="cir_border">Contributions</a></li>
            <li><a href="#contact" id="hex" class="cir_border">Contact</a></li>
            <!-- <li><a href="logout.php"><b>Logout</b></a></li> -->
            <li><div>
                <!-- <input type="checkbox" class="checkbox" id="checkbox"> -->
              <!-- <label for="checkbox" class="label">
                <i class="fa fa-moon-o"></i>
                <i class='fa fa-sun-o'></i>
                <div class='ball'>
              </label> -->
            </div></li>
        </ul>
        <img src="./img/menu-btn.png" alt="" class="menu-btn">
        <!-- <div class="heyuser">  Hey, ###PHP CODE HERE ! </div> -->
    </nav>
    <!--navbar-->

		<aside id="colorlib-hero">
			<div class="flexslider">
				<ul class="slides">
			   	<li style="background-image: url(images/cover-img-4.jpg);">
			   		<div class="overlay"></div>
			   		<div class="container-fluid">
			   			<div class="row">
				   			<div class="col-md-6 col-md-offset-3 col-sm-12 col-xs-12 slider-text">
				   				<div class="slider-text-inner text-center">
				   					<!-- <h2>by AAYUSH Kudalkar</h2> -->
									   <h1><b>Hotel Overview</b></h1>
				   				</div>
				   			</div>
				   		</div>
			   		</div>
			   	</li>
			  	</ul>
		  	</div>
		</aside>

		<div class="colorlib-wrap">
			<div class="container">
				<div class="row">
					<div class="col-md-9">
						<div class="row">
							<div class="col-md-12">
								<div class="wrap-division">
									<div class="col-md-12 col-md-offset-0 heading2 animate-box">
										<h2>Hotel </h2>
									</div>
									<div class="row">
										<div class="col-md-12 animate-box">
											<div class="room-wrap">
												<div class="row">
													<div class="col-md-6 col-sm-6">
														<div class="room-img" style="background-image: url(images/room-1.jpg);"></div>
													</div>
													<div class="col-md-6 col-sm-6">
														<div class="desc">
															<h2>Family Room</h2>
															<p class="price"><span>₹3100</span> <small>/ night</small></p>
															<p>Even the all-powerful Pointing has no control about the blind texts it is an almost unorthographic life One day however a small line of blind text by the name of Lorem Ipsum decided to leave for the far World of Grammar.</p>
															<p><a href="#" class="btn btn-primary">Book Now!</a></p>
														</div>
													</div>
												</div>
											</div>
										</div>

										<div class="col-md-12 animate-box">
											<div class="room-wrap">
												<div class="row">
													<div class="col-md-6 col-sm-6">
														<div class="room-img" style="background-image: url(images/room-2.jpg);"></div>
													</div>
													<div class="col-md-6 col-sm-6">
														<div class="desc">
															<h2>Luxury Room</h2>
															<p class="price"><span>₹7000</span> <small>/ night</small></p>
															<p>Even the all-powerful Pointing has no control about the blind texts it is an almost unorthographic life One day however a small line of blind text by the name of Lorem Ipsum decided to leave for the far World of Grammar.</p>
															<p><a href="#" class="btn btn-primary">Book Now!</a></p>
														</div>
													</div>
												</div>
											</div>
										</div>

										<div class="col-md-12 animate-box">
											<div class="room-wrap">
												<div class="row">
													<div class="col-md-6 col-sm-6">
														<div class="room-img" style="background-image: url(images/room-3.jpg);"></div>
													</div>
													<div class="col-md-6 col-sm-6">
														<div class="desc">
															<h2>Double Room</h2>
															<p class="price"><span>₹5000</span> <small>/ night</small></p>
															<p>Even the all-powerful Pointing has no control about the blind texts it is an almost unorthographic life One day however a small line of blind text by the name of Lorem Ipsum decided to leave for the far World of Grammar.</p>
															<p><a href="#" class="btn btn-primary">Book Now!</a></p>
														</div>
													</div>
												</div>
											</div>
										</div>

										<div class="col-md-12 animate-box">
											<div class="room-wrap">
												<div class="row">
													<div class="col-md-6 col-sm-6">
														<div class="room-img" style="background-image: url(images/room-4.jpg);"></div>
													</div>
													<div class="col-md-6 col-sm-6">
														<div class="desc">
															<h2>Suite Room</h2>
															<p class="price"><span>₹1700</span> <small>/ night</small></p>
															<p>Even the all-powerful Pointing has no control about the blind texts it is an almost unorthographic life One day however a small line of blind text by the name of Lorem Ipsum decided to leave for the far World of Grammar.</p>
															<p><a href="#" class="btn btn-primary">Book Now!</a></p>
														</div>
													</div>
												</div>
											</div>
										</div>

										<div class="col-md-12 animate-box">
											<div class="room-wrap">
												<div class="row">
													<div class="col-md-6 col-sm-6">
														<div class="room-img" style="background-image: url(images/room-5.jpg);"></div>
													</div>
													<div class="col-md-6 col-sm-6">
														<div class="desc">
															<h2>Superior Double Room</h2>
															<p class="price"><span>₹4800</span> <small>/ night</small></p>
															<p>Even the all-powerful Pointing has no control about the blind texts it is an almost unorthographic life One day however a small line of blind text by the name of Lorem Ipsum decided to leave for the far World of Grammar.</p>
															<p><a href="#" class="btn btn-primary">Book Now!</a></p>
														</div>
													</div>
												</div>
											</div>
										</div>

										<div class="col-md-12 animate-box">
											<div class="room-wrap">
												<div class="row">
													<div class="col-md-6 col-sm-6">
														<div class="room-img" style="background-image: url(images/room-6.jpg);"></div>
													</div>
													<div class="col-md-6 col-sm-6">
														<div class="desc">
															<h2>Classic Double Room</h2>
															<p class="price"><span>₹5500</span> <small>/ night</small></p>
															<p>Even the all-powerful Pointing has no control about the blind texts it is an almost unorthographic life One day however a small line of blind text by the name of Lorem Ipsum decided to leave for the far World of Grammar.</p>
															<p><a href="#" class="btn btn-primary">Book Now!</a></p>
														</div>
													</div>
												</div>
											</div>
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>

					<!-- SIDEBAR-->
					<div class="col-md-3">
						<div class="sidebar-wrap">
							<div class="side search-wrap animate-box">
								<h3 class="sidebar-heading">Find your hotel</h3>
								<form method="post" class="colorlib-form">
				              	<div class="row">
				                <div class="col-md-12">
				                  <div class="form-group">
				                    <label for="date">Check-in:</label>
				                    <div class="form-field">
				                      <i class="icon icon-calendar2"></i>
				                      <input type="text" id="date" class="form-control date" placeholder="Check-in date">
				                    </div>
				                  </div>
				                </div>
				                <div class="col-md-12">
				                  <div class="form-group">
				                    <label for="date">Check-out:</label>
				                    <div class="form-field">
				                      <i class="icon icon-calendar2"></i>
				                      <input type="text" id="date" class="form-control date" placeholder="Check-out date">
				                    </div>
				                  </div>
				                </div>
				                <div class="col-md-12">
				                  <div class="form-group">
				                    <label for="guests">Guest</label>
				                    <div class="form-field">
				                      <i class="icon icon-arrow-down3"></i>
				                      <select name="people" id="people" class="form-control">
				                        <option value="#">1</option>
				                        <option value="#">2</option>
				                        <option value="#">3</option>
				                        <option value="#">4</option>
				                        <option value="#">5+</option>
				                      </select>
				                    </div>
				                  </div>
				                </div>
				                <div class="col-md-12">
				                  <input type="submit" name="submit" id="submit" value="Find Hotel" class="btn btn-primary btn-block">
				                </div>
				              </div>
				            </form>
							</div>
							<div class="side animate-box">
								<div class="row">
									<div class="col-md-12">
										<h3 class="sidebar-heading">Price Range</h3>
										<form method="post" class="colorlib-form-2">
						              	<div class="row">
						                <div class="col-md-6">
						                  <div class="form-group">
						                    <label for="guests">Price from:</label>
						                    <div class="form-field">
						                      <i class="icon icon-arrow-down3"></i>
						                      <select name="people" id="people" class="form-control">
						                        <option value="#">1</option>
						                        <option value="#">200</option>
						                        <option value="#">300</option>
						                        <option value="#">400</option>
						                        <option value="#">1000</option>
						                      </select>
						                    </div>
						                  </div>
						                </div>
						                <div class="col-md-6">
						                  <div class="form-group">
						                    <label for="guests">Price to:</label>
						                    <div class="form-field">
						                      <i class="icon icon-arrow-down3"></i>
						                      <select name="people" id="people" class="form-control">
						                        <option value="#">2000</option>
						                        <option value="#">4000</option>
						                        <option value="#">6000</option>
						                        <option value="#">8000</option>
						                        <option value="#">10000</option>
						                      </select>
						                    </div>
						                  </div>
						                </div>
						              </div>
						            </form>
					            </div>
								</div>
							</div>
							<div class="side animate-box">
								<div class="row">
									<div class="col-md-12">
										<h3 class="sidebar-heading">Review Rating</h3>
										<form method="post" class="colorlib-form-2">
										   <div class="form-check">
												<input type="checkbox" class="form-check-input" id="exampleCheck1">
												<label class="form-check-label" for="exampleCheck1">
													<p class="rate"><span><i class="icon-star-full"></i><i class="icon-star-full"></i><i class="icon-star-full"></i><i class="icon-star-full"></i><i class="icon-star-full"></i></span></p>
												</label>
										   </div>
										   <div class="form-check">
										      <input type="checkbox" class="form-check-input" id="exampleCheck1">
										      <label class="form-check-label" for="exampleCheck1">
										    	   <p class="rate"><span><i class="icon-star-full"></i><i class="icon-star-full"></i><i class="icon-star-full"></i><i class="icon-star-full"></i></span></p>
										      </label>
										   </div>
										   <div class="form-check">
										      <input type="checkbox" class="form-check-input" id="exampleCheck1">
										      <label class="form-check-label" for="exampleCheck1">
										      	<p class="rate"><span><i class="icon-star-full"></i><i class="icon-star-full"></i><i class="icon-star-full"></i></span></p>
										     </label>
										   </div>
										   <div class="form-check">
										      <input type="checkbox" class="form-check-input" id="exampleCheck1">
										      <label class="form-check-label" for="exampleCheck1">
										      	<p class="rate"><span><i class="icon-star-full"></i><i class="icon-star-full"></i></span></p>
										     </label>
										   </div>
										   <div class="form-check">
										      <input type="checkbox" class="form-check-input" id="exampleCheck1">
										      <label class="form-check-label" for="exampleCheck1">
										      	<p class="rate"><span><i class="icon-star-full"></i></span></p>
										     </label>
										   </div>
										</form>
									</div>
								</div>
							</div>
							<div class="side animate-box">
								<div class="row">
									<div class="col-md-12">
										<h3 class="sidebar-heading">Categories</h3>
										<form method="post" class="colorlib-form-2">
										   <div class="form-check">
												<input type="checkbox" class="form-check-input" id="exampleCheck1">
												<label class="form-check-label" for="exampleCheck1">
													<h4 class="place">Apartment</h4>
												</label>
										   </div>
										   <div class="form-check">
										      <input type="checkbox" class="form-check-input" id="exampleCheck1">
										      <label class="form-check-label" for="exampleCheck1">
													<h4 class="place">Hotel</h4>
												</label>
										   </div>
										   <div class="form-check">
										      <input type="checkbox" class="form-check-input" id="exampleCheck1">
										      <label class="form-check-label" for="exampleCheck1">
													<h4 class="place">Hostel</h4>
												</label>
										   </div>
										   <div class="form-check">
										      <input type="checkbox" class="form-check-input" id="exampleCheck1">
										      <label class="form-check-label" for="exampleCheck1">
													<h4 class="place">Inn</h4>
												</label>
										   </div>
										   <div class="form-check">
										      <input type="checkbox" class="form-check-input" id="exampleCheck1">
										      <label class="form-check-label" for="exampleCheck1">
													<h4 class="place">Villa</h4>
												</label>
										   </div>
										</form>
									</div>
								</div>
							</div>
							<div class="side animate-box">
								<div class="row">
									<div class="col-md-12">
										<h3 class="sidebar-heading">Location</h3>
										<form method="post" class="colorlib-form-2">
										   <div class="form-check">
												<input type="checkbox" class="form-check-input" id="exampleCheck1">
												<label class="form-check-label" for="exampleCheck1">
													<h4 class="place">India</h4>
												</label>
										   </div>
										   <div class="form-check">
										      <input type="checkbox" class="form-check-input" id="exampleCheck1">
										      <label class="form-check-label" for="exampleCheck1">
													<h4 class="place">USA</h4>
												</label>
										   </div>
										   <div class="form-check">
										      <input type="checkbox" class="form-check-input" id="exampleCheck1">
										      <label class="form-check-label" for="exampleCheck1">
													<h4 class="place">UAE</h4>
												</label>
										   </div>
										   <div class="form-check">
										      <input type="checkbox" class="form-check-input" id="exampleCheck1">
										      <label class="form-check-label" for="exampleCheck1">
													<h4 class="place">UK</h4>
												</label>
										   </div>
										   <div class="form-check">
										      <input type="checkbox" class="form-check-input" id="exampleCheck1">
										      <label class="form-check-label" for="exampleCheck1">
													<h4 class="place">Mexico</h4>
												</label>
										   </div>
										</form>
									</div>
								</div>
							</div>
							<div class="side animate-box">
								<div class="row">
									<div class="col-md-12">
										<h3 class="sidebar-heading">Facilities</h3>
										<form method="post" class="colorlib-form-2">
										   <div class="form-check">
												<input type="checkbox" class="form-check-input" id="exampleCheck1">
												<label class="form-check-label" for="exampleCheck1">
													<h4 class="place">Airport Transfer</h4>
												</label>
										   </div>
										   <div class="form-check">
										      <input type="checkbox" class="form-check-input" id="exampleCheck1">
										      <label class="form-check-label" for="exampleCheck1">
													<h4 class="place">Resto Bar</h4>
												</label>
										   </div>
										   <div class="form-check">
										      <input type="checkbox" class="form-check-input" id="exampleCheck1">
										      <label class="form-check-label" for="exampleCheck1">
													<h4 class="place">Restaurant</h4>
												</label>
										   </div>
										   <div class="form-check">
										      <input type="checkbox" class="form-check-input" id="exampleCheck1">
										      <label class="form-check-label" for="exampleCheck1">
													<h4 class="place">Swimming Pool</h4>
												</label>
										   </div>
										   <div class="form-check">
										      <input type="checkbox" class="form-check-input" id="exampleCheck1">
										      <label class="form-check-label" for="exampleCheck1">
													<h4 class="place">Playing Area</h4>
												</label>
										   </div>
										</form>
									</div>
								</div>
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
										<!-- <input type="text" class="form-control" id="email" placeholder="Enter your email"> -->
										<!-- <button type="submit" class="btn btn-primary">Subscribe</button> -->
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
							<li><a href="mailto:info@yoursite.com">tripifyofficial@gmail.com</a></li>
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
