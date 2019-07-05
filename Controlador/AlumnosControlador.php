<?php

    class AlumnosControlador{

        public function listar(){
          include "Modelo/Alumno.php";  
          $alumno = new Alumno;
          $alumnos =  $alumno->listar();
          include "Vista/alumnos/alumnos.php";

        }
        public function guardar($nombre,$dni,$telefono){
            include "../../Modelo/Alumno.php";

            $alumno = new Alumno;
            $alumno->setNombre($nombre);
            $alumno->setDni($dni);
            $alumno->setTelefono($telefono);
            $alumno->insertar();
        }

        public function crear(){
            include "Vista/alumnos/nuevo.php";
        }

        public function eliminar($id){
            include "Modelo/Alumno.php";
            $alumno = new Alumno;
            $alumno->setId($id);
            $alumno->eliminar();
        }

        public function buscar($id){
            include "Vista/alumnos/ver.php";
        }

    }


?>