<?php
session_start();
$Username = '';
$Email = '';
$Pass = '';
$update = false;
$ID = 0;
$databaseHost="sql104.epizy.com";
$databaseName="epiz_30550085_uas_winstonsteve";
$databasePassword="HNJLkUf0d9A";
$databaseUsername="epiz_30550085";
// $databaseHost="localhost";
// $databaseName="uas_stevewinston";
// $databasePassword="";
// $databaseUsername="root";


$mysqli = new mysqli($databaseHost,$databaseUsername,$databasePassword,$databaseName);

if($mysqli->connect_error){
    die("Connecttion Failed: ".$mysqli->connect_error."<br> <br>");
}

        if(isset($_POST['submit'])){
            $Username = $_POST['Username'];
            $Email = $_POST['Email'];
            $Pass = $_POST['Pass'];

            if(strlen($Username)==0 || strlen($Email)==0 ||  strlen($Pass)==0){
                // echo"no valid";
                header("Location:Register.php");
            }
            else{
                $result = $mysqli->query("insert into terserah(Username, Email, Pass) values('$Username','$Email','$Pass')");
                // echo"alert('Successfully Register')";
                header("Location:v_tampil.php");
                $_SESSION['message'] ="Registration has been saved !!!";
                $_SESSION['msg_type'] ="success";    
            }
            
        }
        if(isset($_GET['delete'])){
            $ID = $_GET['delete'];
            $mysqli->query("DELETE FROM terserah WHERE id=$ID") or die($mysqli->error());
            $_SESSION['message'] ="Registration has been deleted !!!";
            $_SESSION['msg_type'] ="danger";
            header("Location:v_tampil.php");
        }
        if(isset($_GET['edit'])){
            $update = true;
            $ID = $_GET['edit'];
            $result = $mysqli->query("SELECT * FROM terserah WHERE id=$ID") or die($mysqli->error());
            // if (count($result)==1){
                $row = $result->fetch_array();
                $Username = $row['Username'] ; 
                $Email = $row['Email'] ; 
                $Pass = $row['Pass'] ;    
            
        }   
        if(isset($_POST['update'])){
            $ID = $_POST['ID'];
            $Username = $_POST['Username'];
            $Email = $_POST['Email'];
            $Pass = $_POST['Pass'];
            $mysqli->query("UPDATE terserah SET Username='$Username', Email='$Email', Pass='$Pass' WHERE id='$ID'") 
                or die($mysqli->error());
            $_SESSION['message'] = "Record has been updated ! ";
            $_SESSION['msg_type'] = "warning";
            header('location: v_tampil.php');
        }


              ?>