<?php
session_start();
include_once './StrLenValidator.php';

// Capture login and password and validate
$incoming = array(
    'username' => trim($_POST['loginUsrNm']),
    'password' => trim($_POST['loginPwd']),
);

$checkStr = new StrLenValidator(5,100);

foreach ($incoming as $input => $string) {
    $checkStr->validateStr($input,$string);
}

if ($checkStr->validationPassed()) {
    if ($incoming['username'] === 'hello' && $incoming['password'] === 'world') {
        $_SESSION['username'] = $incoming['username'];
        header('location: /public/welcome.php');
    } else {
        $_SESSION['errors'][] = 'Invalid username or password.';
        header('location: /public/');
    }
} else {
    $_SESSION['errors'] = $checkStr->errors;
    header('location: /public/');
}
