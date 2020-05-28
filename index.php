<?php

    switch( $_SERVER['REQUEST_URI'] ) {
        case "/":
            require_once('views/index.php');
        break;

        default: 
            echo 404;
    }
?>