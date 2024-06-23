<?php
$id = $_GET['id'];
$tarefa = $taskController->show($id);
?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <title>Detalhes da Tarefa</title>
</head>
<body>
    <h2>Detalhes da Tarefa</h2>
    <h3><?= $tarefa['descricao'] ?></h3>
    <p>Criado em: <?= $tarefa['criado_em'] ?></p>
    <a href="index.php">Voltar para Lista de Tarefas</a>
</body>
</html>
