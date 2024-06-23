<?php

class Task {
    private $id;
    private $descricao;
    private $criado_em;

    public function __construct($db) {
        $this->conn = $db;
    }

    public function getId() {
        return $this->id;
    }

    public function getDescricao() {
        return $this->descricao;
    }

    public function getCriadoEm() {
        return $this->criado_em;
    }
    public function setDescricao($descricao) {
        $this->descricao = $descricao;
    }
    public static function fromArray($array) {
        return new self($array['id'], $array['descricao'], $array['criado_em']);
    }
}
?>