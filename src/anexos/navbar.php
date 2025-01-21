<nav class="navbar navbar-expand-xxl p-4 sticky-top bg-primary text-light">
    <div class="container-fluid">
        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-book-half me-2" viewBox="0 0 16 16">
            <path d="M8.5 2.687c.654-.689 1.782-.886 3.112-.752 1.234.124 2.503.523 3.388.893v9.923c-.918-.35-2.107-.692-3.287-.81-1.094-.111-2.278-.039-3.213.492zM8 1.783C7.015.936 5.587.81 4.287.94c-1.514.153-3.042.672-3.994 1.105A.5.5 0 0 0 0 2.5v11a.5.5 0 0 0 .707.455c.882-.4 2.303-.881 3.68-1.02 1.409-.142 2.59.087 3.223.877a.5.5 0 0 0 .78 0c.633-.79 1.814-1.019 3.222-.877 1.378.139 2.8.62 3.681 1.02A.5.5 0 0 0 16 13.5v-11a.5.5 0 0 0-.293-.455c-.952-.433-2.48-.952-3.994-1.105C10.413.809 8.985.936 8 1.783"/>
        </svg>
        <a class="navbar-brand text-light" href="inicial.php">Shelfshare</a>
        <button class="navbar-toggler bg-light" type="button" data-bs-toggle="collapse" data-bs-target="#navbarTogglerDemo02" aria-controls="navbarTogglerDemo02" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarTogglerDemo02">
            <ul class="navbar-nav me-5">
                <li class="nav-item">
                    <a class="nav-link text-light" href="perfil.php">Meu Perfil</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link text-light" href="cadastrarlivros.php">Novo Livro</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link text-light" href="notificacoes.php">Notificações</a>
                </li>
            </ul>
            <form class="d-flex w-75" role="search" action="anexos/pesquisar.php" method="POST">
                <input class="form-control me-2" type="search" placeholder="<?php echo "O que vamos ler hoje, $username?"  ?>" aria-label="Search" id="pesquisa" name="pesquisa" required/>
                <button class="btn btn-outline-light" type="submit">Buscar</button>
            </form>
        </div>
    </div>
</nav>