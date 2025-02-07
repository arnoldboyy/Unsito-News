<nav id="navbar" class="navbar navbar-expand-lg navbar-dark fixed-top px-5 bg-dark">
  <a class="navbar-brand d-inline-block" href="#">
  UnsitoNews<p id="version">V 1.0</p></a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>
  <div class="collapse navbar-collapse navbarCollapse" id="navbarNav">
    <ul class="navbar-nav ml-auto">
      <li class="nav-item active">
        <a class="nav-link" href="<?php echo constant('URL'); 
        ?>home">Home<span class="sr-only">(current)</span></a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="<?php echo constant('URL'); 
        ?>addNew">Añadir Noticia</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="<?php echo constant('URL'); 
        ?>newsList/view">Lista de Noticias</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="<?php echo constant('URL'); 
        ?>signOut">Cerrar sesión</a>
      </li>
    </ul>
  </div>
</nav><br><br><br><br>