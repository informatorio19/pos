<?php

    class Enrutador{


        public function cargar($accion,$parametro){

           switch ($accion) {
               case 'alumnos':
                include "Controlador/AlumnosControlador.php";
                $alumno = new AlumnosControlador;
                $alumno->listar();
                break;

                case 'nuevoalumno':
                include "Controlador/AlumnosControlador.php";
                $alumno = new AlumnosControlador;
                $alumno->crear();
                break;

                case 'eliminaralumno':
                include "Controlador/AlumnosControlador.php";
                $alumno = new AlumnosControlador;
                $alumno->eliminar($parametro);
                break;

                case 'buscaralumno':
                include "Controlador/AlumnosControlador.php";
                $alumno = new AlumnosControlador;
                $alumno->buscar($parametro);
                break;      

               default:
                   echo 'No se encontro accion';
                   break;
           }

        }



    }


?>