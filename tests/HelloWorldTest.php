<?php

use PHPUnit\Framework\TestCase;
use Borges\HelloWorld;

/**
 * @covers \Borges\HelloWorld
 * 
 */
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

    public function testAddMessage() {
        HelloWorld::addMessage('es','Hola Mundo');
        $this->assertEquals(
            HelloWorld::getMessage('es'),
            'Hola Mundo'
        );
    }
    
}