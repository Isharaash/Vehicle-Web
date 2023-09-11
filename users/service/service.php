<!DOCTYPE html>
<html lang="en">
<head>
   <meta charset="UTF-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>Service</title>
   <link rel="icon" type="image/x-icon" href="../../images/logo.png">

   <!-- Boostrap 5 -->
   <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" 
    integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" 
    integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>

    
    <script src="../js/service.js"></script>

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    
    <link rel="stylesheet" href="../css/service.css">


</head>
<body class="container-fluid">

    <header>
        <div class="topnav" id="myTopnav">
            <a href="../home.php">Home</a>
            <a href="../cars/cars.php">Cars</a>
            <a href="../parts/parts.php">Parts</a>
            <a href="service.php" class="active">Service</a>
            <a href="../articals/index.php">Articles</a>
            <a href="../login/profile.php">Profile</a>
            <a href="../about.php">About</a>
            <a href="javascript:void(0);" class="icon" onclick="myFunction()">
                <i class="fa fa-bars"></i>
            </a>
        </div>
    </header>

    <div class="about-section">
          <!-- <h1></h1> -->
          <!-- <h3><i>
          Our engagement with you doesn't conclude at the sale, it is just the beginning. 
          At CS Motors, we have dedicated technicians trained overseas by manufacturers on the specifications 
          and standards for all automobiles and other equipment, to make servicing, maintenance and replacement 
          a hassle free process for you.
          </i></h3>
          <br>
          <h3><i>
          Using only genuine parts for replacement, we utilize the latest technology, tools and equipment to provide 
          you unrivaled service solutions, elevating customer care to bench marked industry standards. 
          Our After sales Teams continue to meet the demands of your evolving lifestyles to ensure proper 
          maintenance of your purchase, and above all, your peace of mind.
          </i></h3>
          <br>   -->
        
        <h2 style="text-align: center;">Vehicles service types</h2>
        <hr>
        <p class="p">Vehicle Wash</p>
        <p class="p">Interior and Exterior Detailing</p>
        <p class="p">Full Service</p>
        <p class="p">Hybrid services</p>
        <p class="p">Wheel Alignment</p>
        <p class="p">Other Specialized services</p>
        <hr>
    </div>

    <div>
        <div class="row row-cols-1 row-cols-md-3 g-4" style="margin-top: 10px;">
            <div class="col">
              <div class="card h-100">
                <img src="../../images/service.jpg" class="card-img-top" alt="...">
                <div class="card-body">
                  <h5 class="card-title">Vehicle Wash</h5>
                  <p class="card-text">
                    <ul>
                      <li>Quick Wash - Body wash, and tire dressing</li>
                      <li>Detailed Wash -Body wash, carpet wash, glass cleaning, dash cleaning, tire dressing & Wax, Interior vacuum (Free)</li>
                    </ul>
                  </p>
                </div>
                <div class="card-footer">
                  <small class="text-muted">Rs 1,000</small>
                </div>
                <div>
                  <button type="submit"><a href="../booking/service-order/form.php">Book Now</a></button>
                </div>
              </div>
            </div>
            
            <div class="col">
              <div class="card h-100">
                <img src="../../images/service.jpg" class="card-img-top" alt="...">
                <div class="card-body">
                  <h5 class="card-title">Interior Detailing</h5>
                  <p class="card-text">
                  <ul>
                    <li>Removing, cleaning and drying of seats</li>
                    <li>Vacuum cleaning</li>
                    <li>Cleaning of floor boards/ dashboard/ upholstery/ hood</li>
                    <li>Leather care</li>
                  </ul>
                  </p>
                </div>
                <div class="card-footer">
                  <small class="text-muted">Rs 2,500</small>
                </div>
                <div>
                  <button type="submit"><a href="../booking/service-order/form.php">Book Now</a></button>
                </div>
              </div>
            </div>

            <div class="col">
              <div class="card h-100">
                <img src="../../images/service.jpg" class="card-img-top" alt="...">
                <div class="card-body">
                  <h5 class="card-title">Exterior Detailing</h5>
                  <p class="card-text">
                  <ul>
                    <li>Body wash</li>
                    <li>Cut/ Polish and Wax</li>
                  </ul>
                  </p>
                </div>
                <div class="card-footer">
                  <small class="text-muted">Rs 2,000</small>
                </div>
                <div>
                  <button type="submit"><a href="../booking/service-order/form.php">Book Now</a></button>
                </div>
              </div>
            </div>


            <div class="col">
              <div class="card h-100">
                <img src="../../images/service.jpg" class="card-img-top" alt="...">
                <div class="card-body">
                  <h5 class="card-title">CS Motors Hybrid Center</h5>
                  <p class="card-text">
                  <ul>
                    <li>Hybrid battery service/ repair/ replacement</li>                 
                    <li>High voltage system scanning & diagnostic</li>                
                    <li>Service reminder lights (Service indicating mileage setting)</li>                  
                    <li>ECVT oil & HMMF change</li>                 
                    <li>Wire and cable check</li>                 
                    <li>Complete computer diagnostic test (Electronic)</li>                
                    <li>Inverter coolant change & system bleeding</li>
                    <li>Battery power & energy test</li>
                  </ul>
                  </p>
                </div>
                <div class="card-footer">
                  <small class="text-muted">Rs 2,000</small>
                </div>
                <div>
                  <button type="submit"><a href="../booking/service-order/form.php">Book Now</a></button>
                </div>
              </div>
            </div>

            <div class="col">
              <div class="card h-100">
                <img src="../../images/service.jpg" class="card-img-top" alt="...">
                <div class="card-body">
                  <h5 class="card-title">Wheel Alignment</h5>
                  <p class="card-text">
                  <ul>
                    <li>Toe Alignment</li>
                    <li>Caster Alignment</li>
                  </ul>
                  </p>
                </div>
                <div class="card-footer">
                  <small class="text-muted">Rs 2,000</small>
                </div>
                <div>
                <button type="submit"><a href="../booking/service-order/form.php">Book Now</a></button>
                </div>
              </div>
            </div>
            
            <div class="col">
              <div class="card h-100">
                <img src="../../images/service.jpg" class="card-img-top" alt="...">
                <div class="card-body">
                  <h5 class="card-title">Other Serives </h5>
                  <p class="card-text">
                  <ul>
                    <li>Engine Scanning</li>
                    <li>Fuel System Cleaning</li>
                    <li>ATF Change</li>
                    <li>Manual gear oil change</li>
                    <li>Brake Fluid Change</li>
                    <li>Radiator Coolant Flush and Replacement</li>
                    <li>Corrosion Protection</li>
                    <li>Leather Care</li>
                    <li>Engine Oil and Filter Change</li>
                    <li>Engine Cleaning</li>
                  </ul>
                  </p>
                </div>
                <div class="card-footer">
                  <small class="text-muted">Rs 2,000</small>
                </div>
                <div>
                  <button type="submit"><a href="../booking/service-order/form.php">Book Now</a></button>
                </div>
              </div>
            </div>
          </div>
    </div>
</body>
</html>