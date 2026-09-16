<?php 
// importando as classes
require_once "Usuario.php";
require_once "Professor.php";
//require_once "Aluno.php";

// Recebendo as variáveis por POST do formulário
$nome = $_POST['nome'] ?? "";
$email = $_POST['email'] ?? "";
$matricula = $_POST['disciplina'] ?? "";
// criando objetos
$professor1 = new Professor($nome, $email, $matricula);


// Exibindo informações dos professores
echo "<h2>Professores</h2>";
echo $professor1->exibirInfo() . "<br>";
echo $professor1->darAula() . "<br><br>";

//echo $professor2->exibirInfo() . "<br>";
//echo $professor2->darAula() . "<br><br>";

// Caminho do arquivo JSON
$banco  = 'banco.json';

//ler dados existentes
$dados = [];
if (file_exists($banco)) {
    $json = file_get_contents($banco);
    $dados = json_decode($json, true);
}
$usuario = new Professor($nome, $email, $matricula);
$dados['professores'][] = [
    'nome' => $usuario->getNome(),
    'email' => $usuario->getEmail(),
    'disciplina' => $usuario->getDisciplina()
];

// Salvar de volta no JSON
file_put_contents($banco, json_encode($dados, JSON_PRETTY_PRINT | JSON_UNESCAPED_UNICODE));
echo "<h2>Cadastro realizado com sucesso!</h2>";
echo "<a href='index.php'>Ver Usuários</a>";
?>