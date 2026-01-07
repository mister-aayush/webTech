<?php
session_start();
$id= $_GET['product_id'];
print_r($id);
die();

$_SESSION['product_count'][]=$id;
header("Location: index.php");
?>