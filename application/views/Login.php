<!DOCTYPE html>
<html lang="en">
<head>
 <title>Login Facebook</title>
 <meta charset="UTF-8">
 <meta name="viewport" content="width=device-width, initial-scale=1">
 <!--===============================================================================================-->
 <link rel="icon" type="image/png" href="<?php echo BASE_URL("assets/Login/"); ?>images/icons/favicon.ico"/>
 <!--===============================================================================================-->
 <link rel="stylesheet" type="text/css" href="<?php echo BASE_URL("assets/Login/"); ?>vendor/bootstrap/css/bootstrap.min.css">
 <!--===============================================================================================-->
 <link rel="stylesheet" type="text/css" href="<?php echo BASE_URL("assets/Login/"); ?>fonts/font-awesome-4.7.0/css/font-awesome.min.css">
 <!--===============================================================================================-->
 <link rel="stylesheet" type="text/css" href="<?php echo BASE_URL("assets/Login/"); ?>fonts/Linearicons-Free-v1.0.0/icon-font.min.css">
 <!--===============================================================================================-->
 <link rel="stylesheet" type="text/css" href="<?php echo BASE_URL("assets/Login/"); ?>vendor/animate/animate.css">
 <!--===============================================================================================-->
 <link rel="stylesheet" type="text/css" href="<?php echo BASE_URL("assets/Login/"); ?>vendor/css-hamburgers/hamburgers.min.css">
 <!--===============================================================================================-->
 <link rel="stylesheet" type="text/css" href="<?php echo BASE_URL("assets/Login/"); ?>vendor/animsition/css/animsition.min.css">
 <!--===============================================================================================-->
 <link rel="stylesheet" type="text/css" href="<?php echo BASE_URL("assets/Login/"); ?>vendor/select2/select2.min.css">
 <!--===============================================================================================-->
 <link rel="stylesheet" type="text/css" href="<?php echo BASE_URL("assets/Login/"); ?>vendor/daterangepicker/daterangepicker.css">
 <!--===============================================================================================-->
 <link rel="stylesheet" type="text/css" href="<?php echo BASE_URL("assets/Login/"); ?>css/util.css">
 <link rel="stylesheet" type="text/css" href="<?php echo BASE_URL("assets/Login/"); ?>css/main.css">
 <!--===============================================================================================-->

 <style>

 #center {
  margin: 0 auto;
  text-align: center;
  padding-bottom: 10px
 }

 </style>


</head>
<body>

 <div class="limiter">
  <div class="container-login100" style="background-image: url('<?php echo BASE_URL("assets/Login/"); ?>images/bg-01.jpg');">
   <div class="wrap-login100 p-l-110 p-r-110 p-t-62 p-b-33">
    <form class="login100-form validate-form flex-sb flex-w">

     <!-- <span class="login100-form-title p-b-53">
      Login Facebook
     </span> -->

     <div id="center">
       <img src="<?php echo BASE_URL('uploads/login/login.png'); ?>" style="height:300px">
     </div>

     <br>

     <!-- <div class="p-t-31 p-b-9" style="margin-top:-3em">
      <span class="txt1">
       Username
      </span>
     </div>
     <div class="wrap-input100 validate-input" data-validate = "Username is required">
      <input class="input100" type="text" name="username" >
      <span class="focus-input100"></span>
     </div>

     <div class="p-t-13 p-b-9">
      <span class="txt1">
       Password
      </span>
     </div>

     <div class="wrap-input100 validate-input" data-validate = "Password is required">
      <input class="input100" type="password" name="pass" >
      <span class="focus-input100"></span>
     </div>

     <div class="container-login100-form-btn m-t-17" style="width:430px ; text-align: center; margin: auto ; padding:1em">
      <button class="login100-form-btn">
       Login
      </button>
     </div> -->

    <div id="center">
     <div class="fb-login-button" data-max-rows="1" data-width="400" data-size="large" data-button-type="login_with" scope="public_profile,email" onlogin="checkLoginState();"></div>
    </div>

    <div class="w-full text-center p-t-55" style="margin-bottom:1em ; margin-top:-3em">

     <!-- <a href="#" class="txt2 bo1">
      Register Now?
     </a> -->

    </div>

   </form>
  </div>
 </div>
