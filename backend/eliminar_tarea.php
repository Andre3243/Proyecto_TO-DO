<?php
require "db.php";

$data = json_decode(file_get_contents("php://input"), true);

$conn = conectar_bd();
$stmt = $conn->prepare("DELETE FROM tasks WHERE id = :id");
$stmt->execute([":id" => $data["id"]]);

echo json_encode(["message" => "Tarea eliminada"]);
