<?php
/**
 * @author Raúl Caro Pastorino
 * @copyright Copyright © 2017 Raúl Caro Pastorino
 * @license https://www.gnu.org/licenses/gpl-3.0-standalone.html
 */
?>

<header class="page-header">
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-10">
                <h1 class="muted">Tienda de libros</h1>
            </div>
        </div>
    </div>
</header>

<div class="container">
    <nav class="navbar navbar-default">
        <div class="container-fluid">
          <div class="navbar-header">
            <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
              <span class="sr-only">Toggle navigation</span>
              <span class="icon-bar"></span>
              <span class="icon-bar"></span>
              <span class="icon-bar"></span>
            </button>
            <a class="navbar-brand" href="#">Books Store</a>
          </div>
          <div id="navbar" class="navbar-collapse collapse">
            <ul class="nav navbar-nav">
              <li class="active"><a href="#">Menú</a></li>
              <li><a href="#">About</a></li>
              <li><a href="#">Contacto</a></li>
              <li class="dropdown">
                <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Ver más <span class="caret"></span></a>
                <ul class="dropdown-menu">
                  <li><a href="#">Esto va a 1</a></li>
                  <li><a href="#">Esto va a 2</a></li>
                  <li><a href="#">Esto va a 3</a></li>
                  <li role="separator" class="divider"></li>
                  <li class="dropdown-header">Subtítulo de menú</li>
                  <li><a href="#">Esto va a 4</a></li>
                  <li><a href="#">Esto va a 5</a></li>
                </ul>
              </li>
            </ul>
            <ul class="nav navbar-nav navbar-right">
              <li class="active"><a href="./">Otro 1 <span class="sr-only">(current)</span></a></li>
              <li><a href="../navbar-static-top/">Atrás</a></li>
              <li><a href="../navbar-fixed-top/">Adelante</a></li>
            </ul>
          </div><!--/.nav-collapse -->
        </div><!--/.container-fluid -->
    </nav>
</div>
