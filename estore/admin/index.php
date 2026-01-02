<?php
$is_LoggedIn =  $_SESSION['is_loggedin'] ?? false;

if (!$is_LoggedIn) {
  header("Location: login.php");
  exit();
}
include "header.php";
include "home.php";
include "footer.php";

?>