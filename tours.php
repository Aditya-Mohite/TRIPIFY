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
									<li><a href="tours.php">Top</a></li>
									<li class="has-dropdown active">
										<a href="tours.php">Explore</a>
										<ul class="dropdown">
											<li><a href="hotels.php">Hotels</a></li>
										</ul>
									</li>
									<li><a href="blog.php">Blog</a></li>
									<li><a href="services.php">About</a></li>
									<li><a href="main.php#contributions">Contributions</a></li>
									<li><a href="contactus1.php">Contact</a></li>
								</ul>
						</div>
					</div>
				</div>
			</div>
		</nav>
		<aside id="colorlib-hero">
			<div class="flexslider">
				<ul class="slides">
			   	<li style="background-image: url(images/img_bg_3.jpg);">
			   		<div class="overlay"></div>
			   		<div class="container-fluid">
			   			<div class="row">
				   			<div class="col-md-6 col-md-offset-3 col-sm-12 col-xs-12 slider-text">
				   				<div class="slider-text-inner text-center">
				   					<h2></h2>
				   					<h1>Find Tours</h1>
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
							<div class="wrap-division">
								<div class="col-md-6 col-sm-6 animate-box">
									<div class="tour">
										<a href="greece.php" class="tour-img" style="background-image: url(images/tour-1.jpg);">
											<p class="price"><span>Rs 70000</span> <small>/ 3 Days</small></p>
										</a>
										<span class="desc">
											<p class="star"><span><i class="icon-star-full"></i><i class="icon-star-full"></i><i class="icon-star-full"></i><i class="icon-star-full"></i></span></p>
											<h2><a href="greece.php">Greece</a></h2>
											<span class="city">Santorini, Greece</span>
										</span>
									</div>
								</div>

								<div class="col-md-6 col-sm-6 animate-box">
									<div class="tour">
										<a href="china.php" class="tour-img" style="background-image: url(images/tour-2.jpg);">
											<p class="price"><span>Rs 40000</span> <small>/ 3 Days</small></p>
										</a>
										<span class="desc">
											<p class="star"><span><i class="icon-star-full"></i><i class="icon-star-full"></i><i class="icon-star-full"></i><i class="icon-star-full"></i></span> </p>
											<h2><a href="china.php">China</a></h2>
											<span class="city">Hong Kong, China</span>
										</span>
									</div>
								</div>

								<div class="col-md-6 col-sm-6 animate-box">
									<div class="tour">
										<a href="Phillippines.php" class="tour-img" style="background-image: url(images/tour-3.jpg);">
											<p class="price"><span>Rs 38000</span> <small>/ 3 Days</small></p>
										</a>
										<span class="desc">
											<p class="star"><span><i class="icon-star-full"></i><i class="icon-star-full"></i><i class="icon-star-full"></i><i class="icon-star-full"></i></span> </p>
											<h2><a href="Phillippines.php">Philippines</a></h2>
											<span class="city">Boracay, Philippines</span>
										</span>
									</div>
								</div>

								<div class="col-md-6 col-sm-6 animate-box">
									<div class="tour">
										<a href="Japan.php" class="tour-img" style="background-image: url(images/tour-4.jpg);">
											<p class="price"><span>Rs 47000</span> <small>/ 3 Days</small></p>
										</a>
										<span class="desc">
											<p class="star"><span><i class="icon-star-full"></i><i class="icon-star-full"></i><i class="icon-star-full"></i><i class="icon-star-full"></i></span></p>
											<h2><a href="Japan.php">Japan</a></h2>
											<span class="city">Tokyo, Japan</span> </span>
									</div>
								</div>

								<div class="col-md-6 col-sm-6 animate-box">
									<div class="tour">
										<a href="India.php" class="tour-img" style="background-image: url(images/tour-5.jpg);">
											<p class="price"><span>Rs 10000</span> <small>/ 3 Days</small></p>
										</a>
										<span class="desc">
											<p class="star"><span><i class="icon-star-full"></i><i class="icon-star-full"></i><i class="icon-star-full"></i><i class="icon-star-full"></i></span> </p>
											<h2><a href="India.php">India</a></h2>
											<span class="city">Delhi, India</span>
										</span>
									</div>
								</div>

								<div class="col-md-6 col-sm-6 animate-box">
									<div class="tour">
										<a href="Italy.php" class="tour-img" style="background-image: url(images/tour-6.jpg);">
											<p class="price"><span>Rs 95000</span> <small>/ 3 Days</small></p>
										</a>
										<span class="desc">
											<p class="star"><span><i class="icon-star-full"></i><i class="icon-star-full"></i><i class="icon-star-full"></i><i class="icon-star-full"></i></span> </p>
											<h2><a href="Italy.php">Italy</a></h2>
											<span class="city"> Cinque Terre, Italy</span>
										</span>
									</div>
								</div>

								<div class="col-md-6 col-sm-6 animate-box">
									<div class="tour">
										<a href="Egypt.php" class="tour-img" style="background-image: url(images/tour-7.jpg);">
											<p class="price"><span>Rs 50000</span> <small>/ 3 Days</small></p>
										</a>
										<span class="desc">
											<p class="star"><span><i class="icon-star-full"></i><i class="icon-star-full"></i><i class="icon-star-full"></i><i class="icon-star-full"></i></span> </p>
											<h2><a href="Egypt.php">EGYPT</a></h2>
											<span class="city">Cairo, Egypt</span>
										</span>
									</div>
								</div>

								<div class="col-md-6 col-sm-6 animate-box">
									<div class="tour">
										<a href="thailand.php" class="tour-img" style="background-image: url(images/tour-8.jpg);">
											<p class="price"><span>$1500</span> <small>/ 3 Days</small></p>
										</a>
										<span class="desc">
											<p class="star"><span><i class="icon-star-full"></i><i class="icon-star-full"></i><i class="icon-star-full"></i><i class="icon-star-full"></i></span> </p>
											<h2><a href="thailand.php">Thailand</a></h2>
											<span class="city">Phuket, Thailand</span>
										</span>
									</div>
								</div>
							</div>
						</div>

						<div class="row">
							<div class="col-md-12 text-center">
								<ul class="pagination">
									<!-- <li class="disabled"><a href="#">&laquo;</a></li> -->
									<!-- <li class="active"><a href="#">1</a></li>
									<li><a href="#">2</a></li>
									<li><a href="#">3</a></li>
									<li><a href="#">4</a></li>
									<li><a href="#">&raquo;</a></li> -->
								</ul>
							</div>
						</div>
					</div>



					<!-- SIDEBAR-->
					<!-- <div class="col-md-3">
						<div class="sidebar-wrap">
							<div class="side search-wrap animate-box">
								<h3 class="sidebar-heading">Find your tour</h3>
								<form method="post" class="colorlib-form">
				              	<div class="row">
				              	 <div class="col-md-12">
				              	 	<div class="form-group">
				                    <label for="date">Where:</label>
				                    <div class="form-field">
				                      <input type="text" id="location" class="form-control" placeholder="Search Location">
				                    </div>
				                  </div>
				              	 </div>
				                <div class="col-md-12">
				                  <div class="form-group">
				                    <label for="date">Check-in:</label>
				                    <div class="form-field">
				                      <i class="icon icon-calendar2"></i>
				                      <input type="text" id="checkin"  class="form-control date" placeholder="Check-in date">
				                    </div>
				                  </div>
				                </div>
				                <div class="col-md-12">
				                  <div class="form-group">
				                    <label for="date">Check-out:</label>
				                    <div class="form-field">
				                      <i class="icon icon-calendar2"></i>
				                      <input type="text" id="checkout" class="form-control date" placeholder="Check-out date">
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
				                  <input type="submit" name="submit" id="submit" id="findHotelsButton" value="Find Hotels" class="btn btn-primary btn-block"> -->
								  <!-- Add a container to display the retrieved hotel data -->
								  <!-- <div id="hotel-data-container">
									<center><h1></h1></center>
								  </div>
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
		<div class="col-md-12 animate-box text-center">
			<p><a href="toursplace.php" class="btn btn-primary">More Information</a></p>
		</div> -->


		<!--footer-->
		<!-- <section class="footer">
        <span>Created By Group 196 | &#169 2023 All rights reserved.</span>
        <div class="social">
            <!-- <li>
                <a href="" target="_blank" rel="noreferrer"><i class="fa fa-globe"></i></a>
                <a href="" target="_blank" rel="noreferrer"><i class="fa fa-github"></i></a>
                <a href="" target="_blank" rel="noreferrer"><i class="fa fa-linkedin-square"></i></a>
            </li> -->
        </div>
    </section> -->
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
	<!-- <script>
		fetch('http://api.aviationstack.com/v1/flights?access_key=dfe681b35151418e31fb6454ddc42f9a')
		.then(res = res.json()).then(console.log);
	</script> -->
	
	<script src="./js/api.js"></script>


	<script>
  // Trigger the getHotelData function when the button is clicked
  $('#get-hotel-data-btn').click(function() {
    // Call the getHotelData function
    getHotelData().then(function(data) {
      // Display the retrieved hotel data
      $('#hotel-data-container').text(JSON.stringify(data));
    }).catch(function(error) {
      // Display any errors that occur
      $('#hotel-data-container').text('Error: ' + error);
    });
  });
</script>


	</body>
	</html>
