<?php 
require 'verifica.php';

if (!empty($_POST['pesquisa'])) {
    if (!empty($_SESSION['cidade'])) {
        require 'conexao.php';
        require 'Livro.class.php';

        $livro = new Livro();

        $pesquisa = addslashes($_POST['pesquisa']);

        $livro->pesquisar($pesquisa);

        header('Location: ../resultados.php');
    } else {
        echo "<script>alert('Defina uma cidade antes de pesquisar!'); window.location.href='../inicial.php';</script>";
    }
} else {
    echo "<script>alert('Insira um valor para pesquisa!'); window.location.href='../inicial.php';</script>";
}

?>