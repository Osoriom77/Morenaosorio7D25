<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>

    <link rel="stylesheet" href="css/normalize.css">
    <link rel="stylesheet" href="css/campo-texto.css">
    <link rel="stylesheet" href="css/boton.css">
    <link rel="stylesheet" href="css/registro.css">

</head>
<body>
    <form action="gestion-usuario.php" method="POST" class="registro">
        <h1>agregar producto</h1>

        <div class="camposFormulario">
            <div class="campo-texto">
                <input type="text" name="username" id="" required>
                <label for="">Nombre</label>
            </div>

            <div class="campo-texto">
                <input type="password" name="password" id="" required>
                <label for="">Descripción </label>
            </div>

            <div class="campo-texto">
                <input type="text" name="name" id="" required>
                <label for="">Tecnica </label>
            </div>
            
            <div class="campo-texto">
                <input type="text" name="surname" id="" required>
                <label for=""> 	Color </label>
            </div>

            <div class="campo-texto">
                <input type="text" name="text" id="" required>
                <label for=""> Precio </label>
            </div>

            <div class="campo-texto">
                <input type="text" name="adress" id="" required>
                <label for=""> Stock </label>
            </div>

        </div>

        <div class="botoneraFormulario" id="botonEnviar">
            <div class="boton">
                <span class="icon-"></span>
                <p>Registrarse</p>
            </div>
        </div>

    </form>



    <script>
        let regForm = document.querySelector(".registro");
        let botonSubmit = document.getElementById("botonEnviar");
        botonSubmit.addEventListener("click", ()=>{
            regForm.submit();
        });

    </script>

</body>
</html>