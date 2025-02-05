<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Add Patient</title>
</head>
<body>
    <h1>Add New Patient</h1>
    <form action="/patients/add" method="POST">
        <label for="first_name">First Name:</label>
        <input type="text" name="first_name" required><br>

        <label for="last_name">Last Name:</label>
        <input type="text" name="last_name" required><br>

        <label for="date_of_birth">Date of Birth:</label>
        <input type="date" name="date_of_birth" required><br>

        <label for="gender">Gender:</label>
        <select name="gender" required>
            <option value="Male">Male</option>
            <option value="Female">Female</option>
        </select><br>

        <label for="phone_number">Phone Number:</label>
        <input type="text" name="phone_number" required><br>

        <label for="email">Email:</label>
        <input type="email" name="email" required><br>

        <label for="address">Address:</label>
        <textarea name="address" required></textarea><br>

        <button type="submit">Add Patient</button>
    </form>
</body>
</html>