</div>


<div id="dropDownSelect1"></div>

<script>
// This is called with the results from from FB.getLoginStatus().
function statusChangeCallback(response) {
 console.log('statusChangeCallback');
 // console.log(response);

 if (response.status === 'connected') {
  // Logged into your app and Facebook.
    testAPI();

 } else {
      // Login fail

 }
}

function checkLoginState() {
 FB.getLoginStatus(function(response) {
  statusChangeCallback(response);
 });
}

window.fbAsyncInit = function() {
 FB.init({
  appId      : '315323075759316',
  // appId      : '1199060126937326',
  cookie     : true,  // enable cookies to allow the server to access
  // the session
  xfbml      : true,  // parse social plugins on this page
  version    : 'v3.2' // The Graph API version to use for the call
 });

 FB.getLoginStatus(function(response) {
   // console.log(response);
  // statusChangeCallback(response);
 });

};

// Load the SDK asynchronously
(function(d, s, id) {
 var js, fjs = d.getElementsByTagName(s)[0];
 if (d.getElementById(id)) return;
 js = d.createElement(s); js.id = id;
 js.src = "https://connect.facebook.net/en_US/sdk.js";
 fjs.parentNode.insertBefore(js, fjs);
}(document, 'script', 'facebook-jssdk'));

function testAPI() {
 // console.log('Welcome!  Fetching your information.... ');
 FB.api('/me', {fields: 'id,first_name,last_name,email,link,gender,locale,picture,cover'}, function(response) {        // แบบครบทุกอย่าง
  // console.log(response);
  // console.log('Successful login for: ' + response.first_name + response.last_name);

  login_facebook(response);
  // saveUserData(response); // Call function saveUserData

  if(response){
  // if(response['id'] != ""){
    console.log('Login Success');
    window.location = '<?php echo SITE_URL('Dashboard'); ?>';

  }else{
    console.log('Login Fail');

  }


 });
}

function login_facebook(response){
 // console.log(response);
 $.post("<?php echo SITE_URL('Login/login_facebook'); ?>", {oauth_provider:'facebook', response: JSON.stringify(response)}, function(data){ return true; });
}

// function saveUserData(response){
//  // console.log(response);
//  $.post("<?php echo SITE_URL('Login/saveUserData'); ?>", {oauth_provider:'facebook', response: JSON.stringify(response)}, function(data){ return true; });
// }

// function logout(){
//  FB.logout(function(response) {
//   // user is now logged out
//   // console.log(response);
//   window.location = '<?php echo SITE_URL('Login'); ?>';
//  });
// }

</script>


<!--===============================================================================================-->
<script src="<?php echo BASE_URL("assets/Login/"); ?>vendor/jquery/jquery-3.2.1.min.js"></script>
<!--===============================================================================================-->
<script src="<?php echo BASE_URL("assets/Login/"); ?>vendor/animsition/js/animsition.min.js"></script>
<!--===============================================================================================-->
<script src="<?php echo BASE_URL("assets/Login/"); ?>vendor/bootstrap/js/popper.js"></script>
<script src="<?php echo BASE_URL("assets/Login/"); ?>vendor/bootstrap/js/bootstrap.min.js"></script>
<!--===============================================================================================-->
<script src="<?php echo BASE_URL("assets/Login/"); ?>vendor/select2/select2.min.js"></script>
<!--===============================================================================================-->
<script src="<?php echo BASE_URL("assets/Login/"); ?>vendor/daterangepicker/moment.min.js"></script>
<script src="<?php echo BASE_URL("assets/Login/"); ?>vendor/daterangepicker/daterangepicker.js"></script>
<!--===============================================================================================-->
<script src="<?php echo BASE_URL("assets/Login/"); ?>vendor/countdowntime/countdowntime.js"></script>
<!--===============================================================================================-->
<script src="<?php echo BASE_URL("assets/Login/"); ?>js/main.js"></script>

</body>
</html>
