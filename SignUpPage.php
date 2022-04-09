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
    <title>Sign Up</title>
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
        <div class="sCon1" id="sCon1">
            <div class="sCon_content">
                <form class="signUp" method="post">
                    <div class="row">
                        <div class="signUp_field">
                            <input type="text" class="signUp_input" placeholder="Firstname" id="name1" name="firstname" value="">
                        </div>
                        <div class="signUp_field">
                            <input type="text" class="signUp_input" placeholder="Lastname" id="lastname1" name="lastname" value="">
                        </div>
                    </div>
                    <div class="nl">
                        <label for="name" id="nameMessage1" class="message"></label>
                        <label for="lastname" id="lastnameMessage1" class="message"></label>
                    </div>
                    <div class="signUp_field">
                        <input type="text" class="signUp_input" placeholder="Username" id="username1" name="username" value="">
                    </div>

                    <?php if (isset($_GET['u-msg'])) { ?>
                        <label style="color: rgb(255, 0, 0, 0.8);"><?php echo $_GET['u-msg']; ?></label>
                    <?php } ?>
                    
                    <label for="username" id="usernameMessage1" class="message"></label>
                    <div class="signUp_field">
                        <input type="text" class="signUp_input" placeholder="Email address" id="email1" name="email" value="">
                    </div>

                    <?php if (isset($_GET['e-msg'])) { ?>
                        <label style="color: rgb(255, 0, 0, 0.8);"><?php echo $_GET['e-msg']; ?></label>
                    <?php } ?>

                    <label for="email" id="emailMessage1" class="message"></label>
                    <div class="signUp_field">
                        <input type="password" class="signUp_input" placeholder="Password" id="password1" name="password" value="">
                    </div>
                    
                    <label for="password" id="passwordMessage1" class="message"></label>
                    <div class="signUp_field">
                        <input type="date" class="signUp_input" id="date1" name="date" value="">
                    </div>
                    <label for="date" id="dateMessage1" class="message"></label>
                    <div class="signUp_field">
                        <div class="genderSelection">
                            <label for="M gender">Male</label>
                            <input id="M gender" type="radio" value="Male" name="Gender">
                        </div>
                        <div class="genderSelection">
                            <label for="F gender">Female</label>
                            <input id="F gender" type="radio" name="Gender" value="Female">
                        </div>
                    </div>
                    <button type="submit" onclick="myFunction()" class="button signUp_submit" id="signUpBtn" name="register_btn">
                    <span class="button_text">Create Account</span>
                    <i class="button_icon fas fa-chevron-right"></i>
                    </button>
                </form>
                <span class="logInTxt">Already have an account?<a href="SignInPage.php">Log in</a></span>
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