<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <link rel="stylesheet" href="../css/login.css">
</head>
<body>
<?php
    require('db.php');
    session_start();
    
    // When form submitted, check and create user session.
    if (isset($_POST['username'])) {
        $username = stripslashes($_REQUEST['username']);  
        $username = mysqli_real_escape_string($con, $username);
        $password = stripslashes($_REQUEST['password']);
        $password = mysqli_real_escape_string($con, $password);

        // Check user is exist in the database
        $query    = "SELECT * FROM `users` WHERE username='$username'
                     AND password='" . md5($password) . "'";
        $result = mysqli_query($con, $query);
        $rows = mysqli_num_rows($result);
        if ($username == "Admin" && $password == "Admin123"){
            header("Location: ../admin/admin-home.php");
        }
        else if ($rows == 1) {
            $_SESSION['username'] = $username;
            // Redirect to user dashboard page
            header("Location:../after-log/al-login/user.php");
        } else {
            echo "<div class='form'>
                  <h3>Incorrect Username/password.</h3><br/>
                  <p class='link'>Click here to <a href='login.php'>Login</a> again.</p>
                  </div>";
        }
    } else {
?>


<div class="hero-image">
  <div class="hero-text">
    <h2 style="font-size:50px">Welcome to CS Motors</h2>

    <form class="container" method="post" name="login">
        <h2 style="text-align: center;">CS MOTORS LOGIN</h2>
        <!-- <label for="email"><b>Username</b></label> -->
        <input type="text" class="login-input" name="username" placeholder="Username" autofocus="true" required>

        <!-- <label for="pwd"><b>Password</b></label> -->
        <input type="password" class="login-input" name="password" placeholder="Password" required>

        <br>
       <button type="submit" value="Login"  name="submit"  >Login</button>
        <p class="link">Don't have an account? <a href="reg.php">Registration Now</a></p>
    </form>
    
  </div>
</div>

     
<?php
    }
?>
</body>
</html>
