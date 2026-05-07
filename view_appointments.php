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
            font-family:Arial;
            background:#f4f4f4;
            padding:30px;
        }

        table{
            width:100%;
            border-collapse:collapse;
            background:white;
        }

        th, td{
            padding:12px;
            border:1px solid #ccc;
            text-align:center;
        }

        th{
            background:#007bff;
            color:white;
        }

        h1{
            text-align:center;
        }

    </style>

</head>

<body>

<h1>All Appointments</h1>

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
    <a href="backend/delete_appointment.php?id=<?php echo $row['id']; ?>">
        Delete
    </a>
</td>
<td>
    <a href="edit_appointment.php?id=<?php echo $row['id']; ?>">
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