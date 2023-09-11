<?php 
    require_once'car-basic-pro.php';
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="index.css">
    <title>Document</title>
</head>
<body >
    <div>
        <h1>Car Basic ADD/UPDATE/DELETE</h1>
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

        
    <form action="car-basic-pro.php" method="POST" class="container">
        <input type="hidden" name="id" id="id" value="<?php echo $id; ?>">

        <div>
            <label for="name"><b>Car Name</b></label> <br>
            <input type="text" name="name"  value="<?php echo $name; ?>">
        </div>

        <div>
            <label for="small_des"><b>Small Description</b></label> <br>
            <input type="text" name="small_des" value="<?php echo $small_des; ?>">
        </div>
        <div>

        <label for="price"><b>Price</b></label> <br>
            <input type="textarea" name="price"  value="<?php echo $price; ?>">
            
        </div>
        <div>
            <label for="description"><b>Description</b></label> <br>
            <input type="text" name="description"  value="<?php echo $description; ?>">
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
       $result = $mysqli->query("SELECT * FROM car_basic") or die($mysqli->error);
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
                    <th>Small Para</th>
                    <th>Price</th>
                    <th>Description</th>
                    <th colspan="2">Action</th>
                </tr>
            </thead>
            <?php 
                while($row = $result->fetch_assoc()){?>
                <tr>
                    <td><?php echo $row['name'];?></td>
                    <td><?php echo $row['small_des'];?></td>
                    <td><?php echo $row['price'];?></td>
                    <td><?php echo $row['description'];?></td>
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