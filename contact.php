<?php 
include 'inc/db.php'; // Database connection

// Form submit check
if (isset($_POST['submit'])) {

    $name    = mysqli_real_escape_string($conn, $_POST['name']);
    $email   = mysqli_real_escape_string($conn, $_POST['email']);
    $address = mysqli_real_escape_string($conn, $_POST['address']);
    $phone   = mysqli_real_escape_string($conn, $_POST['phone']);
    $message = mysqli_real_escape_string($conn, $_POST['message']);

    // Insert Query
    $sql = "INSERT INTO contact_messages (name, email, address, phone, message)
            VALUES ('$name', '$email', '$address', '$phone', '$message')";

    if (mysqli_query($conn, $sql)) {
        $success = "✔ Message Sent Successfully!";
    } else {
        $error = "❌ Something went wrong!";
    }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
   <meta charset="UTF-8">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>Contact</title>
   <link rel="stylesheet" href="assets/css/style.css">
   <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
</head>

<body class="contact-page">

<!-- Header -->
<header class="site-header">
    <div class="container header-inner">
        <a href="index.php" class="logo">Redoana Islam.</a>

        <nav class="nav">
            <a href="index.php">Home</a>
            <a href="about.php">About</a>
            <a href="services.php">Services</a>
            <a href="projects.php">Portfolio</a>
            <a href="contact.php">Contact</a>
        </nav>
    </div>
</header>

<!-- Hero Section -->
<section class="contact-hero">
    <p>Ask ME Question</p>
    <h1>Contact Me</h1>
    <span class="hero-line"></span>
</section>

<!-- Success / Error Message -->
<?php if(isset($success)) { ?>
    <p style="text-align:center; color:#078b8e; font-size:20px; margin-bottom:10px;">
        <?= $success ?>
    </p>
<?php } ?>

<?php if(isset($error)) { ?>
    <p style="text-align:center; color:red; font-size:20px; margin-bottom:10px;">
        <?= $error ?>
    </p>
<?php } ?>


<!-- Contact Form Box -->
<section class="contact-box">
    <form class="contact-form" method="POST" action="">
        <div class="input-row">
            <input type="text" name="name" placeholder="Name" required>
            <input type="email" name="email" placeholder="Email" required>
        </div>

        <div class="input-row">
            <input type="text" name="address" placeholder="Address">
            <input type="text" name="phone" placeholder="Phone Number">
        </div>

        <textarea name="message" rows="6" placeholder="Your Message"></textarea>

        <button type="submit" name="submit">Send Message</button>
    </form>
</section>

</body>
</html>
