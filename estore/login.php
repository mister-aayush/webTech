
<?php 

include 'header.php';
?>
<div id="login-page">
    <form action="login_handle.php" method="POST">
        <div id="username">
            <label for="username">Username</label>
            <input type="text" name="username" id="username" placeholder="usernmae">
        </div>

        <div id="password">
            <label for="password ">Password</label>
            <input type="password" name="password" placeholder="password">
        </div>

        <div id="login-btn">
            <button type="submit">LOGIN</button>
        </div>
    </form>
</div>
