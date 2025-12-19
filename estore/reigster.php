<?php include 'header.php';?>
<div id="login-page">
    <form action="registration_process.php" method="POST">
        <div id="username">
            <label for="email">Email</label>
            <input type="text" name="email" id="name" placeholder="eamil"required>
        </div>

        <div id="password">
            <label for="password ">Password</label>
            <input type="password" name="password" placeholder="password" required>
        </div>

        <div id="login-btn">
            <button type="submit">Register</button>
        </div>
    </form>
</div>
