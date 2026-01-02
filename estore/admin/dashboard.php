<?php
include 'header.php';
$is_LoggedIn =  $_SESSION['is_loggedin'] ;
session_start();
require_once 'database.php';

if($_SERVER['REQUEST_METHOD'] != 'POST'){
    header('Location: login.php');
    exit();
}



$email =$_POST['email'];
$password =$_POST['password'];
$hashed_password = password_hash($password, PASSWORD_DEFAULT);

$query = "SELECT * FROM product ";

$res= mysqli_query($dbconnection,$query);

while ($row = mysqli_fetch_assoc($res)) {
  $datas[] = $row;}



// if($count==1){
//     $row = mysqli_fetch_assoc($res);
//     // echo "<pre>";
//     // print_r($res);
//     // echo "</pre>";
//     // die;
//     if(password_verify($password,$row['password'])){

//          $_SESSION['username']= $row['name']; // storing the value to the session
         
//          $_SESSION['is_loggedin'] = true;
//          header("Location: dashboard.php");
//     }
// }else{
//     header("Location: login.php?error=email or password incorrect");
// }


 
if($is_LoggedIn == 1 ){
?>
  <table border="1" >
  <?php foreach ($datas as $item): ?>

   <thead>
      <th>Name</th>
      <th>Description</th>
      <th>Price</th>
      <th>Quantity</th>
      <th>Image</th>
   </thead>
    
   <tr>
      <td><?php echo $datas['name'];?> </td>
      <td><?php echo $datas['description'];?> </td>
      <td><?php echo $datas['price'];?> </td>
      <td><?php echo $datas['quantity'];?> </td>
      <td><?php echo $datas['image'];?> </td>

    </tr>
    <?php endforeach; ?>
  </table>


  <?php
}else{
  
  header("Location: login.php");
  exit();}
    

?>