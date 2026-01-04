<?php include 'header.php'; ?>

<div id="addProduct">
    <form action="product-process.php" method="POST" enctype="multipart/form-data">
        <div class="input-field">
            <label for="name">Name:</label>
            <input type="text" name="name" id="name">
        </div>

        <div class="input-field">
            <label for="description">Description:</label>
            <input type="text" name="description" id="product-description">
        </div>

        <div class="input-field">
            <label for="price">Price:</label>
            <input type="text" name="price" id="product_price">
        </div>
        
        <div class="input-field">
            <label for="quantity">Quantity:</label>
            <input type="text" name="quantity">
        </div>

        <div class="input-field">
            <label for="image">Image:</label>
            <input type="file" name="image" id="image">
        </div>

        <div id="login-btn">
            <button type="submit">ADD</button>
        </div>
    </form>
</div>

<?php include 'footer.php'; ?>