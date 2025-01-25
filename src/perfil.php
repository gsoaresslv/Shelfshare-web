<?php require_once 'anexos/verifica.php'; // Falta implenetação do restante do código ?> 
<!DOCTYPE html>
<html>
    <head>
        <?php require 'anexos/essencial.php'; ?>
        <title></title>
    </head>
    <body class="bg-light">
        <div class="page">
            <?php require 'anexos/navbar.php'; ?>
            <!-- Header da página -->
            <div class="card mx-auto mt-3 w-75 mb-3" >
                <div class="d-flex row g-0 justify-content-center">
                    <div class="col-xxl-3 p-1">
                        <img src="img/user.png" class="img-thumbnail rounded mx-auto" alt="...">
                    </div>
                    <div class="col-xxl-6 card-body p-2 d-flex row justify-content-between">
                            <div class="p-4"> <!-- Div de cima -->
                                <h2 class="card-title text-center"><?php echo $username; ?></h2>
                            </div>
                           <div class="card-text d-flex"> <!-- Div de baixo -->
                                <div class="w-50 text-center"> <!-- Div esquerda -->
                                    <h2>0</h2>
                                    <h3>Seguidores</h3>
                                </div>
                                <div class="w-50 text-center"> <!-- Div direita -->
                                    <h2>0</h2>
                                    <h3>Seguindo</h3>
                                </div>
                        </div>
                    </div>
                    <div class="col-xxl-3 d-flex align-items-center p-4"> 
                        <div class="card-body row g-3">
                            <a class="btn btn-primary" href="anexos/logout.php">Sair</a>
                            <<!--<a class="btn btn-primary" href="editarperfil.php">Editar Perfil</a>-->
                        </div>
                    </div>
                </div>
            </div>

            <!-- Cards de livros do usuário -->
            <?php $livros = $usuario->listarLivros($_SESSION['id']);
            if (count($livros) > 0): ?>
                <h1 class="text-center text-primary mb-5">Meus Livros:</h1>
                <div class="container mt-4">
                    <div class="row">
                        <?php foreach ($livros as $livro): ?>
                            <div class="d-flex col-6 col-xl-3 mb-3 justify-content-center">
                                <a href="dados.php" class="card p-2 mb-2 border-primary border-2 bg-white text-decoration-none" style="width: 18rem;">
                                    <img src="img/livro.png" class="card-img-top" alt="...">
                                    <div class="card-body">
                                        <h4 class="card-title text-center mb-0"><?php echo $livro['titulo'] ?></h4>
                                    </div>
                                </a>
                            </div>
                        <?php endforeach; ?>
                    </div>
                </div>
            <?php else: ?>
                <h1 class="text-center text-primary mb-5">Você ainda não possui livros cadastrados</h1>
            <?php endif;
            ?>

                            
        </div>
    </body>
</hmtl>