<?php
session_start();

include("connection.php");
include("functions.php");

$user_data = check_login($con);

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>TRIPIFY</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="css/responsive.css">
    <link rel="apple-touch-icon" sizes="180x180" href="img/apple-touch-icon.png">
    <link rel="icon" type="image/png" sizes="32x32" href="img/favicon-32x32.png">
    <link rel="icon" type="image/png" sizes="16x16" href="im/favicon-16x16.png">
    <link rel="manifest" href="/site.webmanifest">
</head>
<body>
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
            <li><a href="login.php" class="cir_border">JoinUs</a></li>
            <li><a href="index0.php#contribution" id="quint" class="cir_border">Contributions</a></li>
            <li><a href="#contact" id="hex" class="cir_border">Contact</a></li>
            <!-- <li><a href="logout.php"><b>Logout</b></a></li> -->
            <li><div>
                <input type="checkbox" class="checkbox" id="checkbox">
              <label for="checkbox" class="label">
                <i class="fa fa-moon-o"></i>
                <i class='fa fa-sun-o'></i>
                <div class='ball'>
              </label>
            </div></li>
        </ul>
        <img src="./img/menu-btn.png" alt="" class="menu-btn">
        <!-- <div class="heyuser">  Hey, ###PHP CODE HERE ! </div> -->
    </nav>
    <!--navbar-->







<br><br>
    
 <!-- contact -->
 <section id="contact">
        <div class="title">
            <h1 class="font-color">Contact Us</h1>
            <div class="line"></div>
        </div>
        
    </section>

<div class="contact_us">
            <form class="cform" action="" method="post">
                <div class="crow-message">
                    <h1 class="color">Send us a message</h1>
                    <div></div>
                </div>
                <div class="crow-in">
                        <input type="text" id="name" name="name" placeholder="Your name">
                        <input type="text" id="email" name="email" placeholder="Your Email id">
                </div>
                <div class="crow">
                    <div class="ccol-left">
                    <input type="text" id="country" name="country" placeholder="Your Country">

                        <!-- <select name="country" id="country">
                            <option value="India">India</option>
                            <option value="Russia">Russia</option>
                            <option value="usa">USA</option>
                            <option value="Japan">Japan</option>
                            <option value="France">France</option>
                            <option value="Brazil">Brazil</option> -->
                        </select>
                    </div>
                </div>
                <div class="crow">
                    <div class="ccol-left">
                        <textarea type="text" id="remarks" name="remarks" placeholder="Your Remarks....." style="height: 150px;"></textarea>
                    </div>
                </div>
                <input class="crow-s" type="submit" value="Submit">

                

            </form>
            <div class="cbox">
                <div>
                    <p class="cbox-message">Prefer some other way ?<br>Reach us by using the details given below</p>
                <div class="cbox-line"></div>
                </div>
                <div class="c_boxx">
                    <a href="mailto:tripifyofficial@gmail.com"><i class="fa fa-envelope"></i>
                        Mail: tripifyofficial@gmail.com
                    </a>
                </div>
                <div class="c_boxx">
                    <a href="tel:+91-8308796082"><i class="fa fa-phone"></i>
                        Phone: (+91) 8308796082
                    </a>
                </div>
                <div class="c_boxx">
                    <a href="#"><i class="fa fa-map-marker"></i>
                        Location: Pune, Maharashtra, India
                    </a>
                </div>
            </div>
        </div>