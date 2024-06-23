<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <title>Criar Nova Tarefa</title>
</head>
<body>
    <h2>Criar Nova Tarefa</h2>
    <form action="processar_create.php" method="post">
        <label for="descricao">Descrição da Tarefa:</label><br>
        <input type="text" id="descricao" name="descricao" required><br><br>
        <input type="submit" value="Adicionar Tarefa">
    </form>
    <a href="index.php">Voltar para Lista de Tarefas</a>
</body>
</html>
