<?php

/**
 * Validator class to check string length
 */
class StrLenValidator
{
    public $minStrLen;
    public $maxStrLen;
    public $string;

    public function __construct($minStrLen = NULL, $maxStrLen = NULL) 
    {
        $this->minStrLen = $minStrLen;
        $this->maxStrLen = $maxStrLen;
    }

    public function validateStr($string) 
    {
        if (is_string($string))
        {
          $strCheck = strlen($string) >= $this->minStrLen && strlen($string) <= $this->maxStrLen;
            if($strCheck === false)
            {
                throw new Exception("input must be between $this->minStrLen and $this->maxStrLen characters.");
                return false;
            }
            return $strCheck;
        }
        return false;
    }
}
