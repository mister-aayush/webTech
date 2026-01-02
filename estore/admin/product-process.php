<?php
require 'database.php';
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
 $image = $_FILES['image'];

//image uplods to folder 
 if(isset($image) && $image['error'] == 0){
    $upload_dir = "image/";
    $image_name =  basename($image['name']);
    $target_path = $upload_dir . $image_name;

    if(move_uploaded_file($image['tmp_name'], $target_path )){
        $image_path  = $target_path;
    }
}



// insert into db

$query = "INSERT INTO product(name,description,price,quantity,image)
            values('$name','$description','$price','$quantity','$image_path')";
$res = mysqli_query($dbconnection,$query);
if($res){ 

   echo "<script>alert('Data added successfully');</script>";
}else{
    echo "reigster unsucessful";
}



}else{
    header("Location: register.php");
}
?>