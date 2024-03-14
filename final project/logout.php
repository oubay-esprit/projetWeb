<?php
session_start();

// Check if the user is logged in
if (isset($_SESSION['username'])) {
    // Unset all of the session variables
    $_SESSION = array();

    // Destroy the session
    session_destroy();
}

// Redirect back to the index.php page after logout
header("location: index.php");
exit();
?>
