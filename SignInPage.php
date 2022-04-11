<?php 

include('./authentication/auth.php');

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="Style.css">
    <link rel='stylesheet' href='https://use.fontawesome.com/releases/v5.2.0/css/all.css'>
    <link rel='stylesheet' href='https://use.fontawesome.com/releases/v5.2.0/css/fontawesome.css'>
    <title>Sign In</title>
</head>

<body>
    <nav>
        <div class="logo">
            <a href="Index.html"><img src="./Img/Logo.png" alt="Logo"></a>
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

    <div class="sInsUpC">
        <div class="sCon" id="sCon">
            <div class="sCon_content">
                <form class="login" method="post">
                    <div class="login_field">
                        <i class="login_icon fas fa-user"></i>
                        <input type="text" class="login_input" placeholder="Email" id="email" name="email">
                        <label for="email" id="emailMessage" class="message"></label>
                        
                    </div>

                    <div class="login_field">
                        <i class="login_icon fas fa-lock"></i>
                        <input type="password" class="login_input" placeholder="Password" id="password" name="password">
                        <label for="password" id="passwordMessage" class="message"></label>
                    </div>

                    <?php if (isset($_GET['msg1'])) { ?>
                            <p style="color: rgb(255, 0, 0, 0.8);"><?php echo $_GET['msg1']; ?></p>
                    <?php } ?>

                    <button type="submit" onclick="myFunction()" class="button login_submit" id="signInBtn" name="login_btn">
                    <span class="button_text">Log In Now</span>
                    <i class="button_icon fas fa-chevron-right"></i>
                </button>
                </form>
                <span class="createAccount">Still don't have an account?
                    <a href="SignUpPage.php">Sign up</a>
                </span>
            </div>
        </div>
    </div>

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