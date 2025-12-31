<?php
require '../database.php';
if(isset($_POST)){
    //valdation
    // $name = $phone=$email = $password= "";
    // if(isset($_POST['full_name'])& !empty($_POST['full_name'])){
    //     $name =$_POST['full_name'];
    // }else{
    //     header("Location: register.php? name_empty=1");
    // }

 $name = $_POST['name'];
 $description = $_POST['description'];
 $price = $_POST['price'];
 $quantity = $_POST['quantity'];
 $image = $_POST['image'];


// insert into db

$query = "INSERT INTO product(name,description,price,quantity)
            values('$name','$description','$quantity','$image')";
$res = mysqli_query($dbconnection,$query);
if($res){ 

   echo "<script>alert('Data added successfully');</script>";
}else{
    echo "reigster unsecessful";
}



}else{
    header("Location: register.php");
}
?>