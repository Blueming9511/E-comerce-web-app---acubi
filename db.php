<?php
function create_connection()
{
    $conn = mysqli_connect('localhost', 'root', '', 'acubi');
    if ($conn->connect_error) {
        die('Cannot connect to the server' . $conn->connect_error);
    }
    return $conn;
}

function login($username, $password)
{
    $conn = create_connection();
    $sql = 'select * from tbl_user where username=?';

    $stm = $conn->prepare($sql);
    $stm->bind_param("s", $username);
    if (!$stm->execute()) {
        return null;
    }

    $result  = $stm->get_result();
    $data = $result->fetch_assoc();

    $hashed_pwd =  $data['password'];

    if (!password_verify($password, $hashed_pwd)) {
        return null;
    }
    return $data;
}



// ==== SIGN Up ====  //


// Check whether  user email is already in use or not.
function is_email_exist($email)
{
    $conn = create_connection();
    $sql = 'SELECT COUNT(*) as count FROM tbl_user WHERE email = ?';

    // handle sql injection
    $stm = $conn->prepare($sql);
    $stm->bind_param('s', $email);
    if (!$stm->execute()) {
        die('Query error: ' . $stm->error);
    }

    $result = $stm->get_result();
    $data = $result->fetch_assoc();
    if ($data['count'] > 0) {
        return true;
    } else {
        return false;
    }
}


// Check whether  user username is already in use or not.
function is_user_exist($user)
{
    $sql = 'SELECT COUNT(*) as count FROM tbl_user WHERE username = ?';
    $conn = create_connection();

    // handle sql injection
    $stm = $conn->prepare($sql);
    $stm->bind_param('s', $user);
    if (!$stm->execute()) {
        die('Query error: ' . $stm->error);
    }
    $result = $stm->get_result();
    $data = $result->fetch_assoc();
    if ($data['count'] > 0) {
        return true;
    } else {
        return false;
    }
}

function register($user, $email, $pass, $firstname, $lastname, $phonenumber, $address)
{

    // check if email is exist
    if (is_email_exist($email)) {
        return array('code' => 1, 'error' => 'Email exists!');
    }

    // encoding the password
    $hash = password_hash($pass, PASSWORD_DEFAULT);

    // activate token = user + random(0, 100)
    $rand = random_int(0, 1000);
    $token = md5($user . '+' . $rand);
    $sql = 'insert into tbl_user(username, email, password, firstname, lastname, phonenumber, address, activate_token) values(?,?,?,?,?,?,?,?)';
    $conn = create_connection();
    $stm = $conn->prepare($sql);
    $stm->bind_param('ssssssss', $user, $email, $hash, $firstname, $lastname, $phonenumber, $address, $token);


    if (!$stm->execute()) {
        return array('code' => 2, 'error' => 'cannot execute command');
    }

    // send vertification email
    return array('code' => 0, 'error' => 'Create account successful');
}
