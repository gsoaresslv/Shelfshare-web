<?php
// Arquivo de existência do usuário no banco de dados 

// Verifica se o usuário e senha foram preenchidos
if(!empty($_POST['email']) && !empty($_POST['senha']) && filter_var($_POST['email'], FILTER_VALIDATE_EMAIL)){
    
    // Requisitando os arquivos necessários para conexão e instância da classe
    require 'conexao.php';
    require 'Usuario.class.php';

    // Instanciando a classe
    $usuario = new Usuario();
    

    // Recebendo os valores do formulário
    $email = filter_var($_POST['email'], FILTER_SANITIZE_EMAIL);
    $senha = addslashes($_POST['senha']);

    if(filter_var($email, FILTER_VALIDATE_EMAIL)){
        if (!empty($senha)) {
            if ($usuario->logar($email, $senha)) {
                if (isset($_SESSION['id'])) {
                    echo "<script>alert('Logado com sucesso!'); window.location.href = '../inicial.php';</script>";
                } else {
                    echo "<script>alert('Erro no login!'); window.location.href='../login.php';</script>";
                }
            } else {
                echo "<script>alert('Email ou Senha Incorretos!'); window.location.href='../login.php';</script>";
            }
        } else {
            echo "<script>alert('Insira uma senha!'); window.location.href='../login.php';</script>";
        }
    }
    else{
        echo "<script>alert('Insira um email válido!'); window.location.href='../login.php';</script>";
    }
}else{
    echo "<script>alert('Preencha todos os campos!'); window.location.href='../login.php';</script>";
}



?>