<?php
$id = $_GET['id'];
$tarefa = $taskController->show($id);
?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <title>Editar Tarefa</title>
</head>
<body>
    <h2>Editar Tarefa</h2>
    <form action="processar_update.php" method="post">
        <input type="hidden" name="id" value="<?= $tarefa['id'] ?>">
        <label for="descricao">Descrição da Tarefa:</label><br>
        <input type="text" id="descricao" name="descricao" value="<?= $tarefa['descricao'] ?>" required><br><br>
        <input type="submit" value="Atualizar Tarefa">
    </form>
    <a href="index.php">Voltar para Lista de Tarefas</a>
</body>
</html>
