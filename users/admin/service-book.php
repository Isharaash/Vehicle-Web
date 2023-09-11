<?php 
    require_once'car-infor-pro.php';
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="index.css">
    <title>Admin</title>
</head>
<body >
    <div>
        <h1>Service booking ADD/UPDATE/DELETE</h1>
    </div>
    

    <!-- Display Delete  or Add successful message -->
    <?php 
    if(isset($_SESSION['message'])){;
    ?>
    <div class="alert alert-<?=$_SESSION['msg_type']?>">
    <span class="closebtn" onclick="this.parentElement.style.display='none';">&times;</span> 
        <?php
            echo $_SESSION['message'];
            unset($_SESSION['message']);
        ?>
    </div>
               
    <?php } ?>

        
    <form action="car-order-pro.php" method="POST" class="container">
        <input type="hidden" name="id" id="id" value="<?php echo $id; ?>">

        <div>
            <label for="fullname"><b>Customer Name</b></label> <br>
            <input type="text" name="fullname"  value="<?php echo $fullname; ?>">
        </div>

        <div>
            <label for="email"><b>Customer Email Address</b></label> <br>
            <input type="text" name="email" value="<?php echo $email; ?>">
        </div>
        <div>

        <label for="phone"><b>Customer Mobile Number/b></label> <br>
            <input type="textarea" name="phone"  value="<?php echo $phone; ?>">
            
        </div>
        <div>
            <label for="city"><b>Customer City</b></label> <br>
            <input type="text" name="city"  value="<?php echo $city; ?>">
        </div>
        <div>
            <label for="address"><b>Customer Address</b></label> <br>
            <input type="text" name="address"  value="<?php echo $address; ?>">
        </div>

        <div>
            <label for="model"><b>Service Model</b></label> <br>
            <input type="text" name="model" value="<?php echo $model; ?>">
        </div>
        <div>

        <label for="shipping"><b>Date</b></label> <br>
            <input type="date" name="shipping"  value="<?php echo $shipping; ?>">
            
        </div>

        <?php 
            if($update == true){
        ?>
        <button type="submit" name="update"  class="update">Update</button>
        <?php 
            }
            else{
        ?>
            <button type="submit" name="save"  class="save">Save</button>
        <?php 
            }     
        ?>
    </form>




    
    <?php
        //Diplay current package details with edit and delete button
       $mysqli = new mysqli('localhost', 'root', 'As+s01galaxysa', 'csmotors') 
       or die(mysqli_error($mysqli));
       $result = $mysqli->query("SELECT * FROM service_order") or die($mysqli->error);
       //pre_r($result);
       //pre_r($result->fetch_assoc());
       
    ?>

    <div>
        <h3 style="text-align: center;">Availabe Booking</h3>
    </div>
    <div class="container2">
        <table>
            <thead>
                <tr>
                    <th>Customer Name</th>
                    <th>Email</th>
                    <th>Mobile.</th>
                    <th>City</th>
                    <th>Address</th>
                    <th>Model</th>
                    <th>Shipping Date</th>
                    <th colspan="2">Action</th>
                </tr>
            </thead>
            <?php 
                while($row = $result->fetch_assoc()){?>
                <tr>
                    <td><?php echo $row['fullname'];?></td>
                    <td><?php echo $row['email'];?></td>
                    <td><?php echo $row['phone'];?></td>
                    <td><?php echo $row['city'];?></td>
                    <td><?php echo $row['address'];?></td>
                    <td><?php echo $row['model'];?></td>
                    <td><?php echo $row['shipping'];?></td>
                    <td>
                        <!-- Edit and Delete button -->
                        <a href="service-book.php?edit=<?php echo $row['id']; ?>" class="edit">Edit</a><br>
                        <br>
                        <a href="service-book-pro.php?delete=<?php echo $row['id']; ?>" class="delete">Delete</a>
                    </td>
                </tr>
            <?php };?>
        </table>
    </div>
    
</body>
</html> 