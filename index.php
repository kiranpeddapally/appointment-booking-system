<!DOCTYPE html>
<html>
<head>
    <title>Appointment Booking System</title>

    <style>
        body{
            font-family: Arial;
            background:#f4f4f4;
            display:flex;
            justify-content:center;
            align-items:center;
            height:100vh;
        }

        .container{
            background:white;
            padding:30px;
            width:350px;
            border-radius:10px;
            box-shadow:0 0 10px rgba(0,0,0,0.2);
        }

        h1{
            text-align:center;
            color:#333;
        }

        input{
            width:100%;
            padding:10px;
            margin-top:5px;
            margin-bottom:15px;
        }

        button{
            width:100%;
            padding:12px;
            background:#007bff;
            color:white;
            border:none;
            cursor:pointer;
            font-size:16px;
        }

        button:hover{
            background:#0056b3;
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

</div>

</body>
</html>