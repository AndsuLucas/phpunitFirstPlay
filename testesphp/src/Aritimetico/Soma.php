<?php
namespace CodeExperts\Aritimetico;
class Soma
{
    private $num1;
    private $num2;

    public function somar()
    {
        return $this->num1 + $this->num2;
    }

    public function setNum1($n1)
    {
        $this->num1 = $n1;
    }
    public function setNum2($n2)
    {
        $this->num2 = $n2;
    }

    public function getNum1()
    {
        return $this->num1;
    }
    public function getNum2()
    {
        return $this->num2;
    }
}