<!-- this file is to classify the connection of login -->
<?php
session_start();
$user = '';
if (!isset($_SESSION["user"])) {
    $user == "guest";  //default user is guest 
} else {
    $user = $_SESSION["user"];
}
?>

