<?php
class LoadedTest extends PHPUnit_Framework_TestCase
{
    public function testMemcache()
    {
        $this->assertTrue(extension_loaded('memcache'));
    }

    public function testMongo()
    {
        $this->assertTrue(extension_loaded('mongo'));
    }

    public function testGearman()
    {
        $this->assertTrue(extension_loaded('gearman'));
    }
}