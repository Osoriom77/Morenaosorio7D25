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
                $username = $_POST["username"];
                $password = sha1( $_POST["password"] );
                $nombre = ($_POST["name"]);
                $apellido = ($_POST["surname"]);
                $domicilio = ($_POST["adress"]);
                $fechaNac = ($_POST["date"]);

                
                $stmt = "INSERT INTO usuarios(username, pass, nombre, apellido, fecNac, domicilio) 
                    VALUES ('".$username."','".$password."','".$nombre."','".$apellido."','".$fechaNac."','".$domicilio."')" ;
                $consulta = Conectar::conexion()->prepare($stmt);
                $consulta->execute();
                
                header('Location: index.php');
                

     ?>
</body>
</html>  