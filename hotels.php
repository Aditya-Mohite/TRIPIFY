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
	<link rel="apple-touch-icon" href="./css/hotels.css">

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
    <link rel="stylesheet" href="css/hotels.css">
    <link rel="stylesheet" href="css/responsive.css">
    <link rel="apple-touch-icon" sizes="180x180" href="img/apple-touch-icon.png">
    <link rel="icon" type="image/png" sizes="32x32" href="img/favicon-32x32.png">
    <link rel="icon" type="image/png" sizes="16x16" href="im/favicon-16x16.png">
    <link rel="manifest" href="/site.webmanifest">


	<link rel="stylesheet" href="css/nav.css">
	<title></title>
    <script src="https://polyfill.io/v3/polyfill.min.js?features=default"></script>

    <link rel="stylesheet" type="text/css" href="./style.css"/>
    <script type="module" src="./js/hotels.js"></script>
	<!-- <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyCZmYZxllk8PI6lIGU8QtOD8KYzhPbhpc0&libraries=places"> -->
	</script>
	 
	
	</head>	
	<body>

	<!--navbar-->
	<nav class="navbar glass" style="height: 110px; margin-right: 0; margin-left: 0;" >
        <span style="padding-top: 45px;"><a href="#home"><img class="img2" src="./img/tripify-high-resolution-logo-color-on-transparent-background.png" width="110px" height="80px"
            style="margin-top: -70px;margin-left: -10px;">
                <h1 class="logo"></h1></a></span>
        <ul class="nav-links">
            <li><a href="main.php" id="pri" class="cir_border">Home</a></li>
            <li><a href="main.php#events"  id="sec" class="cir_border">Top</a></li>
            <li><a href="main.php#explore" id="tri" class="cir_border">Explore</a></li>
            <li><a href="main.php#about" id="quad" class="cir_border">About</a></li>
            <!-- <li><a href="login.php" class="cir_border">JoinUs</a></li> -->
            <li><a href="main.php#contribution" id="quint" class="cir_border">Contributions</a></li>
            <li><a href="contactus1.php" id="hex" class="cir_border">Contact</a></li>
            <!-- <li><a href="logout.php"><b>Logout</b></a></li> -->
            <li><div>
                <!-- <input type="checkbox" class="checkbox" id="checkbox"> -->
              <!-- <label for="checkbox" class="label"> -->
                <!-- <i class="fa fa-moon-o"></i>
                <i class='fa fa-sun-o'></i> -->
                <!-- <div class='ball'> -->
              </label>
            </div></li>
        </ul>
        <img src="./img/menu-btn.png" alt="" class="menu-btn">
        <!-- <div class="heyuser">  Hey, ###PHP CODE HERE ! </div> -->
    </nav>
    <!--navbar-->




	<div class="hotel-search">
      <div id="findhotels">Find hotels in:</div>

      <div id="locationField">
        <input id="autocomplete" placeholder="Enter a city" type="text" />
      </div>

      <div id="controls">
        <select id="country">
		<option value="all">All</option>
		<option value="In">India</option>
		<option value="au">Australia</option>
          <option value="br">Brazil</option>
          <option value="ca">Canada</option>
          <option value="fr">France</option>
          <option value="de">Germany</option>
          <option value="mx">Mexico</option>
          <option value="nz">New Zealand</option>
          <option value="it">Italy</option>
          <option value="za">South Africa</option>
          <option value="es">Spain</option>
          <option value="pt">Portugal</option>
          <option value="us" selected>U.S.A.</option>
          <option value="uk">United Kingdom</option>
        </select>
      </div>
    </div>

    <div id="map"></div>

    <div id="listing">
      <table id="resultsTable">
        <tbody id="results"></tbody>
      </table>
    </div>

    <div style="display: none">
      <div id="info-content">
        <table>
          <tr id="iw-url-row" class="iw_table_row">
            <td id="iw-icon" class="iw_table_icon"></td>
            <td id="iw-url"></td>
          </tr>
          <tr id="iw-address-row" class="iw_table_row">
            <td class="iw_attribute_name">Address:</td>
            <td id="iw-address"></td>
          </tr>
          <tr id="iw-phone-row" class="iw_table_row">
            <td class="iw_attribute_name">Telephone:</td>
            <td id="iw-phone"></td>
          </tr>
          <tr id="iw-rating-row" class="iw_table_row">
            <td class="iw_attribute_name">Rating:</td>
            <td id="iw-rating"></td>
          </tr>
          <tr id="iw-website-row" class="iw_table_row">
            <td class="iw_attribute_name">Website:</td>
            <td id="iw-website"></td>
          </tr>
        </table>
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

	<script
      src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBSnblPMOwEdteX5UPYXf7XUtJYcbypx6w&callback=initMap&libraries=places&v=weekly"
      defer
    ></script>

	
	
	</body>
</html>



