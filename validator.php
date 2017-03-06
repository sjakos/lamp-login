<?php

/**
 * Validator class to check string length
 */
class StrLenValidator
{
    public $minStrLen;
    public $maxStrLen;
    public $string;

    public function __construct($minStrLen = "", $maxStrLen = "", $string = "") 
    {
        $this->minStrLen = $minStrLen;
        $this->maxStrLen = $maxStrLen;
        $this->string = $string;

    }

    public function validate($data) 
    {
        return strlen($data) >= $minlen && strlen($data) <= $maxlen;
    }


}
