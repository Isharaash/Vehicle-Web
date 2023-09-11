<?php 
    include 'header.php'
?>

<?php
    include 'header.php'
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Article Search</title>
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

    <header>
        <div class="topnav" id="myTopnav">
            <a href="../home.php">Home</a>
            <a href="../cars/cars.php">Cars</a>
            <a href="../parts/parts.php">Parts</a>
            <a href="../service/service.php">Service</a>
            <a href="index.php" class="active">Articles</a>
            <a href="../login/login.php">Profile</a>
            <a href="../about.php">About</a>
            <a href="javascript:void(0);" class="icon" onclick="myFunction()">
                <i class="fa fa-bars"></i>
            </a>
        </div>
    </header>

    
    <h2 class="heading-title">Searched Articles</h2>

<div class="artical-container">
    <?php 
        if(isset($_POST['submit-serach'])){
            $search = mysqli_real_escape_string($conn, $_POST['search']);

            $sql = "SELECT * FROM artical WHERE title LIKE '%$search%' 
            OR para_1 LIKE '%$search%' 
            OR para_2 LIKE '%$search%'
            OR author LIKE '%$search%'
            OR date LIKE '%$search%' ";

            $result = mysqli_query($conn, $sql);
            $queryResult = mysqli_num_rows($result);

            echo "There are " . $queryResult . " results!";

            if($queryResult > 0) {
                while($row = mysqli_fetch_assoc($result)){
                    echo "<a href='article.php?title=".$row['title']."&date=".$row['date']."'><div>
                        <h3>".$row['title']."</h3>
                        <p>".$row['para_1']."</p>
                        <p>".$row['para_2']."</p>
                        <p>".$row['date']."<p>
                        <p>".$row['author']."</p>
                        
                    </div></a>";
                }
            } else {
                echo " Thee are no results matching your search!";
            }
        }
    ?>

</div>