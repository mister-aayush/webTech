<?php include 'header.php';?>


<div id="login-page">
    <form action="product-process.php" method="POST">
        <div id="input-field">
            <label for="name"> Name:</label>
            <input type="text" name="name" id="name">
        </div>

        <div id="input-field">
            <label for="description">Description:</label>
            <input type="text" name="description" id="product-description" >
        </div>

        <div id="input-field">
            <label for="phone">Price:</label>
            <input type="text" name="price" id="product_price" >
        </div>
        
        <div id="input-field">
            <label for="quantity ">Quantity:</label>
            <input type="text" name="quantity" >
        </div>

        <div id="input-field">
            <label for="image">Image:</label>
            <input type="text" name="image" id="image">
        </div>

        <div id="login-btn">
            <button type="submit">Register</button>
        </div>
    </form>
</div>
