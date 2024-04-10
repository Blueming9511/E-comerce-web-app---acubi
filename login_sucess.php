<?php
session_start();

$user = 'guest'; // Default user is guest
$isAdmin = false;  // Default admin status is false

if (isset($_SESSION["user"])) {
  $user = $_SESSION["user"];
  $isAdmin = isset($_SESSION["isAdmin"]) ? $_SESSION["isAdmin"] : false; // Check for "isAdmin" key and assign default if not set
}

?>
