<?php
include 'header.php';
include 'database.php';
?>
<div class="content">
    Products
    <div class="product_contaier">
        <?php
        $query = "SELECT * FROM product";
        $res = mysqli_query($dbconnection,$query);
        while($product = mysqli_fetch_assoc($res)){?>
        <div class="product">
            <p><?php echo $product['product_name']?></p>
            <p><?php echo $product['price']?></p>
            <p><?php echo $product['description']?></p>
          
        </div>
        <?php
        } 
        ?>
    </div>
</div>