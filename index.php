<style>
    #box{
        height: 70px;
        width: 70px;
        background-color: red;
        margin-bottom: 10px;
        display: inline-flex;
        margin-right: 2px;
        border: 1px solid black;
        border-radius: 4px;
        justify-content: center; 
        align-items: center;
    }
    #box:hover{
        background-color: green;
    }
</style>
<!-- assignment swaping variable  and sorting array  -->

<?php
$num =1;
    for($row = 1;$row <=4;$row++){
        for($col =1 ;$col<=4;$col++){
            echo "<div id= 'box'>
            $num 
            </div>";
            $num++;
        }
        echo "<br>";
    }
?>