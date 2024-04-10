<?php 
    include 'db.php';
    session_start();
    $data = getData($_SESSION['user']);
    sendThankYouEmail($data['email'], $data['firstname']);
 
?>