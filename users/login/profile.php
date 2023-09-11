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
    <link rel="icon" type="image/x-icon" href="../../images/logo.png">

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
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

        .buttonload {
            background-color: #212121; /* Green background */
            border: none; /* Remove borders */
            color: white; /* White text */
            padding: 12px 24px; /* Some padding */
            font-size: 16px; /* Set a font-size */
        }

        /* Add a right margin to each icon */
        .fa {
            margin-left: -12px;
            margin-right: 8px;
        }

        h2{
            margin-top: 40px;
            margin-bottom: 20px;
            text-align: center;
            font-size: 30px;

        }

        hr{
            background-color: red;
        }



        .card {
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
    </style>
</head>
<body>


    <h2>User Profile</h2> 
    <hr>

    <div class="card">
        <img src="../../images/ava.jpg" alt="user profile" style="width:100%">
        <h1><?php echo $_SESSION['username']; ?></h1>
        <p class="title">Full name</p>
        <button class="buttonload">
            <i class="fa fa-spinner fa-spin"></i>Loading
        </button>
        <p>Email Address</p>
        <button class="buttonload">
            <i class="fa fa-spinner fa-spin"></i>Loading
        </button>
        <p>Password</p>
        <button class="buttonload">
            <i class="fa fa-spinner fa-spin"></i>Loading
        </button>

        <p><button><a href="logout.php">Logout</a></button></p>
        <p><button><a href="../home.php">Home</a></button></p>
        <p><button><a href="#">Edit Profile</a></button></p>
    </div>
    
</body>
</html>
