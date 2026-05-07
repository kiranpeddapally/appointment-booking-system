<?php

$conn = new mysqli("localhost:3307", "root", "", "appointment_db");

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

$id = $_POST['id'];
$name = $_POST['name'];
$email = $_POST['email'];
$date = $_POST['appointment_date'];
$time = $_POST['appointment_time'];
$service = $_POST['service'];

$sql = "UPDATE appointments 
SET 
name='$name',
email='$email',
appointment_date='$date',
appointment_time='$time',
service='$service'
WHERE id=$id";

if ($conn->query($sql) === TRUE) {

    header("Location: ../view_appointments.php");

} else {

    echo "Error updating record";

}

$conn->close();

?>