<!DOCTYPE html>
<html lang="pt-br">
<head>
    
    <title>Aulas do curso PHP</title>
</head>
<body>
    
    <?php
    require './Funcionario.php';

    $funcionario = new Funcionario();
    $funcionario->nome = "Cesar";
    $funcionario->salario = 7961.52;
    echo $funcionario->verSalario();
    //atributo privado não pode ser acessado fora da classe
    //$funcionario->salarioConvertido = "72,19";

    $funcionario->converterSalario();

    ?>
</body>
</html>