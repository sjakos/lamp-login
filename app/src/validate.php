<?php

// TODO: read about include, include_once, require and reqiure_once
include_once './helpers.php';

// Capture login and password and validate
$incoming = array(
    'username' => $_POST['loginUsrNm'],
    'password' => $_POST['loginPwd'],
);

$invalidMsg = "<h1>User Name or Password is invalid:</h1>";
$nameLimit = [5,100];

$checkStrings = array(
    'username' => 'Your username', 
    'password' => 'Your password',
);

if (ValidateFormStringData($checkStrings, $incoming, $nameLimit, $invalidMsg)) {
    echo "<h1>All data is valid!</h1>";
} else {
    echo "$invalidMsg";
}
