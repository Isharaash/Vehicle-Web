<?php
//include auth_session.php file on all user panel pages
session_start();
    if(!isset($_SESSION["username"])) {
        header("Location: login.php");
        exit();
    }
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>User Profile</title>
    <link rel="icon" type="image/x-icon" href="../images/logo.png">
    <style>
        @import url('https://fonts.googleapis.com/css2?family=Open+Sans:wght@300&display=swap');


        *{
            font-family: 'Open Sans', sans-serif;
            margin: 0;
            padding: 0;
            box-sizing: none;
            border: none;
            text-decoration: none;
            text-transform: capitalize;
            
        }
        .heading-title{
            margin-top: 20px;
            text-align: center;
            margin-bottom: 3rem;
            font-size: 45px;
            text-transform: uppercase;
            color: #222;
        }
        body{
            background-color: #0d6efd;
            opacity: 0.7;
        }
        .box {
            box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2);
            max-width: 300px;
            margin: auto;
            text-align: center;
            font-family: arial;
        }

        .title {
            color: grey;
            font-size: 18px;
        }

        button {
            border: none;
            outline: 0;
            display: inline-block;
            padding: 8px;
            color: white;
            background-color: #000;
            text-align: center;
            cursor: pointer;
            width: 100%;
            font-size: 18px;
        }

        a {
        text-decoration: none;
            font-size: 22px;
            color: black;
        }

        button:hover, a:hover {
            opacity: 0.7;
        }
        .box{
            padding:3rem 2rem;
            text-align: center;
            background: wheat;
            cursor: pointer;
            text-decoration: none;
            border-radius: 15px;
        }
        h2{
            text-align: center;
        }
        .button{
            display: inline-block;
            background: white;
            margin-top: 10px;
            color:white;
            font-size: 10px;
            padding:14px 20px;
            cursor: pointer;
        }
    </style>
</head>
<body>

    <h2 class="heading-title">User Profile</h2>
        <div class="box">
        <img src="" alt="img" style="width:100%">
        <h2>Hey, <?php echo $_SESSION['username']; ?>!</h2>
        <p>You are in User profile page.</p>
       <br>

       <h4>Full name</h4>
       <p>Loading...</p>
       <br>

       <h4>Email Address</h4>
       <p>Loading...</p>
       <br>

       <h4>Username</h4>
       <p>Loading...</p>
       <br>

       <h4>Password</h4>
       <p>Loading...</p>
       <br>

        
        
        <p class="button"><a href="logout.php">Logout</a></p>
        <br>
        <p class="button"><a href="../users/home.php">Home</a></p>
        <br>
        <p class="button"><a href="#">Edit Profile</a></p>
    </div>


</body>
</html>
