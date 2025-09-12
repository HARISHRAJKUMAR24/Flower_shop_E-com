<?php
include './libs/load.php';
?>
<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />

    <link href="/assets/libs/tiny-slider/dist/tiny-slider.css" rel="stylesheet" />
    <link rel="stylesheet" href="/assets/libs/swiper/swiper-bundle.min.css" />
    <link rel="shortcut icon" type="image/x-icon" href="/assets/images/favicon/favicon.ico" />
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@3.3.3/dist/tailwind.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Inter:wght@400;500;600;700&display=swap" />
    <link rel="stylesheet" href="/assets/libs/simplebar/dist/simplebar.min.css" />
    <link rel="stylesheet" href="/assets/css/theme.min.css">
    <title>Contact Us - Freshcart</title>
    <link rel="stylesheet" href="./assets/css/contactus.css">


</head>

<body class="font-inter bg-gray-50">

    <!-- navbar -->
    <?php load_template('nav') ?>
    <!-- navbar End-->

    <main class="contact_container">

        <!-- Heading -->
        <div class="contact_heading">
            <h1>Contact Us</h1>
            <p>We’d love to hear from you! Fill out the form or reach us directly.</p>
        </div>

        <!-- Address + Form -->
        <div class="contact_content">

            <!-- Left: Shop Details -->
            <div class="contact_info">
                <h2>Our Office</h2>
                <p><strong>Address:</strong> 123 Flower Street, Garden City, Country</p>
                <p><strong>Phone:</strong> +123 456 7890</p>
                <p><strong>Email:</strong> support@freshcart.com</p>
                <p><strong>Working Hours:</strong> Mon - Sat: 9:00 AM - 6:00 PM</p>
            </div>

            <!-- Right: Form -->
            <div class="contact_form">
                <form action="send_contact.php" method="POST">
                    <div class="form_row">
                        <input type="text" name="name" placeholder="Your Name" required>
                        <input type="email" name="email" placeholder="Your Email" required>
                    </div>
                    <input type="text" name="subject" placeholder="Subject" required>
                    <textarea name="message" rows="6" placeholder="Your Message" required></textarea>
                    <button type="submit">Send Message</button>
                </form>
            </div>

        </div>

        <!-- Map -->
        <div class="contact_map">
            <iframe
                src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3153.019702374676!2d-122.41941568468106!3d37.774929779759236!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x808581564f8b4f2f%3A0xf8b5a8395b223e!2sSan%20Francisco%2C%20CA!5e0!3m2!1sen!2sus!4v1691536123456!5m2!1sen!2sus"
                allowfullscreen="" loading="lazy"></iframe>
        </div>

    </main>





    <!-- footer -->
    <?php load_template('footer') ?>
    <!-- footer End -->

    <!-- Libs JS -->
    <script src="./assets/libs/bootstrap/dist/js/bootstrap.bundle.min.js"></script>
    <script src="/assets/libs/simplebar/dist/simplebar.min.js"></script>
    <script src="/assets/js/main.js"></script>


</body>

</html>