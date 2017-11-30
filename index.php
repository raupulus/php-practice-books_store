<!DOCTYPE html>
<?php
/**
 * @author Raúl Caro Pastorino
 * @copyright Copyright © 2017 Raúl Caro Pastorino
 * @license https://www.gnu.org/licenses/gpl-3.0-standalone.html
 */
?>
<html lang="es">
    <?php require 'head.php' ?>
    <body>
        <?php require 'header.php' ?> <!--Títulos y menús del sitio-->
        <?php require 'auxiliar.php' ?>
        <div id="boxContent" class="content container">
            <div class="col-md-10 col-md-offset-1">
                <?php
                $pdo = conectar();
                $sent = $pdo->prepare("SELECT peliculas.id,
                                              titulo,
                                              anyo,
                                              left(sinopsis, 40) AS sinopsis,
                                              duracion,
                                              genero_id,
                                              genero
                                         FROM peliculas
                                         JOIN generos ON genero_id = generos.id
                                        WHERE lower(titulo) LIKE lower('%' || :titulo || '%')");
                $sent->execute([':titulo' => $titulo]);
                ?>

                <table class="table table-striped table-bordered">
                    <tr>
                        <th>Nombre</th>
                        <td>Autor</td>
                        <td>Año</td>
                        <td>Descripción</td>
                    </tr>

                    <tr>
                        <td>El libro de la selva</td>
                        <td>Pepe Cervatana</td>
                        <td>1493</td>
                        <td>Pepe camina por la selva y escribe un libro</td>
                    </tr>
                </table>
            </div>
        </div>
        <?php require 'footer.php' ?>
    </body>
</html>
