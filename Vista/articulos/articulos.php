<?php

   include "Vista/plantilla/encabezado.php";
?>
   <h2><center>Listado de Articulos desde la Vista</center></h2>

    <a href="?url=nuevoarticulo" class="btn btn-primary">Crear Nuevo Articulo</a>

    <br></br>

   <div class="row">
        <table class="table">
            <thead class="thead-dark">
                <tr>
                <th scope="col">ID</th>
                <th scope="col">Articulo</th>
                <th scope="col">Precio</th>
                <th scope="col">Stock</th>
                </tr>
            </thead>
            <tbody>
            <?php foreach ($articulos as $articulo): ?>
                <tr>
                <td><?php  echo $articulo['id']; ?></td>
                <td><?php  echo $articulo['nombre']; ?></td>
                <td><?php  echo $articulo['precio']; ?></td>
                <td><?php  echo $articulo['stock']; ?></td>
                </tr>
            <?php endforeach; ?>
            </tbody>
        </table>
   </div>

<?php
    include "Vista/plantilla/pie.php";
?>