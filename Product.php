<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="Style.css">
    <link rel='stylesheet' href='https://use.fontawesome.com/releases/v5.2.0/css/all.css'>
    <link rel='stylesheet' href='https://use.fontawesome.com/releases/v5.2.0/css/fontawesome.css'>
    <title>Products</title>
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

    <main class="product">
        <div class="rectangle">
            <div class="rectangle1">
                <div class="slideshow-container">

                    <div class="mySlides">
                        <img src="./Img/Demo1.jpg">
                    </div>

                    <div class="mySlides">
                        <img src="./Img/Demo2.jpg">
                    </div>

                    <div class="mySlides">
                        <img src="./Img/Demo3.jpg">
                    </div>

                    <div class="mySlides">
                        <img src="./Img/Demo4.jpg">
                    </div>

                    <a class="prev" onclick="plusSlides(-1)">&#10094;</a>
                    <a class="next" onclick="plusSlides(1)">&#10095;</a>
                </div>

                <div class="dots">
                    <span class="dot" onclick="currentSlide(1)"></span>
                    <span class="dot" onclick="currentSlide(2)"></span>
                    <span class="dot" onclick="currentSlide(3)"></span>
                    <span class="dot" onclick="currentSlide(4)"></span>
                </div>
            </div>
            <div class="productContent">
                <h1 class="pCTitle">Headphones</h1>
                <p>High-performance wireless noise cancelling headphones
                Compatible with iOS and Android devices.<br>
                Pure adaptive noise canceling (pure ANC) actively blocks external noise
                Real-time Audio calibration preserves a Premium listening experience
                Up to 22 hours of battery life enables full-featured all-day wireless playback
                </p>
                <h1 class="price">€18.73</h1>
                <button class="cartBtn">Add to Cart</button>
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
    <script src="Main.js">
    </script>
</body>

</html>