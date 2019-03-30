<?php
session_start();
if(isset($_GET['getId'])){
    echo $_SESSION['recipe_id'];
}
?>