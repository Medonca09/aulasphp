<!DOCTYPE html>
<html lang="pt-br">
<head>
    
    <title>Aulas do curso PHP</title>
</head>
<body>
    
    <?php

    /*Link para documentação
        https://www.php-fig.org/psr/
        https://github.com/php-fig/fig-standards/blob/master/proposed/phpdoc.md
        https://github.com/php-fig/fig-standards/blob/master/proposed/phpdoc-tags.md*/    
        
        require './Funcionario.php';
        require './Bonus.php';

    $funcionario = new Funcionario();

    //Atributo privado não pode ser acessado fora da classe
    $funcionario->nome = "Lucas";
    $funcionario->salario = 7961.52;
    echo $funcionario->verSalario();
    //Atributo privado não pode ser acessado fora da classe
    //$funcionario->salarioConvertido = "72,19";
    
    //Atributo protegido somente pode ser acessado pela classe e pela classe filha
    //$funcionario->bonus;

    //Método privado não pode ser instanciando fora da classe
    //$funcionario->converterSalario();

    //Método protegido somente pode ser acessado pela classe e pela classe filha
    //$funcionario->bonusCalculado();

    $funcBonus = new Bonus();
    echo $funcBonus->verBonus();
    ?>
</body>
</html>