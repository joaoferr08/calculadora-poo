<?php

class Calculadora
{
    public $numero1;
    public $numero2;

    public function somar()
    {
        return $this->numero1 + $this->numero2;
    }

    public function subtrair()
    {
        return $this->numero1 - $this->numero2;
    }

    public function multiplicar()
    {
        return $this->numero1 * $this->numero2;
    }

   public function dividir()
{
    if ($this->numero2 == 0) {
        return "Não é possível dividir por zero";
    }

    return $this->numero1 / $this->numero2;
}

}
?>

