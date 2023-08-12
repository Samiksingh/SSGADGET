<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.15.4/css/all.css"
        integrity="sha384-DyZ88mC6Up2uqS4h/KRgHuoeGwBcD4Ng9SiP4dIRy0EXTlnuz47vAwmeGwVChigm" crossorigin="anonymous">
    
    <title>SS Gadgets | Home</title>

    <style>
        /* Reset */
* {
	margin: 0;
	padding: 0;
	box-sizing: border-box;
}

body {
	font-family: Arial, Helvetica, sans-serif;
}

a {
	text-decoration: none;
	color: #fff;
}

p {
	margin: 20px 0;
	line-height: 25px;
}

/* Navbar */
#navbar {
	display: flex;
	justify-content: space-between;
	align-items: center;
	background-color: #f54642;
	color: #333;
	position: sticky;
	top: 0;
	z-index: 1;
	padding: 30px;
	height: 50px;
}

#navbar .logo {
	margin-left: 125px;
}

#navbar ul {
	list-style: none;
	display: flex;
	align-items: center;
	margin-right: 100px;
}

#navbar ul li a {
	color: #333;
	padding: 12px;
	margin: 0 5px;
}

#navbar ul li a:hover,
#navbar ul li a.current {
	background-color: #89c2f0;
	border-radius: 10px;
	color: #fff;
}

/* Showcase */
#showcase {
	display: flex;
	height: 80vh;
	align-items: center;
	background-color: #d1e2e9;
}

.showcase-text {
	display: flex;
	flex-direction: column;
	text-align: center;
	flex-basis: 40%;
	padding: 10px 20px;
	margin-bottom: 40px;
	background-color: #d1e2e9;
}

.showcase-text .shop-now-btn {
	display: inline-block;
	color: #fff;
	background: #fc7c7c;
	padding: 13px 20px;
	margin: 15px 0;
	cursor: pointer;
	width: 40%;
	align-self: center;
}

.showcase-img {
	background: url("/storage/img/showcase.png") no-repeat center center/cover;
	flex-basis: 60%;
	height: 80vh;
}

/* Ad */
#ad {
	background: #f4f4f4;
}

#ad .ad-container {
	width: 1400px;
	margin: auto;
	display: flex;
	justify-content: space-between;
}

#ad .card {
	display: flex;
	align-items: center;
	margin: 30px;
}

#ad .card .card-text {
	padding: 39px;
	margin-left: -30px;
	border-radius: 0 30px 30px 0;
}

/* About Info */
#about-info {
	background: #f4f4f4;
	color: #333;
	padding: 30px 0;
}

#about-info .container {
	display: flex;
}

#about-info .info {
	flex-basis: 50%;
	text-align: justify;
}

#about-info .about-img {
	flex-basis: 50%;
	margin-top: 30px;
}

#about-info .about-img img {
	display: block;
	margin: -30px auto 0 auto;
	width: 70%;
	border-radius: 30%;
}

/* Testimonials */
#testimonials .testimonials-container {
	display: flex;
	justify-content: space-between;
}

.testimonial {
	position: relative;
	padding: 50px;
	background-color: #fff;
	box-shadow: 0 8px 24px rgba(0, 0, 0, 0.1);
	transition: all 300ms ease-in-out;
	text-align: center;
	border-radius: 15px;
	width: 450px;
}

.testimonial:hover {
	box-shadow: 0 8px 24px rgba(0, 0, 0, 0.2);
	transform: translateY(-16px);
}

.testimonial span {
	position: absolute;
	top: 2%;
	left: 50%;
	font-size: 192px;
	font-family: sans-serif;
	color: #ff7c9c;
	line-height: 1;
	transform: translate(-50%, 0);
}

.testimonial p {
	margin: 32px 0 16px 0;
}

.testimonial .img-cover {
	border-radius: 50%;
	width: 128px;
	height: 128px;
	overflow: hidden;
	margin: 0 auto;
}

.testimonial .img-cover img {
	height: 100%;
	object-fit: cover;
}

.testimonial h4 {
	margin-top: 16px;
}

/* Featured Products */
#featured-products,
#main-products {
	padding: 70px 0;
}

#featured-products .featured-container,
#main-products .main-container {
	width: 1400px;
	display: flex;
	margin: auto;
	align-items: center;
	justify-content: center;
	flex-wrap: wrap;
}

#featured-products .card,
#main-products .card {
	display: flex;
	flex-direction: column;
	align-items: center;
	margin: 35px 15px;
	box-shadow: 0 8px 24px rgba(0, 0, 0, 0.3);
	background: #f54642;
	transition: 0.3s ease;
	cursor: pointer;
}

