<?php
    session_start();
    if(isset($_SESSION['newUser'])){
        unset($_SESSION['newUser']);
        echo "new";
    } else if(isset($_SESSION['justLoggedIn'])){
        unset($_SESSION['justLoggedIn']);
        echo "JLI";
    }
?>