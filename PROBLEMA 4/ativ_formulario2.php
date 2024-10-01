<?php
// Captura os valores enviados pelo formulário anterior
$nome = $_POST['nome'];
$idade = $_POST['idade'];
$sexo = $_POST['sexo'];
$dispositivos = isset($_POST['dispositivos']) ? $_POST['dispositivos'] : [];
$experiencia = $_POST['experiencia'];
?>

<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Detalhes da Pesquisa</title>
</head>
<body>
    <h1>Detalhes da Pesquisa</h1>

    <form action="ativ_resultado.php" method="POST">
        <p><strong>Nome:</strong> <?php echo htmlspecialchars($nome); ?></p>
        <p><strong>Idade:</strong> <?php echo htmlspecialchars($idade); ?></p>
        <p><strong>Sexo:</strong> <?php echo htmlspecialchars($sexo); ?></p>

        <p><strong>Dispositivos Possuídos:</strong></p>
        <ul>
            <?php foreach ($dispositivos as $dispositivo): ?>
                <li><?php echo htmlspecialchars($dispositivo); ?></li>
            <?php endforeach; ?>
        </ul>

        <p><strong>Experiência em Programação:</strong> <?php echo htmlspecialchars($experiencia); ?></p>

        <?php if (in_array('computador', $dispositivos)): ?>
            <label for="config_computador">Configuração do Computador:</label><br>
            <textarea id="config_computador" name="config_computador" rows="3" cols="40"></textarea><br><br>
        <?php endif; ?>

        <?php if (in_array('notebook', $dispositivos)): ?>
            <label for="config_notebook">Configuração do Notebook:</label><br>
            <textarea id="config_notebook" name="config_notebook" rows="3" cols="40"></textarea><br><br>
        <?php endif; ?>

        <?php if (in_array('smartphone', $dispositivos)): ?>
            <label for="config_smartphone">Configuração do Smartphone:</label><br>
            <textarea id="config_smartphone" name="config_smartphone" rows="3" cols="40"></textarea><br><br>
        <?php endif; ?>

        <?php if ($experiencia != 'Não possui'): ?>
            <label for="linguagem">Linguagem de Programação Preferida:</label><br>
            <select id="linguagem" name="linguagem" required>
                <option value="C">C</option>
                <option value="C++">C++</option>
                <option value="Java">Java</option>
                <option value="PHP">PHP</option>
                <option value="Python">Python</option>
                <option value="Perl">Perl</option>
                <option value="Ruby">Ruby</option>
                <option value="Outra">Outra</option>
            </select><br><br>
        <?php endif; ?>

        <input type="hidden" name="nome" value="<?php echo htmlspecialchars($nome); ?>">
        <input type="hidden" name="idade" value="<?php echo htmlspecialchars($idade); ?>">
        <input type="hidden" name="sexo" value="<?php echo htmlspecialchars($sexo); ?>">
        <input type="hidden" name="dispositivos" value="<?php echo htmlspecialchars(implode(", ", $dispositivos)); ?>">
        <input type="hidden" name="experiencia" value="<?php echo htmlspecialchars($experiencia); ?>">

        <input type="submit" value="Finalizar Pesquisa">
    </form>
</body>
</html>
