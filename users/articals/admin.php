<?php 
    require_once'admin-pro.php';
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="admin.css">
    <title>Article</title>
</head>
<body >
    <div>
        <h1>Article ADD/UPDATE/DELETE</h1>
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

        
    <form action="admin-pro.php" method="POST" class="container">
        <input type="hidden" name="id" id="id" value="<?php echo $id; ?>">

        <div>
            <label for="title"><b>Title</b></label> <br>
            <input type="text" name="title"  value="<?php echo $title; ?>">
        </div>

        <div>
            <label for="para_1"><b>Paragraph 01</b></label> <br>
            <input type="text" name="para_1" value="<?php echo $para_1; ?>">
        </div>
        <div>

        <label for="para_2"><b>Paragraph 01</b></label> <br>
            <input type="textarea" name="para_2"  value="<?php echo $para_2; ?>">
            
        </div>
        <div>
            <label for="author"><b>Author</b></label> <br>
            <input type="text" name="author"  value="<?php echo $author; ?>">
        </div>
        <div >
            <label for="date"><b>Date & Time</b></label> <br>
            <input type="datetime-local" name="date"  value="<?php echo $date; ?>">
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
       $result = $mysqli->query("SELECT * FROM artical") or die($mysqli->error);
       //pre_r($result);
       //pre_r($result->fetch_assoc());
       
    ?>

    <div>
        <h3 style="text-align: center;">Availabe Articals</h3>
    </div>
    <div class="container2">
        <table>
            <thead>
                <tr>
                    <th>Title</th>
                    <th>Paragraph 01</th>
                    <th>Paragraph 02</th>
                    <th>Author</th>
                    <th>Date</th>
                    <th colspan="2">Action</th>
                </tr>
            </thead>
            <?php 
                while($row = $result->fetch_assoc()){?>
                <tr>
                    <td><?php echo $row['title'];?></td>
                    <td><?php echo $row['para_1'];?></td>
                    <td><?php echo $row['para_2'];?></td>
                    <td><?php echo $row['author'];?></td>
                    <td><?php echo $row['date'];?></td>
                    <td>
                        <!-- Edit and Delete button -->
                        <a href="admin.php?edit=<?php echo $row['id']; ?>" class="edit">Edit</a><br>
                        <br>
                        <a href="admin-pro.php?delete=<?php echo $row['id']; ?>" class="delete">Delete</a>
                    </td>
                </tr>
            <?php };?>
        </table>
    </div>
    
</body>
</html>