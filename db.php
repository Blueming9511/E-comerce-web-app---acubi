
<?php
    function create_connection(){
        $conn = mysqli_connect('localhost','root','','acubi');
        if($conn-> connect_error){
            die('Cannot connect to the server'. $conn->connect_error);
        }
        return $conn;
    }
?>