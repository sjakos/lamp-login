<?php
session_start();
include_once './StrLenValidator.php';
include_once './DBconnect.php';

$checkStr = new StrLenValidator(5,100);
$db = new DBconnect();

$incoming = array(
    'username' => trim($_POST['loginUsrNm']),
    'password' => trim($_POST['loginPwd']),
);

foreach ($incoming as $input => $string) {
    $checkStr->validateStr($input,$string);
}

$checkCredentials = $db->prepare('SELECT id FROM users WHERE name=? and pass=?');
$checkCredentials->execute([$incoming['username'],$incoming['password']]);
$userCheck = $checkCredentials->rowCount();

if ($checkStr->validationPassed()) {
    if ($userCheck === 1) {
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
