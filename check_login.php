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
    $username = trim($_POST["username"]);
    $pass = trim($_POST["pass"]);

    if (empty($username) || empty($pass)) {
        echo "Username and password are required.";
        exit();
    }

    // Use prepared statements to prevent SQL injection
    $stmt = $conn->prepare("SELECT * FROM login WHERE username = ? AND pass = ?");
    $stmt->bind_param("ss", $username, $pass);
    $stmt->execute();
    $result = $stmt->get_result();

    if ($result->num_rows > 0) {
        // Successful login
        $_SESSION['username'] = $username;
        header("location: index.php");
        exit();
    } else {
        echo "Invalid username or password., please try again!";
    }

    // Close statement and connection
    $stmt->close();
    $conn->close();
}
?>
