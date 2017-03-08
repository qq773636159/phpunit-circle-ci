<?php

namespace Ronizzle\TestComposer;

class HelloWorldTest extends \PHPUnit_Framework_TestCase {
    public function testTrueIsTrue() {
        $this->assertTrue(true);
    }

    public function testInstanceOf() {
        $hw = new HelloWorld();
        $this->assertInstanceOf("Ronizzle\\TestComposer\\Lmao", $hw);
    }
}
