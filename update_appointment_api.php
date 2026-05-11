<?php

header("Access-Control-Allow-Origin: *");
header("Access-Control-Allow-Headers: *");
header("Content-Type: application/json");

$conn = new mysqli("localhost:3307", "root", "", "appointment_db");

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

$data = json_decode(file_get_contents("php://input"));

$id = $data->id;
$name = $data->name;
$email = $data->email;
$service = $data->service;

$sql = "UPDATE appointments 
SET name='$name', email='$email', service='$service'
WHERE id=$id";

if ($conn->query($sql) === TRUE) {
    echo json_encode(["message" => "Appointment updated"]);
} else {
    echo json_encode(["error" => $conn->error]);
}

?>