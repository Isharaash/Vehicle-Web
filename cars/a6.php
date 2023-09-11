<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Audi A6</title>
    <link rel="icon" type="image/x-icon" href="../images/logo.png">

    <!-- Boostrap 5 -->
   <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" 
    integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" 
    integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>

    
    <script src="../js/indi-cars.js"></script>

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    
    <link rel="stylesheet" href="../css/indi-cars.css">


</head>
<body class="container-fluid">
    
    <header>
        <div class="topnav" id="myTopnav">
            <a href="../home.php">Home</a>
            <a href="cars.php" class="active">Cars</a>
            <a href="../parts/parts.php">Parts</a>
            <a href="../service/service.php">Service</a>
            <a href="../articals/index.php">Articles</a>
            <a href="../login/login.php">Profile</a>
            <a href="../about.php">About</a>
            <a href="javascript:void(0);" class="icon" onclick="myFunction()">
                <i class="fa fa-bars"></i>
            </a>
        </div>
    </header>

    <!-- image slideshow Start -->
    <div id="carouselExampleIndicators" class="carousel slide" data-bs-ride="carousel">
    <div class="carousel-indicators">
        <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
        <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="1" aria-label="Slide 2"></button>
        <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="2" aria-label="Slide 3"></button>
        <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="3" aria-label="Slide 4"></button>
        <!-- <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="4" aria-label="Slide 5"></button> -->
    </div>
    <div class="carousel-inner">
        <div class="carousel-item active">
            <img src="../images/A6/1.jpg" class="d-block w-100" alt="...">
        </div>

        <div class="carousel-item">
            <img src="../images/A6/2.jpg" class="d-block w-100" alt="...">
        </div>

        <div class="carousel-item">
            <img src="../images/A6/3.jpg" class="d-block w-100" alt="...">
        </div>

        <div class="carousel-item">
            <img src="../images/A6/4.jpg" class="d-block w-100" alt="...">
        </div>

        <!-- <div class="carousel-item">
            <img src="../images/Q8/2.jpg" class="d-block w-100" alt="...">
        </div> -->
    </div>
    <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="prev">
        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
        <span class="visually-hidden">Previous</span>
    </button>
    <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="next">
        <span class="carousel-control-next-icon" aria-hidden="true"></span>
        <span class="visually-hidden">Next</span>
    </button>
    </div>
    <!-- image slideshow End -->




    <!-- Tab links -->
        <div class="tab">
            <button class="tablinks" onclick="openCity(event, 'London')">Key information</button>
            <button class="tablinks" onclick="openCity(event, 'Paris')">Stats & Performance</button>
            <button class="tablinks" onclick="openCity(event, 'Tokyo')">Review</button>
        </div>

        <div class="box-container">

            <div id="London" class="tabcontent">
                <?php
                $mysqli = new mysqli('localhost', 'root', 'As+s01galaxysa', 'csmotors') 
                or die(mysqli_error($mysqli));
                $result = $mysqli->query("SELECT * FROM car_basic WHERE id='4'") or die($mysqli->error);

                if ($result->num_rows > 0) {
                    // output data of each row
                    while($row = $result->fetch_assoc()) {
                        echo 
                        "<div class='content'>

                            <h2 class='name'>".$row['name']."</h2>
                            <p class='small_des'>".$row['small_des']."</p>
                            <p class='price'>".$row['price']."<p>
                            <p><b>Description</b></p>
                            <p class='description'>".$row['description']."</p>
                            
                        </div>";
                        }
                    }
                ?>
            </div>

            <div id="Paris" class="tabcontent">
                <?php
                    $mysqli = new mysqli('localhost', 'root', 'As+s01galaxysa', 'csmotors') 
                    or die(mysqli_error($mysqli));
                    $result = $mysqli->query("SELECT * FROM car_infor WHERE id='4'") or die($mysqli->error);

                    if ($result->num_rows > 0) {
                        // output data of each row
                        while($row = $result->fetch_assoc()) {
                            echo 
                            "<div class='content'>

                            <p><b>Engine Size</b></p>
                            <p> ".$row['eng_size']."</p>

                            <p><b>Engine Power</b></p>
                            <p> ".$row['eng_pow']."</p>

                            <p><b>Transmission</b></p>
                            <p> ".$row['trans']."</p>

                            <p><b>Doors</b></p>
                            <p> ".$row['door']."</p>

                            <p><b>Seats</b></p>
                            <p> ".$row['seats']."</p>

                            <p><b>Co2 emissions</b></p>
                            <p> ".$row['co2_emi']."</p>

                            <p><b>Top speed</b></p>
                            <p> ".$row['top_speed']."</p>

                            <p><b>Boot</b></p>
                            <p> ".$row['boot']."</p>

                            <p><b>Consumption</b></p>
                            <p> ".$row['consumption']."</p>

                            <p><b>Safety rating</b></p>
                            <p> ".$row['safety_rate']."</p>
                                
                            </div>";
                        }
                    }
                ?>
            </div>

            <div id="Tokyo" class="tabcontent">
                <?php
                    $mysqli = new mysqli('localhost', 'root', 'As+s01galaxysa', 'csmotors') 
                    or die(mysqli_error($mysqli));
                    $result = $mysqli->query("SELECT * FROM car_review WHERE id='4'") or die($mysqli->error);

                    if ($result->num_rows > 0) {
                        // output data of each row
                        while($row = $result->fetch_assoc()) {
                            echo 
                            "<div class='content'>

                            <p><b>Driver Convenience</b></p>
                            <p> ".$row['driver']."</p>

                            <p><b>Engine/Drivetrai/Suspens</b></p>
                            <p> ".$row['engine']."</p>

                            
                            <p><b>Interior Features</b></p>
                            <p> ".$row['interior']."</p>

                            <p><b>Packs</b></p>
                            <p> ".$row['packs']."</p>

                            <p><b>Passive Safety</b></p>
                            <p> ".$row['safety']."</p>

                            <p><b>Security</b></p>
                            <p> ".$row['security']."</p>

                                                            
                            </div>";
                        }
                    }
                ?>


            </div>
        </div>
    </section>

    <button type="submit" class="button"> <a href="../login/login.php" class="a">Book Now</a></button>
    
</body>
</html>