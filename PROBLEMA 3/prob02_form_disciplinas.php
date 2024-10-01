<?php
// Inicializa as variáveis para armazenar o nome do aluno e a lista de disciplinas
$nome_aluno = '';
$disciplinas = '';

// Verifica se o formulário foi enviado
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    // Recebe o nome do aluno e os dados da nova disciplina
    $nome_aluno = $_POST['nome_aluno'];
    $nome_disciplina = $_POST['nome_disciplina'];
    $nota_disciplina = $_POST['nota_disciplina'];
    
    // Verifica se o campo disciplinas já foi preenchido anteriormente
    $disciplinas = isset($_POST['disciplinas']) ? $_POST['disciplinas'] : '';

    // Adiciona a nova disciplina ao campo disciplinas no formato "Disciplina: nome - média: nota"
    $disciplinas .= "Disciplina: $nome_disciplina - média: $nota_disciplina\n";
}
?>

<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cadastro de Disciplinas</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f0f0f0;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
            margin: 0;
            position: relative;
            right: 150px;
        }

        h1 {
            text-align: center;
            color: #333;
            position: relative;
            left: 450px;
            bottom: 360px;
        }

        form {
            background-color: #fff;
            padding: 20px;
            border-radius: 10px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
            max-width: 500px;
            width: 100%;
        }

        label {
            font-size: 14px;
            color: #555;
            margin-top: 10px;
            display: block;
        }

        input[type="text"], input[type="number"], textarea {
            width: 100%;
            padding: 10px;
            margin-top: 5px;
            margin-bottom: 15px;
            border: 1px solid #ccc;
            border-radius: 5px;
            box-sizing: border-box;
        }

        input[type="submit"] {
            background-color: #4CAF50;
            color: white;
            padding: 10px 20px;
            border: none;
            border-radius: 5px;
            cursor: pointer;
            font-size: 16px;
            width: 100%;
        }

        input[type="submit"]:hover {
            background-color: #45a049;
        }

        textarea {
            resize: none;
            height: 150px;
        }

    </style>
</head>
<body>
    <h1>Cadastro de Disciplinas</h1>

    <form action="prob02_form_disciplinas.php" method="POST">
        <label for="nome_aluno">Nome do Aluno:</label><br>
        <input type="text" id="nome_aluno" name="nome_aluno" value="<?php echo htmlspecialchars($nome_aluno); ?>" required><br><br>

        <label for="nome_disciplina">Nome da Disciplina:</label><br>
        <input type="text" id="nome_disciplina" name="nome_disciplina" required><br><br>

        <label for="nota_disciplina">Nota da Disciplina:</label><br>
        <input type="number" id="nota_disciplina" name="nota_disciplina" min="0" max="10" step="0.01" required><br><br>

        <input type="submit" value="Cadastrar Disciplina"><br><br>

        <label for="disciplinas">Disciplinas cadastradas:</label><br>
        <textarea id="disciplinas" name="disciplinas" rows="10" cols="50"><?php echo htmlspecialchars($disciplinas); ?></textarea>
    </form>
</body>
</html>
