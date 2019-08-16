<?php


use PHPUnit\Framework\TestCase;

class SomaTeste extends TestCase
{
    public function testSoma()
    {
        $soma = new CodeExperts\Aritimetico\Soma();
        $soma->setNum1(1);
        $soma->setNum2(2);

        $this->assertEquals(3, $soma->somar());
    }
}