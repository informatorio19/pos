<?php

    // $con = new mysqli("localhost","root","","pos");
    // $con->query("select * from articulos");

    class Conexion{
        private $host;
        private $user;
        private $pass;
        private $bd;

        public $con;

        function __construct(){
            $this->host = "localhost";
            $this->user = "root";
            $this->pass = "";
            $this->bd = "pos";

            
            $this->con = new mysqli(
                        $this->host,
                        $this->user,
                        $this->pass,
                        $this->bd);

        }

        public function consulta($sql){
            $this->con->query($sql);
        }

        public function retorno($sql){
            return $this->con->query($sql);
        }

    }

    

    

?>  