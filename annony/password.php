<?php
session_start();

// Check if the user is authenticated
if (!isset($_SESSION['authenticated'])) {
    // If not authenticated, redirect to index.php
    header("Location: index.php");
    exit();
}

// Your password content goes here
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Password Page</title>
</head>
<body>
    <h1>Welcome to the Password Page</h1>
    <!-- Your password content goes here -->
</body>
</html>
