<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Patients</title>
</head>
<body>
    <h1>Patients List</h1>
    <table border="1">
        <tr>
            <th>ID</th>
            <th>First Name</th>
            <th>Last Name</th>
            <th>Date of Birth</th>
            <th>Gender</th>
            <th>Email</th>
            <th>Phone</th>
            <th>Address</th>
        </tr>
        <?php foreach ($patients as $patient): ?>
        <tr>
            <td><?= $patient['id'] ?></td>
            <td><?= $patient['first_name'] ?></td>
            <td><?= $patient['last_name'] ?></td>
            <td><?= $patient['date_of_birth'] ?></td>
            <td><?= $patient['gender'] ?></td>
            <td><?= $patient['email'] ?></td>
            <td><?= $patient['phone_number'] ?></td>
            <td><?= $patient['address'] ?></td>
        </tr>
        <?php endforeach; ?>
    </table>
    <a href="/patients/add">Add New Patient</a>
</body>
</html>