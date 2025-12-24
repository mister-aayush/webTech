<?php 
$db_host= "localhost";
$db_user= "root";
$db_password= "";
$db_name = "jheegu_store_db";

$dbconnection= mysqli_connect($db_host,$db_user,$db_password,$db_name);
if(!$dbconnection){
    die("DB connection error :".mysqli_connect_error());
} else {
    echo "Database connection sucessfull";
}
?>