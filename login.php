<?php
require_once 'db.php';
?>
<?php


session_start();


$user = '';
$pass = '';
$error = '';



// Check if username and password are set
if (isset($_POST["username_login"]) && isset($_POST['pass_login'])) {
  $user = $_POST["username_login"];
  $pass = $_POST["pass_login"];

  // phan quyen admin
  if ($user === "admin" &&  $pass == "admin123") {
    header("Location: admin/categorylist.php");
  } else if (login($user, $pass)) {
    $_SESSION['user'] = $user;
    header("Location: index.php");
  } else {
    $error = 'Username or Password incorrect!';
  }
}




?>


<!-- SIGNUP -->

<?php

$user_signup = '';
$email_signup = '';
$pass_signup = '';
$fisrtnam = '';
$lastname = '';
$phonenumber = '';
$address = '';
$error_signup = '';
if (
  isset($_POST['username_signup']) && isset($_POST['firstname_signup'])  && isset($_POST['lastname_signup']) && isset($_POST['email_signup']) && isset($_POST['phone_signup']) && isset($_POST['pass_signup'])
) {
  $user_signup = $_POST['username_signup'];
  $email_signup = $_POST['email_signup'];
  $pass_signup = $_POST['pass_signup'];
  $firstname = $_POST['firstname_signup'];
  $lastname = $_POST['lastname_signup'];
  $phonenumber = $_POST['phone_signup'];
  $address = $_POST['address_signup'];

  // register new account
  $result = register($user_signup, $email_signup, $pass_signup, $firstname, $lastname, $phonenumber, $address );
  if ($result['code'] == 0) {
    // success
  }
  else if($result['code'] == 1) {
    $error_signup = 'This email is already exist!';
  }
  else{
    $error_signup = 'An error occured. Please try again!';
  }
}



?>


<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <script src="https://kit.fontawesome.com/64d58efce2.js" crossorigin="anonymous"></script>
  <link rel="stylesheet" href="asset/Sliding-Sign-In-Sign-Up-Form-master/Sliding-Sign-In-Sign-Up-Form-master/style.css" />
  <title>Sign in & Sign up Form</title>
</head>

<body>
  <div class="container">
    <div class="forms-container">
      <div class="signin-signup">
        <form novalidate onsubmit="return validateSignIn()" class="sign-in-form" id="signInForm" method="post">

        <!-- ======================== LOGIN ===============================-->
        <h2 class="title">Login</h2>

          <div class="input-field">
            <i class="fas fa-user"></i>
            <input type="text" placeholder="Username" id="usernameSI" name="username_login" />
          </div>
          <div class="errorMessageSI1"></div>
          <div class="input-field">
            <i class="fas fa-lock"></i>
            <input type="password" placeholder="Password" id="pwdSI" name="pass_login" />
          </div>
          <div class="errorMessageSI2"></div>

          <!-- invalid user or pass here -->
          <div class="errorMessageSI2"></div> <?php if (!empty($error)) : ?>
            <div class="errorMessage_Invalid"><?php echo $error; ?></div>
          <?php endif; ?>
          <input type="submit" value="Login" class="btn solid" />
        </form>


        <!-- ======================== Sign Up ===============================-->
        <form novalidate onsubmit="return validateSignUp()" method="post" class="sign-up-form" id="signUpForm">
          <h2 class="title">Sign up</h2>

          <!-- username -->
          <div class="input-field">
            <i class="fas fa-user"></i>
            <input type="text" placeholder="Username" id="usernameSU" name="username_signup" />
          </div>
          <div class="errorMessageSU1">ERRORMESSAGE OF USERNAME</div>

          <!-- full name -->
          <!-- Fistname -->
          <div class="input-field">
            <i class="fas fa-user"></i>
            <input type="text" placeholder="Firstname" id="FirstnameSU" name="firstname_signup" />
          </div>

          <!-- Lastname -->
          <div class="input-field">
            <i class="fas fa-user"></i>
            <input type="text" placeholder="Lastname" id="LastnameSU" name="lastname_signup" />
          </div>

          <div class="errorMessageSU1">ERRORMESSAGE OF USERNAME</div>

          <!-- email -->
          <div class="input-field">
            <i class="fas fa-envelope"></i>
            <input type="email" placeholder="Email" id="emailSU" name="email_signup" required />
          </div>

          <!-- address -->
          <div class="input-field">
            <i class="fas fa-address-card"></i>
            <input type="text" placeholder="Address" id="AddressSU" name="address_signup" />
          </div>

          <!-- Phone number -->
          <div class="input-field">
            <i class="fas fa-phone"></i>
            <input type="text" placeholder="Phonenumber" id="PhoneSU" name="phone_signup" />
          </div>

          <!-- password -->
          <div class="errorMessageSU2">ERRORMESSAGE OF EMAIL</div>
          <div class="input-field">
            <i class="fas fa-lock"></i>
            <input type="password" placeholder="Password" id="pwdSU" name="pass_signup" />
          </div>
          <div class="errorMessageSU3">ERRORMESSAGE OF PASSWORD</div>


          <!-- Error message -->

          <input type="submit" class="btn" value="Sign up" />

        </form>
      </div>
    </div>

    <div class="panels-container">
      <div class="panel left-panel">
        <div class="content">
          <h3>New here ?</h3>
          <p>
            Create an account now!
          </p>
          <button class="btn transparent" id="sign-up-btn">
            Sign up
          </button>
        </div>
        <img src="asset/Sliding-Sign-In-Sign-Up-Form-master/Sliding-Sign-In-Sign-Up-Form-master/img/AUBERT/4.svg" class="image" alt="" />
      </div>
      <div class="panel right-panel">
        <div class="content">
          <h3>One of us ?</h3>
          <p>
            Login now!
          </p>
          <button class="btn transparent" id="sign-in-btn">
            Sign in
          </button>
        </div>
        <img src="asset/Sliding-Sign-In-Sign-Up-Form-master/Sliding-Sign-In-Sign-Up-Form-master/img/AUBERT/5.svg" class="image" alt="" />
      </div>
    </div>
  </div>

  <script src="asset/Sliding-Sign-In-Sign-Up-Form-master/Sliding-Sign-In-Sign-Up-Form-master/app.js">

  </script>

</body>

</html>