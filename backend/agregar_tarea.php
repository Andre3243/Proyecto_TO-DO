<?php
require "db.php";

$data = json_decode(file_get_contents("php://input"), true);

$conn = conectar_bd();
$stmt = $conn->prepare(
    "INSERT INTO tasks (title) VALUES (:title)"
);

$stmt->execute([
    ":title" => $data["title"]
]);

echo json_encode(["message" => "Tarea creada"]);
