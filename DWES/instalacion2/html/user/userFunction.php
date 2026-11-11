<?php

//Comprueba si existe un usuario con ese password. Si no existe devuelve null. Si existe devuelve el role
function getRole($username, $password){
        $stmt = $db->prepare('SELECT password, role FROM usuarios WHERE username = :username');
        $stmt->bindParam(':username', $username);
        $stmt->execute();
        $user = $stmt->fetch(PDO::FETCH_ASSOC);
        if ($user && password_verify($password, $user['password'])) {
            // Inicio de Sesión válido
            return $user['role'];
        } else {
            return null;
        }
   
    }

