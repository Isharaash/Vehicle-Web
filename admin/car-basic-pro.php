<?php

session_start();

//Connect to the database
$mysqli = new mysqli('localhost', 'root', 'As+s01galaxysa', 'csmotors') or die(mysqli_error($mysqli));


$id = 0;
$update = false;
$name = "";
$small_des = "";
$price = "";
$description = "";

// data save part
if(isset($_POST['save'])){
    $name = $_POST['name'];
    $small_des = $_POST['small_des'];
    $price = $_POST['price'];
    $description = $_POST['description'];

    $mysqli->query("INSERT INTO car_basic(name, small_des, price, description) VALUES('$name', '$small_des', '$price', '$description')") or die($mysqli->error);

    // success message
    $_SESSION['message'] = "Record has been saved!";
    $_SESSION['msg_type'] = "succsess";
    header("location: car-basic.php");
}


// data delete part
if(isset($_GET['delete'])){
    $id = $_GET['delete'];
    $mysqli->query("DELETE FROM car_basic WHERE id=$id") or die($mysqli->error);

    $_SESSION['message'] = "Record has been deleted!";
    $_SESSION['msg_type'] = "danger";
    header("location: car-basic.php");
}

if(isset($_GET['edit'])){
    $id = $_GET['edit'];
    $update = true;
    $result = $mysqli->query("SELECT * FROM car_basic WHERE id=$id") or die($mysqli->error);
    if( $result > 0 ){
        $row = $result->fetch_array();
        $name =  $row['name'];
        $small_des =  $row['small_des'];
        $price =  $row['price'];
        $description =  $row['description'];
    }
}

if(isset($_POST['update'])){
    $id = $_POST['id'];
    $name = $_POST['name'];
    $small_des = $_POST['small_des'];
    $price = $_POST['price'];
    $description = $_POST['description'];

    $mysqli->query("UPDATE car_basic SET name='$name', small_des='$small_des', price='$price', description='$description'WHERE id=$id") 
    or die($mysqli->error);

    $_SESSION['message'] = "Record has been updated!";
    $_SESSION['msg_type'] = "warning";

    header('location: car-basic.php');
}
