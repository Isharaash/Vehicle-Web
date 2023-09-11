<?php

session_start();

//Connect to the database
$mysqli = new mysqli('localhost', 'root', 'As+s01galaxysa', 'csmotors') or die(mysqli_error($mysqli));


$id = 0;
$update = false;
$eng_size = "";
$eng_pow = "";
$trans = "";
$door = "";
$seats = "";
$co2_emi = "";
$top_speed = "";
$boot = "";
$consumption = "";
$safety_rate = "";

// data save part
if(isset($_POST['save'])){
    $eng_size = $_POST['eng_size'];
    $eng_pow = $_POST['eng_pow'];
    $trans = $_POST['trans'];
    $door = $_POST['door'];
    $seats = $_POST['seats'];
    $co2_emi = $_POST['co2_emi'];
    $top_speed = $_POST['top_speed'];
    $boot = $_POST['boot'];
    $consumption = $_POST['consumption'];
    $safety_rate = $_POST['safety_rate'];

    $mysqli->query("INSERT INTO car_infor(eng_size, eng_pow, trans, door, seats, co2_emi, top_speed, boot, consumption, safety_rate) 
    VALUES('$eng_size', '$eng_pow', '$trans', '$door','$seats', '$co2_emi', '$top_speed', '$boot','$consumption', '$safety_rate')")
     or die($mysqli->error);

    // success message
    $_SESSION['message'] = "Record has been saved!";
    $_SESSION['msg_type'] = "succsess";
    header("location: car-infor.php");
}


// data delete part
if(isset($_GET['delete'])){
    $id = $_GET['delete'];
    $mysqli->query("DELETE FROM car_infor WHERE id=$id") or die($mysqli->error);

    $_SESSION['message'] = "Record has been deleted!";
    $_SESSION['msg_type'] = "danger";
    header("location: car-infor.php");
}

if(isset($_GET['edit'])){
    $id = $_GET['edit'];
    $update = true;
    $result = $mysqli->query("SELECT * FROM car_infor WHERE id=$id") or die($mysqli->error);
    if( $result > 0 ){
        $row = $result->fetch_array();
        $eng_size =  $row['eng_size'];
        $eng_pow =  $row['eng_pow'];
        $trans =  $row['trans'];
        $door =  $row['door'];
        $seats =  $row['seats'];
        $co2_emi =  $row['co2_emi'];
        $top_speed =  $row['top_speed'];
        $boot =  $row['boot'];
        $consumption =  $row['consumption'];
        $safety_rate =  $row['safety_rate'];
    }
}

if(isset($_POST['update'])){
    $id = $_POST['id'];
    $eng_size = $_POST['eng_size'];
    $eng_pow = $_POST['eng_pow'];
    $trans = $_POST['trans'];
    $door = $_POST['door'];
    $seats = $_POST['seats'];
    $co2_emi = $_POST['co2_emi'];
    $top_speed = $_POST['top_speed'];
    $boot = $_POST['boot'];
    $consumption = $_POST['consumption'];
    $safety_rate = $_POST['safety_rate'];

    $mysqli->query("UPDATE car_infor SET eng_size='$eng_size', eng_pow='$eng_pow', trans='$trans', door='$door', seats='$seats', 
    co2_emi='$co2_emi', top_speed='$top_speed', boot='$boot', consumption='$consumption', safety_rate='$safety_rate'WHERE id=$id") 
    or die($mysqli->error);

    $_SESSION['message'] = "Record has been updated!";
    $_SESSION['msg_type'] = "warning";

    header('location: car-infor.php');
}
