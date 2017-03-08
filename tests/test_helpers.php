<?php
//TODO: Look up and use PHPUnit
include __DIR__ . '/../app/src/helpers.php';
include  __DIR__ . '/../app/src/StrLenValidator.php';

$cases = array(
    'String longer than expected (should FAIL): ' => ['test', 1, 5],
    'Exceeds length (expected pass): ' => ['test', 1, 3],
    'String meeting requirements (PASS) : ' => ['test', 1, 4],
    'Exceeds length: (expected pass): ' => [null, 1, 5],
    'Number meeting requirements: ' => [12345, 5, 10],
    'Exceeds length: (expected fail): ' => [132, 1, 2],
);

foreach ($cases as $title => $case_data) {
    echo $case_data[0] . ' --> ' . $case_data[2] . ' --> ';
    echo $title;
    // echo ValidateStringLength($case_data[0], $case_data[1], $case_data[2]) ? 'PASS' : 'FAIL';
    echo "\n";
}

$validate = new StrLenValidator(5,10);
$value1 = 'fail';
$value2 = 'success';
try {
    echo $validate->validateStr($value1);
} catch (Exception $e) {
 echo $e->getMessage();
}
