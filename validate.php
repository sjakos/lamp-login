<?php
// Capture login and password and validate
$nameLength = strlen($_POST["loginUsrNm"]);
$passLength = strlen($_POST["loginPwd"]);
$invalidMsg = "<h1>User Name or Password is invalid:</h1>";
$validCheck = 0;
$nameMin = 5;
$nameMax = 100;
$passMin = 5;
$passMax = 100;

if (($nameMin<=$nameLength) && ($nameLength<=$nameMax)) {
    $validCheck++;
} else {
    $invalidMsg .= "<p>Username should be between 5 and 100 characters</p>";
}
if (($passMin<=$passLength) && ($passLength<=$passMax)) {
    $validCheck++;
} else {
    $invalidMsg .= "<p>User password should be between 5 and 100 characters</p>";
}
if ($validCheck==2) {
    echo "<h1>All data is valid!</h1>";
} else {
    echo "$invalidMsg";
}
