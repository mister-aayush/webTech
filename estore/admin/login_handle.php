<?php
session_start();
require_once 'database.php';





$email =$_POST['email'];
$password =$_POST['password'];
$hashed_password = password_hash($password, PASSWORD_DEFAULT);

$query = "SELECT * FROM user where email='$email'";

$res= mysqli_query($dbconnection,$query);

$count = mysqli_num_rows($res);



//if email maths with db record
if($count==1){
    $row = mysqli_fetch_assoc($res);
    // echo "<pre>";
    // print_r($res);
    // echo "</pre>";
    // die;
    if(password_verify($password,$row['password'])){
        

         $_SESSION['username']= $row['name']; // storing the value to the session
         
         $_SESSION['is_loggedin'] = true;
         header("Location: dashboard.php");
    }
}else{
    header("Location: login.php?error=email or password incorrect");
}



?>