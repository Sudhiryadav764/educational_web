<?php
session_start();

// Check if the user is not logged in, redirect to login page
if (!isset($_SESSION['username'])) {
    header("Location: login.php");
    exit();
}

// User is logged in, fetch user profile data
$username = $_SESSION['username'];

// Replace with your database credentials
$servername = "localhost";
$dbUsername = "root"; // Fixed variable name
$password = "";
$dbname = "mydb";

// Create database connection
$conn = new mysqli($servername, $dbUsername, $password, $dbname);

// Check the connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Use a prepared statement to prevent SQL injection
$sqlProfile = "SELECT * FROM login WHERE username = ?";
$stmt = $conn->prepare($sqlProfile);

if ($stmt) {
    $stmt->bind_param("s", $username);
    $stmt->execute();
    $resultProfile = $stmt->get_result();

    if ($resultProfile->num_rows > 0) {
        // Fetch user profile data
        $userProfile = $resultProfile->fetch_assoc();
    } else {
        // Handle the case where user profile data is not found
        $userProfile = null;
    }
    $stmt->close();
} else {
    die("Error preparing statement: " . htmlspecialchars($conn->error));
}

// Close the connection
$conn->close();
?>


<!DOCTYPE html>
<html lang="en">
<head>
 <meta charset="UTF-8">
 <meta name="viewport" content="width=device-width, initial-scale=1.0">
 <title>Home page</title>
 <!-- CSS link -->
 <link rel="stylesheet" href="css/homestyle.css">
 <!-- Font link -->
 <link rel="preconnect" href="https://fonts.googleapis.com">
 <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
 <link href="https://fonts.googleapis.com/css2?family=Poppins&display=swap"
rel="stylesheet">
</head>
<body>
<?php include 'header.php'; ?>
 <main>
 <!-- Slogan part start -->
 <section id="section1">
 <div class="mid_class">
 <!-- aside code india check -->
 <aside style="width:200px; height:480px ; background-color:#000000; color: green;
padding: 10px;">
 <h2 style="padding:10px; font-size:30px"> <u>Code India</u></h2>
 <h4 style="padding:15px 5px">"Code India Grow India" </h4>
 <p style="font-size:12px; padding:5px;">The unbreakable part of Learniverse. This is a
code learning platform. </p>
 <p style="font-size:12px; padding:5px;">We are providing various language courses to
enhaance your coding skills from beginner to advance level for students.</p>
 <p style="font-size:12px; padding:5px;">Learn programming language in a fun way.
For junior class students to higher secondary students.</p>
 <button style="width:170px; height:30px; background-color:green;margin:25px
15px"><a href="./code.html" style="padding:10px;">visit code india</a></button>
 </aside>
 <div class="overlay">
 <h1 class="slogan">Learn anything from anywhere <br> Learn online </h1>
 </div>
 </div>
 </section>
 <!-- slogan part ends -->
 <section id="section2">

 <h1> <strong>We are Learniverse</strong> </h1>

 <p class="content_section"> We believe that every student deserves access to the best
<br> possible education, no matter where they are located. That's why <br> we've created a
cutting-edge online platform that connects you <br> with top-rated tutors via Zoom.
Whether you need help with math, <br> science or other subjects, our team of experienced
educators is here to <br> help. These are steps to get enroll in course. <br>
 <img src="img/step.jpg" alt="" width="900px" height="300px">
 </p>

 <p class="content_section" style="text-align: left; padding-left: 40px; font-weight: 600;
font-size: 28px; color: rgb(4,4,88);">
 Clicking the button below. Uncover all the subjects. <br>
 </p>
 </section>
 <!-- end of description part -->

 <!-- sub detail part starts -->
 <div class="sub_detail_1">
 <button onclick="show_sub()" id="sub9">Class 9th</button>
 <div id="detail_1">
 </div>
 <!-- </div>
 <div class="sub_detail_2"> -->
 <button onclick="show_sub2()" id="sub10">Class 10th</button>
 <br>
 <div id="detail_2">
 </div>
 </div>
 <!-- subject detail part ends -->

 <!-- steps to enroll -->
 <section id="section3">
 <p>
 " Step into an engaging learning experience with our courses! Each subject brings
you a daily dose of live classes on weekdays, making learning interactive and fun. <br> Dive
into the world of knowledge with our weekend doubt classes, where your questions find
clear answers, ensuring you're on the right track.
 <br>
 Picture this: every day, you get a <strong> live class </strong>bringing the subject to
