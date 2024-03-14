    <?php
if ($_SERVER["REQUEST_METHOD"] === "POST") {
    $connection = mysqli_connect('localhost', 'root', '', 'final project');
    if (!$connection) {
        die("Connection failed: " . mysqli_connect_error());
    }

    // Retrieve form data
    $username = $_POST['username']; 
    $password = $_POST['password'];

    // Check if the username exists in the database
    $query = "SELECT * FROM users WHERE username = '$username'";
    $result = mysqli_query($connection, $query);

    if (mysqli_num_rows($result) === 1) {
        $row = mysqli_fetch_assoc($result);
        $hashedPassword = $row['password'];

        //Verify the password
        if (password_verify($password, $hashedPassword)) {
            // Password is correct, user logged in
            // You can start a session here or redirect the user to a different page
            header("Location: forum.php");
           exit;
        } 
        else {
            echo "Incorrect password.";
        }
    } 
    else {
        echo "Username not found.";
    }


    mysqli_close($connection);
}
?>
