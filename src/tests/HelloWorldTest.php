<?php

use PHPUnit\Framework\TestCase;


final class HelloWorldTest extends TestCase{
    
    public function testGetMessagePt() {
        $this->assertEquals(
            HelloWorld::getMessage('pt'),
            'Olá mundo'
        );
    }
    
    public function testGetMessageEn() {
        $this->assertEquals(
            HelloWorld::getMessage('en'),
            'Hello World'
        );
    }

    public function testGetMessageFail() {
        $this->assertEquals(
            HelloWorld::getMessage(''),
            false
        );
    }
}