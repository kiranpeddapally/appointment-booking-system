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

<style>

body{
    font-family: Arial, sans-serif;
    background: linear-gradient(to right, #dfe9f3, #ffffff);
    display:flex;
    justify-content:center;
    align-items:center;
    height:100vh;
    margin:0;
}

.container{
    background:white;
    padding:40px;
    width:400px;
    border-radius:15px;
    box-shadow:0 5px 20px rgba(0,0,0,0.2);
}

h1{
    text-align:center;
    margin-bottom:30px;
    color:#333;
}

form{
    display:flex;
    flex-direction:column;
}

label{
    margin-top:15px;
    margin-bottom:5px;
    font-weight:bold;
    color:#555;
}

input{
    padding:12px;
    border:1px solid #ccc;
    border-radius:8px;
    font-size:16px;
}

button{
    margin-top:25px;
    padding:14px;
    background:#28a745;
    color:white;
    border:none;
    border-radius:8px;
    font-size:16px;
    cursor:pointer;
}

button:hover{
    background:#218838;
}

</style>

</head>

<body>

<div class="container">

<h1>Edit Appointment</h1>

<form action="backend/update_appointment.php" method="POST">

<input type="hidden" name="id" value="<?php echo $row['id']; ?>">

<label>Name</label>
<input type="text" name="name" value="<?php echo $row['name']; ?>">

<label>Email</label>
<input type="email" name="email" value="<?php echo $row['email']; ?>">

<label>Date</label>
<input type="date" name="appointment_date" value="<?php echo $row['appointment_date']; ?>">

<label>Time</label>
<input type="time" name="appointment_time" value="<?php echo $row['appointment_time']; ?>">

<label>Service</label>
<input type="text" name="service" value="<?php echo $row['service']; ?>">

<button type="submit">Update Appointment</button>

</form>

</div>

</body>
</html>