<?php

$conn = new mysqli("localhost:3307", "root", "", "appointment_db");

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

$id = $_GET['id'];

$sql = "DELETE FROM appointments WHERE id=$id";

if ($conn->query($sql) === TRUE) {

    header("Location: ../view_appointments.php");

} else {

    echo "Error deleting record";

}

$conn->close();

?>