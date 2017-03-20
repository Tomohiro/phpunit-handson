<?php
declare(strict_types=1);

use PHPUnit\Framework\TestCase;
use PHPUnit\Handson\PriceCalculator;

class PriceCalculatorTest extends TestCase
{
    public function testSalesTax()
    {
        $obj = new PriceCalculator(100);
        $expceted = 8;
        $actual = $obj->salesTax();
        $this->assertEquals($expceted, $actual);
    }

    public function testCaluculate()
    {
        $obj = new PriceCalculator(100);
        $expceted = 108;
        $actual = $obj->calculate();
        $this->assertEquals($expceted, $actual);
    }

    /**
     * @expectedException \RangeException
     * @expectedExceptionMessageRegExp /price must be positive number/
     */
    public function testCaluculateWithNegativePriceThrowsRangeException()
    {
        $obj = new PriceCalculator(-100);
        $obj->calculate();
    }

    /**
     * @expectedException \InvalidArgumentException
     * @expectedExceptionMessageRegExp /price must be integer/
     */
    public function testCaluculateWithStringThrowsInvalidArgumentException()
    {
        $obj = new PriceCalculator('100');
        $obj->calculate();
    }
}
