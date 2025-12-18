<?php
session_start();
$username =$_POST['username'];
$password =$_POST['password'];
echo "<pre>";
var_dump($_POST);
echo "</pre>";


// exit();



if($username=="admin" && $password== "secret"){
    $_SESSION['user']= 'admin'; // storing the value to the session
    header("Location: dashbord.php");
}elseif($username=="customer" && $password == "123"){
    $_SESSION['customer']= 'customer'; // storing the value to the session
    header("Location: dashboard.php");
    echo "Customer Login";
}
else{
    echo "Invalid username or Password";
}
?>