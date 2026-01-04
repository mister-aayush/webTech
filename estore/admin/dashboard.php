<?php


include 'header.php';

$is_LoggedIn =  $_SESSION['is_loggedin'];
// echo "<pre>";
// print_r($is_LoggedIn);
// echo "</pre>";
// die;

require_once 'database.php';
if (!isset($_SESSION['is_loggedin']) || $_SESSION['is_loggedin'] != 1) {
  header("Location: login.php");
  exit();
}



$query = "SELECT * FROM product ";

$res = mysqli_query($dbconnection, $query);

if ($is_LoggedIn == 1) {
?>
  <div class="display-table">
    <table>

      <?php
      $datas = [];
      while ($row = mysqli_fetch_assoc($res)) {
        $datas[] = $row;
      }
      ?>

      <?php foreach ($datas as $item): ?>
        <tr>
          <td><?php echo $item['name']; ?></td>
          <td><?php echo $item['description']; ?></td>
          <td><?php echo $item['price']; ?></td>
          <td><?php echo $item['quantity']; ?></td>
          <td>
            <img src="uploads/<?php echo $item['image']; ?>" width="60">
          </td>
          <td>
            <a href="edit-product.php?id=1">
              Edit
            </a>
          </td>
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