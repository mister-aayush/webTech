<?php
$username =$_POST["username"];
$password =$_POST["password"];

if($username=="admin" && $password== "secret"){
    header("Location : dashbord.php");
}else{
    echo "Invalid username or Password";
}
?>