<nav class="navbar navbar-expand-lg navbar-dark bg-primary">
  <a class="navbar-brand" href="#">Objeto de Aprendizaje</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarColor01" aria-controls="navbarColor01" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>

  <div class="collapse navbar-collapse" id="navbarColor01">
    <ul class="navbar-nav mr-auto">
      <li class="nav-item active">
        <a class="nav-link" href="lecciones.php"><i class="fas fa-book"></i> Lista de lecciones <span class="sr-only">(current)</span></a>
      </li>
      <li class="nav-item active">
        <a class="nav-link" href="muro.php"><i class="fas fa-star"></i> Muro del conocimiento <span class="sr-only">(current)</span></a>
      </li>
    </ul>
    <div class="form-inline my-2 my-lg-0">
      <a href="index.php"><button class="btn btn-secondary my-2 my-sm-0">Salir</button></a> 
</div>
  </div>
</nav>
<?php if(!isset($_SESSION['leccion'])){
   header("location: index.php");
} ?>