<?php
// Capture login and password and validate
$nameLength = strlen($_POST["loginUsrNm"]);
$passLength = strlen($_POST["loginPwd"]);
$invalidMsg = "<h1>User Name or Password is invalid:</h1>";
$validCheck = 0;
$nameLimit = [5,100];
$passLimit = [5,100];

if (($nameLimit[0]<=$nameLength) && ($nameLength<=$nameLimit[1])) {
    $validCheck++;
} else {
    $invalidMsg .= "<p>Username should be between 5 and 100 characters</p>";
}
if (($passLimit[0]<=$passLength) && ($passLength<=$nameLimit[1])) {
    $validCheck++;
} else {
    $invalidMsg .= "<p>User password should be between 5 and 100 characters</p>";
}
if ($validCheck==2) {
    echo "<h1>All data is valid!</h1>";
} else {
    echo "$invalidMsg";
}