#featured-products .card:hover,
#main-products .card:hover {
	transform: scale(1.01);
	box-shadow: 0 8px 24px rgba(0, 0, 0, 0.5);
}

#featured-products .card .card-image img,
#main-products .card .card-image img {
	width: 225px;
	height: 200px;
}

#featured-products .card .card-text,
#main-products .card .card-text {
	padding: 20px 0px;
	line-height: 0.8;
	color: #333;
}

#featured-products .card .card-text h2,
#main-products .card .card-text h2 {
	font-size: 22px;
	text-align: left;
	padding: 0 5px;
}

#featured-products .card .card-text p,
#main-products .card .card-text p {
	font-size: 25px;
	text-align: center;
}

.order-btn {
	width: 70%;
	padding: 16px 30px;
	margin-top: -12px;
	margin-bottom: 10px;
	background: #89c2f0;
	color: #333;
	border: none;
	cursor: pointer;
	border-radius: 30px;
	font-weight: bolder;
}

.order-btn:hover {
	background: #65afec;
	color: #fff;
}

/* Icons */
#icons {
	background: linear-gradient(to right, #baffb4, #89c2f0);
	color: #333;
}

#icons .container {
	display: flex;
	padding: 30px;
	justify-content: space-between;
	text-align: center;
}

#icons .box h3 {
	font-size: 20px;
	margin-bottom: 15px;
}

#icons .box i {
	margin: 0 5px;
}

#icons .box img {
	width: 150px;
	margin: 0 10px;
}

/* Footer */
#footer {
	background: #222;
	color: #f4f4f4;
}

#footer .footer-container {
	display: flex;
	width: 1400px;
	margin: auto;
	padding: 25px 15px;
	justify-content: space-between;
}

#footer .extras,
#footer .information,
#footer .account,
#footer .contact {
	display: flex;
	flex-direction: column;
}

#footer .extras a,
#footer .information a,
#footer .account a,
#footer .contact div {
	margin: 8px 0;
}

#footer .extras h3,
#footer .information h3,
#footer .account h3,
#footer .contact h3 {
	margin-bottom: 10px;
}

#footer .extras a:hover,
#footer .information a:hover,
#footer .account a:hover,
#footer .contact div:hover {
	color: #c2bcbc;
}

    </style> 

</head>

