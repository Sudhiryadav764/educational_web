<?php
session_start();

// Database credentials
$servername = "localhost";
$dbusername = "root";
$dbpassword = "";
$dbname = "mydb";

// Create a connection
$conn = new mysqli($servername, $dbusername, $dbpassword, $dbname);

// Check the connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Check if the form is submitted
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Retrieve and validate input
    $username = isset($_POST["username"]) ? trim($_POST["username"]) : '';
    $pass = isset($_POST["pass"]) ? trim($_POST["pass"]) : '';
    $confirmPass = isset($_POST["passw"]) ? trim($_POST["passw"]) : '';

    // Check for empty fields
    if (empty($username) || empty($pass) || empty($confirmPass)) {
        echo "All fields are required.";
        exit();
    }

    // Check if passwords match
    if ($pass !== $confirmPass) {
        echo "Passwords do not match.";
        exit();
    }

    // Insert data into the database
    $stmt = $conn->prepare("INSERT INTO login (username, pass) VALUES (?, ?)");
    $stmt->bind_param("ss", $username, $pass);

    if ($stmt->execute()) {
        // Registration successful
        $_SESSION['username'] = $username;
        header("location: index.php");
        exit();
    } else {
        // Handle error (e.g., duplicate username)
        if ($conn->errno === 1062) { // Duplicate entry error code
            echo "Username already exists. Please choose another.";
        } else {
            echo "Error: " . $conn->error;
        }
    }

    // Close statement and connection
    $stmt->close();
    $conn->close();
}
?>
