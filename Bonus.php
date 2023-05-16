<?php

class bonus extends Funcionario
{
    public function verBonus(): string
    {
        return "O funcionário tem bônus de R$ " . $this->bonusCalculado() . "<br>";
    }
}