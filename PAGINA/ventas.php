<!DOCTYPE html>
<html lang="es">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Camperas de Egresados 2025</title>
  <link rel="stylesheet" href="venta.css">
</head>
<body>

  <?php
    //conexion a la base de datos

        include_once 'Conectar.php';
      
        $stmt = "SELECT * FROM  productos ";
        $consulta = Conectar::conexion()->prepare($stmt);
        $consulta->execute();
        $resultados = $consulta->fetchAll(PDO::FETCH_ASSOC);
        

    // traer toda la informacion

    //
  ?>

  <header>
    <h1>Camperas de Egresados 2025</h1>
  
  </header>

  <section class="productos">

  <?php 
  
  for($i = 0; $i < sizeof($resultados); $i++){
  
  ?>

    <div class="producto">
      <h2><?php echo $resultados[$i]['nombre']?></h2>
      <p><?php echo $resultados[$i]['descripción']?></p>
      <span class="precio"><?php echo $resultados[$i]['precio']?></span>
      <button>Personalizar</button>
    </div>

  <?php 
  
  }

  ?>


  </section>

  <footer>
    <p>📞 Pedidos  al 3454103226</p>
    <p>© 2025 Camperas de  Egresados - Todos a tu estilo</p>
  </footer>

</body>
</html>
