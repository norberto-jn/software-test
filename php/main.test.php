<?php

require('./main.php');

use PHPUnit\Framework\TestCase;

class StackTest extends TestCase
{   
   public function testE(){
    $a=new MatchCalc();

    $this->assertEquals(23,$a->getTotalDivisibleBy3Or5(11));
   }
   
}
