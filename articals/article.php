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
    <div class="topnav">
        <a href="../home.php">Home</a>
        <a href="../cars/cars.php">Cars</a>
        <a href="../parts.php">Parts</a>
        <a href="../service/service.php">Service</a>
        <a href="index.php" class="active">Articles</a>
        <a href="../login/login.php">Profile</a>
        <a href="../about.php">About</a>
    </div>

    <h2 class="heading-title">Reading Page with Reading Mode</h2>

<div class="artical-container">
    <?php

        $title = mysqli_real_escape_string($conn, $_GET['title']);
        $date = mysqli_real_escape_string($conn, $_GET['date']);

        $sql = "SELECT * FROM artical WHERE title='$title' AND date='$date'";
        $result = mysqli_query($conn, $sql);
        $queryResults = mysqli_num_rows($result);

        if ($queryResults > 0) {
            while ($row = mysqli_fetch_assoc($result)){
                echo "<div>
                    <h3>".$row['title']."</h3>
                    <p>".$row['para_1']."</p>
                    <p>".$row['para_2']."</p>
                    <p>".$row['date']."<p>
                    <p>".$row['author']."</p>
                        
                </div>";
            }
        }
        
        
        
        
        /*$result = $conn->query($sql);

        if ($result->num_rows > 0) {
            // output data of each row
            while($row = $result->fetch_assoc()) {
                 echo "<div>
                    <h3>".$row['a_title']."</h3>
                    <p>".$row['a_text']."</p>
                    <p>".$row['a_date']."<p>
                    <p>".$row['a_author']."</p>
                        
                </div>";
            }
        }*/
    ?>
</div>
</body>
</html>