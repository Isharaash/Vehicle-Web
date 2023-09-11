<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">


    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" 
    integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" 
    integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
    <title>Parts</title>
    <link rel="icon" type="image/x-icon" href="../images/logo.png">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <script>
      function myFunction() {
        var x = document.getElementById("myTopnav");
        if (x.className === "topnav") {
          x.className += " responsive";
        } 
        else {
          x.className = "topnav";
        }
      }
    </script>

    <style>
      /* Center website */
      .main {
        max-width: 1000px;
        margin: auto;
      }

      h1 {
        font-size: 50px;
        word-break: break-all;
      }

      .row {
        margin: 10px -16px;
      }

      /* Add padding BETWEEN each column */
      .row,
      .row > .column {
        padding: 8px;
      }

      /* Create three equal columns that floats next to each other */
      .column {
        float: left;
        width: 33.33%;
        display: none; /* Hide all elements by default */
      }

      /* Clear floats after rows */ 
      .row:after {
        content: "";
        display: table;
        clear: both;
      }

      /* Content */
      .content {
        background-color: white;
        padding: 10px;
      }

      /* The "show" class is added to the filtered elements */
      .show {
        display: block;
      }

      /* Style the buttons */
      .btn {
        border: none;
        outline: none;
        padding: 12px 16px;
        background-color: white;
        cursor: pointer;
      }

      .btn:hover {
        background-color: #ddd;
      }

      .btn.active {
        background-color: #666;
        color: white;
      }


      .topnav {
        overflow: hidden;
        background-color: #333;
        margin-bottom: 10px;
        margin-top: 10px;
      }

      .topnav a {
        float: left;
        display: block;
        color: #f2f2f2;
        text-align: center;
        padding: 14px 16px;
        text-decoration: none;
        font-size: 17px;
      }

      .topnav a:hover {
        background-color: #ddd;
        color: black;
      }

      .topnav a.active {
        background-color: #0d6efd;
        color: white;
      }

      .topnav .icon {
        display: none;
      }

      button{
        width: 100%;
        background-color: #0d6efd;
      }

      .link{
        color: black;
        text-decoration: none;
      }

      a{
        text-decoration: none;
      }
      @media screen and (max-width: 600px) {
        .topnav a:not(:first-child) {display: none;}
        .topnav a.icon {
            float: right;
            display: block;
      }
      }

      @media screen and (max-width: 600px) {
        .topnav.responsive {position: relative;}
        .topnav.responsive .icon {
            position: absolute;
            right: 0;
            top: 0;
      }
        .topnav.responsive a {
            float: none;
            display: block;
            text-align: left;
        }
      }
      
    </style>
</head>

