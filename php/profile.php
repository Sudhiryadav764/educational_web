<?php
// Start session
session_start();

// Check if the user is logged in
if (!isset($_SESSION["username"])) {
    header("Location: login.php"); // Redirect to login page if not logged in
    exit();
}

$username = $_SESSION["username"];

// Database connection
$conn = new mysqli("localhost", "root", "", "mydb");

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// SQL query to fetch user profile data
$sql = "SELECT * FROM appformtable WHERE username='$username'";

// Execute the query
$result = $conn->query($sql);

// Check if query was successful
if ($result === false) {
    die("Error executing query: " . $conn->error); // Debugging: show query error if any
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Profile Page</title>
    <link rel="stylesheet" href="../css/profile.css">
</head>
<body>
<div class="container mt-5">
    <div class="box">
        <div class="circle"><p>Profile</p> </div>
    </div>

    <div class="data">
        <?php if ($result->num_rows > 0): ?>
            <?php $row = $result->fetch_assoc(); ?>
            <div class="info">
                <table>
                    <tr>
                        <td>Name: </td>
                        <td class="infoc"><?= htmlspecialchars($row['username']) ?></td>
                    </tr>
                    <tr>
                        <td>Father's Name:</td>
                        <td class="infoc"><?= htmlspecialchars($row['fname']) ?></td>
                    </tr>
                    <tr>
                        <td>Mother's Name:</td>
                        <td class="infoc"><?= htmlspecialchars($row['mname']) ?></td>
                    </tr>
                    <tr>
                        <td>Date of Birth:</td>
                        <td class="infoc"><?= htmlspecialchars($row['dob']) ?></td>
                    </tr>
                    <tr>
                        <td>E-mail:</td>
                        <td class="infoc"><?= htmlspecialchars($row['email']) ?></td>
                    </tr>
                    <tr>
                        <td>Adhaar Number:</td>
                        <td class="infoc"><?= htmlspecialchars($row['adhar']) ?></td>
                    </tr>
                    <tr>
                        <td>Mobile Number:</td>
                        <td class="infoc"><?= htmlspecialchars($row['mob']) ?></td>
                    </tr>
                    <tr>
                        <td>Street:</td>
                        <td class="infoc"><?= htmlspecialchars($row['street']) ?></td>
                    </tr>
                    <tr>
                        <td>City:</td>
                        <td class="infoc"><?= htmlspecialchars($row['city']) ?></td>
                    </tr>
                    <tr>
                        <td>District:</td>
                        <td class="infoc"><?= htmlspecialchars($row['district']) ?></td>
                    </tr>
                </table>
            </div>

            <div class="sub">
                <table class="table mt-4">
                    <thead>
                        <tr>
                            <th scope="col">Class</th>
                            <th></th>
                            <th scope="col">Subject</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td class="infoc"><?= htmlspecialchars($row['userclass']) ?></td>
                            <td></td>
                            <td class="infoc"><?= htmlspecialchars($row['usersub']) ?></td>
                        </tr>
                    </tbody>
                </table>
            </div>

        <?php else: ?>
            <p>No profile data found.</p>
        <?php endif; ?>
    </div>
</div>
</body>
</html>

<?php
$conn->close();
?>