<body>
    <!-- Navbar -->
    <nav id="navbar">
        <div class="logo">
            <h1 style="color: #fff;">SS Gadgets</h1>
        </div>
        <ul>
            <li><a class="current" href="./index.html">Home</a></li>
            <li><a href="#">Contact</a></li>
            <li><a href="#">Cart</a></li>
        </ul>
    </nav>

    <!-- Showcase -->
    <header id="showcase">
        <div class="showcase-text">
            <h3 style="color: #b888ff; font-size: 25px"><span style="color: #fbb419;">20%</span> SALE OFF</h3>
            <h1 style="font-size: 40px;">Electronic Vibes Collection</h1>
            <a href="#featured-products" class="shop-now-btn">SHOP NOW</a>
        </div>
        <div class="showcase-img">
        </div>
    </header>

    <!-- Ad -->
    <section id="ad">
        <div class="ad-container">
            <div class="card">
                <div class="card-image">
                    <img src="{{asset("/storage/img/advert1.jpg")}}" alt="Ad 1" style="width: 250px;
                    border-radius: 30px;">
                </div>
                <div class="card-text" style="	background: #f5c5d1;">
                    <h2>Best Electronic Gadgets</h2>
                    <p>World's Best Brands</p>
                </div>
            </div>
            <div class="card">
                <div class="card-image">
                    <img src="{{asset("/storage/img/advert2.jpg")}}" alt="Ad 2" style="width: 250px; height: 248px;
                    border-radius: 30px;
                    ">
                </div>
                <div class="card-text" style="	background: #a1d1df">
                    <h2>Best Selling Gadgets</h2>
                    <p>World's Best Brands</p>
                </div>
            </div>
            <div class="card">
                <div class="card-image">
                    <img src="{{asset("/storage/img/advert3.jpg")}}" alt="Ad 3" style="width: 250px;
                    height: 248px; border-radius: 30px; margin-right: 25px">
                </div>
                <div class="card-text" style="	background: #e5bc00;">
                    <h2>Best Brand Gadgets</h2>
                    <p>World's Best Brands</p>
                </div>
            </div>
        </div>
    </section>

    <!-- About Info -->
    <section id="about-info">
        <div class="container">
            <div class="about-img">
                <img src="{{asset("/storage/img/showcase.png")}}" alt="Hotel">
            </div>
            <div class="info">
                <h1>About SS Gadgets</h1>
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Veniam, incidunt cupiditate laudantium
                    reiciendis quo magni, commodi facere culpa temporibus eius, adipisci eos voluptatum minus dolor
                    quidem optio assumenda fugit est. Aspernatur pariatur totam quisquam numquam voluptate eos similique
                    vel quasi odio eaque suscipit facilis, explicabo ea, iure veritatis necessitatibus sunt, accusamus
                    accusantium excepturi voluptates recusandae! Ab modi molestias mollitia expedita..</p>
            </div>
        </div>
    </section>

    <!-- Testimonials -->
    <section id="testimonials">
        <div class="testimonials-container">
            <div class="testimonial">
                <span>&ldquo;</span>
                <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Dicta aliquam quasi numquam molestiae
                    distinctio delectus.</p>
                <div class="img-cover">
                    <img src="{{asset("/storage/img/test1.jpg")}}" alt="">
                </div>
                <h4>Ariana Grande</h4>
            </div>
            <div class="testimonial">
                <span>&ldquo;</span>
                <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Dicta aliquam quasi numquam molestiae
                    distinctio delectus.</p>
                <div class="img-cover">
                    <img src="{{asset("/storage/img/test2.jpg")}}" alt="">
                </div>
                <h4>Will Smith</h4>
            </div>
            <div class="testimonial">
                <span>&ldquo;</span>
                <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Dicta aliquam quasi numquam molestiae
                    distinctio delectus.</p>
                <div class="img-cover">
                    <img src="{{asset("/storage/img/test3.jpg")}}" alt="">
                </div>
                <h4>Steve Harrington</h4>
            </div>
        </div>
    </section>

    <!-- Featured Products -->
    <section id="featured-products">
        <h1 style="text-align: center; font-size: 50px; margin-bottom: 40px;">Featured Products</h1>
        <div style="width: 342px; margin: 0 auto;">
            <a href="#main-products" style="color: #333;">
                <i class="fas fa-arrow-down"></i> Click Here For More Products
            </a>
        </div>
        <div class="featured-container">
            <div class="card">
                <div class="card-image">
                    <img src="{{asset("/storage/img/product1.jpg")}}" alt="Product 1">
                </div>
                <div class="card-text">
                    <h2>Laptop</h2>
                    <p>$ 999</p>
                </div>
                <button type="submit" class="order-btn" onclick="order()">Order now</button>
            </div>
            <div class="card">
                <div class="card-image">
                    <img src="{{asset("/storage/img/product2.jpg")}}" alt="Product 2">
                </div>
                <div class="card-text">
                    <h2>Iphone 13 Pro</h2>
                    <p>$ 1100</p>
                </div>
                <button type="submit" class="order-btn" onclick="order()">Order now</button>
            </div>
            <div class="card">
                <div class="card-image">
                    <img src="{{asset("/storage/img/product3.jpg")}}" alt="Product 3">
                </div>
                <div class="card-text">
                    <h2>Apple Watch</h2>
                    <p>$ 700</p>
                </div>
                <button type="submit" class="order-btn" onclick="order()">Order now</button>
            </div>
            <div class="card">
                <div class="card-image">
                    <img src="{{asset("/storage/img/product4.jpg")}}" alt="Product 4">
                </div>
                <div class="card-text">
                    <h2>Camera</h2>
                    <p>$ 600</p>
                </div>
                <button type="submit" class="order-btn" onclick="order()">Order now</button>
            </div>
    </section>

    <!-- Main Products -->
    <section id="main-products">
        <h1 style="text-align: center; font-size: 50px; margin-bottom: 40px;">Products</h1>
        <div class="main-container">
            <div class="card">
                <div class="card-image">
                    <img src="{{asset("/storage/img/product10.jpg")}}" alt="Product 1">
                </div>
                <div class="card-text">
                    <h2>Headphone</h2>
                    <p>$ 259</p>
                </div>
                <button type="submit" class="order-btn" onclick="order()">Order now</button>
            </div>
            <div class="card">
                <div class="card-image">
                    <img src="{{asset("/storage/img/product3.jpg")}}" alt="Product 2">
                </div>
                <div class="card-text">
                    <h2>Apple Watch</h2>
                    <p>$ 700</p>
                </div>
                <button type="submit" class="order-btn" onclick="order()">Order now</button>
            </div>
            <div class="card">
                <div class="card-image">
                    <img src="{{asset("/storage/img/product4.jpg")}}" alt="Product 3">
                </div>
                <div class="card-text">
                    <h2>Camera</h2>
                    <p>$ 600</p>
                </div>
                <button type="submit" class="order-btn" onclick="order()">Order now</button>
            </div>
            <div class="card">
                <div class="card-image">
                    <img src="{{asset("/storage/img/product2.jpg")}}" alt="Product 4">
                </div>
                <div class="card-text">
                    <h2>Iphone 13 Pro</h2>
                    <p>$ 1100</p>
                </div>
                <button type="submit" class="order-btn" onclick="order()">Order now</button>
            </div>
            <div class="card">
                <div class="card-image">
                    <img src="{{asset("/storage/img/product1.jpg")}}" alt="Product 5">
                </div>
                <div class="card-text">
                    <h2>Laptop</h2>
                    <p>$ 999</p>
                </div>
                <button type="submit" class="order-btn" onclick="order()">Order now</button>
            </div>
            <div class="card">
                <div class="card-image">
                    <img src="{{asset("/storage/img/product5.jpg")}}" alt="Product 5">
                </div>
                <div class="card-text">
                    <h2>Earpod</h2>
                    <p>$ 299</p>
                </div>
                <button type="submit" class="order-btn" onclick="order()">Order now</button>
            </div>
            <div class="card">
                <div class="card-image">
                    <img src="{{asset("/storage/img/product6.jpg")}}" alt="Product 6">
                </div>
                <div class="card-text">
                    <h2>PS5</h2>
                    <p>$ 760</p>
                </div>
                <button type="submit" class="order-btn" onclick="order()">Order now</button>
            </div>
            <div class="card">
                <div class="card-image">
                    <img src="{{asset("/storage/img/product7.jpg")}}" alt="Product 7">
                </div>
                <div class="card-text">
                    <h2>Iron</h2>
                    <p>$ 99</p>
                </div>
                <button type="submit" class="order-btn" onclick="order()">Order now</button>
            </div>
            <div class="card">
                <div class="card-image">
                    <img src="{{asset("/storage/img/product8.jpg")}}" alt="Product 8">
                </div>
                <div class="card-text">
                    <h2>Hair Dryer</h2>
                    <p>$ 49</p>
                </div>
                <button type="submit" class="order-btn" onclick="order()">Order now</button>
            </div>
            <div class="card">
                <div class="card-image">
                    <img src="{{asset("/storage/img/product9.jpg")}}" alt="Product 9">
                </div>
                <div class="card-text">
                    <h2>Vacuum Cleaner</h2>
                    <p>$ 120</p>
                </div>
                <button type="submit" class="order-btn" onclick="order()">Order now</button>
            </div>
    </section>

    <!-- Icons -->
    <section id="icons">
        <div class="container">
            <div class="box">
                <h3>Payment Method</h3>
                <i class="far fa-money-bill-alt fa-3x"></i>
                <i class="fab fa-cc-paypal fa-3x"></i>
                <i class="fab fa-cc-visa fa-3x"></i>
                <i class="fab fa-cc-mastercard fa-3x"></i>
            </div>
            <div class="box">
                <h3>Follow Us</h3>
                <i class="fab fa-facebook fa-3x"></i>
                <i class="fab fa-twitter fa-3x"></i>
                <i class="fab fa-youtube fa-3x"></i>
            </div>
            <div class="box">
                <h3>Download Our App</h3>
                <img src="{{asset("/storage/img/app-store.png")}}" alt="Download our app">
                <img src="{{asset("/storage/img/app-store.png")}}" alt="Download our app">
            </div>
        </div>
    </section>

    <!-- Footer -->
    <footer id="footer">
        <div class="footer-container">
            <div class="extras">
                <h3>EXTRAS</h3>
                <a href="#">Brands</a>
                <a href="#">Gift Certificates</a>
                <a href="#">Affiliate</a>
                <a href="#">Specials</a>
                <a href="#">Site Map</a>
            </div>
            <div class="information">
                <h3>INFORMATION</h3>
                <a href="#">About Us</a>
                <a href="#">Privacy Policy</a>
                <a href="#">Terms & Conditions</a>
                <a href="#">Contact Us</a>
                <a href="#">Site Map</a>
            </div>
            <div class="account">
                <h3>MY ACCOUNT</h3>
                <a href="#">My Account</a>
                <a href="#">Order History</a>
                <a href="#">Wish List</a>
                <a href="#">Newsletter</a>
                <a href="#">Returns</a>
            </div>
            <div class="contact">
                <h3>CONTACT US</h3>
                <div>
                    <i class="fas fa-map-marker-alt"></i> Sitapaila, Kathmandu, Nepal
                </div>
                <div>
                    <i class="far fa-envelope"></i>
                    ssgadgets@gmail.com
                </div>
                <div>
                    <i class="fas fa-phone"></i>
                    +977 - 9856784930
                </div>
            </div>
        </div>
    </footer>
</body>

</html>