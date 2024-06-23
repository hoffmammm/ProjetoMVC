<?php
require_once 'models/Task.php';
class TaskController {
    private $pdo;

    public function __construct($pdo) {
        $this->pdo = $pdo;
    }
    public function create($descricao) {
        $sql = "INSERT INTO tasks (descricao, criado_em) VALUES (:descricao, NOW())";
        $stmt = $this->pdo->prepare($sql);
        $stmt->bindParam(':descricao', $descricao, PDO::PARAM_STR);
        
        try {
            $stmt->execute();
            return true;
        } catch (PDOException $e) {
            return false;
        }
    }
    public function index() {
        $sql = "SELECT * FROM tasks ORDER BY criado_em DESC";
        $stmt = $this->pdo->query($sql);
        return $stmt->fetchAll(PDO::FETCH_ASSOC);
    }
    public function show($id) {
        $sql = "SELECT * FROM tasks WHERE id = :id";
        $stmt = $this->pdo->prepare($sql);
        $stmt->bindParam(':id', $id, PDO::PARAM_INT);
        $stmt->execute();
        return $stmt->fetch(PDO::FETCH_ASSOC);
    }
    public function update($id, $descricao) {
        $sql = "UPDATE tasks SET descricao = :descricao WHERE id = :id";
        $stmt = $this->pdo->prepare($sql);
        $stmt->bindParam(':id', $id, PDO::PARAM_INT);
        $stmt->bindParam(':descricao', $descricao, PDO::PARAM_STR);
        
        try {
            $stmt->execute();
            return true;
        } catch (PDOException $e) {
            return false;
        }
    }
    public function delete($id) {
        $sql = "DELETE FROM tasks WHERE id = :id";
        $stmt = $this->pdo->prepare($sql);
        $stmt->bindParam(':id', $id, PDO::PARAM_INT);
        
        try {
            $stmt->execute();
            return true;
        } catch (PDOException $e) {
            return false;
        }
    }
}
$taskController = new TaskController($pdo);

?>
