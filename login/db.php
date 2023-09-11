<?php

$servername = "localhost";
$dBUsername = "root";
$dBPassword = "As+s01galaxysa";
$dBName = "csmotors";

$con = mysqli_connect($servername, $dBUsername, $dBPassword, $dBName);

if(!$con) {
    die("Connection failed: ".mysqli_connect_error());
}

?>