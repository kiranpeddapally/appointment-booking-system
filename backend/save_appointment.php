<?php

$conn = new mysqli("localhost:3307", "root", "", "appointment_db");

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

$name = $_POST['name'];
$email = $_POST['email'];
$date = $_POST['appointment_date'];
$time = $_POST['appointment_time'];
$service = $_POST['service'];

$sql = "INSERT INTO appointments (name, email, appointment_date, appointment_time, service)
VALUES ('$name', '$email', '$date', '$time', '$service')";

if ($conn->query($sql) === TRUE) {
    header("Location: ../index.php?success=1");
    exit();
} else {
    echo "Error: " . $conn->error;
}

$conn->close();

?>