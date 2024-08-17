<?php
session_start();

// session_start();
//  $_SESSION['id'] = "id";

// $_SESSION['logged_in'] = true;

// retrieve the user_id from the database
// $result = mysqli_query($con, "SELECT id FROM users WHERE id = '$id' ");
// $user = mysqli_fetch_assoc($result);
// $user_id = $user['id'];

// $_SESSION['user_id'] = $user_id;

include("connection.php");
include("functions.php");

// $user_data = check_login($con);



if ($_SERVER['REQUEST_METHOD'] == "POST") 
{
    // $name = $_POST['name'];
    // $email = $_POST['email'];
    $country = $_POST['country'];
    $remarks = $_POST['remarks'];




    if(!empty($country) && !empty($remarks))
    {
        // save to database

        // $query = "select * from users where email_id = '$email_id' limit 1";
        // $query = "select * from users where name = '$name' limit 1";

        // $result = mysqli_query($con,$query);
    


        $user_data = random_num(20);
        

        // $sql = "SELECT 'id', 'firstName' ,'email' into contact_us from usersinfo"; 
        $query = "insert into contact_us (country,remarks) values ('$country','$remarks')";
        

        // $query = "INSERT INTO contact_us ('$name', '$email', '$country', '$remarks')";
        // $conn = mysqli_connect($name, $email, $country, $remarks);
        // $query = "UPDATE usersinfo SET remarks=remarks WHERE email=email ";
        

        mysqli_query($conn,$query);

        
        if(isset($_POST['submit']))
        {
            echo "<script>alert('Feedback submitted successfully');</script>";

        //redirect to the same page
          echo "<script>window.location.href='" . $_SERVER['PHP_SELF'] . "';</script>";
        }
        
        die;
    } else
    {
        echo "Please Enter some valid information";
    }
}
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
            <li><a href="main.php" id="pri" class="cir_border">Home</a></li>
            <li><a href="main.php#events"  id="sec" class="cir_border">Top</a></li>
            <li><a href="main.php#explore" id="tri" class="cir_border">Explore</a></li>
            <li><a href="main.php#about" id="quad" class="cir_border">About</a></li>
            <!-- <li><a href="login.php" class="cir_border">JoinUs</a></li> -->
            <li><a href="main.php#contribution" id="quint" class="cir_border">Contributions</a></li>
            <li><a href="main.php#contact" id="hex" class="cir_border">Contact</a></li>
            <li><a href="logout.php"><b>Logout</b></a></li>
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
        } ?>! </div>
    </nav>

  <!-- End Navbar --> 


<br><br>
    
 <!-- contact -->
 <section id="contact">
        <div class="title">
            <h1 class="font-color">Contact Us</h1>
            <div class="line"></div>
        </div>
        
    </section>

<div class="contact_us">
            <form class="cform"   action="<?php echo $_SERVER['PHP_SELF']; ?>" method="post">
                <div class="crow-message">
                    <h1 class="color">Send us a message</h1>
                    <div></div>
                </div>
                <div class="crow-in">
                        <!-- <input type="text" id="name" name="name" placeholder="Your name"> -->
                        <input type="text" value=<?php if (isset($_SESSION['name'])) {
            echo $_SESSION['name'];
        }?> class="name" id="name" readonly>
                        <input type="text" value=<?php if (isset($_SESSION['email'])) {
            echo $_SESSION['email'];
        }?> class="email" id="email" readonly>
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
                <input class="crow-s" type="submit" value="Submit" name="submit">




                 <?php if (!empty($errors)) { ?> -->
        <ul>
            <?php foreach ($errors as $error) { ?>
                <li><?php echo $error; ?></li>
            <?php } ?>
        </ul>
    <?php } ?>

 


            </form>
            <div class="cbox">
                <div>
                    <p class="cbox-message">Prefer some other way ?<br>Reach us by using the details given below</p>
                <div class="cbox-line"></div>
                </div>
                <div class="c_boxx">
                    <a href="mailto:trpifyofficial@gmail.com"><i class="fa fa-envelope"></i>
                        Mail: trpifyofficial@gmail.com
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
