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
   <title>Online Booking</title>
   <link rel="icon" type="image/x-icon" href="../../../images/logo.png">
   <script src="form.js"></script>

   <style>
    @import url('https://fonts.googleapis.com/css2?family=Open+Sans:wght@300&display=swap');

   body, html {
      height: 100%;
      font-family: 'Open Sans', sans-serif;
   }
   .container {
   position: absolute;
   margin: 20px;
   max-width: 40%;
   height: 650px;
   padding: 16px;
   background-color: white;
   border: solid #0d6efd 1px;
   border-radius: 5px;
   left: 0;
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

   .heading-title{
      margin-top: 20px;
      text-align: center;
      margin-bottom: 42px;
      font-size: 45px;
      text-transform: uppercase;
      color: #222;
   }

   img{
      float: right;
      height: 1000px;
      width: 700px;
      margin-top: 20px;
      margin-right: 10px;
      
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
<body  class="container-fluid">

      <header>
        <div class="topnav" id="myTopnav">
            <a href="../../home.php">Home</a>
            <a href="../../cars/cars.php">Cars</a>
            <a href="../../parts/parts.php" >Parts</a>
            <a href="../../service/service.php">Service</a>
            <a href="../../articals/index.php">Articles</a>
            <a href="../../login/profile.php">Profile</a>
            <a href="../../about.php">About</a>
            <a href="javascript:void(0);" class="icon" onclick="myFunction()">
                <i class="fa fa-bars"></i>
            </a>
        </div>
      </header>

   <h2 class="heading-title">Fill the bewlo form for book your car service now!</h2>
   <img src="img.jpg" alt="">
      <form action="process.php" method="post" class="container" name="form" onsubmit="return validateForm()">

            <div class="mb-3">
               <Label class="form-label"><b>Full Name</b></Label>
               <input type="text" name="fullname" class="form-control" autofocus="true">
            </div>

            <div class="mb-3">
               <Label class="form-label"><b>Email Address</b> </Label>
               <input type="email" name="email" class="form-control">
            </div>

            <div class="mb-3">
               <Label class="form-label"><b>Contact Number</b></Label>
               <input type="text" name="phone" class="form-control">
            </div>

            <div class="mb-3">
               <Label class="form-label"><b>Your City</b></Label>
               <input type="text" name="city" class="form-control">
            </div>

            <div class="mb-3">
               <Label class="form-label"><b>Address</b></Label>
               <input type="text" name="address" class="form-control">
            </div>

            <div class="mb-3">
               <Label class="form-label"><b>Select Your Car Model</b></Label>
               <select name="model" id="model" multiple class="form-select" aria-label="Default select example">
                  <option value="service1">Vehicle Wash</option>
                  <option value="service2">Interior Detailing</option>
                  <option value="service3">CS Motors Hybrid Center</option>
                  <option value="service4">Exterior Detailing</option>
                  <option value="service5">Wheel Alignment</option>
                  <option value="service6">Other Serives </option>

               </select>
            </div>
         <button type="submit" name="order" class="btn btn-primary">Book</button>
      </form>
   </div>
   <script src="form.js"></script>
</body>
</html>
