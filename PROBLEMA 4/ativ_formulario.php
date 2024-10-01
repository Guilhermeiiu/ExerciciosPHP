<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Pesquisa de Tecnologia</title>
</head>
<body>
    <h1>Pesquisa de Tecnologia</h1>
    <form action="ativ_formulario2.php" method="POST">
        <label for="nome">Nome:</label><br>
        <input type="text" id="nome" name="nome" required><br><br>

        <label for="idade">Idade:</label><br>
        <input type="number" id="idade" name="idade" required><br><br>

        <label>Sexo:</label><br>
        <input type="radio" id="masculino" name="sexo" value="Masculino" required>
        <label for="masculino">Masculino</label><br>
        <input type="radio" id="feminino" name="sexo" value="Feminino" required>
        <label for="feminino">Feminino</label><br><br>

        <label>Dispositivos que você possui:</label><br>
        <input type="checkbox" id="computador" name="dispositivos[]" value="computador">
        <label for="computador">Computador</label><br>
        <input type="checkbox" id="notebook" name="dispositivos[]" value="notebook">
        <label for="notebook">Notebook</label><br>
        <input type="checkbox" id="smartphone" name="dispositivos[]" value="smartphone">
        <label for="smartphone">Smartphone</label><br><br>

        <label for="experiencia">Experiência em Programação:</label><br>
        <select id="experiencia" name="experiencia" required>
            <option value="Não possui">Não possui</option>
            <option value="Iniciante">Iniciante</option>
            <option value="Intermediário">Intermediário</option>
            <option value="Avançado">Avançado</option>
        </select><br><br>

        <input type="submit" value="Enviar">
    </form>
</body>
</html>
