<?php

/**
 * A classe Bonus é classe filha de classe Funcionario
 * 
 * @author Lucas
 */
class bonus extends Funcionario
{
    /**
     * Método para ver o bônus
     * @return string retorna o bônus calculado
     */
    public function verBonus(): string
    {
        return "O funcionário tem bônus de R$ " . $this->bonusCalculado() . "<br>";
    }
}