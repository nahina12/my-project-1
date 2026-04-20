<?php include 'inc/db.php'; ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>About Me</title>
    <link rel="stylesheet" href="assets/css/style.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
</head>
<body class="about-page">

<header>
    <h2 class="logo">Redoana Islam.</h2>
    <nav>
        <a href="index.php">Home</a>
        <a href="about.php">About</a>
        <a href="services.php">Services</a>
        <a href="portfolio.php">Portfolio</a>
        <a href="contact.php">Contact</a>
    </nav>
</header>

<!-- About Hero -->
<section class="about-hero">
    <h1>About Me</h1>
</section>

<!-- Education Section -->
<section class="about-section education">
    <h2>Education</h2>

    <!-- 1. High School -->
    <div class="card">
        <h3>High School </h3>
        <p>ABC School, 2021-2022</p>
        <p>Major: Science Stream</p>
    </div>

    <!-- 2. Engineering -->
    <div class="card">
        <h3>Diploma Engineering</h3>
        <p>Institute of computer science and technology (ICST) feni, 2022- 2023</p>
        <p>Focus: Computer Science and technology </p>
    </div>

    <!-- 3. Bachelor of Science in Computer Science -->
    <div class="card">
        <h3>Bachelor of Science in Computer Science</h3>
        <p>XYZ University, 2026-2027</p>
        <p>Focus: Web Development, Algorithms, Database Management</p>
    </div>

    <!-- 4. Graphic Design Diploma -->
    <div class="card">
        <h3>Graphic Design Diploma</h3>
        <p>Design Academy, 2020</p>
        <p>Photoshop, Illustrator, UI/UX Design</p>
    </div>

    <!-- 5. Front-End Development Certification -->
    <div class="card">
        <h3>Front-End Development Certification</h3>
        <p>FreeCodeCamp, 2021</p>
        <p>HTML, CSS, JavaScript, Responsive Design</p>
    </div>

</section>



<!-- Experience Section -->
<section class="about-section experience">
    <h2>Experience</h2>

    <div class="card">
        <h3>Frontend Developer</h3>
        <p>ABC Company, 2022 - Present</p>
        <p>Building responsive websites using HTML, CSS, JS, PHP, MySQL.</p>
    </div>

    <div class="card">
        <h3>Intern Developer</h3>
        <p>XYZ Company, 2022 - 2023</p>
        <p>Assisted in web development projects and testing.</p>
    </div>

    <div class="card">
        <h3>Graphic Designer</h3>
        <p>Design Studio, 2023 - Present</p>
        <p>Photoshop, Illustrator, UI/UX Design for websites and apps.</p>
    </div>

    <div class="card">
        <h3>UI/UX Designer</h3>
        <p>Freelance, 2023 - Present</p>
        <p>Creating interactive and user-friendly website/app interfaces.</p>
    </div>

</section>


<!-- Skills Section -->
<section class="about-section skills">
    <h2>Skills</h2>
    <div class="skills-grid">
        <div class="skill"><i class="fab fa-html5"></i></div>
        <div class="skill"><i class="fab fa-css3-alt"></i></div>
        <div class="skill"><i class="fab fa-js"></i></div>
        <div class="skill"><i class="fab fa-php"></i></div>
        <div class="skill"><i class="fas fa-database"></i></div>
        <!-- Photoshop -->
        <div class="skill">Ps</div>
        <!-- Illustrator -->
        <div class="skill">Ai</div>
        <div class="skill"><i class="fas fa-pencil-ruler" title="UI/UX Design"></i></div>
    </div>
</section>



</body>
</html>
