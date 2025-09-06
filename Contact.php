<?php
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contact Us</title>
    <link rel="stylesheet" href="css/contact.css">
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

<section class="page-header">
    <h1>Contact Us</h1>
    <p>We'd love to hear from you! Fill out the form below or reach out using the contact details.</p>
</section>

<section class="contact-section">
    <div class="contact-info">
        <h3>About ProjectsLanka.lk</h3>
        <p>
            ProjectsLanka.lk is Sri Lanka’s dedicated platform for students who need complete, well-structured,
            and ready-to-use academic projects. We understand that balancing coursework, assignments, and exams can
            be challenging, so we provide <strong>Software Applications</strong>, <strong>Web Applications</strong>,
            and <strong>Mobile Applications</strong> designed specifically to meet university and institute
            project requirements.
        </p>
        <p>
            Our projects are ideal for <strong>IT</strong>, <strong>Computing</strong>, and <strong>Software Engineering</strong> students
            who want to save time, learn coding best practices, and submit polished, professional-quality work.
            Each project includes clean, easy-to-understand code, clear documentation, and real-world functionality
            so you can learn the concepts while meeting your academic goals.
        </p>
        <p>
            Whether you’re working on a <strong>final-year project</strong>, a <strong>semester assignment</strong>,
            or a <strong>portfolio piece</strong>, we ensure that our solutions are affordable, customizable, and
            aligned with your syllabus requirements. With ProjectsLanka.lk, you don’t just get a project — you get
            a learning resource that helps you improve your skills, boost your grades, and confidently present your
            work to lecturers and examiners.
        </p>
        <div style="font-size: 18px; font-weight: bold; margin-top: 30px; margin-left: 550px;">
            Pasindu Prabashwara
        </div>
        <div style="font-size: 14px; font-style: italic; margin-top: 10px; margin-left: 550px;">
            Founder of CourseLanka.lk
        </div>
    </div>

    <div class="contact-form">
        <h3>Send Us a Message</h3>
        <form action="#" method="post">
            <label for="name">Your Name</label>
            <input type="text" id="name" name="name" required />

            <label for="email">Your Email</label>
            <input type="email" id="email" name="email" required />

            <label for="subject">Subject</label>
            <input type="text" id="subject" name="subject" required />

            <label for="message">Your Message</label>
            <textarea id="message" name="message" required></textarea>

            <button type="submit">Send Message</button>
        </form>
    </div>
</section>

<footer class="footer">
    <p>&copy; 2025 ProjectsLanka.lk | All Rights Reserved</p>
</footer>

</body>
</html>
