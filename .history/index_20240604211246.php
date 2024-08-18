<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="Content-Security-Policy" content="upgrade-insecure-requests">
    <title>Rumah_Seduh Coffee Shop</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.7/dist/umd/popper.min.js" integrity="sha384-zYPOMqeu1DAVkHiLqWBUTcbYfZ8osu1Nd6Z89ify25QV9guujx43ITvfi12/QExE" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.min.js" integrity="sha384-Y4oOpwW3duJdCWv5ly8SCFYWqFDsfob/3GkgExXKV4idmbt98QcxXYs9UoXAB7BZ" crossorigin="anonymous"></script>
    <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyD2Hhh_14Uam62GXGaTMcXWhhVkYg0EbDY&callback=initMap" async defer></script>

    <!-- Custom CSS File Link -->
    <link rel="stylesheet" href="assets/css/style.css">
    <link rel="stylesheet" href="assets/css/convo.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css"><!-- font awesome cdn link -->
    <link rel="icon" type="image/x-icon" href="assets/images/favicon_logo.png"><!-- Favicon / Icon -->
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet"><!-- Google font cdn link -->
</head>

<body>
    <!-- HEADER SECTION -->
    <header class="header">
        <a href="#" class="logo">
            <img src="assets/images/rumah_seduh.png" class="img-logo" alt="Rumah_Seduh Logo">
        </a>

        <!-- MAIN MENU FOR SMALLER DEVICES -->
        <nav class="navbar navbar-expand-lg">
            <ul class="navbar-nav mr-auto">
                <li class="nav-item">
                    <a href="#home" class="text-decoration-none">Home</a>
                </li>
                <li class="nav-item">
                    <a href="#about" class="text-decoration-none">About</a>
                </li>
                <li class="nav-item">
                    <a href="#menu" class="text-decoration-none">Menu</a>
                </li>
                <li class="nav-item">
                    <a href="#gallery" class="text-decoration-none">Gallery</a>
                </li>
                <li class="nav-item">
                    <a href="#blogs" class="text-decoration-none">Blogs</a>
                </li>
                <li class="nav-item">
                    <a href="#contact" class="text-decoration-none">Contact</a>
                </li>
                <li class="nav-item">
                    <a href="users/login.php" class="text-decoration-none">Login</a>
                </li>
            </ul>
            </div>
        </nav>
        <div class="icons">
            <div class="fas fa-search" id="search-btn"></div>
            <div class="fas fa-shopping-cart" id="cart-btn" onclick="redirectCart()"></div>
            <div class="fas fa-bars" id="menu-btn"></div>
        </div>

        <!-- SEARCH TEXT BOX -->
        <div class="search-form">
            <input type="search" id="search-box" class="form-control" placeholder="search here...">
            <label for="search-box" class="fas fa-search"></label>
        </div>

        <!-- CART SECTION -->
        <div class="cart">
            <h2 class="cart-title">Your Cart:</h2>
            <div class="cart-content">

            </div>
            <div class="total">
                <div class="total-title">Total: </div>
                <div class="total-price">₱0</div>
            </div>
            <!-- BUY BUTTON -->
            <button type="button" class="btn-buy">Checkout Now</button>
        </div>
    </header>

    <!-- HERO SECTION -->
    <section class="home" id="home">
        <div class="content">
            <h3>TRIMAKASIH TELAH BERKUNJUNG DI KEDAI KOPI RUMAH SEDUH</h3>
            <p>
                <strong>Kedai dibuka pukul 16:00 - 24:00 WIB</strong>
            </p>
            <a href="#menu" class="btn btn-dark text-decoration-none">Pesan Sekarang!</a>
        </div>
    </section>

    <!-- ABOUT US SECTION -->
    <section class="about" id="about">
        <h1 class="heading"> <span>Mengenai</span>Kami</h1>
        <div class="row g-0">
            <div class="image">
                <img src="assets/images/about-img.png" alt="" class="img-fluid">
            </div>
            <div class="content">
                <h3>M Rumah Seduh!</h3>
                <p>
                    Di kedai kopi "Rumah Seduh", Disin adalah surga bagi kopi dengan penikmat
                    seni yang ada didalamnya percayalah bahwa setiap cangkir dapat bercerita
                    karna rasa tidak pernah bohong. Kedai Kopi yang nyaman yang terletak di
                    jantung kota mudah ditemui, berdedikasi untuk memberikan pengalaman minum
                    kopi yang luar biasa kepada pelanggan kami. Kecintaan kami terhadap kopi
                    telah membawa kami dalam perjalanan eksplorasi dan penemuan, saat kami
                    berkeliling dunia untuk mencari biji kopi terbaik, dipanggang dan diseduh
                    dengan hati-hati untuk kesempurnaan.
                </p>
                <p>
                    Tapi kopi bukan sekedar minuman, ini adalah pengalaman. Suasana sangat dan
                    mengundang di "Rumah Seduh" dirancang untuk menjadi surga bagi para pecinta
                    kopi, di mana mereka dapat bersantai, terhubung, dan memulai perjalanan kopi mereka sendiri.
                </p>
                <a href="#" class="btn btn-dark text-decoration-none">Learn More</a>
            </div>
        </div>
    </section>

    <!-- MENU SECTION -->
    <section class="menu" id="menu">
        <h1 class="heading">Our <span>Menu</span></h1>
        <div class="box-container">
            <div class="container">
                <div class="row">
                    <div class="col-md-4">
                        <div class="box">
                            <img src="assets/images/cart-item-1.png" alt="" class="product-img">
                            <h3 class="product-title">Signature Coffee (12 OZ)</h3>
                            <div class="price">₱45.00</div>
                            <a class="btn add-cart" onclick="redirectCart()">Add to Cart</a>
                        </div>
                    </div><br />
                    <div class="col-md-4">
                        <div class="box">
                            <img src="assets/images/cart-item-2.png" alt="" class="product-img">
                            <h3 class="product-title">Original Coffee (12 OZ)</h3>
                            <div class="price">₱40.00</div>
                            <a class="btn add-cart" onclick="redirectCart()">Add to Cart</a>
                        </div>
                    </div><br />
                    <div class="col-md-4">
                        <div class="box">
                            <img src="assets/images/cart-item-3.png" alt="" class="product-img">
                            <h3 class="product-title">Caramel Coffee (12 OZ)</h3>
                            <div class="price">₱50.00</div>
                            <a class="btn add-cart" onclick="redirectCart()">Add to Cart</a>
                        </div>
                    </div>
                </div><br />
                <div class="row">
                    <div class="col-md-4">
                        <div class="box">
                            <img src="assets/images/cart-item-4.png" alt="" class="product-img">
                            <h3 class="product-title">Tiramisu Coffee (12 OZ)</h3>
                            <div class="price">₱30.00</div>
                            <a class="btn add-cart" onclick="redirectCart()">Add to Cart</a>
                        </div>
                    </div><br />
                    <div class="col-md-4">
                        <div class="box">
                            <img src="assets/images/cart-item-5.png" alt="" class="product-img">
                            <h3 class="product-title">Almond Coffee (12 OZ)</h3>
                            <div class="price">₱40.00</div>
                            <a class="btn add-cart" onclick="redirectCart()">Add to Cart</a>
                        </div>
                    </div><br />
                    <div class="col-md-4">
                        <div class="box">
                            <img src="assets/images/cart-item-5.png" alt="" class="product-img">
                            <h3 class="product-title">Expresso Coffee (12 OZ)</h3>
                            <div class="price">₱40.00</div>
                            <a class="btn add-cart" onclick="redirectCart()">Add to Cart</a>
                        </div>
                    </div>
                </div><br />
                <div class="row row-to-hide">
                    <div class="col-md-4">
                        <div class="box">
                            <img src="assets/images/cart-item-7.png" alt="" class="product-img">
                            <h3 class="product-title">Iced Americano (12 OZ)</h3>
                            <div class="price">₱35.00</div>
                            <a class="btn add-cart" onclick="redirectCart()">Add to Cart</a>
                        </div>
                    </div><br />
                    <div class="col-md-4">
                        <div class="box">
                            <img src="assets/images/cart-item-8.png" alt="" class="product-img">
                            <h3 class="product-title">Specialty Brews (12 OZ)</h3>
                            <div class="price">₱85.00</div>
                            <a class="btn add-cart" onclick="redirectCart()">Add to Cart</a>
                        </div>
                    </div><br />
                    <div class="col-md-4">
                        <div class="box">
                            <img src="assets/images/cart-item-9.png" alt="" class="product-img">
                            <h3 class="product-title">Seasonal Origin (12 OZ)</h3>
                            <div class="price">₱80.00</div>
                            <a class="btn add-cart" onclick="redirectCart()">Add to Cart</a>
                        </div>
                    </div>
                </div><br />
                <div class="row row-to-hide">
                    <div class="col-md-4">
                        <div class="box">
                            <img src="assets/images/cart-item-10.png" alt="" class="product-img">
                            <h3 class="product-title">Ethiopian Yirgacheffe Cup (12 OZ)</h3>
                            <div class="price">₱55.00</div>
                            <a class="btn add-cart" onclick="redirectCart()">Add to Cart</a>
                        </div>
                    </div><br />
                    <div class="col-md-4">
                        <div class="box">
                            <img src="assets/images/cart-item-11.png" alt="" class="product-img">
                            <h3 class="product-title">Cold Brew Tonic In a Cup (12 OZ)</h3>
                            <div class="price">₱35.00</div>
                            <a class="btn add-cart" onclick="redirectCart()">Add to Cart</a>
                        </div>
                    </div><br />
                    <div class="col-md-4">
                        <div class="box">
                            <img src="assets/images/cart-item-12.png" alt="" class="product-img">
                            <h3 class="product-title">Caramel Cold Foam Cold Brew (12 OZ)</h3>
                            <div class="price">₱55.00</div>
                            <a class="btn add-cart" onclick="redirectCart()">Add to Cart</a>
                        </div>
                    </div>
                </div><br />
                <center>
                    <button id="showHideBtn" class="btn btn-dark">SHOW MORE</button>
                </center>
            </div>
        </div>
    </section>

    <!-- GALLERY SECTION -->
    <section class="gallery" id="gallery">
        <h1 class="heading">The <span>Gallery</span></h1>
        <div class="box-container">
            <div class="container">
                <div class="row">
                    <div class="col-md-4">
                        <div class="box">
                            <div class="image">
                                <img src="assets/images/gallery1.jpg" alt="">
                            </div>
                            <div class="content">
                                <div class="stars">
                                    <i class="fas fa-star"></i>
                                    <i class="fas fa-star"></i>
                                    <i class="fas fa-star"></i>
                                    <i class="fas fa-star"></i>
                                    <i class="fas fa-star-half-alt"></i>
                                </div>
                                <h3 class="gallery-title">Picture 1</h3>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="box">
                            <div class="image">
                                <img src="assets/images/gallery2.jpg" alt="">
                            </div>
                            <div class="content">
                                <div class="stars">
                                    <i class="fas fa-star"></i>
                                    <i class="fas fa-star"></i>
                                    <i class="fas fa-star"></i>
                                    <i class="fas fa-star"></i>
                                    <i class="fas fa-star-half-alt"></i>
                                </div>
                                <h3 class="gallery-title">Picture 2</h3>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="box">
                            <div class="image">
                                <img src="assets/images/gallery3.jpg" alt="">
                            </div>
                            <div class="content">
                                <div class="stars">
                                    <i class="fas fa-star"></i>
                                    <i class="fas fa-star"></i>
                                    <i class="fas fa-star"></i>
                                    <i class="fas fa-star"></i>
                                    <i class="fas fa-star-half-alt"></i>
                                </div>
                                <h3 class="gallery-title">Picture 3</h3>
                            </div>
                        </div>
                    </div>
                </div><br />
                <div class="row pic-to-hide">
                    <div class="col-md-4">
                        <div class="box">
                            <div class="image">
                                <img src="assets/images/gallery4.jpg" alt="">
                            </div>
                            <div class="content">
                                <div class="stars">
                                    <i class="fas fa-star"></i>
                                    <i class="fas fa-star"></i>
                                    <i class="fas fa-star"></i>
                                    <i class="fas fa-star"></i>
                                    <i class="fas fa-star-half-alt"></i>
                                </div>
                                <h3 class="gallery-title">Picture 4</h3>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="box">
                            <div class="image">
                                <img src="assets/images/gallery4.jpg" alt="">
                            </div>
                            <div class="content">
                                <div class="stars">
                                    <i class="fas fa-star"></i>
                                    <i class="fas fa-star"></i>
                                    <i class="fas fa-star"></i>
                                    <i class="fas fa-star"></i>
                                    <i class="fas fa-star-half-alt"></i>
                                </div>
                                <h3 class="gallery-title">Picture 4</h3>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="box">
                            <div class="image">
                                <img src="assets/images/gallery5.jpg" alt="">
                            </div>
                            <div class="content">
                                <div class="stars">
                                    <i class="fas fa-star"></i>
                                    <i class="fas fa-star"></i>
                                    <i class="fas fa-star"></i>
                                    <i class="fas fa-star"></i>
                                    <i class="fas fa-star-half-alt"></i>
                                </div>
                                <h3 class="gallery-title">Picture 5</h3>
                            </div>
                        </div>
                    </div>
                </div><br />
                <center>
                    <button id="showBtn" class="btn btn-dark">SHOW MORE</button>
                </center>
            </div>
        </div>
    </section>

    <!-- BLOGS SECTION -->
    <section class="blogs" id="blogs">
        <h1 class="heading">Our <span>Blogs</span></h1>
        <div class="box-container">
            <div class="container">
                <div class="row">
                    <div class="col-md-4">
                        <div class="box">
                            <div class="image">
                                <img src="assets/images/pour.jpg" alt="">
                            </div>
                            <div class="content">
                                <a href="https://www.thewaytocoffee.com/batch-brew-vs-pour-over/" target="_blank" class="title text-decoration-none">Tim Peracik Kopi Sering Mendapat Pro Dan Kontra mengenai Profesional Kopi dan Sharing Pengalaman</a>
                                <span>Oleh TIm Barista Profesional Kami</span>
                                <p>Ini cerita mengenai bagaimana cara membuat kopi yang enak bukan hannya perpaduan antara manisnya gula dan pahitnya kopi, dimata seorang profesional cara menikmatinya seperti...</p>
                                <center>
                                    <a href="https://www.thewaytocoffee.com/batch-brew-vs-pour-over/" target="_blank" class="btn">Read More</a>
                                </center>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="box">
                            <div class="image">
                                <img src="assets/images/carbon.webp" alt="">
                            </div>
                            <div class="content">
                                <a href="https://www.taylorsofharrogate.co.uk/news/carbon-neutral-tea-and-coffee" target="_blank" class="title text-decoration-none">Home-grown Coffee is the Best Consumption Option in Indonesia</a>
                                <span>by Taylors editorial team</span>
                                <p>Ini adalah budaya yang sudah ada dari nenek moyang kami membesarkan kopi sendiri menjadi olahan dengan teknik yang kami buat sendiri sehingga wajib semua orang merasakan juga...</p>
                                <center>
                                    <a href="https://www.taylorsofharrogate.co.uk/news/carbon-neutral-tea-and-coffee" target="_blank" class="btn">Read More</a>
                                </center>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="box">
                            <div class="image">
                                <img src="assets/images/coffeemaker.jpg" alt="">
                            </div>
                            <div class="content">
                                <a href="https://coffeestylish.com/best-drip-coffee-makers/" target="_blank" class="title text-decoration-none">Mesin Pembuat Kopi Terbaik dan Sudah Standar Ujicoba di Berbagai Negara di Dunia</a>
                                <span>by CoffeeStylish.com</span>
                                <p>Apa pembuat kopi yang bagus? Mesin pembuat kopi rumahan yang baik harus memiliki bagian yang dapat dilepas untuk pembersihan total, cepat, dan tanpa penumpukan jamur.</p>
                                <center>
                                    <a href="https://coffeestylish.com/best-drip-coffee-makers/" target="_blank" class="btn">Read More</a>
                                </center>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- TESTIMONIALS SECTION -->
    <section class="review" id="review">
        <h1 class="heading"><span>Testimo</span>nials</h1>
        <div class="box-container">
            <div class="container">
                <div class="row">
                    <div class="col-md-4">
                        <div class="box">
                            <img src="assets/images/quote-img.png" alt="" class="quote">
                            <p>
                                Lorem ipsum dolor sit amet, consectetur adipiscing elit,
                                sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.
                            </p>
                            <img src="assets/images/pic-1.png" alt="" class="user">
                            <h3>Jane Doe</h3>
                            <div class="stars">
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star-half-alt"></i>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="box">
                            <img src="assets/images/quote-img.png" alt="" class="quote">
                            <p>
                                Lorem ipsum dolor sit amet, consectetur adipiscing elit,
                                sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.
                            </p>
                            <img src="assets/images/pic-2.png" alt="" class="user">
                            <h3>John Doe</h3>
                            <div class="stars">
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star-half-alt"></i>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="box">
                            <img src="assets/images/quote-img.png" alt="" class="quote">
                            <p>
                                Lorem ipsum dolor sit amet, consectetur adipiscing elit,
                                sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.
                            </p>
                            <img src="assets/images/pic-3.png" alt="" class="user">
                            <h3>Jane Doe</h3>
                            <div class="stars">
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star-half-alt"></i>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- CONTACT US SECTION -->
    <section class="contact" id="contact">
        <h1 class="heading"><span>Contact</span> Us</h1>
        <div class="row">
            <div id="map" class="map pull-left"></div>
            <form name="contact" method="POST" action="https://formspree.io/f/xayzavgb">
                <h3> Get in touch with us!</h3>
                <div class="inputBox">
                    <span class="fas fa-envelope"></span>
                    <input type="email" name="email" placeholder="Email Address">
                </div>
                <div class="inputBox">
                    <textarea name="message" placeholder="Enter your message..."></textarea>
                </div>
                <button type="submit" class="btn">Contact Now</button>
            </form>
        </div>
    </section>

    <!-- FOOTER SECTION -->
    <section class="footer">
        <div class="footer-container">
            <div class="logo">
                <img src="assets/images/rumah_seduh_logo.png" class="img"><br />
                <i class="fas fa-envelope"></i>
                <p>rumahseduh@gmail.com</p><br />
                <i class="fas fa-phone"></i>
                <p>+63 917-134-1422</p><br />
                <i class="fab fa-facebook-messenger"></i>
                <p>@rumah_seduh</p><br />
            </div>
            <div class="support">
                <h2>Support</h2>
                <br />
                <a href="#">Contact Us</a>
                <a href="#">Customer Service</a>
                <a href="#">Chatbot Inquiry</a>
                <a href="#">Submit a Ticket</a>
            </div>
            <div class="company">
                <h2>Company</h2>
                <br />
                <a href="#">About Us</a>
                <a href="#">Affiliates</a>
                <a href="#">Resources</a>
                <a href="#">Partnership</a>
                <a href="#">Suppliers</a>
            </div>
            <div class="newsletters">
                <h2>Newsletters</h2>
                <br />
                <p>Subscribe to our newsletter for news and updates!</p>
                <div class="input-wrapper">
                    <input type="email" class="newsletter" placeholder="Your email address">
                    <i id="paper-plane-icon" class="fas fa-paper-plane"></i>
                </div>
            </div>
            <div class="credit">
                <hr /><br />
                <h2>Kedai Kopi Rumah_Seduh © 2023 | All Rights Reserved.</h2>
                <h2>Designed by <span>People Indonesian</span> | Author Ganteng</h2>
            </div>
        </div>
    </section>

    <!-- CHAT BAR BLOCK -->
    <div class="chat-bar-collapsible">
        <button id="chat-button" type="button" class="collapsible">Chat with us! &nbsp;
            <i id="chat-icon" style="color: #fff;" class="fas fa-comments"></i>
        </button>
        <div class="content">
            <div class="full-chat-block">
                <!-- Message Container -->
                <div class="outer-container">
                    <div class="chat-container">
                        <!-- Messages -->
                        <div id="chatbox">
                            <h5 id="chat-timestamp"></h5>
                            <p id="botStarterMessage" class="botText"><span>Loading...</span></p>
                        </div>
                        <!-- User input box -->
                        <div class="chat-bar-input-block">
                            <div id="userInput">
                                <input id="textInput" class="input-box" type="text" name="msg" placeholder="Tap 'Enter' to send a message">
                                <p></p>
                            </div>
                            <div class="chat-bar-icons">
                                <i id="chat-icon" style="color: #333;" class="fa fa-fw fa-paper-plane" onclick="sendButton()"></i>
                            </div>
                        </div>
                        <div id="chat-bar-bottom">
                            <p></p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- JS File Link -->
    <script src="assets/js/responses.js"></script>
    <script src="assets/js/convo.js"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>

    <script>
        // CODE FOR THE FORMSPREE
        window.onbeforeunload = () => {
            for (const form of document.getElementsByTagName('form')) {
                form.reset();
            }
        }

        // CODE FOR THE GOOGLE MAPS API
        function initMap() {
            var map = new google.maps.Map(document.getElementById('map'), {
                center: {
                    lat: 14.99367271992383,
                    lng: 120.17629231186626
                },
                zoom: 9
            });

            var marker = new google.maps.Marker({
                position: {
                    lat: 14.99367271992383,
                    lng: 120.17629231186626
                },
                map: map,
                title: 'Your Location'
            });
        }

        // CODE FOR THE SHOW MORE & SHOW LESS BUTTON IN MENU
        $(document).ready(function() {
            $(".row-to-hide").hide();
            $("#showHideBtn").text("SHOW MORE");
            $("#showHideBtn").click(function() {
                $(".row-to-hide").toggle();
                if ($(".row-to-hide").is(":visible")) {
                    $(this).text("SHOW LESS");
                } else {
                    $(this).text("SHOW MORE");
                }
            });
        });

        // CODE FOR THE SHOW MORE & SHOW LESS BUTTON IN GALLERY
        $(document).ready(function() {
            $(".pic-to-hide").hide();
            $("#showBtn").text("SHOW MORE");
            $("#showBtn").click(function() {
                $(".pic-to-hide").toggle();
                if ($(".pic-to-hide").is(":visible")) {
                    $(this).text("SHOW LESS");
                } else {
                    $(this).text("SHOW MORE");
                }
            });
        });

        // CODE FOR THE REDIRECT CART
        function redirectCart() {
            // Check if the user is logged in
            if (!"<?php echo isset($_SESSION["username"]) ? $_SESSION["username"] : '' ?>") {
                // Redirect the user to the login page
                alert("You are not logged in. Please log into your account and try again.");
                window.location.href = "users/login.php";
            }
        }
    </script>
</body>

</html>