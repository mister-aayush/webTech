<?php include 'header.php'; ?>

<?php 
    $error = $_GET['error'] ?? null;
    if (isset($error)) { ?>
        <div style="color: red; text-align: center; padding: 10px;">
            <?php echo htmlspecialchars($error); ?> 
        </div>
    <?php } ?>

<div class="login-page">
    <form action="login_handle.php" method="POST">
        <div id="username">
            <label for="username">Email:</label>
            <input type="text" name="email" id="username" placeholder="Email" required>
        </div>

        <div id="password">
            <label for="password">Password</label>
            <input type="password" name="password" placeholder="password" required>
        </div>

        <div id="login-btn">
            <button type="submit">LOGIN</button>
        </div>
    </form>
</div>

<?php include 'footer.php'; ?>