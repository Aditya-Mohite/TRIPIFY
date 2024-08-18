<?php include_once("controller.php"); ?>
<?php
$email = $_SESSION['email'];
$password = $_SESSION['password'];

if($email != false && $password != false){
    $query = "SELECT * FROM usersInfo WHERE email = '$email' AND password = '$password'";
    $run_query = mysqli_query($conn , $query);
    if($run_query){
        $fetch_data = mysqli_fetch_assoc($run_query);
        $status = $fetch_data['status'];
        if($status != "Verified"){
            header("location: otp.php");
        }
    }
}else{
    header('location: login.php');
}
?>
<!-- <!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home Page</title>
    <link rel="stylesheet" href="css1/main.css">
</head>
<body>
    <div id="container">
    <div id="header">
    <div id="logo">Brand Name</div>
    <div id="logout"><a href="logout.php">Logout</a></div>
    <div id="content">Welcome <?php
    // if(isset($_SESSION['name'])){
    //     echo $_SESSION['name'];
    // }
    ?>!</div>
    </div>
    </div>
</body>
</html> -->


<!-- <?php
// session_start();

// include("connection.php");
// include("functions.php");

// $user_data = check_login($con);

?> -->

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
            <li><a href="#home" id="pri" class="cir_border">Home</a></li>
            <li><a href="#events"  id="sec" class="cir_border">Top</a></li>
            <li><a href="#explore" id="tri" class="cir_border">Explore</a></li>
            <li><a href="#about" id="quad" class="cir_border">About</a></li>
            <!-- <li><a href="login.php" class="cir_border">JoinUs</a></li> -->
            <li><a href="#contribution" id="quint" class="cir_border">Contributions</a></li>
            <li><a href="#contact" id="hex" class="cir_border">Contact</a></li>
            <li><a href="main0.php"><b>Logout</b></a></li>
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
        <div class="heyuser">  Hey, <?php if (isset($_SESSION['name'])) {
            echo $_SESSION['name'];
        }?>! </div>
    </nav>
    <!--navbar-->

    
    <header id="home">
      
        <div class="header-content">
            <h2>Explore the colourful World</h2>
            <div class="line"></div>
            <h1>A WONDERFUL GIFT</h1>
            <a href="tours.php" class="ctn">Learn more...</a>
        </div>
        
    </header>

    <!--Events-->
    <section class="events" id="events">
        <div class="container">
            <div class="title">
        <div class="title">
                <h1 class="dark">Best of Vacations</h1>
                <div class="line"></div>
        </div>
            </div>
        <div class="row">
            <article class="card col">
                <img class="card-img" src="./img/img1.jfif">
                <h4 class="dark">Everest camp trek</h4>
                <p class="font-color">Everest base camp trek is without a doubt, one of the most renowned travel destinations in the world.</p>
                <a href="#" class="ctn">All Details</a>
            </article>
            <article class="card col">
                <img src="./img/img2.jfif">
                <h4 class="dark">Walking holidays</h4>
                <p class="font-color">Join small guided group walks, enjoy a challenging trek, or a luxury private guided walk which can be made especially for you.</p>
                <a href="#" class="ctn">All Details</a>
            </article>
            <article class="card col">
                <img src="./img/img2.jfif">
                <h4 class="dark">Andaman Beaches</h4>
                <p class="font-color">Diving in Andaman Beaches is exceptional. The costal belt surroundings is one of the richest coral reef ecosystems in the world.</p>
                <a href="#" class="ctn">All Details</a>
            </article>
        </div>
    </div>
    </section>
    <!--Events-->

    <!--Explore-->
    <section class="explore" id="explore">
        <div class="explore-content">
            <h1>EXPLORE THE WORLD</h1>
            <div class="line"></div>
            <p>“Travel makes one modest. You see what a tiny place you occupy in the world.”– Gustav Flaubert
            </br>Exploring will make you want to pack your bag, book that ticket and jet away. </p>
            <a href="hotels.php" class="ctn">Explore more</a>
        </div>
    </section>
    <!--Explore-->

    <!--tours-->
    <section class="tours">
        <div class="container row">
            <div class="col content-col">
                <h1 class="font-color">Find for more Destinations</h1>
                <div class="line"></div>
                <p>We are updating the most visited tourist places:
                    with love from the Open Source Community......
                 </p>
                <a href="#" class="ctn">View more</a>
            </div>
            <div class="image-col">
                <div class="image-gallery">
                    <img src="./img/img3.png" alt="">
                    <img src="./img/img4.png" alt="">
                    <img src="./img/img5.png" alt="">
                    <img src="./img/img6.png" alt="">
                </div>
            </div>
        </div>
    </section>
    <!--tours-->

    <!-- About -->
    <section id="about">
        <div class="title">
            <h1 class="font-color">About Us</h1>
            <div class="line"></div>
        </div>
        <div id="about_us">
            <div class="boxx">
                <p><i> Inspire you to explore World tours beyond the usual well-known locations. Heritage Tours of World. Art & Culture Tours. Wildlife with Game Drive.
                    Our experienced travel experts design the trips covering the most famous tourist destinations, including sightseeing and accommodation at fine quality hotels. We aim at providing guests with the best of each country.
                </br></br>Explore the different horizons of the world with us and create memories for a lifetime.</i></p>
            </div>
        </div>
    </section>
    <!-- About -->

        <!-- contact -->
        <section id="contact">
        <div class="title">
            <a href="contactus1.php" >
           <i> <h1 class="font-color">Contact Us</h1> </i>
            </a>

            <div class="line"></div>
        </div>
        
    </section>
    <!-- contact  -->
    <!--footer-->
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

    <script>
        const menuBtn = document.querySelector('.menu-btn')
        const navlinks = document.querySelector('.nav-links')

        menuBtn.addEventListener('click',()=>{
            navlinks.classList.toggle('mobile-menu')
        })
    </script>
    <script src="https://code.jquery.com/jquery-3.6.0.js"></script>
    <script src="js/script.js"></script>
</body>
</html>
