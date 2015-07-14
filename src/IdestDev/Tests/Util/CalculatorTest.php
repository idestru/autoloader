<?php 

namespace IdestDev\Tests\Util;

use IdestDev\Util\Calculator;

/**
 * CalculatorTest
 */
class CalculatorTest extends \PHPUnit_Framework_TestCase
{
    /**
     * Test Add
     */
    public function testAdd()
    {
        $calculator = new Calculator();
        $result = $calculator->add(5, 10);
        $this->assertEquals(15, $result);
    }
}