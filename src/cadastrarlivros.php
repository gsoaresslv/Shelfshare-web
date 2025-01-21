<?php require_once 'anexos/verifica.php'?>
<!DOCTYPE html>
<html>
  <head>
    <title>Cadastro de Livro</title>
    <?php require 'anexos/essencial.php'; ?>
  </head>
  <body class="bg-light">
    <div class="page">
      <?php require 'anexos/navbar.php'; ?>  
      <div class="container d-flex justify-content-center">
        <div class="card m-4 bg-white border-primary w-100">
          <form action="anexos/cadlivro.php" method="post">
            <div class="card-header p-3 bg-primary d-flex justify-content-center">
              <h3 class="card-title text-white">
                Informe alguns dados do seu livro para cadastro
              </h3>
            </div>
            <div class="card-body">
              <div class="mb-3">
                <label for="titulo" class="form-label">Título</label>
                <input type="text" class="form-control" id="titulo" name="titulo" placeholder="Título" required/>
              </div>
              <div class="mb-3">
                <label for="autor" class="form-label">Autor</label>
                <input type="text" class="form-control" id="autor" name="autor" placeholder="Autor" required/>
              </div>
              <div class="mb-3">
                <label for="genero" class="form-label">Gênero</label>
                <select class="form-select" aria-label="Gênero" id="genero" name="genero" required>
                  <option value="1">Romance</option>
                  <option value="2">Suspense</option>
                  <option value="3">Terror</option>
                  <option value="4">Biografia</option>
                  <option value="5">Ação</option>
                  <option value="6">Crônicas</option>
                  <option value="7">Científico</option>
                  <option value="8">Ficção</option>
                  <option value="9">Infantil</option>
                  <option value="10">Poesia</option>
                </select>
              </div>
              <div class="mb-3">
                <label for="descricao" class="form-label">Descrição</label>
                <input type="text" class="form-control" id="descricao" name="descricao" placeholder="Descreva o estado do seu livro (ex: Novo, possui apenas marcas de rasgo na capa)" required/>
              </div>
              <div class="mb-3">
                <label class="form-label" for="inputGroupFile">Imagem do Livro</label>
                <input type="file" class="form-control" id="inputGroupFile"/>
              </div>
              <div class="mb-3">
                <label for="cep" class="form-label">Cidade que trocará o livro:</label>
                <input type="tel" class="form-control mb-3" id="cep" name="cep" placeholder="CEP" required>
                <input class="form-control" type="text" id="cidade" name="cidade" placeholder="Cidade" readonly>
              </div>
            </div>
            <div class="card-footer bg-primary d-flex justify-content-center">
              <button type="submit" class="btn btn-outline-light">
                Cadastrar
              </button>
            </div>
          </form>
        </div>
      </div>
    </div>
  </body>
</html>
