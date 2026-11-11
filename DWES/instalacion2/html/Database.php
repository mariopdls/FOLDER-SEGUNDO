<?php

        $host = 'db';
        $dbname = 'toor'; //Nombre de la base de datos
        $username = 'root'; //Nombre del usuario
        $password = 'root'; //Password del usuario
        $port = 3306;
    
        $dsn = "mysql:host=$host;port=$port;dbname=$dbname;charset=utf8mb4";
        try {
            $pdo = new PDO($dsn, $username, $password);
            
        } catch (PDOException $e) {
            die("Error de conexión: No se puede conectar a la base de datos");
        }
    
