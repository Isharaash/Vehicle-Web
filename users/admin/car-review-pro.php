<?php

session_start();

//Connect to the database
$mysqli = new mysqli('localhost', 'root', 'As+s01galaxysa', 'csmotors') or die(mysqli_error($mysqli));


$id = 0;
$update = false;
$driver = "";
$engine = "";
$interior = "";
$packs = "";
$safety = "";
$security = "";

// data save part
if(isset($_POST['save'])){
    $driver = $_POST['driver'];
    $engine = $_POST['engine'];
    $interior = $_POST['interior'];
    $packs = $_POST['packs'];
    $safety = $_POST['safety'];
    $security = $_POST['security'];

    $mysqli->query("INSERT INTO car_review(driver, engine,interior, packs, safety, security) 
    VALUES('$driver', '$engine','$interior', '$packs', '$safety', '$security')")
     or die($mysqli->error);

    // success message
    $_SESSION['message'] = "Record has been saved!";
    $_SESSION['msg_type'] = "succsess";
    header("location: car-review.php");
}


// data delete part
if(isset($_GET['delete'])){
    $id = $_GET['delete'];
    $mysqli->query("DELETE FROM car_review WHERE id=$id") or die($mysqli->error);

    $_SESSION['message'] = "Record has been deleted!";
    $_SESSION['msg_type'] = "danger";
    header("location: car-review.php");
}

if(isset($_GET['edit'])){
    $id = $_GET['edit'];
    $update = true;
    $result = $mysqli->query("SELECT * FROM car_review WHERE id=$id") or die($mysqli->error);
    if( $result > 0 ){
        $row = $result->fetch_array();
        $driver =  $row['driver'];
        $engine =  $row['engine'];
        $interior =  $row['interior'];
        $packs =  $row['packs'];
        $safety =  $row['safety'];
        $security =  $row['security'];
    }
}

if(isset($_POST['update'])){
    $id = $_POST['id'];
    $driver = $_POST['driver'];
    $engine = $_POST['engine'];
    $interior = $_POST['interior'];
    $packs = $_POST['packs'];
    $safety = $_POST['safety'];
    $security = $_POST['security'];


    $mysqli->query("UPDATE car_review SET driver='$driver', engine='$engine', interior='$interior', 
    packs='$packs', safety='$safety', security='$security'WHERE id=$id") 
    or die($mysqli->error);

    $_SESSION['message'] = "Record has been updated!";
    $_SESSION['msg_type'] = "warning";

    header('location: car-review.php');
}
