<?php 

if (!empty($_POST['pesquisa'])) {
    require 'conexao.php';
    require 'Livro.class.php';

    $livro = new Livro();

    $pesquisa = addslashes($_POST['pesquisa']);

    $livro->pesquisar($pesquisa);

    header('Location: ../resultados.php');
} else {
    echo "<script>alert('Insira um valor para pesquisa!'); window.location.href='../inicial.php';</script>";
}

?>