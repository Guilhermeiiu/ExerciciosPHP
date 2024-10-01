<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $operando1 = (float) $_POST['operando1'];
    $operando2 = isset($_POST['operando2']) ? (float) $_POST['operando2'] : 0;
    $idade = isset($_POST['idade']) ? (int) $_POST['idade'] : 0;
    $operacao = $_POST['operacao'];

    $resultado = 0; 

    switch ($operacao) {
        case 'soma':
            $resultado = $operando1 + $operando2;
            break;
        case 'subtracao':
            $resultado = $operando1 - $operando2;
            break;
        case 'multiplicacao':
            $resultado = $operando1 * $operando2;
            break;
        case 'divisao':
            if ($operando2 != 0) {
                $resultado = $operando1 / $operando2;
            } else {
                $resultado = "Erro: Divisão por zero!";
            }
            break;
        case 'soma_idade':
            $resultado = $operando1 + $idade;
            break;
        default:
            $resultado = "Operação inválida!";
            break;
    }
}
?>


<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Resultado da Calculadora</title>
</head>
<body>
    <h1>Resultado</h1>
    <p>O resultado da operação é: <strong><?php echo $resultado; ?></strong></p>
    <a href="index.html">Voltar</a>
    <style>
        h1{
            font-family: Impact;
            font-size: 60px;
        }
        body{
            position: absolute;
             top: 50%;
              left: 50%;
              transform: translate(-50%, -50%);

        }
        p{
            font-family: Verdana;
        }
        a{
            font-size: 20px;
        }
</body>
</html>
