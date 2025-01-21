<?php
class Livro{
    public function cadastrar($titulo, $autor, $id_genero, $descricao, $cidade): void{
        global $pdo;
        try{
            $sql = "INSERT INTO `livro` (`id_livro`, `titulo`, `autor`, `descricao`, `cidade`, `id_genero`, `id_usuario`) 
            VALUES (:id_livro, :titulo, :autor, :descricao, :cidade, :id_genero, :id_usuario)";
            $sql = $pdo->prepare($sql);
            $sql->bindValue(":id_livro", null, PDO::PARAM_INT);
            $sql->bindValue(":titulo", $titulo, PDO::PARAM_STR);
            $sql->bindValue(":autor", $autor, PDO::PARAM_STR);
            $sql->bindValue(":descricao", $descricao, PDO::PARAM_STR);
            $sql->bindValue(":cidade", $cidade, PDO::PARAM_STR);
            $sql->bindValue(":id_genero", $id_genero, PDO::PARAM_INT);
            $sql->bindValue(":id_usuario", $_SESSION['id'], PDO::PARAM_INT);
            $sql->execute();

            echo "<script>alert('Livro cadastrado com sucesso!'); </script>";
        } catch(PDOException $e){
            echo 'Erro: ' . $e->getMessage();
        }
    }

    // função de listar livros PRECISA DE REVISÃO
    public function pesquisar($pesquisa): void{
        global $pdo;
        try{
            $sql = "SELECT * FROM `livro` WHERE `titulo` LIKE :pesquisa AND `cidade` = :cidade ORDER BY `titulo` ASC LIMIT 20"; 
            $sql = $pdo->prepare($sql);
            $sql->bindValue(":pesquisa", "%$pesquisa%", PDO::PARAM_STR);
            $sql->bindValue(":cidade", $_SESSION['cidade'], PDO::PARAM_STR);
            $sql->execute();

            $resultado = $sql->fetchAll(PDO::FETCH_ASSOC); 
            $_SESSION['resultado'] = $resultado;
        } 
        catch(PDOException $e){
            echo 'Erro: ' . $e->getMessage();
        }
    }
}
?>