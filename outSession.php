<?php
unset($_SESSION['itemAmount']);
unset($_SESSION['totalAmount']);
print_r($_SESSION);
header("Location: orderComplete.php");
?>