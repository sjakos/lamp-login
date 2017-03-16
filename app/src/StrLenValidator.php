<?php

/**
 * Validator class to check string length
 *
 * @param int $minStrLen Minimum string length for validation
 * @param int $maxStrLen Maximum string length for validation
 */
class StrLenValidator
{
    public $minStrLen;
    public $maxStrLen;
    public $string;
    public $errors;
    public $input;

    public function __construct(int $minStrLen = NULL, int $maxStrLen = NULL) 
    {
        $this->minStrLen = $minStrLen;
        $this->maxStrLen = $maxStrLen;
    }

/**
* Validates if string meets string length parameters
* @param string $string String to be checked
* @param string $input Form input of string to be checked
* 
* @return bool True if meets string length parameters
*/

    public function validateStr($input,$string) 
    {
          $strCheck = strlen($string) >= $this->minStrLen && strlen($string) <= $this->maxStrLen;
            if($strCheck === false)
            {
                $this->errors[] = "$input must be between $this->minStrLen and $this->maxStrLen characters.";
                return false;
            }
            return $strCheck;
    }
/**
* Checks if errors were set during validation
*
* @return bool Returns true if no errors were set
*/
    public function validationPassed(){
        if ((isset($this->errors) && (count($this->errors)) > 0)){
            return false;
        }
        return true;
    }
}
