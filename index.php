<!DOCTYPE html>
<html>
<head>
    <title>Appointment Booking System</title>

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
    background:#007bff;
    color:white;
    border:none;
    border-radius:8px;
    font-size:16px;
    cursor:pointer;
    transition:0.3s;
}

button:hover{
    background:#0056b3;
}
.view-btn{
    display:block;
    text-align:center;
    margin-top:15px;
    padding:12px;
    background:#28a745;
    color:white;
    text-decoration:none;
    border-radius:8px;
}

.view-btn:hover{
    background:#218838;
}
    </style>
</head>

<body>

<div class="container">
    <?php if(isset($_GET['success'])) { ?>
    <p style="color:green; text-align:center;">
        Appointment Booked Successfully!
    </p>
<?php } ?>

<h1>Book Appointment</h1>

<form action="backend/save_appointment.php" method="POST">

<label>Name</label>
<input type="text" name="name" required>

<label>Email</label>
<input type="email" name="email" required>

<label>Appointment Date</label>
<input type="date" name="appointment_date" required>

<label>Appointment Time</label>
<input type="time" name="appointment_time" required>

<label>Service</label>
<input type="text" name="service" required>

<button type="submit">Book Appointment</button>

</form>
<br>

<a href="view_appointments.php" class="view-btn">
    View Appointments
</a>?
</div>

</body>
</html>