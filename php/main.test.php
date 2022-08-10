<?php

require('./main.php');

use PHPUnit\Framework\TestCase;

class StackTest extends TestCase
{   
   public function testE(){
    $item=new MatchCalc();

    $this->assertEquals(23,$item->getTotalDivisibleBy3Or5(10));
    $this->assertEquals(33,$item->getTotalDivisibleBy3Or5(11));
   }
   
}
