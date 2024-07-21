<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Employee Management</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <h1>Employee Management</h1>
    <form id="employeeForm" action="create.php" method="post">
        <label for="name">Name:</label>
        <input type="text" id="name" name="name" required><br>

        <label for="email">Email:</label>
        <input type="email" id="email" name="email" required><br>

        <label for="address">Address:</label>
        <input type="text" id="address" name="address" required><br>

        <label for="country">Country:</label>
        <input type="text" id="country" name="country" required><br>

        <label for="state">State:</label>
        <input type="text" id="state" name="state" required><br>

        <input type="submit" value="Add Employee">
    </form>

    <h2>Employee List</h2>
    <table id="employeeTable">
        <tr>
            <th>Name</th>
            <th>Email</th>
            <th>Address</th>
            <th>Country</th>
            <th>State</th>
            <th>Actions</th>
        </tr>
        <?php
        include 'read.php';
        ?>
    </table>
    
    <script src="script.js"></script>
</body>
</html>
