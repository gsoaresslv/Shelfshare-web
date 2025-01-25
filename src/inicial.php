<?php require_once 'anexos/verifica.php'?>
<!DOCTYPE html>
<html>
  <head>
    <?php require 'anexos/essencial.php'; ?>
    <title>Página Inicial</title>
  </head>
  <body class="bg-light">
    <div class="page">
      <?php require 'anexos/navbar.php'; ?>

      <!-- Accordion de cidade -->
      <div class="accordion m-4 mb-5 mx-auto" style="max-width: 67%;">
        <div class="accordion-item border-primary border-1 rounded">
          <h1 class="accordion-header">
            <button class="accordion-button bg-primary text-white" type="button" data-bs-toggle="collapse" data-bs-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
              <?php 
                  if(!empty($_SESSION['cidade'])){
                    echo "Atualmente trocando em: {$_SESSION['cidade']}";
                  }
                  else{
                    echo "Insira o CEP para definir a cidade";
                  }
                ?>
            </button>
          </h1>
          <div id="collapseOne" class="accordion-collapse collapse show" data-bs-parent="#accordionExample">
            <div class="accordion-body">
              <form action="anexos/cadcidade.php" method="POST">
                <div class="container d-flex flex-column flex-xxl-row g-3">
                  <span class="input-group-text bg-white border-white text-center p-0 text-primary m-2">Insira o CEP:</span>
                  <input type="tel" class="form-control m-2" placeholder="CEP (ex: 12345678)" id="cep" name="cep" required>
                  <input class="form-control bg-light m-2" type="text" id="cidade" name="cidade" aria-label="readonly input" readonly>
                  <button type="submit" class="btn btn-primary w-100 m-2" id="btn-cep">Definir Cidade</button>
                </div>
              </form>
            </div>
          </div>
        </div>
      </div>

      <!-- Cards de generos com foreach - FALTANDO IMAGENS - -->
      <?php require 'anexos/genero.php';?>
      <h1 class="text-center text-primary mb-5">Navegue por Categorias:</h1>
      <div class="container mt-4">
        <div class="row">
          <?php foreach ($resultado as $genero): ?>
            <div class="d-flex col-6 col-xl-3 mb-3 justify-content-center">
              <a href="dados.php" class="card p-2 mb-2 border-primary border-2 bg-white text-decoration-none" style="width: 18rem;">
                <img src="img/suspense_icon.png" class="card-img-top" alt="...">
                <div class="card-body">
                  <h4 class="card-title text-center mb-0"><?php echo $genero['descricao'] ?></h4>
                </div>
              </a>
            </div>
          <?php endforeach; ?>
        </div>
      </div>
    </div>
  </body>
</html>