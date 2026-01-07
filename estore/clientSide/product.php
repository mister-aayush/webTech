<?php 
require_once 'database.php';


$query = "SELECT * FROM product ";

$res = mysqli_query($dbconnection, $query);

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
        <th>Buy</th>  
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
            <a href="add-to-cart.php?product_id=<?php echo $item['ID']; ?>">
              BUY
            </a>
            
          </td>
        </tr>
      <?php endforeach; ?>
    </table>
  </div>