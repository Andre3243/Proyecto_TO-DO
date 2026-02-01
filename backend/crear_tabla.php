<?php
require "db.php";

$conn = conectar_bd();

$conn->exec("
CREATE TABLE IF NOT EXISTS tasks (
    id SERIAL PRIMARY KEY,
    title TEXT NOT NULL,
    completed BOOLEAN DEFAULT FALSE
)
");

echo "Tabla creada";
