<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Appointments</title>
</head>
<body>
    <h1>Appointments List</h1>
    <table border="1">
        <tr>
            <th>ID</th>
            <th>Patient</th>
            <th>Doctor</th>
            <th>Date</th>
            <th>Status</th>
            <th>Notes</th>
        </tr>
        <?php foreach ($appointments as $appointment): ?>
        <tr>
            <td><?= $appointment['id'] ?></td>
            <td><?= $appointment['patient_first_name'] . ' ' . $appointment['patient_last_name'] ?></td>
            <td><?= $appointment['doctor_first_name'] . ' ' . $appointment['doctor_last_name'] ?></td>
            <td><?= $appointment['appointment_date'] ?></td>
            <td><?= $appointment['status'] ?></td>
            <td><?= $appointment['notes'] ?></td>
        </tr>
        <?php endforeach; ?>
    </table>
    <a href="/appointments/add">Add New Appointment</a>
</body>
</html>