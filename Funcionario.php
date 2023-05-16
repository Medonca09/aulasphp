<?php

class Funcionario
{
    public $nome;
    public $salario;
    private $salarioConvertido;
    protected $bonus = 2500;

    public function verSalario(): string
    {
        return "O funcionario {$this->nome} tem o salário R$ {$this->converterSalario($this->salario)} <br>";
    }

    private function converterSalario($valor): string
    {
       $this->salarioConvertido = number_format($valor, '2', ',', '.');
       return $this->salarioConvertido;
    }

    protected function bonusCalculado(): string
    {
        return $this->converterSalario($this->bonus);
        
    }

}