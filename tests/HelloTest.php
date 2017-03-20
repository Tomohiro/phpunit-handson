<?php
declare(strict_types=1);

use PHPUnit\Framework\TestCase;
use PHPUnit\Handson\Hello;

class HelloTest extends TestCase
{
    protected function setUp()
    {
        $this->obj = new Hello();
    }

    /**
     * @expectedException \InvalidArgumentException
     * @expectedExceptionMessageRegExp /\$targetName must be required/
     */
    public function testSayToWithEmptyTargetNameThrowsInvalidArgumentException()
    {
        $this->obj->sayTo(null);
    }

    public function testSayToReturnsMessage()
    {
        $expected = 'Hello, John';
        $actual = $this->obj->sayTo('John');
        $this->assertEquals($expected, $actual);
    }
}
