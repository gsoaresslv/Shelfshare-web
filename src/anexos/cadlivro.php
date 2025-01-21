<meta charset="utf-8">
<?php 
require 'conexao.php';
require 'Livro.class.php';
$l = new Livro();
$titulo = filter_input(INPUT_POST, 'titulo', FILTER_SANITIZE_SPECIAL_CHARS);
$autor = filter_input(INPUT_POST, 'autor', FILTER_SANITIZE_SPECIAL_CHARS);
$idgenero = filter_input(INPUT_POST, 'genero', FILTER_SANITIZE_NUMBER_INT);
$descricao = filter_input(INPUT_POST, 'descricao', FILTER_SANITIZE_SPECIAL_CHARS);
$cidade = filter_input(INPUT_POST, 'cidade', FILTER_SANITIZE_SPECIAL_CHARS);

$l->cadastrar($titulo, $autor, $idgenero, $descricao, $cidade);
header('Location: ../inicial.php');
?>