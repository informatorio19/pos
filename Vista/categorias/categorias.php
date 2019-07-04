<?php

   include "Vista/plantilla/encabezado.php";
?>
<h2>Listado de Categorias desde la Vista</h2>

<a href="" class="btn btn-primary">Crear Nueva Categoria</a>
<br></br>

<div class="row">
     <table class="table">
         <thead class="thead-dark">
             <tr>
             <th scope="col">ID</th>
             <th scope="col">Categoria</th>
             </tr>
         </thead>
         <tbody>
         <?php foreach ($categorias as $categoria): ?>
             <tr>
             <td><?php  echo $categoria['id']; ?></td>
             <td><?php  echo $categoria['categoria']; ?></td>
             </tr>
         <?php endforeach; ?>
         </tbody>
     </table>
</div>


<?php

   include "Vista/plantilla/pie.php";
?>