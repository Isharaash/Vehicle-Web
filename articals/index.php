<?php
    include 'header.php'
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Article</title>
    <link rel="icon" type="image/x-icon" href="../images/logo.png">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" 
    integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" 
    integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous">
    </script>

    <link rel="stylesheet" href="../css/index.css">
</head>
<body class="container-fluid">
    <div class="header" style="margin-top: 10px; margin-bottom:20px">

    
        <nav class="navbar navbar-expand-lg navbar-dark bg-dark">   
            <div class="container-fluid">
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                <li class="nav-item">
                    <a class="nav-link" href="../home.php">Home</a>
                    </li>

                    <li class="nav-item">
                    <a class="nav-link" href="../cars/cars.php">Cars</a>
                    </li>

                    <li class="nav-item">
                    <a class="nav-link" href="../parts/parts.php">Parts</a>
                    </li>

                    <li class="nav-item">
                    <a class="nav-link" href="../service/service.php">Service</a>
                    </li>

                    <li class="nav-item">
                    <a class="nav-link active" aria-current="page" href="index.php">Articles</a>
                    </li>


                    <li class="nav-item">
                    <a class="nav-link" href="../login/login.php">Profile</a>
                    </li>

                    <li class="nav-item">
                    <a class="nav-link" href="../about.php">About Us</a>
                    </li>

                </ul>
                <form class="d-flex" action="search.php" method="POST">
                    <input class="form-control me-2" type="search"placeholder="Search..." name="search" aria-label="Search">
                    <button  class="btn btn-primary" type="submit" name="submit-serach">Search</button>
                </form>
                </div>
            </div>
        </nav>

    </div>

    <h2 class="heading-title">Top Articles</h2>

    <div class="artical-container">
    <div class="our-column">
        <?php
            $sql = "SELECT * FROM artical WHERE id=2";
            $result = $conn->query($sql);

            if ($result->num_rows > 0) {
                // output data of each row
                while($row = $result->fetch_assoc()) {
                    echo 
                    "               

                    <div class='our-column'>
                        <div class='our-card'>
                            <img src='images/cars.jpg' alt='Cars' style='width:100%'>
                            <h3>".$row['title']."</h3>
                            <p>".$row['para_1']." </p> 
                            <p>".$row['date']."<p> 
                            <p><button class='our-button'>Read More</button></p>
                        </div>
                    </div>
                    ";
                }
            }
        ?>
        <?php
            $sql = "SELECT * FROM artical WHERE id=2";
            $result = $conn->query($sql);

            if ($result->num_rows > 0) {
                // output data of each row
                while($row = $result->fetch_assoc()) {
                    echo 
                    "       
                    <div class='our-column'>
                        <div class='our-card'>
                            <img src='images/cars.jpg' alt='Cars' style='width:100%'>
                            <h3>".$row['title']."</h3>
                            <p>".$row['para_1']." </p> 
                            <p>".$row['date']."<p> 
                            <p><button class='our-button'>Read More</button></p>
                        </div>
                    </div>";
                }
            }
        ?>
        </div>
    </div>
</body>
</html>