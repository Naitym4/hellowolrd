<?php

use PHPUnit\Framework\TestCase;

/**
 * @covers \HelloWorld
 * 
 */

final class HelloWorldTest extends TestCase{
    
    /**
     * @covers \HelloWorld::getMessage
     */
    public function testGetMessagePt() {
        $this->assertEquals(
            HelloWorld::getMessage('pt'),
            'Olá mundo'
        );
    }
    
    /**
     * @covers \HelloWorld::getMessage
     */
    public function testGetMessageEn() {
        $this->assertEquals(
            HelloWorld::getMessage('en'),
            'Hello World'
        );
    }

    /**
     * @covers \HelloWorld::getMessage
     */
    public function testGetMessageFail() {
        $this->assertEquals(
            HelloWorld::getMessage(''),
            false
        );
    }
}