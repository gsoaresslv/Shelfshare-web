<?php

require 'conexao.php';
    
if(isset($_POST['cidade']) && !empty($_POST['cidade'])){
    $_SESSION['cidade'] = $_POST['cidade'];
    echo "<script>alert('Cidade cadastrada com sucesso!'); window.location.href = '../inicial.php';</script>";
}
else{
    echo "<script>alert('Preencha todos os campos!'); window.location.href='../inicial.php';</script>";
}

?>