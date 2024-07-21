<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Edit User</title>
    <link rel="stylesheet" href="update.css">
</head>
<body>
    <div class="container">
        <h1>Edit User</h1>
        <?php
        $servername = "localhost";
        $username = "root";
        $password = "";
        $dbname = "user_management";

        $conn = new mysqli($servername, $username, $password, $dbname);

        if ($conn->connect_error) {
            die("Connection failed: " . $conn->connect_error);
        }

        if ($_SERVER['REQUEST_METHOD'] == 'GET') {
            $id = $_GET['id'];
            $sql = "SELECT * FROM users WHERE id=$id";
            $result = $conn->query($sql);
            $row = $result->fetch_assoc();
        ?>
            <form action="update.php" method="post" class="form">
                <input type="hidden" name="id" value="<?php echo htmlspecialchars($row['id']); ?>">
                <div class="form-group">
                    <label for="name">Name:</label>
                    <input type="text" id="name" name="name" value="<?php echo htmlspecialchars($row['name']); ?>" required>
                </div>
                <div class="form-group">
                    <label for="email">Email:</label>
                    <input type="email" id="email" name="email" value="<?php echo htmlspecialchars($row['email']); ?>" required>
                </div>
                <div class="form-group">
                    <label for="address">Address:</label>
                    <input type="text" id="address" name="address" value="<?php echo htmlspecialchars($row['address']); ?>" required>
                </div>
                <div class="form-group">
                    <label for="country">Country:</label>
                    <input type="text" id="country" name="country" value="<?php echo htmlspecialchars($row['country']); ?>" required>
                </div>
                <div class="form-group">
                    <label for="state">State:</label>
                    <input type="text" id="state" name="state" value="<?php echo htmlspecialchars($row['state']); ?>" required>
                </div>
                <div class="form-group">
                    <input type="submit" value="Update User" class="btn">
                </div>
            </form>
        <?php
        } else if ($_SERVER['REQUEST_METHOD'] == 'POST') {
            $id = $_POST['id'];
            $name = $_POST['name'];
            $email = $_POST['email'];
            $address = $_POST['address'];
            $country = $_POST['country'];
            $state = $_POST['state'];

            $sql = "UPDATE users SET name='$name', email='$email', address='$address', country='$country', state='$state' WHERE id=$id";

            if ($conn->query($sql) === TRUE) {
                echo "Record updated successfully";
            } else {
                echo "Error: " . $sql . "<br>" . $conn->error;
            }

            $conn->close();
            header("Location: index.php");
            exit();
        }
        ?>
    </div>
</body>
</html>
