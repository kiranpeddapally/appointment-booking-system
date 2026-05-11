<?php

header("Access-Control-Allow-Origin: *");
header("Content-Type: application/json");

$conn = new mysqli("localhost:3307", "root", "", "appointment_db");

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

$sql = "SELECT * FROM appointments";

$result = $conn->query($sql);

$appointments = array();

while($row = $result->fetch_assoc()) {
    $appointments[] = $row;
}

echo json_encode($appointments);

?>