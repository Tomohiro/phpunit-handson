<?php
declare(strict_types=1);

use PHPUnit\Framework\TestCase;
use PHPUnit\Handson\Person;

class PersonTest extends TestCase
{
    protected function setUp()
    {
        $this->obj = new Person();
    }

    /**
     * @expectedException \InvalidArgumentException
     * @expectedExceptionMessageRegExp /\$targetName must be required/
     */
    public function testSayHelloToWithEmptyTargetNameThrowsInvalidArgumentException()
    {
        $this->obj->sayHelloTo(null);
    }

    public function testSayHelloWithTargetNameToReturnsMessage()
    {
        $expected = 'Hello, John';
        $actual = $this->obj->sayHelloTo('John');
        $this->assertEquals($expected, $actual);
    }
}
