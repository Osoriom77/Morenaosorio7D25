<?php

    include_once 'php/Conectar.php';

    //Reciben los parametros por medio de post
    $idProducto = $_POST["producto"];
    $nombre = $_POST["nombre"];

    $consulta = Conectar::conexion()->prepare("UPDATE productos SET stock = stock - :cantidad 
    WHERE idProducto = :idProducto");
    $consulta->execute();

?>