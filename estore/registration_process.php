<?php
if(isset($_POST)){
    //valdation
    $name = $phone=$email = $password= "";
    if(isset($_POST['full_name'])& !empty($_POST['full_name'])){
        $name =$_POST['full_name'];
    }else{
        header("Location: register.php? name_empty=1");
    }

    echo "<pre>";
var_dump($_POST);
echo "</pre>";

exit();
}else{
    header("Location: register.php");
}
?>