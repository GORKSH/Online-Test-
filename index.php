<?php
session_start();
if (isset($_SESSION['userName']))
  header("location:loggedIn.php");
?>
<!DOCTYPE html>
<html >
<head>
  <meta charset="UTF-8">
  <title>Sign-Up/Login Form</title>
  <!-- <link href='http://fonts.googleapis.com/css?family=Titillium+Web:400,300,600' rel='stylesheet' type='text/css'> -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/normalize/5.0.0/normalize.min.css">

  
      <link rel="stylesheet" href="css/style.css">

  
</head>

<body >
    <div id="background-div">
        <img src="image/image.jpg" />
    </div>
    <div class="container-head">
        <div class="container-logo">
          <img src="image/logo.png" />
        </div>
        <div class="container-header">
          <hr />
          <h1>Come With Us </h1>
          <hr />
        </div>
    </div>
  <div class="container-center">
       <h1>Nothing is born into this world without labor.</h1>
  </div>
  <div class="form">
      <ul class="tab-group">
        <li class="tab active"><a href="#login">Log In</a></li>
        <li class="tab "><a href="#signup">Sign Up</a></li>
      </ul>
      <div class="tab-content">
        <div id="login">   
          <h1>Welcome Back!</h1>
          <div class="field-wrap">
            <label>
              Email Address<span class="req" >*</span>
            </label>
            <input type="email"required id="credentials" class="signInField" autocomplete="off"/>
          </div>
          
          <div class="field-wrap">
            <label>
              Password<span class="req">*</span>
            </label>
            <input type="password"required id="password" class="signInField" autocomplete="off"/>
          </div>
          
          <p class="forgot"><a href="#">Forgot Password?</a></p>
          
          <button type="submit" class="button button-block" id="signInButton" />Log In</button>
          
        
        </div>
        <div id="signup">   

          
          <div class="top-row">
            <div class="field-wrap">
              <label>
                User Name<span class="req">*</span>
              </label>
              <input type="text" required id="userName" class="signUpField" autocomplete="off" />
            </div>
        
            <div class="field-wrap">
              <label>
                Contact No<span class="req">*</span>
              </label>
              <input type="text"required id="contact" class="signUpField" autocomplete="off"/>
            </div>
          </div>

          <div class="field-wrap">
            <label>
              Email Address<span class="req">*</span>
            </label>
            <input type="email"required id="emailId" class="signUpField" autocomplete="off"/>
          </div>
          
          <div class="field-wrap">
            <label>
              Set A Password<span class="req">*</span>
            </label>
            <input type="password"required id="password1" class="signUpField" autocomplete="off"/>
          </div>
          <div class="field-wrap">
            <label>
              Confirm Password<span  class="req">*</span>
            </label>
            <input type="password"required id="password2" class="signUpField" autocomplete="off"/>
          </div>          
          <button type="submit" class="button button-block" id="signUpButton" />Get Started</button>
          
          </form>

        </div>
        
      </div><!-- tab-content -->
      
</div> <!-- /form -->
    <!-- <script src='http://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js'></script> -->
    <script src="js/jquery.js"></script>
    <script src="js/form.js"></script>
    <script src="js/login.js"></script>

</body>
</html>
