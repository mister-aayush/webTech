<?php 
session_start();
include 'header.php';?>
<div class="content">
    <?php 
    $user = $_SESSION['user'];
    echo 'Welcome $user';
    ?>
</div>
echo "LOgin secessful";
include 'footer.php';
?>