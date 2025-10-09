<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php

        include_once 'php/Conectar.php';
        
        $username = $_POST["username"];
        $password = sha1( $_POST["password"] );
        
        $stmt = "SELECT * FROM usuarios WHERE username = '".$username."' AND pass = '".$password."'";
        $consulta = Conectar::conexion()->prepare($stmt);
        $consulta->execute();
        $resultados = $consulta->fetchAll(PDO::FETCH_ASSOC);

        if($resultados){
            echo "Bienvenido ".$resultados[0]['nombre']." ".$resultados[0]['apellido'];
        }else{
            header('Location: index.php');
        }
        

    ?>

</body>
</html>  