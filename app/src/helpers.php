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

/**
* Validate array of strings' lengths and provide error message when they do not match parameters
*
* @param string[] $checkStrings The array that controls what incoming strings to check and holds the values for the error message 
* @param string[] $incoming The array of strings to check using ValidateStringLength
* @param int[] $nameLimit A two integer array to pass to ValidateStringLength for the min and max length
* @param string &$invalidMsg Error message string to concat from function
* 
* @return bool True if all strings are valid, else false
*/
function ValidateFormStringData($checkStrings, $incoming, $nameLimit, &$invalidMsg) {

    $validCheck = 0;

    foreach($checkStrings as $key=>$value) {
        if (ValidateStringLength($incoming[$key], $nameLimit[0], $nameLimit[1])) {
            $validCheck++;
        } else {
            $invalidMsg .= sprintf("%s should be between %d and %d characters<br>", 
                $checkStrings[$key],
                $nameLimit[0],
                $nameLimit[1]);
        }
    }
    return $validCheck === count($checkStrings);
}