life, and on weekends, a dedicated <strong> doubt session.</strong> The <br> learning
resources, from <strong>notes</strong> to <strong>quizzes</strong>, are regularly
refreshed, keeping you engaged and up-to-date. Join us in this vibrant learning community
where every day is a step toward mastering the subject and achieving your academic goals. "
 </p>
 </section>
 <div class="adv">
 <p>
 <img src="img/imo.jpg" alt="" width="200px" height="200px"> <br>
 <a href="https://www.indiantalent.org/international-maths-olympiad/class10">International Maths Olympiad</a>
 </p>
 <p>
 <img src="img/iso2.jpg" alt="" width="200px" height="200px"> <br>
 <a href="https://www.indiantalent.org/international-science-olympiad/class10">International Science Olympiad</a>
 </p>
 <p>
 <img src="img/ntse.jpg" alt="" width="200px" height="200px"> <br>
 <a href="https://ncert.nic.in/national-talent-examination.php">NTSE Exam</a>
 </p>
 <p>
 <img src="img/navodya1.jpg" alt="" width="200px" height="200px"> <br>
 <a href="https://navodaya.gov.in/nvs/en/Admission-JNVST/AdmissionNotifications/">Navodya Entrance </a>
 </p>
 </div>
 <!-- batch heading -->
 <p class="batch_head"> Batch class 9th </p>

 <!-- batch detail part start-->
 <div class="batch_section">
 <div class="phy_batch" id="target1">
 <p class="batch"> <span>SCIENCE</span> <br> <br>
 Batch Timing: 4 PM - 5PM <br> Monday - Tuesday - Wednesday <br>
 Fees: Rs.500 <br> <br>
 <button class="btn"><a href="./appl.html">JOIN</a></button>
 </p>
 <img src="img/sc.jpg" alt="" class="batchpic">
 </div>
 <div class="chem_batch" id="target2">
 <img src="img/ssc.jpg" alt="" class="batchpic">
 <p class="batch"> <span>SOCIAL SCIENCE</span> <br> <br>
 Batch Timing: 4 PM - 5PM <br> Thursday - Friday - Saturday <br>
 Fees: Rs.500 <br> <br>
 <button class="btn"><a href="./appl.html">JOIN</a></button>
 </p>
 </div>
 <div class="bio_batch" id="target3">
 <p class="batch"> <span>COMPUTER SCIENCE</span> <br> <br>Batch Timing: 4 PM -
5PM <br> Monday - Tuesday - Wednesday <br>
 Fees: Rs.500 <br> <br>
 <button class="btn"><a href="./appl.html">JOIN</a></button>
 </p>
 <img src="img/cs.jpg" alt="" class="batchpic">
 </div>
 <div class="maths_batch" id="target4">
 <img src="img/math.jpg" alt="" class="batchpic">
 <p class="batch"><span>MATHS</span> <br> <br>
 Batch Timing: 4 PM - 5PM <br> Thursday - Friday - Saturday <br>
 Fees: Rs.500 <br> <br>
 <button class="btn"><a href="./appl.html">JOIN</a></button>
 </p>
 </div>
 <div class="eng_batch" id="target5">
 <p class="batch"> <span>ENGLISH</span><br> <br>
 Batch Timing: 4 PM - 5PM <br> Monday - Tuesday - Wednesday <br>
 Fees: Rs.500 <br> <br>
 <button class="btn"><a href="./appl.html">JOIN</a></button>
 </p>
 <img src="img/eng.jpg" alt="" class="batchpic">
 </div>
 </div>
 <!-- batch1 part ends -->
 <!-- batch2 starts -->
 <p class="batch_head"> Batch class 10th</p>
 <div class="batch_section">
 <div class="phy_batch" id="target6">
 <p class="batch"> <span>SCIENCE</span> <br> <br>
 Batch Timing: 4 PM - 5PM <br> Monday - Tuesday - Wednesday <br>
 Fees: Rs.500 <br> <br>
 <button class="btn"><a href="./appl.html">JOIN</a></button>
 </p>
 <img src="img/sc.jpg" alt="" class="batchpic">
 </div>
 <div class="chem_batch" id="target7">
 <img src="img/ssc.jpg" alt="" class="batchpic">
 <p class="batch"> <span>SOCIAL SCIENCE</span> <br> <br>
 Batch Timing: 4 PM - 5PM <br> Thursday - Friday - Saturday <br>
 Fees: Rs.500 <br> <br>
 <button class="btn"><a href="./appl.html">JOIN</a></button>
 </p>
 </div>
 <div class="bio_batch" id="target8">
 <p class="batch"> <span>COMPUTER SCIENCE</span> <br> <br>Batch Timing: 4 PM -
5PM <br> Monday - Tuesday - Wednesday <br>
 Fees: Rs.500 <br> <br>
 <button class="btn"><a href="./appl.html">JOIN</a></button>
 </p>
 <img src="img/cs.jpg" alt="" class="batchpic">
 </div>
 <div class="maths_batch" id="target9">
 <img src="img/math.jpg" alt="" class="batchpic">
 <p class="batch"><span> MATHS</span> <br> <br>
 Batch Timing: 4 PM - 5PM <br> Thursday - Friday - Saturday <br>
 Fees: Rs.500 <br> <br>
 <button class="btn"><a href="./appl.html">JOIN</a></button>
 </p>
 </div>
 <div class="eng_batch" id="target10">
 <p class="batch"> <span>ENGLISH</span><br> <br>
 Batch Timing: 4 PM - 5PM <br> Monday - Tuesday - Wednesday <br>
 Fees: Rs.500 <br> <br>
 <button class="btn"><a href="./appl.html">JOIN</a></button>
 </p>
 <img src="img/eng.jpg" alt="" class="batchpic">
 </div>
 </div>
</main>
 <!-- batch2 ends -->


 <?php include 'chatbot.html'; ?>



  <!-- link js file -->
  <script src="JS/script.js"></script>
  
 <!-- Footer starts -->
 <?php include 'footer.html'; ?>
</body>
</html>