<?php

    $dbType = "mysql";
    $host = "localhost";
    $database = "fashionblog";
    $port = 3306;
    $userName = "root";
    $userPassword = "";
    $options = [
        PDO::ATTR_PERSISTENT => TRUE,
        PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION, 
    ];

    $dsn = $dbType . ":host=" . $host . ";dbname=" . $database . ";port=" .$port; 

    try {
        $dbConnection = new PDO($dsn, $userName, $userPassword, $options);
    } catch (Exception $e) {
        switch($e->getCode()) {
            case 1049: 
                echo "O banco de dados está com o nome errado";
                break;

            default:
                echo "Não faço ideia do que aconteceu. Reveja tudo!";
                break;
        }
    }

