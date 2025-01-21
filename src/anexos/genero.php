<?php
    global $pdo;
    try{
            $sql = "SELECT * FROM `genero` ORDER BY `id_genero` ASC";
            $sql = $pdo->prepare($sql);
            $sql->execute();

            $resultado = $sql->fetchAll(PDO::FETCH_ASSOC);
    }
    catch(PDOException $e){
        echo 'Erro: ' . $e->getMessage();
    }
?>