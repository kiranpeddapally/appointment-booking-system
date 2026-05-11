<?php

header("Access-Control-Allow-Origin: *");
header("Access-Control-Allow-Headers: *");
header("Content-Type: application/json");

$conn = new mysqli("localhost:3307", "root", "", "appointment_db");

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

$data = json_decode(file_get_contents("php://input"));

$name = $data->name;
$email = $data->email;
$service = $data->service;

$sql = "INSERT INTO appointments (name, email, service)
VALUES ('$name', '$email', '$service')";

if ($conn->query($sql) === TRUE) {
    echo json_encode(["message" => "Appointment added"]);
} else {
    echo json_encode(["error" => $conn->error]);
}

?>