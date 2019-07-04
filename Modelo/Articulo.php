<?php

    include "Conexion.php";

    class Articulo{

        private $id;
        private $nombre;
        private $precio;
        private $stock;

        public $conexion;

        function __construct(){

            $this->conexion = new Conexion;
        }

        public function listar(){
            $sql = "SELECT * FROM articulos";
            return $this->conexion->retorno($sql);
        }

        public function buscar(){
            $sql = "SELECT * FROM articulos WHERE id=$this->id";
            return $this->conexion->retorno($sql)->fetch_array();
        }

        // public function buscarNombre($articulo){
        //     $sql = "SELECT * FROM articulos WHERE nombre LIKE '%$articulo%'";
        //     return $this->conexion->retorno($sql);
        // }   

        public function eliminar(){

            $sql = "DELETE FROM articulos WHERE id=$this->id";
            $this->conexion->consulta($sql);

        }

        public function insertar(){
            $sql = "INSERT INTO articulos (nombre,precio,stock) 
                    VALUES('$this->nombre',$this->precio,$this->stock)";

            $this->conexion->consulta($sql);

        }

        public function actualizar(){
            $sql = "UPDATE articulos 
                    SET nombre='$this->nombre', precio=$this->precio, stock=$this->stock 
                    WHERE id=$this->id";

             $this->conexion->consulta($sql);


        }


        public function setId($id){
            $this->id = $id;
        }

        public function setNombre($nombre){
            $this->nombre = $nombre;
        }

        public function setPrecio($precio){
            $this->precio = $precio;
        }

        public function setStock($stock){
            $this->stock = $stock;
        }


    }


   
    
    

?>