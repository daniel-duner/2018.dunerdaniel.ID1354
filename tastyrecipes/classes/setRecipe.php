<?php
session_start();
if(isset($_POST['recipe'])){
    if($_POST['recipe'] == "pancakes"){
        $_SESSION['recipe_id'] = 0;
    } else {
        $_SESSION['recipe_id'] = 1;
    }
}
?>