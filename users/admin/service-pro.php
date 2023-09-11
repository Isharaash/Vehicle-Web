<?php

session_start();

//Connect to the database
$mysqli = new mysqli('localhost', 'root', 'As+s01galaxysa', 'csmotors') or die(mysqli_error($mysqli));


$id = 0;
$update = false;
$name = "";
$description = "";
$price = "";


// data save part
if(isset($_POST['save'])){
    $name = $_POST['name'];
    $description = $_POST['description'];
    $price = $_POST['price'];
    

    $mysqli->query("INSERT INTO service(name, description, price) VALUES('$name', '$description', '$price')") or die($mysqli->error);

    // success message
    $_SESSION['message'] = "Record has been saved!";
    $_SESSION['msg_type'] = "succsess";
    header("location: service.php");
}


// data delete part
if(isset($_GET['delete'])){
    $id = $_GET['delete'];
    $mysqli->query("DELETE FROM service WHERE id=$id") or die($mysqli->error);

    $_SESSION['message'] = "Record has been deleted!";
    $_SESSION['msg_type'] = "danger";
    header("location: service.php");
}

if(isset($_GET['edit'])){
    $id = $_GET['edit'];
    $update = true;
    $result = $mysqli->query("SELECT * FROM service WHERE id=$id") or die($mysqli->error);
    if( $result > 0 ){
        $row = $result->fetch_array();
        $name =  $row['name'];
        $description = $_POST['description'];
        $price =  $row['price'];
        
    }
}

if(isset($_POST['update'])){
    $id = $_POST['id'];
    $name = $_POST['name'];
    $description = $_POST['description'];
    $price = $_POST['price'];
    

    $mysqli->query("UPDATE service SET name='$name', description='$description', price='$price'WHERE id=$id") 
    or die($mysqli->error);

    $_SESSION['message'] = "Record has been updated!";
    $_SESSION['msg_type'] = "warning";

    header('location: service.php');
}
