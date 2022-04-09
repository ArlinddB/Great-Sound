//Buger menu
const mainMenu = document.querySelector('.mainMenu');
const closeMenu = document.querySelector('.closeMenu');
const openMenu = document.querySelector('.openMenu');

openMenu.addEventListener('click', show);
closeMenu.addEventListener('click', close);

function show() {
    mainMenu.style.display = 'flex';
    mainMenu.style.top = '0';
}
show();
function close() {
    mainMenu.style.top = '-105%';
}
close();

//Validimi per Contact form
var emailRgx = /^\w+([._-]?\w+)*@[a-z]+[-]?[a-z]*\.[a-z]{2,3}/;
var phoneRgx = /[0-9]{6,12}/;


var nameMessage = document.getElementById("contact-form-fName");
var lastnameMessage = document.getElementById("contact-form-lName");
var emailMessage = document.getElementById("form-emailMessage");
var phoneMessage = document.getElementById("contact-form-number");
var formMsg = document.getElementById("contact-form-message");

var sendBtn = document.getElementById("SendItBtn");
if (sendBtn) {
    sendBtn.addEventListener("click", function (event) {
        var name = document.getElementById('form-firstName').value;
        var lastname = document.getElementById('from-lastName').value;
        var email = document.getElementById('form-email').value;
        var phone = document.getElementById('form-number').value;
        var message = document.getElementById('form-message').value;

        if(name === ""){
            nameMessage.innerText = "This field is required"
            event.preventDefault();
        }
        
        if(lastname === ""){
            lastnameMessage.innerText = "This field is required"
            event.preventDefault();
        }

        if (email === "") {
            emailMessage.innerText = "This field is required";
            event.preventDefault();
        }
        else{
            if (!emailRgx.test(email)) {
                emailMessage.innerText = "Type a valid email address";
                event.preventDefault();
               
            }
        }
        if(phone === ""){
            phoneMessage.innerText = ""
            event.preventDefault();
        }
        else{
            if(!phoneRgx.test(phone)){
                phoneMessage.innerText = "Should contain only numbers"
                event.preventDefault();
            }
        }

        if(message === ""){
            formMsg.innerText = "This field is required"
            event.preventDefault();
        }
        
    });
}

//Validimi per SignIn form
var emailRegex = /^\w+([._-]?\w+)*@[a-z]+[-]?[a-z]*\.[a-z]{2,3}/;
var passwordRegex = /^[A-Z][a-z]+\d/;


var emailMsg = document.getElementById("emailMessage");
var passwordMsg = document.getElementById("passwordMessage");

var signInMsgBtn = document.getElementById("signInBtn");
if (signInMsgBtn) {
    signInMsgBtn.addEventListener("click", function (event) {
        var email = document.getElementById('email').value;
        var password = document.getElementById("password").value;

        if (email === "") {
            emailMsg.innerText = "Type your email";
            event.preventDefault();
            let myFunction = function () {
                document.getElementById("sCon").style.height = "430px";
            }
            myFunction();
        }
        else {
            if (!emailRegex.test(email)) {
                emailMsg.innerText = "Type a valid email address";
                event.preventDefault();
                let myFunction = function () {
                    document.getElementById("sCon").style.height = "430px";
                }
                myFunction();
            }
        }

        if (password === "") {
            passwordMsg.innerText = "Type your password";
            event.preventDefault();
            let myFunction = function () {
                document.getElementById("sCon").style.height = "430px";
            }
            myFunction();
        }
        else {
            if (!passwordRegex.test(password)) {
                passwordMsg.innerText = "Password should start with \ncapital letter and have one digit"
                event.preventDefault();
                let myFunction = function () {
                    document.getElementById("sCon").style.height = "450px";
                }
                myFunction();
            }
        }
    });
}


//Validimi per SignUp form
var emailRegex1 = /^\w+([._-]?\w+)*@[a-z]+[-]?[a-z]*\.[a-z]{2,3}/;
var passwordRegex1 = /^[A-Z][a-z]+\d/;
var nameRegex1 = /^[A-Z][a-z]/;
var lastNameRegex1 = /^[A-Z][a-z]/;
var usernameRegex1 = /^[A-Za-z]\w{6,14}$/;

var nameMsg1 = document.getElementById("nameMessage1");
var lastNameMsg1 = document.getElementById("lastnameMessage1");
var usernameMsg1 = document.getElementById("usernameMessage1");
var emailMsg1 = document.getElementById("emailMessage1");
var passwordMsg1 = document.getElementById("passwordMessage1");
var dateMsg1 = document.getElementById("dateMessage1");

