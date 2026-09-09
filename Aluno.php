<?php 
require_once "Usuario.php";

// classe Filha - Aluno
class Aluno extends Usuario {
    private $matricula;

    #[Override]
    public function __construct($nome, $email, $matricula)
    {
        return parent::__construct($nome, $email);
        $this->matricula = $matricula;
    }

    public function getMatricula() {
        return $this->matricula;
    }

    public function exibirInfo() {
        return parent::exibirInfo() . " | Matrícula: {$this->matricula}";
    }

    public function estudar() {
        return "{$this->nome} está estudando...";
    }
}
?>