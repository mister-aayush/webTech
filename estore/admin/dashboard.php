<?php


include 'header.php';

$is_LoggedIn =  $_SESSION['is_loggedin'];
// echo "<pre>";
// print_r($is_LoggedIn);
// echo "</pre>";
// die;

require_once 'database.php';



$query = "SELECT * FROM product ";

$res = mysqli_query($dbconnection, $query);

if ($is_LoggedIn == 1) {
?>
  <div class="display-Table">
  <table>
  
    <?php 
    while ($row = mysqli_fetch_assoc($res)) {
      $datas[] = $row;
    }foreach ($datas as $item): ?>

      <thead>
        <th>Name</th>
        <th>Description</th>
        <th>Price</th>
        <th>Quantity</th>
        <th>Image</th>
      </thead>

      <tr>
        <td><?php echo $item['name']; ?> </td>
        <td><?php echo $item['description']; ?> </td>
        <td><?php echo $item['price']; ?> </td>
        <td><?php echo $item['quantity']; ?> </td>
        <td><?php echo $item['image']; ?> </td>

      </tr>
    <?php endforeach; ?>
  </table>
  </div>

<?php
} else {

  header("Location: login.php");
  exit();
}


?>