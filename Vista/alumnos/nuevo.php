<?php

   include "Vista/plantilla/encabezado.php";
?>
<h1>FORMULARIO PARA INGRESAR UN NUEVO ALUMNO</h1>

<form action="Vista/alumnos/datos.php" method="POST">
  <div class="form-group">
    <label>Nombre</label>
    <input type="text" class="form-control" name="nombre" placeholder="Ingrese el nombre del alumno">
  </div>
  <div class="form-group">
    <label>DNI</label>
    <input type="text" class="form-control" name="dni" placeholder="Ingrese el DNI del alumno">
  </div>
  <div class="form-group">
    <label>Telefono</label>
    <input type="text" class="form-control" name="telefono" placeholder="Ingrese un N° de telefono">
  </div>
  
  <button type="submit" class="btn btn-primary">Guardar</button>
</form>

<?php

   include "Vista/plantilla/pie.php";
?>