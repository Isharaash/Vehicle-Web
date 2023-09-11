<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8"/>
    <title>Registration</title>
    <link rel="icon" type="image/x-icon" href="../images/logo.png">
    <link rel="stylesheet" href="../css/reg.css">
    <script src="../js/reg.js"></script>
</head>
<body>
<?php
    require('db.php');
    // When form submitted, insert values into the database.
    if (isset($_REQUEST['username'])) {
        $username = stripslashes($_REQUEST['username']);
        $username = mysqli_real_escape_string($con, $username);
        $email    = stripslashes($_REQUEST['email']);
        $email    = mysqli_real_escape_string($con, $email);
        $fullname    = stripslashes($_REQUEST['fullname']);
        $fullname    = mysqli_real_escape_string($con, $fullname);
        $password = stripslashes($_REQUEST['password']);
        $password = mysqli_real_escape_string($con, $password);
        $create_datetime = date("Y-m-d H:i:s");
        $query    = "INSERT into `users` (fullname,  email, username, password, create_datetime)
                     VALUES ('$fullname' , '$email', '$username', '" . md5($password) . "',  '$create_datetime')";
        $result   = mysqli_query($con, $query);
        if ($result) {
            echo "<div class='form'>
                  <h3>You are registered successfully.</h3><br/>
                  <p class='link'>Click here to <a href='login.php'>Login</a></p>
                  </div>";
        } else {
            echo "<div class='form'>
                  <h3>Required fields are missing.</h3><br/>
                  <p class='link'>Click here to <a href='registration.php'>registration</a> again.</p>
                  </div>";
        }
    } else {
?>

    <div class="hero-image">
        <div class="hero-text">
            <h2 style="font-size:50px">Welcome to CS Motors</h2>
                <form class="container" action="" method="post" autocomplete="off" name="form" onsubmit="return validateForm()">
                    <h2 style="text-align: center;">CS MOTORS SIGN UP</h2>

                    <!-- <label for="fullname"><b>Full name</b></label> -->
                    <input type="text" class="login-input" name="fullname" placeholder="Full Name">

                    <!-- <label for="Email Address"><b>Email Address</b></label> -->
                    <input type="text" class="login-input" name="email" placeholder="Email Adress" >

                    <!-- <label for="username"><b>Username</b></label> -->
                    <input type="text" class="login-input" name="username" placeholder="Make a username"  >

                    <!-- <label for="password"><b>Password</b></label> -->
                    <input type="password" class="login-input" name="password" placeholder="Make a password">

                    <br>
                    <button type="submit" name="submit" value="Register">Register</button>
                    <p class="link">Already have an account? <a href="login.php">Login here</a></p>
                </form>
        </div>
    </div>


<?php
    }
?>
</body>
</html>
