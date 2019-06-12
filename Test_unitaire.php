<?php
echo 'je m appelle Wesley';

use PHPUnit\Framework\TestCase;

class UselessTest extends PHPUnit\Framework\TestCase
{

    public function testMultiplication(){
        $this->assertEquals(4, 2*2);
	$this->assertEquals(7, 2+5);
	$wes = [null, null, null];
	$this->assertEquals(array(0 => null, 1=> null, 2=> null), $wes);
    }

}
?>
