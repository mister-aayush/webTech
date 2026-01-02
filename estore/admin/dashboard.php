<?php
include 'header.php';
$is_LoggedIn =  $_SESSION['is_loggedin'] ;

 
if($is_LoggedIn == 1 ){
?>
  <table border="1" >

   <thead>
      <th>Name</th>
      <th>Description</th>
      <th>Price</th>
      <th>Quantity</th>
      <th>Image</th>
   </thead>
    
   <tr>
      <td>hello </td>
      <td>hello </td>
      <td>hello </td>
      <td>hello </td>
      <td>hello </td>
    </tr>
  </table>


  <?php
}else{
  
  header("Location: login.php");
  exit();}
    

?>