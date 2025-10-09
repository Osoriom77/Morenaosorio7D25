<?php

    include_once 'php/Conectar.php';

    //Reciben los parametros por medio de post
    $idProducto = $_POST["producto"];


    $consulta = Conectar::conexion()->prepare("DELETE FROM compras WHERE idCompra = :idCompra");
    $consulta->execute();



?>