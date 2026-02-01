<?php
require "db.php";

$data = json_decode(file_get_contents("php://input"), true);

$conn = conectar_bd();
$stmt = $conn->prepare(
    "UPDATE tasks SET completed = :completed WHERE id = :id"
);

$stmt->execute([
    ":completed" => $data["completed"],
    ":id" => $data["id"]
]);

echo json_encode(["message" => "Tarea actualizada"]);
