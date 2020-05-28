<?php

    switch( $_SERVER['REQUEST_URI'] ) {
        case "/":
            $pdo = require('db/use_db.php');
            $data = $pdo->query('SELECT * FROM list')->fetchAll(PDO::FETCH_ASSOC);
            require_once('views/index.php');
            //print_r($data);
        break;
        default: 
            echo 404;
    }
?>