<?php include 'header.php';?>


<div id="login-page">
    <form action="registration_process.php" method="POST">
        <div id="full name">
            <label for="full_name">Full Name:</label>
            <?php
            if(isset($_GET['full_name']) & !empty($_GET['full_name'])){?>
            <span id="error">Please enter your full name</span>
            <?php
            }
            ?>
            <input type="text" name="full_name" id="name" placeholder="Full name "required>
        </div>
        <div id="number">
            <label for="phone">Phone:</label>
            <input type="text" name="phone" id="phone" placeholder="phone"required>
        </div>
        <div id="email">
            <label for="email">Email:</label>
            <input type="text" name="email" id="name" placeholder="eamil"required>
        </div>

        <div id="password">
            <label for="password ">Password:</label>
            <input type="password" name="password" placeholder="password" required>
        </div>

        <div id="login-btn">
            <button type="submit">Register</button>
        </div>
    </form>
</div>
