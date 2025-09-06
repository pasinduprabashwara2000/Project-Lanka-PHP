<?php
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Student Login</title>
    <link rel="stylesheet" href="css/login.css">
    <link rel="stylesheet" href="css/navbar.css">
    <link rel="stylesheet" href="css/footer.css">
</head>
<body>

<div class="navbar">
    <a href="index.php" class="logo">ProjectsLanka.lk</a>
    <div class="navbar-links">
        <a href="index.php">Home</a>
        <a href="SoftwareProjects.php">Software Applications</a>
        <a href="WebProjects.php">Web Applications</a>
        <a href="MobileProjects.php">Mobile Applications</a>
        <a href="Contact.php">Contact Us</a>
        <a href="Login.php">Login</a>
        <a href="Signup.php">Sign Up</a>
    </div>
</div>

<section class="login-section">
    <div class="login-box">
        <h2>Student Login</h2>
        <form action="#" method="post">

            <label for="email">Email Address</label>
            <input type="email" id="email" name="email" placeholder="Enter your email" required />

            <label for="password">Password</label>
            <input type="password" id="password" name="password" placeholder="Enter your password" required />

            <button type="submit">Login</button>
        </form>
        <div class="signup-link">
            Don't have an account? <a href="sign_up.html">Sign Up</a>
        </div>
    </div>
</section>

<footer class="footer">
    <p>&copy; 2025 ProjectsLanka.lk | All Rights Reserved</p>
</footer>

</body>
</html>