<body class="container-fluid bg-dark text-black">
    <header>
        <div class="topnav" id="myTopnav">
            <a href="../home.php">Home</a>
            <a href="../cars/cars.php">Cars</a>
            <a href="parts.php" class="active">Parts</a>
            <a href="../service/service.php">Service</a>
            <a href="../articals/index.php">Articles</a>
            <a href="../login/login.php">Profile</a>
            <a href="../about.php">About</a>
            <a href="javascript:void(0);" class="icon" onclick="myFunction()">
                <i class="fa fa-bars"></i>
            </a>
        </div>
    </header>

      <div class="main">

        <div id="myBtnContainer">
            <button class="btn active" onclick="filterSelection('all')"> Show all</button>
            
        </div>

        <!-- Portfolio Gallery Grid -->
        <div class="row">
          <?php
              $mysqli = new mysqli('localhost', 'root', 'As+s01galaxysa', 'csmotors') 
              or die(mysqli_error($mysqli));

              $result = $mysqli->query("SELECT * FROM parts WHERE id='1'") or die($mysqli->error);
              if ($result->num_rows > 0) {
                  // output data of each row
                  while($row = $result->fetch_assoc()) {
                    echo 
                    "<div class='column nature'>
                      <div class='content'>
                          <img src='../images/wheels.jpg' alt='Mountains' style='width:100%'>
                          <h4>".$row['name']."</h4>
                          <p class='price'>".$row['price']."<p>
                          <p><b>Description</b></p>
                          <p class='description'>".$row['description']."</p>
                          <button><a href='../login/login.php'  class='link'>Order via Online</a></button>
                      </div>
                    </div>";
                  }
              }

              $result = $mysqli->query("SELECT * FROM parts WHERE id='2'") or die($mysqli->error);
              if ($result->num_rows > 0) {
                  // output data of each row
                  while($row = $result->fetch_assoc()) {
                    echo 
                    "<div class='column nature'>
                      <div class='content'>
                          <img src='../images/taillights.jpg' alt='Mountains' style='width:100%'>
                          <h4>".$row['name']."</h4>
                          <p class='price'>".$row['price']."<p>
                          <p><b>Description</b></p>
                          <p class='description'>".$row['description']."</p>
                          <button><a href='../login/login.php'  class='link'>Order</a></button>
                      </div>
                    </div>";
                  }
              }

              $result = $mysqli->query("SELECT * FROM parts WHERE id='3'") or die($mysqli->error);
              if ($result->num_rows > 0) {
                  // output data of each row
                  while($row = $result->fetch_assoc()) {
                    echo 
                    "<div class='column nature'>
                      <div class='content'>
                          <img src='../images/c.jpg' alt='Mountains' style='width:100%'>
                          <h4>".$row['name']."</h4>
                          <p class='price'>".$row['price']."<p>
                          <p><b>Description</b></p>
                          <p class='description'>".$row['description']."</p>
                          <button><a href='../login/login.php'  class='link'>Order</a></button>
                      </div>
                    </div>";
                  }
              }

              $result = $mysqli->query("SELECT * FROM parts WHERE id='4'") or die($mysqli->error);
              if ($result->num_rows > 0) {
                  // output data of each row
                  while($row = $result->fetch_assoc()) {
                    echo 
                    "<div class='column nature'>
                      <div class='content'>
                          <img src='../images/81oP94ZTl-L._AC_SL1500_.jpg' alt='Mountains' style='width:100%'>
                          <h4>".$row['name']."</h4>
                          <p class='price'>".$row['price']."<p>
                          <p><b>Description</b></p>
                          <p class='description'>".$row['description']."</p>
                          <button><a href='../login/login.php'  class='link'>Order</a></button>
                      </div>
                    </div>";
                  }
              }

              $result = $mysqli->query("SELECT * FROM parts WHERE id='5'") or die($mysqli->error);
              if ($result->num_rows > 0) {
                  // output data of each row
                  while($row = $result->fetch_assoc()) {
                    echo 
                    "<div class='column nature'>
                      <div class='content'>
                          <img src='../images/61eW6Ww5GnL._AC_SL1001_.jpg' alt='Mountains' style='width:100%'>
                          <h4>".$row['name']."</h4>
                          <p class='price'>".$row['price']."<p>
                          <p><b>Description</b></p>
                          <p class='description'>".$row['description']."</p>
                          <button><a href='../login/login.php'  class='link'>Order</a></button>
                      </div>
                    </div>";
                  }
              }

              $result = $mysqli->query("SELECT * FROM parts WHERE id='6'") or die($mysqli->error);
              if ($result->num_rows > 0) {
                  // output data of each row
                  while($row = $result->fetch_assoc()) {
                    echo 
                    "<div class='column nature'>
                      <div class='content'>
                          <img src='../images/71g5EPfG1WL._AC_SL1500_.jpg' alt='Mountains' style='width:100%'>
                          <h4>".$row['name']."</h4>
                          <p class='price'>".$row['price']."<p>
                          <p><b>Description</b></p>
                          <p class='description'>".$row['description']."</p>
                          <button><a href='../login/login.php  class='link'>Order</a></button>
                      </div>
                    </div>";
                  }
              }

              $result = $mysqli->query("SELECT * FROM parts WHERE id='7'") or die($mysqli->error);
              if ($result->num_rows > 0) {
                  // output data of each row
                  while($row = $result->fetch_assoc()) {
                    echo 
                    "<div class='column nature'>
                      <div class='content'>
                          <img src='../images/81VU782oiZL._AC_SL1500_.jpg' alt='Mountains' style='width:100%'>
                          <h4>".$row['name']."</h4>
                          <p class='price'>".$row['price']."<p>
                          <p><b>Description</b></p>
                          <p class='description'>".$row['description']."</p>
                          <button><a href='../login/login.php'  class='link'>Order</a></button>
                      </div>
                    </div>";
                  }
              }
          ?>

        <!-- END GRID -->
        </div>
        </div>

        <script src="parts.js"></script>
</body>
</html>