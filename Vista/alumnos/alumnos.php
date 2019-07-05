<?php

   include "Vista/plantilla/encabezado.php";
?>
   <h2><center>Listado de Alumnos</center></h2>

    <a href="?url=nuevoalumno" class="btn btn-primary">Crear Nuevo Alumno</a>

    <br></br>

   <div class="row">
        <table class="table">
            <thead class="thead-dark">
                <tr>
                <th scope="col">ID</th>
                <th scope="col">Nombre</th>
                <th scope="col">DNI</th>
                <th scope="col">Telefono</th>
                </tr>
            </thead>
            <tbody>
            <?php foreach ($alumnos as $alumno): ?>
                <tr>
                <td><?php  echo $alumno['id']; ?></td>
                <td><?php  echo $alumno['nombre']; ?></td>
                <td><?php  echo $alumno['dni']; ?></td>
                <td><?php  echo $alumno['telefono']; ?></td>
                
                </tr>
            <?php endforeach; ?>
            </tbody>
        </table>
   </div>

<?php
    include "Vista/plantilla/pie.php";
?>