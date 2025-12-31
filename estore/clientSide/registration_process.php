<?php
require 'database.php';
if(isset($_POST)){
    //valdation
    $name = $phone=$email = $password= "";
    if(isset($_POST['full_name'])& !empty($_POST['full_name'])){
        $name =$_POST['full_name'];
    }else{
        header("Location: register.php? name_empty=1");
    }

 $name = $_POST['full_name'];
 $phone = $_POST['phone'];
 $email = $_POST['email'];
 $password = password_hash($_POST['password'],PASSWORD_DEFAULT) ;

// insert name phone email pw in db

$query = "INSERT INTO user(name,phone,email,password)
            values('$name','$phone','$email','$password')";
$res = mysqli_query($dbconnection,$query);
if($res){ 

   header("Location: login.php");
}else{
    echo "reigster unsecessful";
}



}else{
    header("Location: register.php");
}
?>