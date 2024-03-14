<?php
if ($_SERVER["REQUEST_METHOD"] === "POST") {
    $connection = mysqli_connect('localhost', 'root', '', 'final project');
    if (!$connection) {
        die("Connection failed: " . mysqli_connect_error());
    }

    // Retrieve form data
    $username = $_POST['username'];
    $email = $_POST['email'];
    $password = $_POST['password'];

    // Hash the password before storing it in the database for security
    $hashedPassword = password_hash($password, PASSWORD_DEFAULT);

    // Check if the username or email already exists in the database
    $query = "SELECT * FROM users WHERE username = '$username' OR email = '$email'";
    $result = mysqli_query($connection, $query);

    if (mysqli_num_rows($result) > 0) {
        echo "Username or email already exists. Please choose a different one.";
    } else {
        // Insert the user data into the database
        $insertQuery = "INSERT INTO users (username, email, password) VALUES ('$username', '$email', '$hashedPassword')";
        if (mysqli_query($connection, $insertQuery)) {
            echo "Registration successful!";
        } else {
            echo "Error: " . mysqli_error($connection);
        }
    }

    mysqli_close($connection);
}
?>
