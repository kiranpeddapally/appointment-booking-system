<?php

$conn = new mysqli("localhost:3307", "root", "", "appointment_db");

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

$id = $_GET['id'];

$sql = "SELECT * FROM appointments WHERE id=$id";

$result = $conn->query($sql);

$row = $result->fetch_assoc();

?>

<!DOCTYPE html>
<html>

<head>
    <title>Edit Appointment</title>
</head>

<body>

<h1>Edit Appointment</h1>

<form action="backend/update_appointment.php" method="POST">

<input type="hidden" name="id" value="<?php echo $row['id']; ?>">

<label>Name</label><br>
<input type="text" name="name" value="<?php echo $row['name']; ?>"><br><br>

<label>Email</label><br>
<input type="email" name="email" value="<?php echo $row['email']; ?>"><br><br>

<label>Date</label><br>
<input type="date" name="appointment_date" value="<?php echo $row['appointment_date']; ?>"><br><br>

<label>Time</label><br>
<input type="time" name="appointment_time" value="<?php echo $row['appointment_time']; ?>"><br><br>

<label>Service</label><br>
<input type="text" name="service" value="<?php echo $row['service']; ?>"><br><br>

<button type="submit">Update Appointment</button>

</form>

</body>
</html>