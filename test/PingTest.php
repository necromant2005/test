<?php
class PingTest extends PHPUnit_Framework_TestCase
{
    public function test()
    {
        $ping = new Ping();
        $this->assertTrue($ping->foo());
    }

    public function testGen()
    {
        $ping = new Ping();
        $this->assertEquals(new DOMElement('word', 'hi'), $ping->gen());
    }
}

