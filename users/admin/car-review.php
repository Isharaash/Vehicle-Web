<?php 
    require_once'car-review-pro.php';
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="index.css">
    <title>Car Review</title>
</head>
<body >
    <div>
        <h1>Car Review ADD/UPDATE/DELETE</h1>
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

        
    <form action="car-review-pro.php" method="POST" class="container">
        <input type="hidden" name="id" id="id" value="<?php echo $id; ?>">

        <div>
            <label for="driver"><b>Driver</b></label> <br>
            <input type="text" name="driver"  value="<?php echo $driver; ?>">
        </div>

        <div>
            <label for="engine"><b>Engine</b></label> <br>
            <input type="text" name="engine" value="<?php echo $engine; ?>">
        </div>

        <div>
            <label for="interior"><b>Interior</b></label> <br>
            <input type="text" name="interior"  value="<?php echo $interior; ?>">
        </div>

        <div>
            <label for="packs"><b>Packs</b></label> <br>
            <input type="text" name="packs"  value="<?php echo $packs; ?>">
        </div>

        <div>
            <label for="safety"><b>safety</b></label> <br>
            <input type="text" name="safety" value="<?php echo $safety; ?>">
        </div>

        <div>
        <label for="security"><b>Security</b></label> <br>
            <input type="text" name="security"  value="<?php echo $security; ?>">
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
       $result = $mysqli->query("SELECT * FROM car_review") or die($mysqli->error);
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
                    <th>Driver</th>
                    <th>Engine</th>
                    <th>Interior</th>
                    <th>Packs</th>
                    <th>Safety</th>
                    <th>Security</th>
                    <th colspan="2">Action</th>
                </tr>
            </thead>
            <?php 
                while($row = $result->fetch_assoc()){?>
                <tr>
                    <td><?php echo $row['driver'];?></td>
                    <td><?php echo $row['engine'];?></td>
                    <td><?php echo $row['interior'];?></td>
                    <td><?php echo $row['packs'];?></td>
                    <td><?php echo $row['safety'];?></td>
                    <td><?php echo $row['security'];?></td>
                    <td>
                        <!-- Edit and Delete button -->
                        <a href="car-review.php?edit=<?php echo $row['id']; ?>" class="edit">Edit</a><br>
                        <br>
                        <a href="car-review-pro.php?delete=<?php echo $row['id']; ?>" class="delete">Delete</a>
                    </td>
                </tr>
            <?php };?>
        </table>
    </div>
    
</body>
</html> 