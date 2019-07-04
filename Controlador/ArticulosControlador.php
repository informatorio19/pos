<?php


    class ArticulosControlador{

        public function listar(){
          include "Modelo/Articulo.php";  
          $articulo = new Articulo;
          $articulos =  $articulo->listar();
          include "Vista/articulos/articulos.php";

        }
        public function guardar($nombre,$precio,$stock){
            include "../../Modelo/Articulo.php";

            $articulo = new Articulo;
            $articulo->setNombre($nombre);
            $articulo->setPrecio($precio);
            $articulo->setStock($stock);
            $articulo->insertar();
        }
        public function crear(){
            include "Vista/articulos/nuevo.php";
        }

        public function eliminar($parametro){
            echo "eliminando el articulo:".$parametro;
        }

        public function buscar($id){
            include "Vista/articulos/ver.php";
        }

    }


?>