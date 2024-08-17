<?php include_once ("controller.php"); 


if(!empty($email) && !empty($password))
    {
        // read from database
        $query = "select * from usersinfo where email = '$email' limit 1";

        $result = mysqli_query($con,$query);

        if ($result)
        {
            if($result && mysqli_num_rows($result) > 0)
        {
            $user_data = mysqli_fetch_assoc($result);
            
            if ($user_data['password'] == $password)
            {
                    $_SESSION['email'] = $user_data['email'];
                header("Location: index1.php");
                die;
            }
        }
        }
        echo "Wrong Email id or password!";
    } else
    {
        // echo "Please Enter some valid information";
    }

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login Form In PHP</title>
    <link rel="stylesheet" href="css1/login.css">
</head>
<body>
<div id="container">
<h2>Login</h2>
        <p><i>It's quick and easy!</i></p>
        <div id="line"></div>
        <form action="login.php" method="POST" autocomplete="off">
        <?php
            if($errors > 0){
                foreach($errors AS $displayErrors){
                ?>
                <div id="alert"><?php echo $displayErrors; ?></div>
                <?php
                }
            }
            ?>
            <input type="email" name="email" placeholder="Email"><br>
            <input type="password" name="password" placeholder="Password"><br>
            <input type="submit" name="login" value="Login">
            <a href="forgot.php" id="forgot">Forgot Your Password?</a>
            <h3>Don't hava a account? <a href="signup.php">Sign Up</a></h3>
        </form> 
</div>    
</body>
</html>