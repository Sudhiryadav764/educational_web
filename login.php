<?php 
// Start session
session_start();

// Check if the form is submitted
if ($_SERVER["REQUEST_METHOD"] === "POST") {
    // Replace with actual username and password
    $username = "root";
    $password = "";

    // Get submitted username and password
    $inputUsername = trim($_POST["username"] ?? '');
    $inputPassword = trim($_POST["password"] ?? '');

    // Backend validation for empty fields
    if (empty($inputUsername) || empty($inputPassword)) {
        $error = "Both username and password are required.";
    } else {
        // Validate login
        if ($inputUsername === $username && $inputPassword === $password) {
            $_SESSION["loggedin"] = true;
            $_SESSION["username"] = $username;
            // Redirect to a welcome page or dashboard
            header("Location: welcome.php");
            exit;
        } else {
            $error = "Invalid username or password.";
        }
    }
}
?>

    <!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login Page</title>

    <!-- CSS -->
    <style>
        .box {
            margin: auto;
            color: white;
            padding: 50px;
            width: 300px;
            height: 250px;
            background-color: rgb(4, 4, 80);
            font-size: 18px;
            border-radius: 6px;
        }
        .log_in {
        background-color:rgb(4,4,80);
        height: auto;
        width: 200px; 
        margin: 10px;
        padding: 5px;
        border-radius: 6px ;
        color: #ffffff;
        text-align: center;
    }
        button {
            color: rgb(4, 4, 80);
            background-color: rgb(191, 191, 191);
            width: 70px;
            height: 40px;
            margin-left:100px;
            margin-top: 10px;
            border-radius: 6px ;
            font-size: 16px;
            cursor:pointer;
        }
        input {
            height: 25px;
            border-radius: 6px;
        }
        a {
            color: #5a9bff;
            font-size: 15px;
            cursor: pointer;
        }
    </style>
</head>
<body>

  
    <h1 class="log_in">LOG IN</h1>
    
    <?php if (!empty($error)): ?>
        <p style="color: red;"><?php echo $error; ?></p>
    <?php endif; ?>
    <!-- Login Form -->
    <form action="check_login.php" method="post">
        <div class="box">
            <table>
                <tr>
                    <td><label for="username">User Name:</label></td>
                    <td><input type="text" id="username" name="username" ></td>
                </tr>
                <tr>
                    <td><label for="pass">Password:</label></td>
                    <td><input type="password" name="pass" id="pass" ></td>
                </tr>
            </table>

                    <button type="submit">Log in</button>
        

            <!-- Link to Create a New Account -->
            <p>I am a new user. <a href="./lognew.html" class="new_usr">Create New Account</a></p>
        </div>
    </form>

</body>
</html>
