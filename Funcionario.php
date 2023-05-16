<?php

class Funcionario
{
    public $nome;
    public $salario;
    private $salarioConvertido;
    
    public function verSalario(): string
    {
        return "O funcionario {$this->nome} tem o salário R$ {$this->converterSalario()}";
    }

    private function converterSalario(): string
    {
       $this->salarioConvertido = number_format($this->salario, '2', ',', '.');
       return $this->salarioConvertido;
    }
}