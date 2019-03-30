<?php
    session_start();

    //Returns true if there is no user logged in
    if(empty($_SESSION['user'])){
        echo 1;
    } else{
        echo 0;
    }
?>