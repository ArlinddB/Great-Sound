<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="Style.css">
    <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css"
        integrity="sha384-AYmEC3Yw5cVb3ZcuHtOA93w35dYTsvhLPVnYs9eStHfGJvOvKxVfELGroGkvsg+p" crossorigin="anonymous" />
    <title>Home Page</title>
</head>
<body>
    <nav>
        <div class="logo">
            <a href="Index.php"><img src="./Img/Logo.png" alt="Logo"></a>
        </div>
        <div class="openMenu"><i class="fa fa-bars"></i></div>
        <ul class="mainMenu">
            <li><a href="Index.php">Home</a></li>
            <li><a href="Product.php">Product</a></li>
            <li><a href="ContactUs.php">Contact Us</a></li>
            <li><a href="AboutUs.php">About Us</a></li>
            <a href="SignInPage.php"><button class="signInBtn">Sign In</button></a>
            <div class="closeMenu"><i class="fa fa-times"></i></div>
        </ul>
    </nav>

    <main>
        <div class="container">
            <div class="image">
                <img src="./Img/Headphones.jpg" alt="Headphones">
            </div>
            <div class="block">
                <h1>The heaphones of the future</h1>
                <p>Apple's W1 chip and industry-leading Bluetooth technology keep you connected farther with fewer drop-outs
                With fast Fuel, a 10-minute charge gives 3 hours of play when battery is low...
                </p>
                <a href="Product.php"><button class="readMoreBtn">Read More</button></a>
            </div>
        </div>
        <div class="container1">
            <div class="overlay">
                <div class="overlay-section">
                    <h2>Loud & Clear</h2>
                    <h1>Best quality in market</h1>
                    <p>Take calls, control your music, and activate Siri with the multifunction on-ear controls and microphone
                    </p>
                </div>
            </div>
        </div>
        <div class="features-text">
            <h1>Features that our Headphones deliver</h1>
            <p>From development to the delivery of performance we don't
                compromis at any level to make your products the best.
            </p>
        </div>

        <div class="features">
            <div class="features-box">
                <div class="icon-title">
                    <i class="fas fa-headphones fa-3x"></i>
                    <h2>iListen</h2>
                </div>

                <p>Sleek, streamlined design that’s durable and affordable to go everywhere you do
                The sound and design you’ve come to love from Beats, with premium playback with 
                fine-tuned acoustics that maximize clarity, breadth, and balance.
                </p>
            </div>
            <div class="features-box">
                <div class="icon-title">
                    <i class="fas fa-headphones fa-3x"></i>
                    <h2>iListen</h2>
                </div>

                <p>Using the best Bluetooth feature, iListen headphones let you stream songs from tablets, 
                    smartphones, and computers. Also, our Bluetooth feature allows you to switch between voice 
                    and music, as well as volume-control and music play-back.
                </p>
            </div>
            <div class="features-box">
                <div class="icon-title">
                    <i class="fas fa-headphones fa-3x"></i>
                    <h2>iListen</h2>
                </div>

                <p>Lhe range of our headphones varies from earplugs to full size headphones.
                    You can also choose the size, type and technology of your headphones.
                    We offer headphones with powerful deep bass (like Monster Beats) and visceral dynamic range.
                </p>
            </div>
        </div>
    </main>

    <footer class="footer">
        <div class="footer-left">
            <div class="logo">
                <img src="./Img/Logo.png" alt="">
            </div>
            <ul class="footer-links">
                <li><a href="Index.php">Home</a></li>
                <li><a href="Product.php">Product</a></li>
                <li><a href="ContactUs.php">Contact Us</a></li>
                <li><a href="AboutUs.php" class="last-link">About Us</a></li>
            </ul>
            <p class="footer-company-name">Company © 2022 | All rights reserved</p>
        </div>

        <div class="footer-center">
            <div>
                <i class="fas fa-map-pin"></i>
                <p><span>Prishtine, Kosove</span></p>
            </div>
            <div>
                <i class="fas fa-phone"></i>
                <p><span>+38344xxx-xxx</span></p>
            </div>
            <div>
                <i class="fas fa-envelope"></i>
                <p><a href="mailto:support@company.com">support@company.com</a></p>
            </div>
        </div>

        <div class="footer-right">

            <p class="footer-company-about">
                <span>About the company</span>
                Great Sound is a Professional Headphones Platform. Here we will provide you only interesting content,
                which you will like very much.
            </p>
            <div class="footer-icons">
                <a href="#"><i class="fab fa-facebook icons fa-2x"></i></a>
                <a href="#"><i class="fab fa-instagram icons fa-2x"></i></a>
                <a href="#"><i class="fab fa-twitter icons fa-2x"></i></a>
                <a href="#"><i class="fab fa-youtube icons fa-2x"></i></a>
            </div>
        </div>
    </footer>
    <script src="Main.js"></script>
</body>
</html>