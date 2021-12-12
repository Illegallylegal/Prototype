<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Register</title>
    <link rel="stylesheet" href="registerss.css">
    <link rel="icon" href="images/TAB WEBSITE.png">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
</head>
<body>
<?php require_once 'Connect.php' ;?>

    <div class="container">
          <h1><center>Register</h1></center>
          
            <form action="Connect.php" method="POST">
            <input type="hidden" name="ID" value="<?php echo $ID; ?>">
            <div class="form-group">
                <label>Username</label>
                <br>
                <input type="text" name="Username" class="form-control" 
                    value= "<?php echo $Username;?>" placeholder="Enter Username">
                <br>
                <label>Email</label>
                <br>
                <input type="email" name="Email" class="form-control" 
                    value="<?php echo $Email; ?>" placeholder="Enter Email">
                <br>
                <label>Password</label>
                <br>
                <input type="password" name="Pass" class="form-control" 
                    value="<?php echo $Pass; ?>" placeholder="Enter Password">
                <br>
                <?php
                
                if ($update == true):
                ?>
                <button type="submit" class="btn btn-info" name="update">Update</button>
                <?php else: ?>
                <input type="submit" name="submit"class="btn btn-primary" value="Register">
                <?php endif; ?>
                </div>
            </form>
            
            </div>
            
    <?php 
            if(isset($_POST['submit'])){
                    include('Connect.php'); }
                    ?>
</body>
</html>