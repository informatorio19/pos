<?php
    include "Core/Enrutador.php";
    $enrutador = new Enrutador;

    $ruta = $_GET['url'];
    $valores = explode("/",$ruta);
   
    if(isset($valores[0])){
        $accion= $valores[0];
    }

    if(isset($valores[1])){
        $parametro = $valores[1];
        $enrutador->cargar($accion,$parametro);
    }else{
        
        $enrutador->cargar($accion,null);
    }

  
  

  
    




   
?>