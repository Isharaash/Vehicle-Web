<?php

session_start();

//Connect to the database
$mysqli = new mysqli('localhost', 'root', 'As+s01galaxysa', 'csmotors') 
or die(mysqli_error($mysqli));


$id = 0;
$update = false;
$title = "";
$para_1 = "";
$para_2 = "";
$author = "";
$date = "";

// data save part
if(isset($_POST['save'])){
    $title = $_POST['title'];
    $para_1 = $_POST['para_1'];
    $para_2 = $_POST['para_2'];
    $author = $_POST['author'];
    $date = $_POST['date'];

    $mysqli->query("INSERT INTO artical(title, para_1, para_2, author, date) 
    VALUES('$title', '$para_1', '$para_2', '$author', '$date')") or die($mysqli->error);

    // success message
    $_SESSION['message'] = "Record has been saved!";
    $_SESSION['msg_type'] = "succsess";
    header("location: admin.php");
}


// data delete part
if(isset($_GET['delete'])){
    $id = $_GET['delete'];
    $mysqli->query("DELETE FROM artical WHERE id=$id") or die($mysqli->error);

    $_SESSION['message'] = "Record has been deleted!";
    $_SESSION['msg_type'] = "danger";
    header("location: admin.php");
}

if(isset($_GET['edit'])){
    $id = $_GET['edit'];
    $update = true;
    $result = $mysqli->query("SELECT * FROM artical WHERE id=$id") or die($mysqli->error);
    if( $result > 0 ){
        $row = $result->fetch_array();
        $title =  $row['title'];
        $para_1 =  $row['para_1'];
        $para_2 =  $row['para_2'];
        $author =  $row['author'];
        $date =  $row['date'];
    }
}

if(isset($_POST['update'])){
    $id = $_POST['id'];
    $title = $_POST['title'];
    $para_1 = $_POST['para_1'];
    $para_2 = $_POST['para_2'];
    $author = $_POST['author'];
    $date = $_POST['date'];
    

    $mysqli->query("UPDATE artical SET title='$title', para_1='$para_1', para_2='$para_2', author='$author',
    date='$date'WHERE id=$id") or die($mysqli->error);

    $_SESSION['message'] = "Record has been updated!";
    $_SESSION['msg_type'] = "warning";

    header('location: admin.php');
}
