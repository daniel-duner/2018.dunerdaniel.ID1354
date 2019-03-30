<?php

    function restart(){
        if(session_status() != 2){
            session_start();
        }
    }
    function sessionSet($name, $value){
        $_SESSION[$name] = $value;
    }
    
    function sessionGet($name){
        if(!isset($_SESSION[$name])){
            return null;
        } else {
            return $_SESSION[$name];
        }
    }

    function unsetSessionVar($var){
        unset($_SESSION[$var]);
    }

