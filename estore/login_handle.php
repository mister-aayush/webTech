<?php
require_once 'database.php';
session_start();
$email =$_POST['email'];
$password =$_POST['password'];
$hashed_password = password_hash($password,PASSWORD_DEFAULT);

$query = "SELECT * FROM user where email='$email' ";

$res= mysqli_query($dbconnection,$query);

$count = mysqli_num_rows($res);
echo($count);
die();
if($username=="admin" && $password== "secret"){
    $_SESSION['username']= 'admin'; // storing the value to the session
    header("Location: dashboard.php");
}elseif($username=="customer" && $password == "123"){
    $_SESSION['username']= 'customer'; // storing the value to the session
    header("Location: dashboard.php");
    
}
else{
    echo "Invalid username or Password";
}
?>