<?php
session_start();

// Check if the user is authenticated
if (!isset($_SESSION['authenticated'])) {
    // If not authenticated, redirect to index.php
    header("Location: index.php");
    exit();
}

// Your admin content goes here
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Page</title>
</head>
<body>
    <h1>Welcome to the Admin Page</h1>
    <!-- Your admin content goes here -->
</body>
</html>
