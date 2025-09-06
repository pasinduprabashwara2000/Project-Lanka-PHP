<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Submit Your Project</title>
    <link rel="stylesheet" href="css/inquire.css">
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
    <h1>Submit Your Project</h1>
    <p>Students can fill in their project details below for submission.</p>
</section>

<section class="project-form">
    <h2>Project Submission Form</h2>
    <form action="submit_project.php" method="POST" enctype="multipart/form-data">

        <label for="studentName">Student Name</label>
        <input type="text" id="studentName" name="studentName" placeholder="Full Name" required />

        <label for="email">Email Address</label>
        <input type="email" id="email" name="email" placeholder="Email Address" required />

        <label for="study_center">Study Center</label>
        <select id="study_center" name="study_center" required>
            <option value="">Select Study Center</option>

            <option value="UCSC">University of Colombo School of Computing (UCSC)</option>
            <option value="University_Colombo">University of Colombo</option>
            <option value="University_Kelaniya">University of Kelaniya</option>
            <option value="University_Moratuwa">University of Moratuwa</option>
            <option value="University_Jaffna">University of Jaffna</option>
            <option value="University_Ruhuna">University of Ruhuna</option>
            <option value="University_Sabaragamuwa">University of Sabaragamuwa</option>
            <option value="University_Peradeniya">University of Peradeniya</option>
            <option value="University_Rajaratna">University of Rajarata</option>
            <option value="Open_University">Open University of Sri Lanka (OUSL)</option>

            <option value="NSBM">National School of Business Management (NSBM)</option>
            <option value="SLIIT">Sri Lanka Institute of Information Technology (SLIIT)</option>
            <option value="IJSE">Institute of Software Engineering (IJSE)</option>
            <option value="ESOFT">ESOFT Metro Campus</option>
            <option value="CINEC">CINEC Campus</option>
            <option value="APIIT">Asia Pacific Institute of Information Technology (APIIT)</option>
            <option value="Horizon">Horizon Campus</option>
            <option value="AIT">Academy of IT</option>
            <option value="Pearl">Pearl IT Academy</option>

            <option value="NAITA">National Apprentice & Industrial Training Authority (NAITA)</option>
            <option value="Tertiary_NVQ">NVQ Level 5/6 IT Centers</option>
            <option value="Vocational_IT">Vocational IT Training Centers</option>
            <option value="DIT">Department of Information Technology (DIT)</option>
            <option value="ICTA">Information & Communication Technology Agency (ICTA)</option>

            <option value="Other">Other</option>
        </select>

        <label for="projectTitle">Project Title</label>
        <input type="text" id="projectTitle" name="projectTitle" placeholder="Title of the Project" required />

        <label for="projectDescription">Project Description</label>
        <textarea id="projectDescription" name="projectDescription" placeholder="Describe your project..." required></textarea>

        <label for="projectFile">Upload Project File</label>
        <input type="file" id="projectFile" name="projectFile" accept=".zip,.rar,.pdf" required />

        <button type="submit">Submit Project</button>
    </form>
</section>

<footer class="footer">
    <p>&copy; 2025 ProjectsLanka.lk | All Rights Reserved</p>
</footer>

</body>
</html>

