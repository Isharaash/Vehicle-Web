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
    <title>Car Informations</title>
</head>
<body >
    <div>
        <h1>Car Stats & Performance ADD/UPDATE/DELETE</h1>
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

        
    <form action="car-infor-pro.php" method="POST" class="container">
        <input type="hidden" name="id" id="id" value="<?php echo $id; ?>">

        <div>
            <label for="eng_size"><b>Engine Size</b></label> <br>
            <input type="text" name="eng_size"  value="<?php echo $eng_size; ?>">
        </div>

        <div>
            <label for="eng_pow"><b>Engine Power</b></label> <br>
            <input type="text" name="eng_pow" value="<?php echo $eng_pow; ?>">
        </div>
        <div>

        <label for="trans"><b>Transmition</b></label> <br>
            <input type="textarea" name="trans"  value="<?php echo $trans; ?>">
            
        </div>
        <div>
            <label for="door"><b>Doors</b></label> <br>
            <input type="text" name="door"  value="<?php echo $door; ?>">
        </div>
        <div>
            <label for="seats"><b>Seats</b></label> <br>
            <input type="text" name="seats"  value="<?php echo $seats; ?>">
        </div>

        <div>
            <label for="co2_emi"><b>C02</b></label> <br>
            <input type="text" name="co2_emi" value="<?php echo $co2_emi; ?>">
        </div>
        <div>

        <label for="top_speed"><b>Top Speed</b></label> <br>
            <input type="textarea" name="top_speed"  value="<?php echo $top_speed; ?>">
            
        </div>
        <div>
            <label for="boot"><b>Boot</b></label> <br>
            <input type="text" name="boot"  value="<?php echo $boot; ?>">
        </div>
        <div>
            <label for="consumption"><b>Consumption</b></label> <br>
            <input type="text" name="consumption"  value="<?php echo $consumption; ?>">
        </div>

        <div>
            <label for="safety_rate"><b>Safety Rate</b></label> <br>
            <input type="text" name="safety_rate" value="<?php echo $safety_rate; ?>">
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
       $result = $mysqli->query("SELECT * FROM car_infor") or die($mysqli->error);
       //pre_r($result);
       //pre_r($result->fetch_assoc());
       
    ?>

    <div>
        <h3 style="text-align: center;">Availabe Packages</h3>
    </div>
    <div class="container2">
        <table>
            <thead>
                <tr>
                    <th>Size</th>
                    <th>Power</th>
                    <th>Trans.</th>
                    <th>Door</th>
                    <th>Seat</th>
                    <th>Co2</th>
                    <th>Top Speed</th>
                    <th>Boot</th>
                    <th>Consumption</th>
                    <th>Safety</th>
                    <th colspan="2">Action</th>
                </tr>
            </thead>
            <?php 
                while($row = $result->fetch_assoc()){?>
                <tr>
                    <td><?php echo $row['eng_size'];?></td>
                    <td><?php echo $row['eng_pow'];?></td>
                    <td><?php echo $row['trans'];?></td>
                    <td><?php echo $row['door'];?></td>
                    <td><?php echo $row['seats'];?></td>
                    <td><?php echo $row['co2_emi'];?></td>
                    <td><?php echo $row['top_speed'];?></td>
                    <td><?php echo $row['boot'];?></td>
                    <td><?php echo $row['consumption'];?></td>
                    <td><?php echo $row['safety_rate'];?></td>
                    <td>
                        <!-- Edit and Delete button -->
                        <a href="car-infor.php?edit=<?php echo $row['id']; ?>" class="edit">Edit</a><br>
                        <br>
                        <a href="car-infor-pro.php?delete=<?php echo $row['id']; ?>" class="delete">Delete</a>
                    </td>
                </tr>
            <?php };?>
        </table>
    </div>
    
</body>
</html> 