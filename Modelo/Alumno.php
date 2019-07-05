<?php

    include "Conexion.php";

    class Alumno{

        private $id;
        private $nombre;
        private $dni;
        private $telefono;

        public $conexion;

        function __construct(){

            $this->conexion = new Conexion;
        }

        public function listar(){
            $sql = "SELECT * FROM alumnos";
            return $this->conexion->retorno($sql);
        }

        public function buscar(){
            $sql = "SELECT * FROM alumnos WHERE id=$this->id";
            return $this->conexion->retorno($sql)->fetch_array();
        } 

        public function eliminar(){

            $sql = "DELETE FROM alumnos WHERE id=$this->id";
            $this->conexion->consulta($sql);

        }

        public function insertar(){
            $sql = "INSERT INTO alumnos (nombre,dni,telefono) 
                    VALUES('$this->nombre',$this->dni,$this->telefono)";

            $this->conexion->consulta($sql);

        }

        public function actualizar(){
            $sql = "UPDATE alumnos 
                    SET nombre='$this->nombre', dni=$this->dni, telefono=$this->telefono 
                    WHERE id=$this->id";

             $this->conexion->consulta($sql);


        }


        public function setId($id){
            $this->id = $id;
        }

        public function setNombre($nombre){
            $this->nombre = $nombre;
        }

        public function setDni($dni){
            $this->dni = $dni;
        }

        public function setTelefono($telefono){
            $this->telefono = $telefono;
        }


    }
?>