<?php

/**
 * Validate string length
 * 
 * @param string $data The string to check
 * @param int $minlen Minimum length acceptable
 * @param int $maxlen Maximum length acceptable
 *
 * @return bool True if validation succeeds, else false
 */
 function ValidateStringLength($data, $minlen, $maxlen) {
     return strlen($data) >= $minlen && strlen($data) <= $maxlen;
 }

// TODO: how to have a function populate and output value, not just receive input data
function ValidateFormStringData($checkStrings, $incoming, $nameLimit, &$invalidMsg) {

    $validCheck = 0;

    foreach($checkStrings as $key=>$value) {
        if (ValidateStringLength($incoming[$key], $nameLimit[0], $nameLimit[1])) {
            $validCheck++;
        } else {
            $invalidMsg .= sprintf("<p>%s should be between %d and %d characters</p>", 
                $checkStrings[$key],
                $nameLimit[0],
                $nameLimit[1]);
        }
    }

    // TODO: What is the difference between == and ===
    return $validCheck === count($checkStrings);
}