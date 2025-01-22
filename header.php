<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Header</title>
</head>
<body>
<header>
<!-- Navigation bar starts-->
<form action="./logout.php" method="post">
    <span class="dp" id="hello">Hello, <?php echo $userProfile['username']; ?></span>
    <button class="dp"><a href="./index.php">Home</a></button>
    <button class="dp"> <a href="html/about.html">About</a></button>
    <button class="dp"><a href="./notes.html">Notes</a></button>
    <div class="dropdown">
        <a>Quiz</a>
        <div class="dropdown-content">
            <a href="./html/quiz.html" target="_blank">9th</a>
            <a href="./html/quiz10.html" target="_blank">10th</a>
        </div>
    </div>
    <button class="dp"><a href="./html/lecture.html">Lecture</a></button>
    <button class="dp"><a href="php/profile.php">Profile</a></button>
    <button type="submit" class="dp">Logout</button>
</form>
<!-- Navigation bar ends -->
</header>

</body>
</html>