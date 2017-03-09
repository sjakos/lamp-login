<?php
session_start();

// TODO: read about include, include_once, require and reqiure_once
include_once './helpers.php';

// Capture login and password and validate
$incoming = array(
    'username' => $_POST['loginUsrNm'],
    'password' => $_POST['loginPwd'],
);

$invalidMsg = "User Name or Password is invalid:<br>";
$nameLimit = [5,100];

$checkStrings = array(
    'username' => 'Your username', 
    'password' => 'Your password',
);

if (ValidateFormStringData($checkStrings, $incoming, $nameLimit, $invalidMsg)) {
    if ($incoming['username'] === 'hello' && $incoming['password'] === 'world') {
        $_SESSION['username'] = $incoming['username'];
        header('location: /public/welcome.php');
    } else {
        $_SESSION['errors'] = 'Invalid username or password.';
        header('location: /public/');
    }

} else {
    $_SESSION['errors'] = $invalidMsg;
    header('location: /public/');
}
