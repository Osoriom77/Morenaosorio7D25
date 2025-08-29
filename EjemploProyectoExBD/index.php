<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="css/normalize.css">
    <link rel="stylesheet" href="css/campo-texto.css">
    <link rel="stylesheet" href="css/boton.css">
    <link rel="stylesheet" href="css/login.css">
</head>
<body>
    
    <form action="panel-control.php" method="post" class="login">
        <div class="campo-texto">
            <input type="text" name="username" id="username" required>
            <label for="">Usuario</label>
        </div>

        <div class="campo-texto">
            <input type="password" name="password" id="password" required>
            <label for="">Contraseña</label>
        </div>

        <div class="boton" id="botonEnviar">
            <span class="icon-"></span>
            <p>Ingresar</p>
        </div>

    </form>

    <script>
        let loginForm = document.querySelector(".login");
        let botonSubmit = document.getElementById("botonEnviar");
        botonSubmit.addEventListener("click", ()=>{
            loginForm.submit();
        });

    </script>

</body>
</html>