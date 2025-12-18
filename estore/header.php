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
        <?php
        if(isset($_SESSION['username'])){
            echo "Username:". $_SESSION['username']."";
            echo '<div id="logout">';
                echo '<a href="logout.php">'. $_SESSION['username'].'Logout</a>';
            echo '</div>';
        }else{
            echo '<div id="login-panel">';
                echo '<a href="login.php">  Login</a>';
                echo '<a href="#">Registers</a>';
            echo '</div>';
        }
        ?>
        
    </nav>
