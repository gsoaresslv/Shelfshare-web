<!DOCTYPE html>
<html>
    <head>
        <?php require_once 'anexos/essencial.php'; ?>
        <title>Cadastro</title> 
        <link rel="stylesheet" href="css/login.css">
    </head>
    <body>
        <div class="main-login">
            <!-- Seção à esquerda com uma imagem -->
            <div class="left-login bg-primary">
            <!-- Coluna à esquerda contendo a imagem de fundo -->
                <h1 class="text-light">
                    <svg xmlns="http://www.w3.org/2000/svg" width="64" height="64" fill="currentColor" class="bi bi-book-half me-2" viewBox="0 0 16 16">
                        <path d="M8.5 2.687c.654-.689 1.782-.886 3.112-.752 1.234.124 2.503.523 3.388.893v9.923c-.918-.35-2.107-.692-3.287-.81-1.094-.111-2.278-.039-3.213.492zM8 1.783C7.015.936 5.587.81 4.287.94c-1.514.153-3.042.672-3.994 1.105A.5.5 0 0 0 0 2.5v11a.5.5 0 0 0 .707.455c.882-.4 2.303-.881 3.68-1.02 1.409-.142 2.59.087 3.223.877a.5.5 0 0 0 .78 0c.633-.79 1.814-1.019 3.222-.877 1.378.139 2.8.62 3.681 1.02A.5.5 0 0 0 16 13.5v-11a.5.5 0 0 0-.293-.455c-.952-.433-2.48-.952-3.994-1.105C10.413.809 8.985.936 8 1.783"/>
                    </svg>
                    Shelfshare
                </h1>
            </div>
            <!-- Seção à direita com o formulário de cadastro -->
            <div class="right-login">
                <form class="card m-3" action="anexos/cadastrar.php" method="POST">
                    <div class="card-head">
                        <div class="card-title">
                            <h1 class="text-primary">Cadastro</h1> 
                        </div>
                        <a href="login.php" class="btn btn-primary">Fazer Login</a> <!-- Link para a página de login -->
                    </div>  
                    <div class="card-body">
                        <div class="mb-3">
                            <label for="username" class="form-label">Criar Nome de Usuário</label>
                            <input type="text" class="form-control" name="username" id="username" placeholder="Nome de Usuário"/>
                        </div>
                        <div class="mb-3">
                            <label for="email" class="form-label">Email</label>
                            <input type="email" class="form-control" name="email" id="email" aria-describedby="emailHelpId" placeholder="Email"/>
                        </div>
                        <div class="mb-3">
                            <label for="telefone" class="form-label">Telefone</label>
                            <input type="tel" class="form-control" name="telefone" id="telefone" placeholder="Telefone"/>
                        </div>
                        <div class="mb-3">
                            <label for="senha" class="form-label">Criar Senha</label>
                            <input type="password" class="form-control" name="senha" id="senha" placeholder="Senha"/>
                        </div>
                        <!-- Campo para confirmação de senha -->
                        <div class="mb-3">
                            <label for="confirmarSenha" class="form-label">Confirmar Senha</label>
                            <input type="password" class="form-control" name="confirmarSenha" id="confirmarSenha" placeholder="Senha"/>
                        </div> 
                        <!-- Botão para concluir o cadastro -->
                        <button type="submit" class="btn btn-primary">Concluir Cadastro</button> 
                    </div>
                </form>
            </div>
        </div>
    </body>
</html>