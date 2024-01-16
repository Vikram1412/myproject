<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Create User</title>
</head>
<body>
    <h1>Create User</h1>

    <?php

        $conn = new mysqli("localhost", "root", "", "api_db");

    if ($_SERVER['REQUEST_METHOD'] === 'POST') {
        // Handle form submission
     

        if ($conn->connect_error) {
            die("Connection failed: " . $conn->connect_error);
        }

        $name = $_POST['name'];
        $email = $_POST['email'];

        $sql = "INSERT INTO user (name, email) VALUES ('$name', '$email')";

        if ($conn->query($sql) === TRUE) {
            echo "User created successfully";
        } else {
            echo "Error: " . $sql . "<br>" . $conn->error;
        }

       
    }
    ?>

    <form method="post" action="curd_script.php">
        <label for="name">Name:</label>
        <input type="text" name="name" required><br>

        <label for="email">Email:</label>
        <input type="email" name="email" required><br>

        <input type="submit" value="Create User">
    </form>


    <?php


    $result = $conn->query("SELECT * FROM user");

    if ($result->num_rows > 0) {
        echo "<ul>";
        while ($row = $result->fetch_assoc()) {
            echo "<li>{$row['name']} - {$row['email']}</li>";
        }
        echo "</ul>";
    } else {
        echo "No users found";
    }

    $conn->close();
    ?>



</body>
</html>
