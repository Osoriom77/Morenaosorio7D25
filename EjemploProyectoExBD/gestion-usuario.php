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
                $Nombre = $_POST["Nombre"];
                $Descripción  = sha1( $_POST["Descripcion"] );
                $Tecnica = ($_POST["Tecnica"]);
                $Color = ($_POST["Color"]);
                $Precio = ($_POST["Precio"]);
                $Stock = ($_POST["Stock"]);

                
                $stmt = "INSERT INTO usuarios(username, pass, nombre, apellido, fecNac, domicilio) 
                    VALUES ('".$Nombre."','".$Descripción."','".$Tecnica."','".$Color."','".$Precio."','".$Stock."')" ;
                $consulta = Conectar::conexion()->prepare($stmt);
                $consulta->execute();
                
                header('Location: index.php');
                

     ?>
</body>
</html>  