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

    <!-- Boostrap 5 links  -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" 
    integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" 
    integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

    <style>
        .heading-title{
            margin-top: 20px;
            text-align: center;
            margin-bottom: 3rem;
            font-size: 45px;
            text-transform: uppercase;
            color: #222;
        }
        a {
        text-decoration: none;
            font-size: 22px;
            color: black;
        }
        .box{
            padding:3rem 2rem;
            text-align: center;
            background: wheat;
            cursor: pointer;
            text-decoration: none;
            border-radius: 15px;
        }
    </style>
</head>
<body class="container-fluid">
    
    <div class="header">
        <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
            <div class="container-fluid">
                <a class="navbar-brand" href="#">CS Motors</a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                <li class="nav-item">
                    <a class="nav-link" href="../home.php">Home</a>
                    </li>

                    <li class="nav-item">
                    <a class="nav-link"   href="index.php">Articles</a>
                    </li>

                    <li class="nav-item">
                    <a class="nav-link active" aria-current="page" href="../cars/cars.php">Cars</a>
                    </li>

                    <li class="nav-item">
                    <a class="nav-link" href="../parts/parts.php">Parts</a>
                    </li>

                    <li class="nav-item">
                    <a class="nav-link" href="../service/service.php">Service</a>
                    </li>

                    <li class="nav-item">
                    <a class="nav-link" href="../login/login.php">Profile</a>
                    </li>

                    <li class="nav-item">
                    <a class="nav-link" href="../login/login.php">Logout</a>
                    </li>

                    <li class="nav-item">
                    <a class="nav-link" href="#">About Us</a>
                    </li>

                </ul>
                </div>
                </div>
        </nav>
    </div>

    <h2 class="heading-title">User Profile</h2>
        <div class="box">
        <img src="" alt="img" style="width:100%">
        <h2>Hey, Welcome back <?php echo $_SESSION['username']; ?>!</h2>
        <p>You are in User profile page.</p>
       <br>

    </body>
</html>