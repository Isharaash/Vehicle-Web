<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>CS Motors</title>
    <link rel="icon" type="image/x-icon" href="images/logo.png">

    <!-- Boostrap 5 -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" 
    integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" 
    integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>

    
    <script src="js/home.js"></script>

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    
    <link rel="stylesheet" href="css/home.css">

</head>
<body class="container-fluid">

    <header>
        <div class="topnav" id="myTopnav">
            <a href="home.php" class="active">Home</a>
            <a href="cars/cars.php">Cars</a>
            <a href="parts/parts.php">Parts</a>
            <a href="service/service.php">Service</a>
            <a href="articals/index.php">Articles</a>
            <a href="login/login.php">Profile</a>
            <a href="about.php">About</a>
            <a href="javascript:void(0);" class="icon" onclick="myFunction()">
                <i class="fa fa-bars"></i>
            </a>
        </div>
    </header>

    <div class="welcome">
        <img src="images/welcome.jpg" alt="Car Image" style="width:100%;">
        <div class="welcome-content">
            <h2 class="welcome-head">WELCOME TO</h2>
            <h1 class="welcome-head2">CS MOTORS</h1>
            <p class="welcome-head3">Excellent Quality, Luxury Brands.</p>
        </div>
    </div>

    <div id="carouselExampleCaptions" class="carousel slide" data-bs-ride="carousel">
        <div class="carousel-indicators">
            <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
            <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="1" aria-label="Slide 2"></button>
            <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="2" aria-label="Slide 3"></button>
        </div>
        <div class="carousel-inner">
            <div class="carousel-item active">
            <img src="images/rage-rover/9.jpg" class="d-block w-100" alt="Car Image">
            <div class="carousel-caption d-none d-md-block">
                <h5>Rage Rover</h5>
                <!-- <p>Some representative placeholder content for the first slide.</p> -->
            </div>
            </div>

            <div class="carousel-item">
            <img src="images/A6/1.jpg" class="d-block w-100" alt="Car Image">
            <div class="carousel-caption d-none d-md-block">
                <h5>Audi A6</h5>
                <!-- <p>Some representative placeholder content for the second slide.</p> -->
            </div>
            </div>

            <div class="carousel-item">
            <img src="images/sclass/1.jpg" class="d-block w-100" alt="Car Image">
            <div class="carousel-caption d-none d-md-block">
                <h5>S Class</h5>
                <!-- <p>Some representative placeholder content for the third slide.</p> -->
            </div>
            </div>

        </div>

        <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Previous</span>
        </button>

        <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Next</span>
        </button>

    </div>
    
    <!-- Artical section start -->
        <h2 class="heading-title">Facts About Cars</h2>

        <div class="row row-cols-1 row-cols-md-3 g-4" style="margin-top: 10px;">

            <div class="col">
                <div class="card h-100">
                <img src="images/the.jpg" alt="...">
                
                <div class="card-body">
                    <h5 class="card-title">World’s first car</h5>
                    <p class="card-text">The world’s first automobile was developed by Carl Benz in 1885. The top speed of the motor car was 16 km per hour. It had a one cylinder four-stroke engine installed horizontally on a specifically designed chassis. It was known as the Benz Patent Motorwagen.</p>
                </div>
                <div class="card-footer">
                    <small class="text-muted">Last updated 3 mins ago</small>
                </div>
                </div>
            </div>

            <div class="col">
                <div class="card h-100">
                <a href=""><img src="images/Auto-mechanic-with-tablet-pc-looking-for-spares-at-workshop.-min.jpg" class="card-img-top" alt="..."></a>
                
                <div class="card-body">
                    <h5 class="card-title">How many cars are there in the world?</h5>
                    <p class="card-text">There are an estimated 1.2 billion cars in the world today while there were only 500 million in 1986. According to a report released by a research house Bernstein, there will be a total of 2 billion cars on the planet by 2040.</p>
                </div>
                <div class="card-footer">
                    <small class="text-muted">Last updated 3 mins ago</small>
                </div>
                </div>
            </div>

            <div class="col">
                <div class="card h-100">
                    <a href=""><img src="images/Dangerous-driving-while-writing-SMS-text-message.-min.jpg" class="card-img-top" alt="..."></a>
                    
                    <div class="card-body">
                        <h5 class="card-title">Right or left?</h5>
                        <p class="card-text">Almost 65% of the world’s population drives on the right side of the road.</p>
                    </div>
                    <div class="card-footer">
                        <small class="text-muted">Last updated 3 mins ago</small>
                    </div>
                </div>
            </div>

        </div>
    <!-- Artical section End -->

    <!-- Our service start -->

    <h2 class="heading-title">Our Service</h2>
    
    <div class="our-row">
        <div class="our-column">
            <div class="our-card">
                <img src="images/cars.jpg" alt="Cars" style="width:100%">
                <h1>Cars</h1>
                <p class="our-title">Cars</p>
                <p>Luxury Cars</p>
                <p><button class="our-button">Contact</button></p>
            </div>
        </div>

        <div class="our-column">
            <div class="our-card">
                <img src="images/parts.jpg" alt="Parts" style="width:100%">
                <h1>Parts</h1>
                <p class="our-title">Parts</p>
                <p>Genuine Parts</p>
                <p><button class="our-button">Contact</button></p>
            </div>
        </div>

        <div class="our-column">
            <div class="our-card">
                <img src="images/service.jpg" alt="Service" style="width:100%">
                <h1>Service</h1>
                <p class="our-title">Service</p>
                <p>High Class Car Service</p>
                <p><button class="our-button">Contact</button></p>
            </div>
        </div>
    </div>

    
    <!-- Our service End -->

    <div class="parallax1"></div>

        <div class="about-section">
            <h1>About Us</h1>
            <h3> <i>
            We are Sri Lanka’s best automobile care specialists – with state-of- the-art service centers located across the country. 
            Each center is extremely committed to providing our clients with the very best services.</i></h3>
        </div>

    <div class="parallax2"></div>

        <div class="about-section2">
            <h1>Our Showrooms</h1>
            <hr>
            <h2>Colombo</h2>
            <h4>Kandy</h4>
            <h4>Galle</h4>
            <h4>Kurunagala</h4>
        </div>

    

    <div class="footer-basic">
        <footer>
            <div class="social">
            <a href="home.html"><i class="bi bi-house"></i></a>
            <a href="#"><i class="bi bi-instagram"></i></i></a>
            <a href="https://www.facebook.com/Cs-Motors-100999455879122"><i class="bi bi-facebook"></i></a>
            <a href="#"><i class="bi bi-twitter"></i></a>
            </div>
            <ul class="list-inline">
                <li class="list-inline-item"><a href="home.html">Home</a></li>
                <li class="list-inline-item"><a href="#">Instagram</a></li>
                <li class="list-inline-item"><a href="https://www.facebook.com/Cs-Motors-100999455879122">Facebook</a></li>
                <li class="list-inline-item"><a href="https://www.facebook.com/Cs-Motors-100999455879122">Contact</a></li>
                <li class="list-inline-item"><a href="#">Privacy Policy</a></li>
            </ul>
            <p class="copyright">CS MOTARS © 2022</p>
        </footer>
    </div>


    
</body>
</html>
