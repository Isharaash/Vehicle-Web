<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>

    <style>
        body, html {
    height: 100%;
    margin: 0;
    font-family: Arial, Helvetica, sans-serif;
  }
  
  .hero-image {
    background-image: linear-gradient(rgba(0, 0, 0, 0.5), rgba(0, 0, 0, 0.5)), url("../images/1.jpg");
    height: 100%;
    background-position: center;
    background-repeat: no-repeat;
    background-size: cover;
    position: relative;
  }
  
  .hero-text {
    text-align: center;
    position: absolute;
    top: 50%;
    left: 50%;
    transform: translate(-50%, -50%);
    color: white;
  }
  
  .hero-text button {
    border: none;
    outline: 0;
    display: inline-block;
    padding: 10px 25px;
    color: black;
    background-color: #ddd;
    text-align: center;
    cursor: pointer;
  }
  
  .hero-text button:hover {
    background-color: #555;
    color: white;
  }

    /*Service Box Section*/
    .services .box-container{
        display: grid;
        grid-template-columns: repeat(auto-fit, minmax(75px, 1fr));
        gap: 20px;
        text-decoration: none;
        
    }

    .services .box-container .box{
        padding:25px 20px;
        text-align: center;
        background: #0d6efd;
        background: rgba(0,0,0,0.5);
        cursor: pointer;
        text-decoration: none;
        border-radius: 15px;
        
    }

    .services .box-container .box:hover{
        background: black;
        
    }

    .services .box-container .box img{
        height: 30px;
    }

    .services .box-container .box h3{
        color: white;
        font-size: 20px;
        padding-top: 14px;
    }
    /*Service ssection end*/
    </style>
</head>
<body>
<div class="hero-image">
  <div class="hero-text">
    <h2 style="font-size:50px">Car Details</h2>

    <section class="services">
        <div class="box-container">

            <div class="box">
                <a href="car-basic.php"><img src="car.png" alt="" ></a>
                <h3>Basic</h3>
            </div>

            <div class="box">
                <a href="car-infor.php"><img src="car.png" alt="" ></a>
                <h3>Stats</h3>
            </div>

            <div class="box">
                <a href="car-review.php"><img src="car.png" alt="" ></a>
                <h3>Review</h3>
            </div>

            <div class="box">
                <a href="admin-home.php"><h3>Back</h3></a>
                
            </div>
        </div>
    </section>
  </div>
</div>

</body>
</html>