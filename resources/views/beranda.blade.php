<!DOCTYPE html>
<html lang="en">
    
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="icon" href="./assets/img/icon/favicon.svg" type="image/svg+xml">
        <link rel="stylesheet" href="./assets/css/style.css">
        <link rel="stylesheet" href="./assets/css/responsive.css">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">


        <title>Coffee Shop Roast n Roll</title>
    </head>
    
    <body>
        @include('partials.navbar')
    <main>
        <div class="container-main">
            <div class="hero-content">
                <h2>Roast 'n Roll</h2>
                <p>Indulge in the perfect blend of freshly roasted coffee and artisanal bread at Roast 'n Roll. Our
                    passion for flavor and quality shines through every sip and bite.
                </p>
                <button>Order Now!</button>
            </div>
            <div class="image-content">
                <div class="hero-img-1">
                </div>
                <div class="hero-img-2">
                </div>
                <div class="hero-img-3">
                </div>
            </div>
        </div>
        <div class="container-about">
            <div class="about-img">
                <img src="assets/img/about.png" alt="about">
            </div>
            <div class="about-content">
                <h2>This Is Our Story</h2>
                <p>Welcome to Roast n Roll Coffee and Bread Shop, where we blend the love for coffee with the warmth of freshly baked bread to create an unforgettable experience for our cherished customers.</p>
                <br>
                <p>Our journey began with a simple dream - to bring people together through the joy of good food and great company. Founded in 2023, Roast n Roll has since become a beloved community hub, serving as a cozy haven for locals and travelers alike.</p>
                <br>
                <p>At the heart of our shop is our passion for crafting the perfect cup of coffee. We carefully source the finest beans from around the world, ensuring each sip is a celebration of rich flavors and invigorating aromas.</p>

                <button>Read More</button>
            </div>
            </div>
            <div class="section-menu">
                <div class="title-menu">
                    <p>Favorite Menu</p>
                </div>
                <div class="container-menus">
                    <div class="menu-item">
                        <h3>Menu 1</h3>
                        <img src="assets/img/img-1.jpg" alt="Menu 1">
                        <button>Order</button>
                    </div>
                    <div class="menu-item">
                        <h3>Menu 2</h3>
                        <img src="assets/img/img-2.jpg" alt="Menu 2">
                        <button>Order</button>
                    </div>
                    <div class="menu-item">
                        <h3>Menu 3</h3>
                        <img src="assets/img/img-3.jpg" alt="Menu 3">
                        <button>Order</button>
                    </div>
                </div>
            </div>
        <div class="container-faq">
            <div class="faq">
                <h6>FAQ</h6>
                <h1>Frequently Asked Questuons</h1>
                <hr>
                <p>Temukan Jawaban untuk Pertanyaan Umum Anda</p>
            </div>
            <div class="questions-faq">
                <div class="question">
                    <button id="pertanyaan1">Hari dan Jam berapa Roast 'n Roll buka? <i class="fa-solid fa-caret-down"></i></button>
                    <button id="pertanyaan2">Apa Jenis kopi yang ditawaekan oleh roast 'n Roll? <i class="fa-solid fa-caret-down"></i></button>
                    <button id="pertanyaan3">Bagaimana cara memesan kopi atau roti dari Roast 'n Roll? <i class="fa-solid fa-caret-down"></i></button>
                    <button id="pertanyaan4">Apakah Roast 'n Roll menyediakan layanan pengantaran? <i class="fa-solid fa-caret-down"></i></button>
                </div>
                <div class="answer">

                </div>
            </div>
        </div>
        <div class="footer">
            <div class="footer-container">
                <div class="about">

                </div>
                <div class="footer-menus">
                    <div class="quick-links">

                    </div>
                    <div class="contact-us">

                    </div>
                    <div class="social-media">
                        <h2>Social Media</h2>
                        <div class="container-icon">
                            <a href="https://twitter.com/" target="_blank">
                                <i class="fab fa-twitter"></i>
                            </a>
                            <a href="https://www.linkedin.com/" target="_blank">
                                <i class="fab fa-linkedin"></i>
                            </a>
                            <a href="https://www.instagram.com/" target="_blank">
                                <i class="fab fa-instagram"></i>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="copyright">
                <p>Copyright &copy; 2023 <a href="/">Roast and Roll</a>. All rights reserved</p>
            </div>
        </div>
    </main>
    <footer>

    </footer>
</body>

<script src="./assets/js/script.js"></script>

</html>