<header>
    <!-- Fixed navbar -->
    <nav class="navbar navbar-expand-md navbar-dark sticky-top bg-red">
        <div class="container">
            <a class="navbar-brand" href="?page=inicio"><b>Finder Food</b></a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarCollapse" aria-controls="navbarCollapse" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarCollapse">
                <ul class="navbar-nav mr-auto">
                    <li class="nav-item active">
                        <a class="nav-link" href="?page=inicio">Inicio <span class="sr-only">(current)</span></a>
                    </li>
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            Recetas
                        </a>
                        <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                            <a class="dropdown-item" href="?page=comidas">Comidas</a>
                            <a class="dropdown-item" href="?page=postres">Postres</a>
                            <a class="dropdown-item" href="?page=desayunos">Desayunos</a>
                            <a class="dropdown-item" href="?page=ensaladas">Ensaladas</a>
                            <a class="dropdown-item" href="#">Botanas</a>
                            <a class="dropdown-item" href="#">Entradas</a>
                            <a class="dropdown-item" href="#">Sopas</a>
                            <a class="dropdown-item" href="#">Guarnisiones</a>
                            <a class="dropdown-item" href="#">Bebidas</a>
                            <a class="dropdown-item" href="#">Papillas</a>
                        </div>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="?page=menu-admin">Mi menu</a>
                    </li>
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            Procesos
                        </a>
                        <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                            <a class="dropdown-item" href="?page=estadistica-usuarios">Estadistica de usuarios</a>
                            <a class="dropdown-item" href="?page=estadistica-platillos">Estadistica de platillos</a>
                        </div>
                    </li>
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            Catalogos
                        </a>
                        <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                            <a class="dropdown-item" href="?page=listado-usuarios">Usuarios</a>
                            <a class="dropdown-item" href="?page=listado-platillos">Platillos</a>
                            <a class="dropdown-item" href="?page=listado-categorias">Categorias</a>
                            <a class="dropdown-item" href="?page=listado-visitas">Visitas</a>
                        </div>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="?page=ayuda">Ayuda</a>
                    </li>
                </ul>
                <div>
                    <a href="controllers/controller.logout.php" class="btn btn-outline-white my-2 my-sm-0">Salir</a>
                </div>
            </div>
        </div>
    </nav>
</header>