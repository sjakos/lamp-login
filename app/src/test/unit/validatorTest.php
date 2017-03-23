<?php

require_once( __DIR__ . '/../../StrLenValidator.php');

class validatorTest extends \PHPUnit\Framework\TestCase
{
    public function testInput_WithinRange_ReturnTrue()
    {
        $validator = new StrLenValidator(2,5);
        $this->assertEquals(true, $validator->validateStr('','case'));
    }

}
