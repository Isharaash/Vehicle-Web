<?php

   // simple database connection
   $connection = mysqli_connect('localhost','root','As+s01galaxysa','csmotors');

   if(isset($_POST['order'])){
      $fullname = $_POST['fullname'];
      $email = $_POST['email'];
      $phone = $_POST['phone'];
      $city = $_POST['city'];
      $address = $_POST['address'];
      $model = $_POST['model'];

      $request = " insert into car_order(fullname, email, phone, city, address, model) 
      values('$fullname','$email','$phone','$city','$address','$model') ";
      mysqli_query($connection, $request);

      header('location: success.php'); 

   }else{
      echo 'Something went wrong please try again!';
   }

?>