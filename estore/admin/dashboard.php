<?php
include 'header.php';
$is_LoggedIn =  $_SESSION['is_loggedin'] ;
echo $is_LoggedIn;
 
if($is_LoggedIn == 1 ){




  echo "thisis dashboard";

  
}else{
  
  header("Location: login.php");
  exit();}
    

?>