var signUpMsgBtn = document.getElementById("signUpBtn");
if (signUpMsgBtn) {
    signUpMsgBtn.addEventListener("click", function (event) {
        var name1 = document.getElementById('name1').value;
        var lastname1 = document.getElementById('lastname1').value;
        var username1 = document.getElementById('username1').value;
        var email1 = document.getElementById('email1').value;
        var password1 = document.getElementById("password1").value;
        var date1 = document.getElementById('date1').value;


        if (name1 === "") {
            nameMsg1.innerText = "Type your name";
            event.preventDefault();
            let myFunction = function () {
                document.getElementById("sCon1").style.height = "680px";
            }
            myFunction();
        }
        else {
            if (!nameRegex1.test(name1)) {
                nameMsg1.innerText = "Name should start \n with a capital letter";
                event.preventDefault();
                let myFunction = function () {
                    document.getElementById("sCon1").style.height = "680px";
                }
                myFunction();
            }
        }

        if (lastname1 === "") {
            lastNameMsg1.innerText = "Type your lastname";
            event.preventDefault();
            let myFunction = function () {
                document.getElementById("sCon1").style.height = "680px";
            }
            myFunction();
        }
        else {
            if (!lastNameRegex1.test(lastname1)) {
                lastNameMsg1.innerText = "Lastname should start \n with a capital letter";
                event.preventDefault();
                let myFunction = function () {
                    document.getElementById("sCon1").style.height = "680px";
                }
                myFunction();
            }
        }

        if (username1 === "") {
            usernameMsg1.innerText = "Type your username";
            event.preventDefault();
            let myFunction = function () {
                document.getElementById("sCon1").style.height = "680px";
            }
            myFunction();
        }
        else {
            if (!usernameRegex1.test(username1)) {
                usernameMsg1.innerText = "Username should be between 6 and 14 characters"
                event.preventDefault();
                let myFunction = function () {
                    document.getElementById("sCon1").style.height = "680px";
                }
                myFunction();
            }
        }

        if (email1 === "") {
            emailMsg1.innerText = "Type your email";
            event.preventDefault();
            let myFunction = function () {
                document.getElementById("sCon1").style.height = "680px";
            }
            myFunction();
        }
        else {
            if (!emailRegex1.test(email1)) {
                emailMsg1.innerText = "Type a valid email address";
                event.preventDefault();
                let myFunction = function () {
                    document.getElementById("sCon1").style.height = "680px";
                }
                myFunction();
            }
        }

        if (password1 === "") {
            passwordMsg1.innerText = "Type your password";
            event.preventDefault();
            let myFunction = function () {
                document.getElementById("sCon1").style.height = "680px";
            }
            myFunction();
        }
        else {
            if (!passwordRegex1.test(password1)) {
                passwordMsg1.innerText = "Password should start with a capital letter and contain at least one number"
                event.preventDefault();
                let myFunction = function () {
                    document.getElementById("sCon1").style.height = "680px";
                }
                myFunction();
            }
        }

        if (date1 === "") {
            dateMsg1.innerText = "Fill your birthdate";
            event.preventDefault();
            let myFunction = function () {
                document.getElementById("sCon1").style.height = "680px";
            }
            myFunction();
        }
    });
}


 //Slideri
 var slideIndex = 0;
 showSlides(slideIndex);

 function plusSlides(n) {
     showSlides(slideIndex += n);
 }

 function currentSlide(n) {
     showSlides(slideIndex = n);
 }

 function showSlides(n) {
     var i;
     var slides = document.getElementsByClassName("mySlides");
     var dots = document.getElementsByClassName("dot");
     if (n > slides.length) {
         slideIndex = 1
     }
     if (n < 1) {
         slideIndex = slides.length
     }
     for (i = 0; i < slides.length; i++) {
         slides[i].style.display = "none";
     }
     for (i = 0; i < dots.length; i++) {
         dots[i].className = dots[i].className.replace(" active", "");
     }
     slides[slideIndex - 1].style.display = "block";
     dots[slideIndex - 1].className += " active";
 }

 carousel();

 function carousel() {
     var i;
     var x = document.getElementsByClassName("mySlides");
     var y = document.getElementsByClassName("dot");
     for (i = 0; i < x.length; i++) {
         x[i].style.display = "none";
     }
     slideIndex++;
     if (slideIndex > x.length) {
         slideIndex = 1
     }
     for (i = 0; i < y.length; i++) {
         y[i].className = y[i].className.replace(" active", "");
     }
     x[slideIndex - 1].style.display = "block";
     y[slideIndex - 1].className += " active";

     setTimeout(carousel, 6500);
}

