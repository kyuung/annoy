<?php
if ($_SERVER["REQUEST_METHOD"] === "POST") {
    // More secure password with a combination of elements
    $correctPassword = "Y0ur_S3cure_P@ss"; // Replace with your actual secure password

    $enteredPassword = $_POST["password"];

    if (password_verify($enteredPassword, password_hash($correctPassword, PASSWORD_DEFAULT))) {
        // Password is correct, set session and redirect to admin.php
        session_start();
        $_SESSION["authenticated"] = true;
        header("Location: admin.php");
        exit;
    } else {
        // Password is incorrect, you may want to display an error message
        echo "Incorrect password. Please try again.";
    }
} else {
    // Redirect to index.html if trying to access directly
    header("Location: /test");
    exit;
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Password Box</title>
    <style>
        body {
            background-color: black;
            color: white;
            font-family: Arial, sans-serif;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
            margin: 0;
        }

        .password-box {
            text-align: center;
        }

        .password-label {
            color: red;
        }

        .password-input {
            padding: 5px;
            margin: 10px;
        }

        .submit-button {
            padding: 10px;
            background-color: #4caf50;
            color: white;
            border: none;
            cursor: pointer;
        }

        .submit-button:hover {
            background-color: #45a049;
        }
    </style>
</head>
<body>

<div class="password-box">
    <h2 class="password-label">Enter Password:</h2>
    <form action="password.php" method="post">
        <input type="password" name="password" class="password-input" required>
        <br>
        <button type="submit" class="submit-button">Submit</button>
    </form>
</div>

</body>
</html>

