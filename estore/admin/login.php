
<?php 


      $error =  $_GET['error'] ?? null;
      if (isset($error)) { ?>
         
            <?php echo $error; ?> 
        
      <?php  }
      ?>

<div id="login-page">
    <form action="login_handle.php" method="POST">
        <div id="username">
            <label for="username">Email:</label>
            <input type="text" name="email" id="username" placeholder="Email" required>
        </div>

        <div id="password">
            <label for="password ">Password</label>
            <input type="password" name="password" placeholder="password" required>
        </div>

        <div id="login-btn">
            <button type="submit">LOGIN</button>
        </div>
    </form>
</div>
