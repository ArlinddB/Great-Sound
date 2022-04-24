<!-- <?php
    if (isset($_POST['submit'])) {
        $fname = $_POST['fname'];
        $lname = $_POST['lname'];
        $mailFrom = $_POST['email'];
        $subject = $_POST['subject'];
        $message = $_POST['message'];
        
        if($fname == '' && $lname == '' && $mailFrom == '' && $subject == '' && $message == ''){
            header("Location: ContactUs.php?c-msg1=Message could not be sent!");
            exit();
        }else{

            $to = "ab52106@ubt-uni.net";
            // $subject = "Contact form";
            
            $header = "From:".$fname." ".$lname." \r\n";
            $header .= "Cc:".$mailFrom." \r\n";
            $header .= "MIME-Version: 1.0\r\n";
            $header .= "Content-type: text/html\r\n";
            
            $retval = mail ($to,$subject,$message,$header);
            
            if( $retval){
                //echo "<script>alert('Message was sent successfully')</script>";
                header("Location: ContactUs.php?c-msg=<script>alert('Message was sent successfully')</script>");
                exit();
            }else {
                header("Location: ContactUs.php?c-msg1=Message could not be sent!");
                exit();
            }
        }
    }
?>  -->


<!DOCTYPE html>
<html lang="en">
<!-- <?php if (isset($_GET['c-msg'])) { ?>
                        <p><?php echo $_GET['c-msg']; ?></p>
                    <?php } ?> -->
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="Style.css">
    <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css"
        integrity="sha384-AYmEC3Yw5cVb3ZcuHtOA93w35dYTsvhLPVnYs9eStHfGJvOvKxVfELGroGkvsg+p" crossorigin="anonymous" />
    <title>Contact Us</title>
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

    <div class="contact-container">
        <div class="contact-form">
            <form method="post">
                <div class="form-field">
                    <input type="text" class="contact-form-input" placeholder="First name" id="form-firstName" name="fname" required="">
                    <input type="text" class="contact-form-input" placeholder="Last name" id="from-lastName" name="lname" required="">
                </div>
                <div class="message-display">
                    <label for="firstName" id="contact-form-fName" class="message"></label>
                    <label for="lastName" id="contact-form-lName" class="message"></label>  
                </div>
                <div class="form-field">
                    <input type="text" class="contact-form-input" placeholder="Subject" name="subject" required="">
                </div>
                <div class="form-field">
                    <input type="email" class="contact-form-input" placeholder="Your email" id="form-email" name="email" required="">
                    <!-- <input type="tel" class="contact-form-input" placeholder="Your phone number" id="form-number" name="phone"> -->
                </div>
                <div class="message-display">   
                    <label for="email" id="form-emailMessage" class="message"></label>
                    <!-- <label for="number" id="contact-form-number" class="message"></label> -->
                </div>
                <div class ="form-field">
                    <textarea id="form-message" class="contact-form-input" placeholder="What can we do about you?" name="message" required=""></textarea>
                </div>
                <div class="message-display">
                    <label for="message" id="contact-form-message" class="message"></label>
                </div>

                <!-- <?php if (isset($_GET['c-msg1'])) { ?>
                        <p style="color: rgb(255, 0, 0, 0.8); margin-left: 15px; font-size: 18px;"><?php echo $_GET['c-msg1']; ?></p>
                <?php } ?> -->

               <div class="form-field">
                    <input type="submit" value="Send it" id="SendItBtn" name="submit">
                </div>
            </form>
        </div>
        <div class="map-container">
            <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d46940.21003858416!2d21.123707857758422!3d42.66637476673249!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x13549ee605110927%3A0x9365bfdf385eb95a!2sPristina!5e0!3m2!1sen!2s!4v1643797676727!5m2!1sen!2s" class="map" allowfullscreen="" loading="lazy"></iframe>
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