<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Add Appointment</title>
</head>
<body>
    <h1>Add New Appointment</h1>
    <form action="/appointments/add" method="POST">
        <label for="patient_id">Patient:</label>
        <select name="patient_id" required>
            <?php foreach ($patients as $patient): ?>
            <option value="<?= $patient['id'] ?>"><?= $patient['first_name'] . ' ' . $patient['last_name'] ?></option>
            <?php endforeach; ?>
        </select><br>

        <label for="doctor_id">Doctor:</label>
        <select name="doctor_id" required>
            <?php foreach ($doctors as $doctor): ?>
            <option value="<?= $doctor['id'] ?>"><?= $doctor['first_name'] . ' ' . $doctor['last_name'] ?></option>
            <?php endforeach; ?>
        </select><br>

        <label for="appointment_date">Appointment Date:</label>
        <input type="datetime-local" name="appointment_date" required><br>

        <label for="notes">Notes:</label>
        <textarea name="notes"></textarea><br>

        <button type="submit">Add Appointment</button>
    </form>
</body>
</html>