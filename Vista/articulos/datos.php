<?php
    include "../../Controlador/ArticulosControlador.php";

$nombre=$_POST['nombre'];
$precio=$_POST['precio'];
$stock=$_POST['stock'];

$articulo= new ArticulosControlador;
$articulo->guardar($nombre,$precio,$stock);

header("location:../../index.php?url=articulos");
?>