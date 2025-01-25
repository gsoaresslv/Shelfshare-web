<?php require_once 'anexos/verifica.php'; ?>
<!DOCTYPE html>
<html>
  <head>
    <?php require 'anexos/essencial.php'; ?>
    <title>Resultados</title>
  </head>
  <body>
    <div class="page">
        <?php require 'anexos/navbar.php'; 
        require_once 'anexos/Livro.class.php';
        $id_genero = $_GET['id_genero'];
        $livro = new Livro();
        $resultado = $livro->porGenero($id_genero);
        ;?>

        <!-- Cards de resultados -->
        <div class="container mt-4">
            <div class="row">
                <?php foreach ($resultado as $livro): ?>
                    <div class="col-12 col-xxl-6 mb-3">
                        <div class="card border-primary h-100">
                            <div class="row g-0 h-100">
                                <div class="col-md-4">
                                    <img src="img/livro.png" class="img-thumbnail rounded-start" alt="...">
                                </div>
                                <div class="col-md-8 d-flex flex-column">
                                    <div class="card-header border-primary text-truncate">
                                        <h3 class="card-title text-center text-primary text-truncate"><?php echo $livro['titulo'] ?></h3>
                                    </div>
                                    <div class="card-body flex-grow-1">
                                        <p class="card-text text-truncate"><?php echo $livro['autor'] ?></p>
                                        <p class="card-text text-truncate"><?php echo $livro['descricao'] ?></p>
                                        <p class="card-text text-truncate"><?php echo $livro['cidade'] ?></p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                <?php endforeach; ?>
            </div>
        </div>
        
    </div>
  </body>
</html>