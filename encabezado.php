<?php 

function cargarNavbarIndex()
{
  echo '
  <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
  <a class="navbar-brand" href="">TRUEQUE</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>
  <div class="collapse navbar-collapse" id="navbarNav">
    <ul class="navbar-nav">
      <li class="nav-item">
        <a class="nav-link" href="productos.php">Productos</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="faq.php">Preguntas Frecuentes</a>
      </li>

    </ul>
  </div>
  <form class="form-inline my-2 my-lg-0">
                <input class="control form-control mr-sm-2" type="search" placeholder="Buscar" aria-label="Buscar" >
                <button class="btn btn-outline-primary my-2 my-sm-0" type="submit">Ir</button>
              </form>
</nav>';
}

function cargarNavbarLogeado()
{
  echo '
  <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
  <a class="navbar-brand" href="">TRUEQUE</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>
  <div class="collapse navbar-collapse" id="navbarNav">
    <ul class="navbar-nav">
      <li class="nav-item active">
        <a class="nav-link" href="index.php">Home <span class="sr-only">(current)</span></a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="productos.php">Productos</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="faq.php">FAQ</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="perfil.php">Tu Perfil</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="logOut.php">Cerrar sesion</a>
      </li>
    </ul>
  </div>
  <form class="form-inline my-2 my-lg-0">
                <input class="control form-control mr-sm-2" type="search" placeholder="Buscar" aria-label="Buscar" >
                <button class="btn btn-outline-primary my-2 my-sm-0" type="submit">Ir</button>
              </form>
</nav>';
}

?>
