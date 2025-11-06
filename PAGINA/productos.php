<!DOCTYPE html>
<html lang="es">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Lista de Productos de Costura</title>
  <link rel="stylesheet" href="productos.css">
  <link rel="stylesheet" href="demo-files/demo.html">
  <link rel="stylesheet" href="css/barra-busqueda.css">
  <link rel="stylesheet" href="css/normalize.css">
  <link rel="stylesheet" href="fuentes/style.css">
</head>
<body>

   <form method="post" action="productos.php" class="barra-busqueda">
        <div class="busqueda-field">
            <input type="text" class="busqueda-field-texto" value="" name="busqueda" required>
            <span class="icon-search"></span>
        </div>
    </form>

    <script>
        let formBusqueda = document.querySelector(".barra-busqueda");
        let botonBusqueda = document.querySelector(".icon-search");

        botonBusqueda.addEventListener("click", ()=>{
            formBusqueda.submit();

        });

    </script>

    <?php
    //conexion a la base de datos
    if(isset($_POST["busqueda"])){
      $palabra = $_POST["busqueda"];
    }else{
      $palabra = "";
    }
    
        include_once 'Conectar.php';
        $stmt = "SELECT * FROM productos WHERE  nombre LIKE '%$palabra%' ";
        $consulta = Conectar::conexion()->prepare($stmt);
        $consulta->execute();
        $resultados = $consulta->fetchAll(PDO::FETCH_ASSOC);
        

    
  ?>

  <div class="container">
    <h1>Lista de Productos - Costura de Camperas</h1>
    
    <table class="product-table">
    <thead>
      <tr>
        <th>ID poductos</th>
        <th>Nombre</th>
        <th>Descripción</th>
        <th>color</th>
        <th>Precio</th>
        <th>Stock</th>
        <th>   </th>
      </tr>
    </thead>
    <tbody>
      
  <?php 
  
  for($i = 0; $i < sizeof($resultados); $i++){
  
  ?>

    
      <tr>
        <td><?php echo $resultados[$i]['IDProductos']?></td>
        <td><?php echo $resultados[$i]['nombre']?></td>
        <td><?php echo $resultados[$i]['descripción']?></td>
        <td><?php echo $resultados[$i]['color']?></td>
        <td><?php echo $resultados[$i]['precio']?></td>
        <td><?php echo $resultados[$i]['stock']?></td>
        <td class="acciones">
          <button class="btn baja" <?php echo "idProducto='".$resultados[$i]['IDProductos']."'"; ?>>Baja</button>
          <button class="btn modificar" <?php echo "idProducto='".$resultados[$i]['IDProductos']."'"; ?>>Modificar</button>
        
        </td>
      </tr>
      
    <script>
        let regForm = document.querySelector(".registro");
        let botonSubmit = document.getElementById("botonEnviar");
        botonSubmit.addEventListener("click", ()=>{
            regForm.submit();
        });

    </script>
  <?php 
  
  }

  ?>

      </tbody>
    </table>
  </div>
</body>
</html>
