<?php

/**
 * Validator class to check string length
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

    public function validationPassed(){
        if ((isset($this->errors) && (count($this->errors)) > 0)){
            return false;
        }
        return true;
    }
}
