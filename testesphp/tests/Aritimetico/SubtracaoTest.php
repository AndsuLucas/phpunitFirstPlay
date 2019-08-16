<?php 
        //como estou utilizando o mesmo namespace, posso usar a classe diretamente
namespace CodeExperts\Aritimetico;

use PHPUnit\Framework\TestCase;

class SubtracaoTeste extends TestCase
{                   //nossos métodos so serão executados se esse método retornar true
    public function assertPreConditions(): void //tem que retornar void
    {
        $this->assertTrue(
            class_exists('CodeExperts\Aritimetico\Subtracao')
        );
    }

    public function testSubtracao()
    {
        $sub = new Subtracao();
        $sub->setNum1(5);
        $sub->setNum2(1);

        $expected = 4;
        
        
        $this->assertEquals($expected, $sub->subtrair());
    }
    /**
     * @expectException \InvalidArgumentException
     * @expectExceptionMessage, Parametro não informado
     */
    public function testValidationNullValue()
    {
        $sub = new Subtracao();
        $sub->setNum1(5);
        $sub->setNum2();

        $expected = 4;
    } 
}