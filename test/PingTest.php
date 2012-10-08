<?php
class PingTest extends PHPUnit_Framework_TestCase
{
    public function test()
    {
        $ping = new Ping();
        $this->assertTrue($ping->foo());
    }
}

