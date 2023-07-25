<!DOCTYPE html>
<html lang="en">
    
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="icon" href="assets/img/favicon.svg" type="image/svg+xml">
        <link rel="stylesheet" href="./assets/css/style.css">
        <link rel="stylesheet" href="./assets/css/responsive.css">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" integrity="sha512-iecdLmaskl7CVkqkXNQ/ZH/XLlvWZOJyj7Yy7tcenmpD1ypASozpmT/E0iPtmFIB46ZmdtAc9eNBvH0H/ZpiBw==" crossorigin="anonymous" referrerpolicy="no-referrer" />

        <title>Coffee Shop Roast n Roll</title>
    </head>
    
    <body>
        @include('partials.navbar')
    <main id="mainContent">
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
                <button>Read More</button>
            </div>
            </div>
            <div class="section-menu">
                <div class="title-menu">
                    <h2>Favorite Menu</h2>
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
                    <div class="menu-item">
                        <h3>Menu 4</h3>
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
                <div class="questions1">
                  <button id="pertanyaan1">Hari dan Jam berapa Roast 'n Roll buka? <i id="quest-icon1" class="fa-solid fa-caret-down"></i></button>
                  <div class="answer1" style="display: none;">
                    <p><i class="fa-solid fa-angle-right"></i> "Roast 'n Roll buka setiap hari dari Senin hingga Minggu, pukul 08.00 pagi hingga 10.00 malam."</p>
                  </div>
                </div>
                <div class="questions2">
                  <button id="pertanyaan2">Apa Jenis kopi yang ditawarkan oleh Roast 'n Roll? <i id="quest-icon2" class="fa-solid fa-caret-down"></i></button>
                  <div class="answer2" style="display: none;">
                    <p><i class="fa-solid fa-angle-right"></i> "Roast 'n Roll menawarkan beragam jenis kopi, seperti Espresso, Americano, Latte, Cappuccino, Mocha, dan masih banyak lagi."</p>
                  </div>
                </div>
                <div class="questions3">
                  <button id="pertanyaan3">Bagaimana cara memesan kopi atau roti dari Roast 'n Roll? <i id="quest-icon3" class="fa-solid fa-caret-down"></i></button>
                  <div class="answer3" style="display: none;">
                    <p><i class="fa-solid fa-angle-right"></i> "Anda dapat memesan kopi atau roti dari Roast 'n Roll dengan dua cara: 1. Mengunjungi toko fisik kami dan memesan langsung di sana. 2. Menghubungi nomor layanan pelanggan kami untuk pemesanan pengantaran."</p>
                  </div>
                </div>
                <div class="questions4">
                  <button id="pertanyaan4">Apakah Roast 'n Roll menyediakan layanan pengantaran? <i id="quest-icon4" class="fa-solid fa-caret-down"></i></button>
                  <div class="answer4" style="display: none;">
                    <p><i class="fa-solid fa-angle-right"></i> "Ya, Roast 'n Roll menyediakan layanan pengantaran. Anda dapat memesan kopi atau roti melalui telepon dan kami akan mengantarkannya ke alamat yang Anda berikan."</p>
                  </div>
                </div>
              </div>
        </div>
            <div class="footer-container">
                <div class="footer">
                <div class="about">
                    <img src="assets/img/logo.png" alt="logo" srcset="" /><h3>Roast 'n Roll</h3>
                    <p>Roast and Roll adalah sebuah kedai kopi yang menawarkan kopi berkualitas tinggi dan roti yang lezat. Kami menawarkan berbagai macam kopi berkualitas dan beragam pilihan roti yang menggugah selera.</p>
                </div>
                <div class="footer-menus">
                    <div class="quick-links">
                        <h3>Quick Links</h3>
                        <ul>
                            <li><a href="/Product">Product</a></li>
                            <li><a href="/Product">Order</a></li>
                            <li><a href="/Product">About Us</a></li>
                            <li><a href="/Product">FaQ</a></li>
                        </ul>
                    </div>
                    <div class="contact-us">
                        <h3>Contact Us</h3>
                        <ul>
                            <li><a href="http://" target="_blank" rel="noopener noreferrer">
                                <i id="icon-link" class="fa-solid fa-envelope"></i> roastnroll@gmail.com</a></li>
                            <li><a href="http://" target="_blank" rel="noopener noreferrer">
                                <i id="icon-link" class="fa-solid fa-phone"></i> 027123456</a></li>
                            <li><a href="http://" target="_blank" rel="noopener noreferrer">
                                <i id="icon-link" class="fa-solid fa-map-location-dot"></i> Mendungan, Pabelan, Kartasura</a></li>
                        </ul>
                    </div>
                    <div class="social-media">
                        <h3>Social Media</h3>
                        <div class="container-icon">
                            <a href="https://twitter.com/" target="_blank">
                                <i id="social-media" class="fab fa-twitter"></i>
                            </a>
                            <a href="https://www.linkedin.com/" target="_blank">
                                <i id="social-media" class="fab fa-linkedin"></i>
                            </a>
                            <a href="https://www.instagram.com/" target="_blank">
                                <i id="social-media" class="fab fa-instagram"></i>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
            </div>
            <div class="copyright">
                <p>Copyright &copy; 2023 <a href="/">Roast 'n Roll</a>. All rights reserved</p>
            </div>
        </div>
    </main>
    <footer>

    </footer>
</body>

<script type="module" src="./assets/js/index.js"></script>

</html>