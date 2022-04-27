<?php

        $conexion = new mysqli("localhost", "root", "" , "artesanias");
        if($conexion){
            echo "si usted ve este mensaje la db esta abierta";
        }else{
            echo "falla en la conexion";
        }

?>