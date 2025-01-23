<?php
// Conexão com o banco de dados

// ignore session_start() se a sessão já estiver iniciada
if (session_status() !== PHP_SESSION_ACTIVE) { // p: qual a diferença entre PHP_SESSION_ACTIVE e !isset($_SESSION)?
    // r: PHP_SESSION_ACTIVE é uma constante que representa o valor 2, que é o valor retornado por session_status() quando a sessão está ativa.
    // p: então nesse caso, vale mais a pena usar session_status() do que !isset($_SESSION)?
    // r: sim, pois session_status() é mais específico e claro, enquanto !isset($_SESSION) pode ser confuso, pois a sessão pode estar ativa, mas não ter sido iniciada.  
    session_start(); // Inicia a sessão
}
// Dados para conexão com o banco de dados
$localhost = "localhost";
$user = "root";
$passw = "serra";
$banco = "shelfshare";
$port = 3306;

global $pdo; // Variável global para ser usada em qualquer lugar do código

// Tenta fazer a conexão com o banco de dados

try{ 
    
    // Estrutura básica de conexão com o banco de dados
    $pdo = new PDO("mysql:dbname=".$banco."; host=".$localhost."; port=".$port, $user, $passw);
    $pdo->exec("set names utf8");
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);


}catch(PDOException $e){ // Caso ocorra algum erro na conexão com o banco, exibe a mensagem
    echo "Erro ao conectar ao banco de dados: ".$e->getMessage();
    exit;
}

?>