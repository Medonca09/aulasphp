<?php

/**
 * A Classe Funcionario calcula o salário do colaborador 
 * 
 * @author Lucas <lucas@email.com.br>
 */
class Funcionario
{
    /** * @var string $nome Recebe o nome do colaborador */
    public $nome;
    /** * @var float $salario Recebe o salario do colaborador */
    public $salario;
    /** * @var string $salarioConvertido Recebe o salário convertido para R$ */
    private $salarioConvertido;
    /** * @var float $bonus Recebe o bonus do colaborador */
    protected $bonus = 2500;

    /**
     * Undocumented function
     *
     * @return string Retorna a frase com o nome e o salario do colaborador
     */
    public function verSalario(): string
    {
        return "O funcionario {$this->nome} tem o salário R$ {$this->converterSalario($this->salario)} <br>";
    }

    /**
     * Recebe o salário e retorna convirtido para R$.
     * Método privado, somente pode ser chamado na classe
     *
     * @param float $valor deve ser enviado o parametro numerico
     * @return string Retorna o valor convertido para R$
     */
    private function converterSalario($valor): string
    {
       $this->salarioConvertido = number_format($valor, '2', ',', '.');
       return $this->salarioConvertido;
    }

    /**
     * Método protegido,ssomente pode ser chamado na classe ou na filha
     * @return string Retornar bônus
     */
    protected function bonusCalculado(): string
    {
        return $this->converterSalario($this->bonus);
        
    }

}