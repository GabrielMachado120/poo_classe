<?php 
// importando as classes
require_once "Usuario.php";
require_once "Aluno.php";

// Recebendo as variáveis por POST do formulário
$nome = $_POST['nome'] ?? "";
$email = $_POST['email'] ?? "";
$matricula = $_POST['matricula'] ?? "";
// criando objetos
$aluno1 = new Aluno($nome, $email, $matricula);

// Exibindo informações dos alunos
echo "<h2>Alunos</h2>";
echo $aluno1->exibirInfo() . "<br>";
echo $aluno1->estudar() . "<br>";

//echo $aluno2->exibirInfo() . "<br>";
//echo $aluno2->estudar() . "<br><br>";
?>