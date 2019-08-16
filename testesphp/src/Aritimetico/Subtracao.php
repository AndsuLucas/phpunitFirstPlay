<?php
namespace CodeExperts\Aritimetico;

class Subtracao
{
    private $num1;
    private $num2;

    public function subtrair()
    {
        return $this->num1 - $this->num2;
    }

    public function setNum1($n1 = null)
    {
        if (is_null($n1)){
            throw new \InvalidArgumentException("Parametro não informado");
            return;
        }

        $this->num1 = $n1;
        

    }
    public function setNum2($n2 = null)
    {
        if (is_null($n2)){
            throw new \InvalidArgumentException("Parametro não informado");
            return;
        }

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