<?php
echo 'je m appelle Wesley';

use PHPUnit\Framework\TestCase;

class UselessTest extends PHPUnit\Framework\TestCase
{

    public function testMultiplication(){
        $this->assertEquals(4, 2*2);
    }

}
?>