<?php

function conectar_bd(){
    $host = "localhost";
    $user = "postgres";
    $db = "todo_bd";
    $password = "tu_contraseña";
    $port = "5432";

    try {
        return new PDO(
            "pgsql:host=$host;port=$port;dbname=$db",
            $user,
            $password,
            [PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION]
        );
    } catch (PDOException $e) {
        die("Error de conexión: " . $e->getMessage());
    }
}