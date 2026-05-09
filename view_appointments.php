<?php

$conn = new mysqli("localhost:3307", "root", "", "appointment_db");

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

$sql = "SELECT * FROM appointments";

$result = $conn->query($sql);

?>

<!DOCTYPE html>
<html>

<head>
    <title>View Appointments</title>

   <style>

body{
    font-family:Arial, sans-serif;
    background:#f4f6f9;
    padding:30px;
}

h2{
    text-align:center;
    margin-bottom:30px;
    color:#333;
}

table{
    width:100%;
    border-collapse:collapse;
    background:white;
    box-shadow:0 5px 15px rgba(0,0,0,0.1);
}

th{
    background:#007bff;
    color:white;
    padding:15px;
}

td{
    padding:12px;
    border-bottom:1px solid #ddd;
    text-align:center;
}

tr:hover{
    background:#f1f1f1;
}

a{
    text-decoration:none;
    padding:8px 12px;
    border-radius:5px;
    color:white;
    font-size:14px;
}

.edit-btn{
    background:#28a745;
}

.delete-btn{
    background:#dc3545;
}

.edit-btn:hover{
    background:#218838;
}

.delete-btn:hover{
    background:#c82333;
}

</style>

</head>

<body>

<h1>All Appointments</h1>

<div style="text-align:center; margin-bottom:20px;">

<a href="index.php"
style="
background:#007bff;
color:white;
padding:10px 15px;
text-decoration:none;
border-radius:5px;
">
Back to Booking
</a>

</div>

<table>

<tr>
    <th>ID</th>
    <th>Name</th>
    <th>Email</th>
    <th>Date</th>
    <th>Time</th>
    <th>Service</th>
    <th>Delete</th>
    <th>Edit</th>
</tr>

<?php

while($row = $result->fetch_assoc()) {

?>

<tr>

<td><?php echo $row['id']; ?></td>
<td><?php echo $row['name']; ?></td>
<td><?php echo $row['email']; ?></td>
<td><?php echo $row['appointment_date']; ?></td>
<td><?php echo $row['appointment_time']; ?></td>
<td><?php echo $row['service']; ?></td>
<td>
    <a class="delete-btn"
href="backend/delete_appointment.php?id=<?php echo $row['id']; ?>"
onclick="return confirm('Are you sure you want to delete this appointment?')">

        Delete
    </a>
</td>
<td>
    <a class="edit-btn" href="edit_appointment.php?id=<?php echo $row['id']; ?>">
        Edit
    </a>
</td>

</tr>

<?php

}

?>

</table>

</body>
</html>