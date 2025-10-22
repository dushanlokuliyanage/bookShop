<?php session_start()?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Books</title>

    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="bootstrap.css">
</head>

<body>
    <!-- Header / Navbar -->
    <?php include "heder.php" ?>
    <!-- Heder Section -->
    <main>
        <section class="hero-section">
            <div class="section-content ">
                <!-- Text Section -->
                <div class="hero-details border">
                    <h1 class="title">Best Books</h1>
                    <h3 class="subtitle">Read your fav books here</h3>
                    <p class="description">
                        Quotes about books emphasize their ability to provide "portable magic" and serve as loyal companions and gateways to knowledge and new experiences.
                        Key themes include books as portals to other worlds, sources of truth and understanding, and tools for personal growth and travel.
                        Famous phrases like, "A room without books is like a body without a soul" (Cicero) and "There is no friend as loyal as a book"
                        (Ernest Hemingway) capture the profound connection people have with books.
                    </p>
                    <div class="buttons">
                        <a href="#" class="button order-now btn btn-outline-dark">Order Now</a>
                        <a href="#" class="button contact-us btn btn-outline-dark">Contact Us</a>
                    </div>
                </div>

                <!-- Image Section -->
                <div class="hero-image-wrapper">
                    <img src="imges/dark2x.png" alt="Hero" class="hero-image">
                </div>


            </div>
        </section>


        <!-- About Section -->

        <section class="about-section">
            <div class="section-content">

                <div class="about-image-wrapper">
                    <img src="imges/wp4143648-harley-quinn-wallpapers.png" alt="About" class="about-image">
                </div>

                <div class="about-details border-about">
                    <h2 class="section-title">About Us</h2>
                    <p class="text">
                        Quotes about books emphasize their ability to provide "portable magic" and serve as loyal companions and gateways to knowledge and new experiences.
                        Key themes include books as portals to other worlds, sources of truth and understanding, and tools for personal growth and travel.
                        Famous phrases like, "A room without books is like a body without a soul" (Cicero) and "There is no friend as loyal as a book"
                        (Ernest );
                    </p>
                    <div class="social-link-list">
                        <!-- Add Icon Sciosl media -->
                        <a href="" class="social-link">
                            <!-- <i>I don't want add icon at the moment 2025/10/13 7.12pm</i> -->
                            <button class="btn btn-sm btn-outline-dark">FB</button>
                        </a>
                        <a href="" class="social-link">
                            <!-- <i>I don't want add icon at the moment 2025/10/13 7.12pm</i> -->
                            <button class="btn btn-sm btn-outline-dark">FB</button>
                        </a>
                        <a href="" class="social-link">
                            <!-- <i>I don't want add icon at the moment 2025/10/13 7.12pm</i> -->
                            <button class="btn btn-sm btn-outline-dark">FB</button>
                        </a>
                    </div>
                </div>

            </div>
        </section>


        <!-- Menu Sectioon -->
        <section class="menu-section">
            <h2 class="section-title">Our Books</h2>
            <div class="section-content">
                
            </div>
        </section>

        <!-- Contact Section -->

        <section class="contact-section ">
            <div class="section-content border-contact">
                <h2 class="section-title">Contact Us</h2>
                <ul class="contact-info-list">
                    <li class="contact-info">
                        <!-- <i class="#">Add Icon</i> -->
                        <p>350 A Colombo 7, Branse Place</p>
                    </li>

                    <li class="contact-info">
                        <!-- <i class="#">Add Icon</i> -->
                        <p>dushanlokuliyanage@gmail.com</p>
                    </li>

                    <li class="contact-info">
                        <!-- <i class="#">Add Icon</i> -->
                        <p>+94 75 925 5256</p>
                    </li>

                    <li class="contact-info">
                        <!-- <i class="#">Add Icon</i> -->
                        <p>Monday - Friday: 9.00 AM - 5.00 PM</p>
                    </li>

                    <li class="contact-info">
                        <!-- <i class="#">Add Icon</i> -->
                        <p>Sunday: Closed </p>
                    </li>

                    <li class="contact-info">
                        <!-- <i class="#">Add Icon</i> -->
                        <a href="http://itsme-dm.github.io" style="text-decoration: none;" target="_blank">
                            <p>www.itsme.com</p>
                        </a>

                    </li>
                </ul>
                <form action="#" class="contact-form" method="post">
                    <input id="name" type="text" placeholder="Your name" class="form-input" name="name" required>
                    <input id="email" type="email" placeholder="Your Email" class="form-input" name="email" required>
                    <textarea name="textarea" id="textarea" class="form-input" placeholder="Your Meassage" required></textarea>
                    <button class="submit-button" id="submit">Submit</button>
                </form>
            </div>
        </section>

    </main>

    <script src="script.js"></script>
</body>

</html>