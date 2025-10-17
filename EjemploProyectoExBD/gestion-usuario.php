<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
                // Insertar como nuevo registro a la base de datos
                include_once 'php/Conectar.php';
                // Create - RUD
                $Nombre = $_POST["nombre"];
                $Descripción  = sha1( $_POST["descripcion"] );
                $Tecnica = ($_POST["tecnica"]);
                $Color = ($_POST["color"]);
                $Precio = ($_POST["precio"]);
                $Stock = ($_POST["stock"]);

                
                $stmt = "INSERT INTO usuarios(username, pass, nombre, apellido, fecNac, domicilio) 
                    VALUES ('".$username."','".$password."','".$nombre."','".$apellido."','".$fechaNac."','".$domicilio."')" ;
                $consulta = Conectar::conexion()->prepare($stmt);
                $consulta->execute();
                
                header('Location: index.php');
                

     ?>
</body>
</html>  