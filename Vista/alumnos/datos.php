<?php
    include "../../Controlador/AlumnosControlador.php";

$nombre=$_POST['nombre'];
$dni=$_POST['dni'];
$telefono=$_POST['telefono'];

$alumno= new AlumnosControlador;
$alumno->guardar($nombre,$dni,$telefono);

header("location:../../index.php?url=alumnos");
?>