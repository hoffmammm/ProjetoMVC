<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <title>Lista de Tarefas</title>
</head>
<body>
    <h2>Lista de Tarefas</h2>
    <ul>
        <?php foreach ($taskController->index() as $tarefa): ?>
            <li>
                <a href="show.php?id=<?= $tarefa['id'] ?>">
                    <?= $tarefa['descricao'] ?>
                </a>
                <a href="update.php?id=<?= $tarefa['id'] ?>">Editar</a>
                <a href="processar_delete.php?id=<?= $tarefa['id'] ?>" onclick="return confirm('Tem certeza que deseja excluir esta tarefa?')">Excluir</a>
            </li>
        <?php endforeach; ?>
    </ul>
    <a href="create.php">Adicionar Nova Tarefa</a>
</body>
</html>
