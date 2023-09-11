<?php 
    require_once'service-pro.php';
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="index.css">
    <title>Service Details</title>
</head>
<body >
    <div>
        <h1>Service Details ADD/UPDATE/DELETE</h1>
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

        
    <form action="service-pro.php" method="POST" class="container">
        <input type="hidden" name="id" id="id" value="<?php echo $id; ?>">

        <div>
            <label for="name"><b>Srvice Name</b></label> <br>
            <input type="text" name="name"  value="<?php echo $name; ?>">
        </div>

        <div>
            <label for="description"><b> Description</b></label> <br>
            <input type="text" name="description" value="<?php echo $description; ?>">
        </div>
        <div>

        <label for="price"><b>Price</b></label> <br>
            <input type="textarea" name="price"  value="<?php echo $price; ?>">
            
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
       $result = $mysqli->query("SELECT * FROM service") or die($mysqli->error);
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
                    <th>Name</th>
                    <th>Description</th>
                    <th>Price</th>
                    
                    <th colspan="2">Action</th>
                </tr>
            </thead>
            <?php 
                while($row = $result->fetch_assoc()){?>
                <tr>
                    <td><?php echo $row['name'];?></td>
                    <td><?php echo $row['description'];?></td>
                    <td><?php echo $row['price'];?></td>
                    
                    <td>
                        <!-- Edit and Delete button -->
                        <a href="car-basic.php?edit=<?php echo $row['id']; ?>" class="edit">Edit</a><br>
                        <br>
                        <a href="car-basic-pro.php?delete=<?php echo $row['id']; ?>" class="delete">Delete</a>
                    </td>
                </tr>
            <?php };?>
        </table>
    </div>
    
</body>
</html> 