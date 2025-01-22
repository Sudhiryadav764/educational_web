<?php
// Replace with your database credentials
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "mydb";
// Create a connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check the connection
if ($conn->connect_error) {
 die("Connection failed: " . $conn->connect_error);
}
// Check if the form is submitted
if ($_SERVER["REQUEST_METHOD"] == "POST") {

 // Retrieve form data
 $username = $_POST["username"];
 $fname = $_POST["fname"];
 $mname = $_POST["mname"];
 $email = $_POST["email"];
 $adhar = $_POST["adhar"];
 $mob = $_POST["mob"];
 $dob = $_POST["dob"];
 $userclass = $_POST["userclass"];
 $usersub = $_POST["usersub"];
 $street = $_POST["street"];
 $city = $_POST["city"];
 $pincode = $_POST["pincode"];
 $district = $_POST["district"];
 $state = $_POST["state"];
 $transaction = $_POST["transaction"];

 // Insert data into the database
 $sql = "INSERT INTO appformtable (username,fname,mname, email, adhar, mob, dob,
userclass, usersub, street, city, pincode, district, state) VALUES
('$username','$fname','$mname','$email','$adhar','$mob','$dob','$userclass','$usersub','$street','$city','$pincode','$district','$state')";

 if ($conn->query($sql) === TRUE) {
 echo "Record added successfully. We will verify all details. After few hours you will get
invoice through mail. We will connect to you via mail so make sure you visit your mailbox
daily.";
 } else {
 echo "Error: " . $sql . "<br>" . $conn->error;
 }
}
?>

