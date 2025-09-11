<?php
include './libs/load.php';
?>
<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />

    <link href="./assets/libs/tiny-slider/dist/tiny-slider.css" rel="stylesheet" />
    <link rel="stylesheet" href="./assets/libs/swiper/swiper-bundle.min.css" />
    <link rel="shortcut icon" type="image/x-icon" href="./assets/images/favicon/favicon.ico" />
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@3.3.3/dist/tailwind.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Inter:wght@400;500;600;700&display=swap" />
    <link rel="stylesheet" href="./assets/libs/simplebar/dist/simplebar.min.css" />
    <link rel="stylesheet" href="./assets/css/theme.min.css">
    <title>Contact Us - Freshcart</title>
</head>

<body class="font-inter bg-gray-50">

    <!-- navbar -->
    <?php load_template('nav') ?>
    <!-- navbar End-->

    <main class="container mx-auto px-4 md:px-6 lg:px-10 py-12 max-w-7xl">

        <!-- Page Heading -->
        <div class="text-center mb-12">
            <h1 class="text-3xl md:text-4xl font-bold text-gray-800 mb-2">Contact Us</h1>
            <p class="text-gray-600 text-sm md:text-base">We’d love to hear from you! Fill out the form or reach us directly.</p>
        </div>

        <!-- Desktop: info left / form right | Mobile: stacked -->
        <div class="flex flex-col lg:flex-row gap-10">

            <!-- Shop Details (Left) -->
            <div class="lg:w-1/3 bg-white rounded-xl shadow-lg p-8 flex flex-col gap-6">
                <h2 class="text-2xl font-semibold text-gray-800">Our Office</h2>
                <div class="text-gray-600 space-y-3">
                    <p><span class="font-semibold">Address:</span> 123 Flower Street, Garden City, Country</p>
                    <p><span class="font-semibold">Phone:</span> +123 456 7890</p>
                    <p><span class="font-semibold">Email:</span> support@freshcart.com</p>
                    <p><span class="font-semibold">Working Hours:</span> Mon - Sat: 9:00 AM - 6:00 PM</p>
                </div>
            </div>

            <!-- Contact Form (Right) -->
            <div class="lg:w-2/3 bg-white rounded-xl shadow-lg p-8">
                <form action="send_contact.php" method="POST" class="flex flex-col gap-5">
                    <div class="flex flex-col md:flex-row gap-5">
                        <input type="text" name="name" placeholder="Your Name" required
                            class="flex-1 border border-gray-300 rounded-lg px-4 py-3 focus:outline-none focus:ring-2 focus:ring-green-500">
                        <input type="email" name="email" placeholder="Your Email" required
                            class="flex-1 border border-gray-300 rounded-lg px-4 py-3 focus:outline-none focus:ring-2 focus:ring-green-500">
                    </div>
                    <input type="text" name="subject" placeholder="Subject" required
                        class="border border-gray-300 rounded-lg px-4 py-3 focus:outline-none focus:ring-2 focus:ring-green-500">
                    <textarea name="message" rows="6" placeholder="Your Message" required
                        class="border border-gray-300 rounded-lg px-4 py-3 focus:outline-none focus:ring-2 focus:ring-green-500"></textarea>
                    <button type="submit"
                        class="bg-green-600 hover:bg-green-700 text-white font-semibold px-6 py-3 rounded-lg transition">
                        Send Message
                    </button>
                </form>
            </div>

        </div>

        <!-- Map (Full width, below both columns) -->
        <div class="mt-12 rounded-xl overflow-hidden shadow-lg h-96">
            <iframe class="w-full h-full"
                src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3153.019702374676!2d-122.41941568468106!3d37.774929779759236!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x808581564f8b4f2f%3A0xf8b5a8395b223e!2sSan%20Francisco%2C%20CA!5e0!3m2!1sen!2sus!4v1691536123456!5m2!1sen!2sus"
                style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
        </div>

    </main>


    <!-- footer -->
    <?php load_template('footer') ?>
    <!-- footer End -->

    <!-- Libs JS -->
    <script src="./assets/libs/bootstrap/dist/js/bootstrap.bundle.min.js"></script>
    <script src="./assets/libs/simplebar/dist/simplebar.min.js"></script>
    <script src="./assets/js/main.js"></script>

</body>

</html>