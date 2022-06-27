<?php 
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $email = filter_var($_POST['email'], FILTER_SANITIZE_EMAIL);
    $password = filter_var($_POST['password'], FILTER_SANITIZE_STRING);

    if ($email === 'hello@there.com' && $password === 'General Kenobi'){
        echo "true";
    }else{
        echo "false";
    }

}else{

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" href="https://owlraven.com/images/logos/feathers-icon.png" type="image/png" sizes="16x16">
    <title>Fake Login Page - Owl Raven Studios</title>

    <!--Font Awesome Icons-->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/fontawesome.min.css" integrity="sha512-xX2rYBFJSj86W54Fyv1de80DWBq7zYLn2z0I9bIhQG+rxIF6XVJUpdGnsNHWRa6AvP89vtFupEPDP8eZAtu9qA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/solid.min.css" integrity="sha512-qzgHTQ60z8RJitD5a28/c47in6WlHGuyRvMusdnuWWBB6fZ0DWG/KyfchGSBlLVeqAz+1LzNq+gGZkCSHnSd3g==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    
    <!--jQuery Library-->
    <script src="https://code.jquery.com/jquery-3.6.0.min.js" integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>

    <!--Animate Library for CSS effects-->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css"/>

    <style>
        /**-------------------------
        * General
        * --------------------------
        */
            * {
                margin: 0;
                padding: 0;
                box-sizing: border-box;
            }

            html {
                font-size: 62.5%;
            }

            body {
                font-family: "Poppins", sans-serif;
                line-height: 1.6;
                color: #1a1a1a;
                font-size: 1.6rem;
                overflow-x: hidden;
            }

            .heading-primary {
                font-size: 5rem;
            }

        /**-------------------------
        * Main Content
        * --------------------------
        */        
        main {
            display: flex;
            flex-direction: column;
            flex-wrap: nowrap;
            align-content: center;
            justify-content: center;
            align-items: center;
            width: 100vw;
            height: 100vh;
        }

        .login-container {
            display: flex;
            flex-direction: column;
            flex-wrap: nowrap;
            align-content: center;
            justify-content: center;
            align-items: center;
            width: 100vw;
            height: 100vh;
        }

        .login-form {
            max-width: 45rem;
            width: 100%;
            display: flex;
            flex-direction: column;
            gap: 2rem;
        }

        .text-mute {
            color: #aaa;
        }

        .accent-color {
            color: #2196f3;
        }

        .input-text {
            font-family: inherit;
            font-size: 1.8rem;
            padding: 3rem 5rem 1rem 2rem;
            border: none;
            border-radius: 2rem;
            background: #eee;
            width: 100%;
        }

        .input-text:focus {
            outline-color: #2196f3;
        }

        .btn {
            padding: 2rem 3rem;
            border: none;
            background: #2196f3;
            color: #fff;
            border-radius: 1rem;
            cursor: pointer;
            font-family: inherit;
            font-weight: 500;
            font-size: inherit;
        }

        .btn-login {
            align-self: flex-end;
            width: 100%;
            margin-top: 2rem;
            box-shadow: 0 5px 5px #00000020;
        }

        .btn-login:active {
            box-shadow: none;
        }

        .btn-login:hover {
            background: #2180f9;
        }

        .inp {
            position: relative;
        }

        .label {
            pointer-events: none;
            position: absolute;
            top: 2rem;
            left: 2rem;
            color: #00000070;
            font-weight: 500;
            font-size: 1.8rem;
            transition: all 0.2s;
            transform-origin: left;
        }

        .input-text:not(:placeholder-shown)+.label,
        .input-text:focus+.label {
            top: 0.7rem;
            transform: scale(0.75);
        }

        .input-text:focus+.label {
            color: #2196f3;
        }

        .input-icon {
            position: absolute;
            top: 2rem;
            right: 2rem;
            font-size: 2rem;
            color: #00000070;
        }

        .input-icon-password {
            cursor: pointer;
        }

        .message-disclaimer{
            color: #4caf50;
        }

        .input-wrong{
            color: #e74c3c;
        }

        .line {
            width: 100%;
            height: 1px;
            background: #eee;
            width: 100%;
            height: 1px;
            background: #eee;
            margin: 3rem 0;
            margin-bottom: 0;
            max-width: 45rem;
        }

        @media only screen and (max-width: 700px) {
            html {
                font-size: 54.5%;
            }
        }

        @media only screen and (max-width: 600px) {
            .login-container {
                padding: 5rem;
            }
        }

        @media only screen and (max-width: 400px) {
            html {
                font-size: 48.5%;
            }

            .input-text:not(:placeholder-shown)+.label,
            .input-text:focus+.label {
                top: 0.6rem;
                transform: scale(0.75);
            }

            .label {
                font-size: 1.9rem;
            }
        }

        .hint-container{
            margin-bottom: 3rem;
            transition: all 0.3s;
            cursor: pointer;
            position: relative;
            display: inline-flex;
            align-items: center;
            flex-direction: row;
            flex-wrap: nowrap;
        }
        
        .pop-up-hint{
            position: relative;
            display: inline-flex;
            flex-direction: row;
            flex-wrap: nowrap;
            align-content: center;
            justify-content: center;
            align-items: center;
            margin-left: 1rem;
            transition: 0.3s;
            display: none;
            opacity: 0;
            margin-top: 0.5rem;
        }

        .active-hint{
            display: inline-flex;
            opacity: 1;
        }

        .pop-up-hint > .arrow{
            width: 0; 
            height: 0; 
            border-top: 10px solid transparent;
            border-bottom: 10px solid transparent; 
            border-right:10px solid #2296f3
        }
        
        .hint-content{
            display: flex;
            flex-direction: column;
            padding: 1rem;
            font-size: 1.50rem;
            background: #2196f3;
            border-radius: 5px;
            color: #fff;
        }
    

    </style>


</head>

<body>
    <main>
        <div class="login-container animate__animated animate__fadeIn">
            <h1 class="heading-primary"> Log in<span class="accent-color">.</span></h1>
            <p class="text-mute">Enter your credentials to access this 100% real log in.</p>  
            <span class="line"></span>
            <div class="hint-container ">
                <small class="hint">hint!  <i class="fa-solid fa-circle-question"></i></small>
                <div  class="pop-up-hint">
                    <div class="arrow"></div>
                    <div class="hint-content">
                        <span><strong>User: </strong> hello@there.com</span>
                        <span><strong>Pass: </strong> General Kenobi</span>
                    </div>
                </div>
            </div>
 
            <form class="login-form">
                <label class="inp" id="emailWrap">
                    <input type="email" class="input-text" placeholder="&nbsp;" id="email">
                    <span class="label">Email</span>
                    <span class="input-icon input-icon-email color-sen"><i class="fa-solid fa-envelope"></i></span>
                </label>
                <label id="testilon2" class="inp">
                    <input type="password" class="input-text" placeholder="&nbsp;" id="password">
                    <span class="label">Password</span>
                    <span class="input-icon input-icon-password" data-password><i class="fa-solid fa-eye"></i></span>
                </label>
                <button type="button" class="btn btn-login">Login</button>
                <span class="message-disclaimer color-sen">&nbsp;</span>  
            </form>
        </div>
    </main>




<!---------------------------------------------------------
* Animate Style helper func | Ref: https://animate.style/
* ---------------------------------------------------------> 
<script>
    const animateCSS = (element, animation, prefix = 'animate__') =>
  // We create a Promise and return it
  new Promise((resolve, reject) => {
    const animationName = `${prefix}${animation}`;
    const node = document.querySelector(element);

    node.classList.add(`${prefix}animated`, animationName);

    // When the animation ends, we clean the classes and resolve the Promise
    function handleAnimationEnd(event) {
      event.stopPropagation();
      node.classList.remove(`${prefix}animated`, animationName);
      resolve('Animation ended');
    }

    node.addEventListener('animationend', handleAnimationEnd, {once: true});
  });
</script>

<!--------------------------
* Custom JS
* --------------------------> 

<script>

   $(document).ready(() => {

    /*
    * Toggles password icon and input type. 
    */
    const eyeIcon = $(".input-icon-password");
    const userPassword = document.getElementById("password"); //Did not use jQuery to access the "type" property below.

    eyeIcon.on('click', () => {
        const icon = eyeIcon.children(0);
        icon.toggleClass("fa-eye-slash");
        if (userPassword.type === "password") {
            userPassword.type = "text";
        } else if (userPassword.type === "text") {
            userPassword.type = "password";
        }
    });


    /*
    * Checks for email field. 
    */
    const checkEmail = (email) => {
        let EmailRegex = /^([a-zA-Z0-9_.+-])+\@(([a-zA-Z0-9-])+\.)+([a-zA-Z0-9]{2,4})+$/;
        return EmailRegex.test(email);
    }

    /*
    * Checks fields for login. 
    */

    const loginButton = $('.btn-login'); 

    loginButton.on('click', () => {
        let userEmail = $('#email').val();
        let inputPass = $('#password').val();

        if(!checkEmail(userEmail)){
            $('.color-sen').addClass('input-wrong');
            animateCSS('#emailWrap', 'bounce');
            $('.message-disclaimer').html("Please enter a valid email.");
        }else{
            $('.color-sen').removeClass('input-wrong');
            $.ajax({
                data: { email: userEmail, password: inputPass},
                type: 'POST',
                success: function(result) {
                    if(result == 'true'){
                        $('.message-disclaimer').html("Login Successful. This is the way.");
                    }else{
                        $('.message-disclaimer').addClass('input-wrong');
                        $('.message-disclaimer').html("Incorrect Username/Password.");
                        animateCSS('.message-disclaimer', 'bounce');
                    }
                }
            });
        }
    });

    const hintContainer = $(".hint-container");
    const hint = $(".hint");
    hintContainer.hover(() => {
        animateCSS(".hint", 'pulse');
    })

    hint.click(() => {
        $(".pop-up-hint").toggleClass("active-hint");
        animateCSS(".pop-up-hint", 'backInRight');
    })

   
});
</script>



</body>


</html>

<?php } ?>