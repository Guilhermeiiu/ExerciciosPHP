<?php
// Captura os dados enviados do segundo formulário
$nome = $_POST['nome'];
$idade = $_POST['idade'];
$sexo = $_POST['sexo'];
$dispositivos = $_POST['dispositivos'];
$experiencia = $_POST['experiencia'];
$config_computador = isset($_POST['config_computador']) ? $_POST['config_computador'] : '';
$config_notebook = isset($_POST['config_notebook']) ? $_POST['config_notebook'] : '';
$config_smartphone = isset($_POST['config_smartphone']) ? $_POST['config_smartphone'] : '';
$linguagem = isset($_POST['linguagem']) ? $_POST['linguagem'] : '';
?>

<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Resultado da Pesquisa</title>
</head>
<body>
    <h1>Resultado da Pesquisa</h1>
    <p><strong>Nome:</strong> <?php echo htmlspecialchars($nome); ?></p>
    <p><strong>Idade:</strong> <?php echo htmlspecialchars($idade); ?></p>
    <p><strong>Sexo:</strong> <?php echo htmlspecialchars($sexo); ?></p>
    <p><strong>Dispositivos Possuídos:</strong> <?php echo htmlspecialchars($dispositivos); ?></p>
    <p><strong>Experiência em Programação:</strong> <?php echo htmlspecialchars($experiencia); ?></p>

    <?php if (!empty($config_computador)): ?>
        <p><strong>Configuração do Computador:</strong> <?php echo nl2br(htmlspecialchars($config_computador)); ?></p>
    <?php endif; ?>

    <?php if (!empty($config_notebook)): ?>
        <p><strong>Configuração do Notebook:</strong> <?php echo nl2br(htmlspecialchars($config_notebook)); ?></p>
    <?php endif; ?>

    <?php if (!empty($config_smartphone)): ?>
        <p><strong>Configuração do Smartphone:</strong> <?php echo nl2br(htmlspecialchars($config_smartphone)); ?></p>
    <?php endif; ?>

    <?php if (!empty($linguagem)): ?>
        <p><strong>Linguagem de Programação Preferida:</strong> <?php echo htmlspecialchars($linguagem); ?></p>
    <?php endif; ?>
</body>
</html>
