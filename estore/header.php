<?php session_start();?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <nav id="header">
        <div id="logo">
            jheeguStore
        </div>
        <div id="nav-bar">
            <a href="">Home</a>
            <a href="">About</a>
            <a href="">Contact</a>
        </div>
        <?php if(!empty($_SESSION['user'])){?>

            <div id="logout">
                <a href="login.php">Logout</a>
            </div>

         <?php ;}else{?>
        <div id="login-panel">
            <a href="login.php">Login</a>
            <a href="#">Refisters</a>
        </div>
        <?php }?>
    </nav>
