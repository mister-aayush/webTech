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
      <thead>
        <th>Name</th>
        <th>Description</th>
        <th>Price</th>
        <th>Quantity</th>
        <th>Image</th>
        <th>Edit/Delete</th>  
      </thead>

      <?php foreach ($datas as $item): ?>
        <tr>
          <td><?php echo $item['name']; ?></td>
          <td><?php echo $item['description']; ?></td>
          <td><?php echo $item['price']; ?></td>
          <td><?php echo $item['quantity']; ?></td>
          <td>
            <?php if (!empty($item['image']) && file_exists($item['image'])): ?>
              <img src="<?php echo htmlspecialchars($item['image']); ?>" alt="Product Image" class="product-image">
            <?php else: ?>
              <div class="no-image">No Image</div>
            <?php endif; ?>
          </td>
          <td>
            <a href="edit-product.php?id=<?php echo $item['ID']; ?>">
              Edit
            </a>
            <a href="delete-product.php?id=<?php echo $item['ID']; ?>">
              Delete
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