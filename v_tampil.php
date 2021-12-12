<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
    <link href="Register.php">
    <title>Database</title>
</head>
<body>
<?php require_once 'Connect.php';?> <?php


    if (isset($_SESSION['message'])):?>
    <div class="alert alert-<?=$_SESSION['msg_type']?>">
    <?php
        echo $_SESSION['message'];
        unset($_SESSION['message']);
    
    ?></div>
    <?php endif ?>
<?php
    $mysqli = new mysqli($databaseHost,$databaseUsername,$databasePassword,$databaseName) or die(mysqli_error($mysqli));
    $result = $mysqli->query("SELECT * FROM terserah") or die($mysqli->error);
    ?>
<div class="container">
    <div class="row justify-content-center">
    <table class="table">
            <thead>
                <tr>
                    <th>Username</th>
                    <th>Email</th>
                    <th>Pass</th>
                    <th colspan="2">Action</th>
                </tr>
            </thead>
    <?php 
                // while ($row = $result->fetch_assoc()){
                //     echo"<tr>";
                //         echo"<td>".$row['Username']."</td>"; 
                //         echo"<td>".$row['Email']."</td>"; 
                //         echo"<td>".$row['Pass']."</td>"; 
                //     echo"</tr>";
                // } 
                while ($row = $result->fetch_assoc()):
                ?>
                <tr>
                    <td><?php echo $row['Username'] ?></td>
                    <td><?php echo $row['Email'] ?></td>
                    <td><?php echo $row['Pass'] ?></td>
                    <td>
                        <a href="Register.php?edit=<?php echo $row['ID'];?>"
                        class="btn btn-info">Edit</a>
                        <a href="Connect.php?delete=<?php echo $row['ID'];?>"
                        class="btn btn-danger">Delete</a>
                    </td>
                </tr>
            <?php endwhile; ?>
        </table>    
    </div>
<?php
    function pre_r( $array ){
        echo '<pre>';
        print_r($array);
        echo '</pre>' ;
    }
?>
</div>
                        <div class="tombol">
                        <center><a href="Register.php"class="btn btn-info">Tambah</a></center>
                        <br>
                        <center><a href="index.html"class="btn btn-danger">HOME</a></center>
                        </div>
</body>
</html>
