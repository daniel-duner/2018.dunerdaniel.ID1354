<?php
session_start();
if($_POST['logout'] == true){
    $_SESSION['user'] = null;
    echo $_SESSION['user'];
}

?>