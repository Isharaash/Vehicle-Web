<?php

session_start();

//Connect to the database
$mysqli = new mysqli('localhost', 'root', 'As+s01galaxysa', 'csmotors') or die(mysqli_error($mysqli));


$id = 0;
$update = false;
$fullname = "";
$email = "";
$phone = "";
$city = "";
$address = "";
$model = "";
$shipping = "";

// data save part
if(isset($_POST['save'])){
    $fullname = $_POST['fullname'];
    $email = $_POST['email'];
    $phone = $_POST['phone'];
    $city = $_POST['city'];
    $address = $_POST['address'];
    $model = $_POST['model'];
    $shipping = $_POST['shipping'];

    $mysqli->query("INSERT INTO car_order(fullname, email, phone, city, address, model, shipping) 
    VALUES('$fullname', '$email', '$phone', '$city','$address', '$model', '$shipping')")
     or die($mysqli->error);

    // success message
    $_SESSION['message'] = "Record has been saved!";
    $_SESSION['msg_type'] = "succsess";
    header("location: car-order.php");
}


// data delete part
if(isset($_GET['delete'])){
    $id = $_GET['delete'];
    $mysqli->query("DELETE FROM car_order WHERE id=$id") or die($mysqli->error);

    $_SESSION['message'] = "Record has been deleted!";
    $_SESSION['msg_type'] = "danger";
    header("location: car-order.php");
}

if(isset($_GET['edit'])){
    $id = $_GET['edit'];
    $update = true;
    $result = $mysqli->query("SELECT * FROM car_basic WHERE id=$id") or die($mysqli->error);
    if( $result > 0 ){
        $row = $result->fetch_array();
        $fullname =  $row['fullname'];
        $email =  $row['email'];
        $phone =  $row['phone'];
        $city =  $row['city'];
        $address =  $row['address'];
        $model =  $row['model'];
        $shipping =  $row['shipping'];
    }
}

if(isset($_POST['update'])){
    $id = $_POST['id'];
    $fullname = $_POST['fullname'];
    $email = $_POST['email'];
    $phone = $_POST['phone'];
    $city = $_POST['city'];
    $address = $_POST['address'];
    $model = $_POST['model'];
    $shipping = $_POST['shipping'];


    $mysqli->query("UPDATE car_order SET fullname='$fullname', email='$email', phone='$phone', city='$city', address='$address', 
    model='$model', shipping='$shipping'WHERE id=$id") 
    or die($mysqli->error);

    $_SESSION['message'] = "Record has been updated!";
    $_SESSION['msg_type'] = "warning";

    header('location: car-order.php');
}
