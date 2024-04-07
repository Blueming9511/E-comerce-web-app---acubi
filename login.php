
<?php
include 'db.php';
function login($username, $password)
{
  $conn = create_connection();
  $sql = 'select * from tbl_user where username=?';
  $stm = $conn->prepare($sql);
  $stm->bind_param("s", $username);
  if (!$stm->execute()) return false;

  $result  = $stm->get_result();

  if ($result->num_rows !== 1) return false;

  $data = $result->fetch_assoc();

  $user_pwd = $data["password"];
  if ($user_pwd !== $password) return false;
  return true;
}

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

          <!-- LOGIN -->
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


        <!-- Sign Up -->
        <form novalidate onsubmit="return validateSignUp()" class="sign-up-form" id="signUpForm">
          <h2 class="title">Sign up</h2>
          <div class="input-field">
            <i class="fas fa-user"></i>
            <input type="text" placeholder="Username" id="usernameSU" />
          </div>
          <div class="errorMessageSU1">ERRORMESSAGE OF USERNAME</div>
          <div class="input-field">
            <i class="fas fa-envelope"></i>
            <input type="email" placeholder="Email" id="emailSU" />
          </div>
          <div class="errorMessageSU2">ERRORMESSAGE OF EMAIL</div>
          <div class="input-field">
            <i class="fas fa-lock"></i>
            <input type="password" placeholder="Password" id="pwdSU" />
          </div>
          <div class="errorMessageSU3">ERRORMESSAGE OF PASSWORD</div>

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
          <button class="btn transparent" id="sign-up-btn" >
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