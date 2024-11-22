<html lang="en"><head>
	<title></title>

<style type="text/css">
	

	body{
	margin: 0;
	padding: 0;
	background-color: #f1aa0e;
	overflow-x:hidden;
	overflow-y:hidden;
    background: linear-gradient(90deg, #b5cfea, #698cb7);
}

/*waves****************************/


.box {
	position: fixed;
	top: 0;
	transform: rotate(80deg);
	left: 0;
}

.wave {
	position: fixed;
	top: 0;
	left: 0;
  opacity: .4;
  position: absolute;
  top: 3%;
  left: 10%;
  background: #0012ff;
  width: 1500px;
  height: 1300px;
  margin-left: -150px;
  margin-top: -250px;
  transform-origin: 50% 48%;
  border-radius: 43%;
  animation: drift 7000ms infinite linear;
}

.wave.-three {
  animation: drift 7500ms infinite linear;
	position: fixed;
	background-color: #001eff;
}

.wave.-two {
  animation: drift 3000ms infinite linear;
  opacity: .1;
  background: #004cff;
	position: fixed;
}

.box:after {
  content: '';
  display: block;
  left: 0;
  top: 0;
  width: 100%;
  height: 100%;
  z-index: 11;
  transform: translate3d(0, 0, 0);
}

@keyframes drift {
  from { transform: rotate(0deg); }
  from { transform: rotate(360deg); }
}

/*LOADING SPACE*/

.contain {
	animation-delay: 4s;
	z-index: 1000;
	position: fixed;
	top: 0;
	left: 0;
	bottom: 0;
	right: 0;
  display: -webkit-box;
  display: -ms-flexbox;
  display: flex;
  -ms-flex-flow: row nowrap;
  flex-flow: row nowrap;
  -webkit-box-pack: center;
  -ms-flex-pack: center;
  justify-content: center;
  -webkit-box-align: center;
  -ms-flex-align: center;
  align-items: center;

  background: #25a7d7;
  background: -webkit-linear-gradient(#25a7d7, #2962FF);
  background: linear-gradient(#25a7d7, #25a7d7);
}

.icon {
  width: 100px;
  height: 100px;
  margin: 0 5px;
}

/*Animation*/
.icon:nth-child(2) img {-webkit-animation-delay: 0.2s;animation-delay: 0.2s}
.icon:nth-child(3) img {-webkit-animation-delay: 0.3s;animation-delay: 0.3s}
.icon:nth-child(4) img {-webkit-animation-delay: 0.4s;animation-delay: 0.4s}

.icon img {
  -webkit-animation: anim 2s ease infinite;
  animation: anim 2s ease infinite;
  -webkit-transform: scale(0,0) rotateZ(180deg);
  transform: scale(0,0) rotateZ(180deg);
}

@-webkit-keyframes anim{
  0% {
    -webkit-transform: scale(0,0) rotateZ(-90deg);
    transform: scale(0,0) rotateZ(-90deg);opacity:0
  }
  30% {
    -webkit-transform: scale(1,1) rotateZ(0deg);
    transform: scale(1,1) rotateZ(0deg);opacity:1
  }
  50% {
    -webkit-transform: scale(1,1) rotateZ(0deg);
    transform: scale(1,1) rotateZ(0deg);opacity:1
  }
  80% {
    -webkit-transform: scale(0,0) rotateZ(90deg);
    transform: scale(0,0) rotateZ(90deg);opacity:0
  }
}

@keyframes anim{
  0% {
    -webkit-transform: scale(0,0) rotateZ(-90deg);
    transform: scale(0,0) rotateZ(-90deg);opacity:0
  }
  30% {
    -webkit-transform: scale(1,1) rotateZ(0deg);transform: scale(1,1) rotateZ(0deg);opacity:1
  }
  50% {
    -webkit-transform: scale(1,1) rotateZ(0deg);
    transform: scale(1,1) rotateZ(0deg);opacity:1
  }
  80% {
    -webkit-transform: scale(0,0) rotateZ(90deg);
    transform: scale(0,0) rotateZ(90deg);opacity:0
  }
}
</style>
</head>
<body>
	
<div class="box">
  <div class="wave -one"></div>
  <div class="wave -two"></div>
  <div class="wave -three"></div>
</div>





    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" href="image/ci.gif">
    <title>Sign In</title>
    
 <script src="js/jquery.js" type="text/javascript"></script>

  <script src="js/bootstrap.min.js" type="text/javascript"></script>
        <style>
        :root{
  --form-height:550px;
  --form-width: 900px;
  /*  Sea Green */
  --left-color: #2f39a6;
  /*  Light Blue  */
  --right-color: #0f096f;
}

body, html{
  width: 100%;
  height: 100%;
  margin: 0;
  font-family: 'Helvetica Neue', sans-serif;
  letter-spacing: 0.5px;
}

.container{
  width: var(--form-width);
  height: var(--form-height);
  position: relative;
  margin: auto;
  box-shadow: 2px 10px 40px rgba(22,20,19,0.4);
  border-radius: 10px;
  margin-top: 50px;
}
/* 
----------------------
      Overlay
----------------------
*/
.overlay{
  width: 100%; 
  height: 100%;
  position: absolute;
  z-index: 100;
  background-image: linear-gradient(to right, var(--left-color), var(--right-color));
  border-radius: 10px;
  color: white;
  clip: rect(0, 385px, var(--form-height), 0);
}

.open-sign-up{
    animation: slideleft 1s linear forwards;
}

.open-sign-in{
    animation: slideright 1s linear forwards;
}

.overlay .sign-in, .overlay .sign-up{
  /*  Width is 385px - padding  */
  --padding: 50px;
  width: calc(385px - var(--padding) * 2);
  height: 100%;
  display: flex;
  justify-content: center;
  
  flex-direction: column;
  align-items: center;
  padding: 0px var(--padding);
  text-align: center;
}

.overlay .sign-in{
  float: left;
}

.overlay-text-left-animation{
    animation: text-slide-in-left 1s linear;
}
.overlay-text-left-animation-out{
    animation: text-slide-out-left 1s linear;
}

.overlay .sign-up{
  float:right;
}

.overlay-text-right-animation{
    animation: text-slide-in-right 1s linear;
}

.overlay-text-right-animation-out{
    animation: text-slide-out-right 1s linear;
}


.overlay h1{
  margin: 0px 5px;
  font-size: 2.1rem;
}

.overlay p{
  margin: 20px 0px 30px;
  font-weight: 200;
}
/* 
------------------------
      Buttons
------------------------
*/
.switch-button, .control-button{
  cursor: pointer;
  display: block;
  margin-left: auto;
  margin-right: auto;
  width: 140px;
  height: 40px;
  font-size: 14px;
  text-transform: uppercase;
  background: none;
  border-radius: 20px;
  color: white;
}

.switch-button{
  border: 2px solid;
}

.control-button{
  border: none;
  margin-top: 15px;
}

.switch-button:focus, .control-button:focus{
  outline:none;
}

.control-button.up{
  background-color: var(--left-color);
}

.control-button.in{
  background-color: var(--right-color);
}

/* 
--------------------------
      Forms
--------------------------
*/
.form{
  width: 100%; 
  height: 100%;

  position: relative;
  border-radius: 10px;
}

.form .sign-in, .form .sign-up{
  --padding: 50px;
  position:absolute;
    /*  Width is 100% - 385px - padding  */
  width: calc(var(--form-width) - 385px - var(--padding) * 2);
  height: 100%;
  display: flex;
  background : #eee;
  justify-content: center;
  flex-direction: column;
  align-items: center;
  padding: 0px var(--padding);
  text-align: center;
}

/* Sign in is initially not displayed */
.form .sign-in{
  display: none;
}

.form .sign-in{
  left:0;
}

.form .sign-up{
  right: 0;
}

.form-right-slide-in{
  animation: form-slide-in-right 1s;
}

.form-right-slide-out{
  animation: form-slide-out-right 1s;
}

.form-left-slide-in{
  animation: form-slide-in-left 1s;
}

.form-left-slide-out{
  animation: form-slide-out-left 1s;
}

.form .sign-in h1{
  color: var(--right-color);
  margin: 0;
}

.form .sign-up h1{
  color: var(--left-color);
  margin: 0;
}

.social-media-buttons{
  display: flex;
  justify-content: center;
  width: 100%;
  margin: 15px;
}

.social-media-buttons .icon{
  width: 40px;
  height: 40px;
  border: 1px solid #dadada;
  border-radius: 100%;
  display: flex;
  justify-content: center;
  align-items: center;
  margin: 10px 7px;
}

.small{
  font-size: 13px;
  color: grey;
  font-weight: 200;
  margin: 5px;
}

.social-media-buttons .icon svg{
  width: 25px;
  height: 25px;
}

#sign-in-form input, #sign-up-form input{
  margin: 12px;
  font-size: 14px;
  padding: 15px;
  width: 260px;
  font-weight: 300;
  border: none;
  background-color: #e4e4e494;
  font-family: 'Helvetica Neue', sans-serif;
  letter-spacing: 1.5px;
  padding-left: 20px;
}

select{
  margin: 12px;
  font-size: 14px;
  padding: 15px;
  width: 295px;
  font-weight: 300;
  border: none;
  background-color: #e4e4e494;
  font-family: 'Helvetica Neue', sans-serif;
  letter-spacing: 1.5px;
  padding-left: 20px;
}

#sign-in-form input, select::placeholder{
  letter-spacing: 1px;
}

.forgot-password{
  font-size: 12px;
  display: inline-block;
  border-bottom: 2px solid #efebeb;
  padding-bottom: 3px;
}

.forgot-password:hover{
  cursor: pointer;
}

/* 
---------------------------
    Animation
---------------------------
*/
@keyframes slideright{
  0%{
    clip: rect(0, 385px, var(--form-height), 0);
  }
  30%{
        clip: rect(0, 480px, var(--form-height), 0);
  }
  /*  we want the width to be slightly larger here  */
  50%{
     clip: rect(0px, calc(var(--form-width) / 2 + 480px / 2), var(--form-height), calc(var(--form-width) / 2 - 480px / 2));
  }
  80%{
         clip: rect(0px, var(--form-width), var(--form-height), calc(var(--form-width) - 480px));
  }
  100%{
     clip: rect(0px, var(--form-width), var(--form-height), calc(var(--form-width) - 385px));
  }
}

@keyframes slideleft{
  100%{
    clip: rect(0, 385px, var(--form-height), 0);
  }
  70%{
        clip: rect(0, 480px, var(--form-height), 0);
  }
  /*  we want the width to be slightly larger here  */
  50%{
     clip: rect(0px, calc(var(--form-width) / 2 + 480px / 2), var(--form-height), calc(var(--form-width) / 2 - 480px / 2));
  }
  30%{
         clip: rect(0px, var(--form-width), var(--form-height), calc(var(--form-width) - 480px));
  }
  0%{
     clip: rect(0px, var(--form-width), var(--form-height), calc(var(--form-width) - 385px));
  }
}

@keyframes text-slide-in-left{
  0% {
    padding-left: 20px;
  }
  100% {
    padding-left: 50px;
  }
}

@keyframes text-slide-in-right{
  0% {
    padding-right: 20px;
  }
  100% {
    padding-right: 50px;
  }
}

@keyframes text-slide-out-left{
  0% {
    padding-left: 50px;
  }
  100% {
    padding-left: 20px;
  }
}

@keyframes text-slide-out-right{
  0% {
    padding-right: 50px;
  }
  100% {
    padding-right: 20px;
  }
}

@keyframes form-slide-in-right{
  0%{
    padding-right: 100px;
  }
  100%{
    padding-right: 50px;
  }
}

@keyframes form-slide-in-left{
  0%{
    padding-left: 100px;
  }
  100%{
    padding-left: 50px;
  }
}

@keyframes form-slide-out-right{
  0%{
    padding-right: 50px;
  }
  100%{
    padding-right: 80px;
  }
}

@keyframes form-slide-out-left{
  0%{
    padding-left: 50px;
  }
  100%{
    padding-left: 80px;
  }
}

    </style>
    <style>
	.animate-charcter
{
   text-transform: uppercase;
  background-image: linear-gradient(
    to right,
    #231557 0%,
    #44107a 29%,
    #ff1361 67%,
    #fff800 100%
  );
  background-size: auto auto;
  background-clip: border-box;
  background-size: 200% auto;
  color: #fff;
  background-clip: text;
  /* text-fill-color: transparent; */
  -webkit-text-fill-color:transparent ;
  -webkit-background-clip: text;
  -webkit-text-fill-color: transparent;
  animation: textclip 2s linear infinite;
  display: inline-block;
      font-size: 30px;
}

@keyframes textclip {
  to {
    background-position: 200% center;
  }
}
	</style>


<div class="d-sm-flex align-items-center justify-content-between mb-4" style="margin-left: 450px;
    margin-top: 50px;
    margin-bottom: -30px;">
    <br/>
    <br/>
            <h1 class="h3 mb-0 text-gray-800 animate-charcter" style="margin-top: -50px; z-index: 1; font-weight: 600; top:5px">
             Welcome to  Online Class Examination</h1>
    <br/>
                   </div>
                   <br/>
<form role="form" method="post" action="adm.php?q=index.php">
  <h3>Admin Login</h3>

  <label for="username">Username</label>
  <input type="text" name="uname" maxlength="20" placeholder="Admin Email" class="form-control">

  <label for="password">Password</label>
  <input type="password" name="password" maxlength="15" placeholder="Password" class="form-control">

  <input type="submit" name="login" value="Login" class="btn btn-primary" style="border-radius:0%">
  
</form>
<style type="text/css">
  

  body{
  margin: 0;
  padding: 0;
  background-color: #f1aa0e;
  overflow-x:hidden;
  overflow-y:hidden;
 background: linear-gradient(90deg, #b5cfea, #698cb7);
}

/*waves****************************/


.box {
  position: fixed;
  top: 0;
  transform: rotate(80deg);
  left: 0;
}

.wave {
  position: fixed;
  top: 0;
  left: 0;
  opacity: .4;
  position: absolute;
  top: 3%;
  left: 10%;
  background: #0012ff;
  width: 1500px;
  height: 1300px;
  margin-left: -150px;
  margin-top: -250px;
  transform-origin: 50% 48%;
  border-radius: 43%;
  animation: drift 7000ms infinite linear;
}

.wave.-three {
  animation: drift 7500ms infinite linear;
  position: fixed;
  background-color: #001eff;
}

.wave.-two {
  animation: drift 3000ms infinite linear;
  opacity: .1;
  background: #004cff;
  position: fixed;
}

.box:after {
  content: '';
  display: block;
  left: 0;
  top: 0;
  width: 100%;
  height: 100%;
  z-index: 11;
  transform: translate3d(0, 0, 0);
}

@keyframes drift {
  from { transform: rotate(0deg); }
  from { transform: rotate(360deg); }
}

/*LOADING SPACE*/

.contain {
  animation-delay: 4s;
  z-index: 1000;
  position: fixed;
  top: 0;
  left: 0;
  bottom: 0;
  right: 0;
  display: -webkit-box;
  display: -ms-flexbox;
  display: flex;
  -ms-flex-flow: row nowrap;
  flex-flow: row nowrap;
  -webkit-box-pack: center;
  -ms-flex-pack: center;
  justify-content: center;
  -webkit-box-align: center;
  -ms-flex-align: center;
  align-items: center;

  background: #25a7d7;
  background: -webkit-linear-gradient(#25a7d7, #2962FF);
  background: linear-gradient(#25a7d7, #25a7d7);
}

.icon {
  width: 100px;
  height: 100px;
  margin: 0 5px;
}

/*Animation*/
.icon:nth-child(2) img {-webkit-animation-delay: 0.2s;animation-delay: 0.2s}
.icon:nth-child(3) img {-webkit-animation-delay: 0.3s;animation-delay: 0.3s}
.icon:nth-child(4) img {-webkit-animation-delay: 0.4s;animation-delay: 0.4s}

.icon img {
  -webkit-animation: anim 2s ease infinite;
  animation: anim 2s ease infinite;
  -webkit-transform: scale(0,0) rotateZ(180deg);
  transform: scale(0,0) rotateZ(180deg);
}

@-webkit-keyframes anim{
  0% {
    -webkit-transform: scale(0,0) rotateZ(-90deg);
    transform: scale(0,0) rotateZ(-90deg);opacity:0
  }
  30% {
    -webkit-transform: scale(1,1) rotateZ(0deg);
    transform: scale(1,1) rotateZ(0deg);opacity:1
  }
  50% {
    -webkit-transform: scale(1,1) rotateZ(0deg);
    transform: scale(1,1) rotateZ(0deg);opacity:1
  }
  80% {
    -webkit-transform: scale(0,0) rotateZ(90deg);
    transform: scale(0,0) rotateZ(90deg);opacity:0
  }
}

@keyframes anim{
  0% {
    -webkit-transform: scale(0,0) rotateZ(-90deg);
    transform: scale(0,0) rotateZ(-90deg);opacity:0
  }
  30% {
    -webkit-transform: scale(1,1) rotateZ(0deg);transform: scale(1,1) rotateZ(0deg);opacity:1
  }
  50% {
    -webkit-transform: scale(1,1) rotateZ(0deg);
    transform: scale(1,1) rotateZ(0deg);opacity:1
  }
  80% {
    -webkit-transform: scale(0,0) rotateZ(90deg);
    transform: scale(0,0) rotateZ(90deg);opacity:0
  }
}
</style>
<style>

*,
*:before,
*:after {
  padding: 0;
  margin: 0;
  box-sizing: border-box;
}
form {
  height: 520px;
  width: 400px;
  background: linear-gradient(45deg, #2f39a6, #a2a1b5);
  position: absolute;
  transform: translate(-50%, -50%);
  top: 60%;
  left: 50%;
  border-radius: 10px;
  backdrop-filter: blur(30px);
  -webkit-backdrop-filter: blur(30px);
  border: 2px solid rgba(255, 255, 255, 0.1);
  box-shadow: 0 0 40px rgba(8, 7, 16, 0.6);
  padding: 50px 35px;
}
form * {
  font-family: "Poppins", sans-serif;
  color: #000000;
  letter-spacing: 0.5px;
  outline: none;
  border: none;
}

@media (prefers-color-scheme: dark) {
  form * {
    color: #ffffff;
  }
}

form h3 {
  font-size: 32px;
  font-weight: 500;
  line-height: 42px;
  text-align: center;
}

label {
  display: block;
  margin-top: 30px;
  font-size: 16px;
  font-weight: 500;
}
input {
  display: block;
  height: 50px;
  width: 100%;
  background-color: rgba(255, 255, 255, 0.07);
  border-radius: 3px;
  padding: 0 10px;
  margin-top: 8px;
  font-size: 14px;
  font-weight: 300;
}

::placeholder {
  color: #1b1b1b;
}

@media (prefers-color-scheme: dark) {
  ::placeholder {
    color: #e5e5e5;
  }
}

button {
  margin-top: 50px;
  width: 100%;
  background-color: #ffffff;
  color: #080710;
  padding: 15px 0;
  font-size: 18px;
  font-weight: 600;
  border-radius: 5px;
  cursor: pointer;
}
.social {
  margin-top: 30px;
  display: flex;
}
.social div {
  background: red;
  width: 150px;
  border-radius: 3px;
  padding: 5px 10px 10px 5px;
  background-color: rgba(255, 255, 255, 0.27);
  color: #150f03;
  text-align: center;
}

@media (prefers-color-scheme: dark) {
  .social div {
    color: #eaf0fb;
  }

   
}

.social div:hover {
  background-color: rgba(255, 255, 255, 0.47);
}
.social .fb {
  margin-left: 25px;
}
.social i {
  margin-right: 4px;
}

    </style>
    
    

      <script>
        var overlay = document.getElementById("overlay");

// Buttons to 'switch' the page
var openSignUpButton = document.getElementById("slide-left-button");
var openSignInButton = document.getElementById("slide-right-button");

// The sidebars
var leftText = document.getElementById("sign-in");
var rightText = document.getElementById("sign-up");

// The forms
var accountForm = document.getElementById("sign-in-info")
var signinForm = document.getElementById("sign-up-info");

// Open the Sign Up page
openSignUp = () =>{
  // Remove classes so that animations can restart on the next 'switch'
  leftText.classList.remove("overlay-text-left-animation-out");
  overlay.classList.remove("open-sign-in");
  rightText.classList.remove("overlay-text-right-animation");
  // Add classes for animations
  accountForm.className += " form-left-slide-out"
  rightText.className += " overlay-text-right-animation-out";
  overlay.className += " open-sign-up";
  leftText.className += " overlay-text-left-animation";
  // hide the sign up form once it is out of view
  setTimeout(function(){
    accountForm.classList.remove("form-left-slide-in");
    accountForm.style.display = "none";
    accountForm.classList.remove("form-left-slide-out");
  }, 700);
  // display the sign in form once the overlay begins moving right
  setTimeout(function(){
    signinForm.style.display = "flex";
    signinForm.classList += " form-right-slide-in";
  }, 200);
}

// Open the Sign In page
openSignIn = () =>{
  // Remove classes so that animations can restart on the next 'switch'
  leftText.classList.remove("overlay-text-left-animation");
  overlay.classList.remove("open-sign-up");
  rightText.classList.remove("overlay-text-right-animation-out");
  // Add classes for animations
  signinForm.classList += " form-right-slide-out";
  leftText.className += " overlay-text-left-animation-out";
  overlay.className += " open-sign-in";
  rightText.className += " overlay-text-right-animation";
  // hide the sign in form once it is out of view
  setTimeout(function(){
    signinForm.classList.remove("form-right-slide-in")
    signinForm.style.display = "none";
    signinForm.classList.remove("form-right-slide-out")
  },700);
  // display the sign up form once the overlay begins moving left
  setTimeout(function(){
    accountForm.style.display = "flex";
    accountForm.classList += " form-left-slide-in";
  },200);
}

// When a 'switch' button is pressed, switch page
openSignUpButton.addEventListener("click", openSignUp, false);
openSignInButton.addEventListener("click", openSignIn, false);
      </script>  

</body></html>