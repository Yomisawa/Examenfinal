<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="style.css">
    
</head>
<body>
    <?php
    //abrir la coneccion a la base datos
    $pdo_options[PDO::ATTR_ERRMODE]=PDO::ERRMODE_EXCEPTION;
    $conexion = new PDO('mysql:host=localhost;dbname=final_0907-23-11016', 'root','',$pdo_options);
    
  
    //ejecutamos la consulta
    $select = $conexion->query("SELECT Codigo, Nombre, Precio, Existencia From producto");
   ?>
   <div class= "tabla"> 
  <table border="3">
   <thead>
    <tr>
      <th>Codigo</th>
      <th>Nombre</th>
      <th>Precio</th>
      <th>Existencia</th>
</div>

</tr>
<?php foreach($select ->fetchAll() as $producto) { ?>
    <tr>
      <td> <?php echo$producto ["Codigo"] ?> </td>
      <td> <?php echo$producto ["Nombre"] ?> </td>
      <td> <?php echo$producto ["Precio"] ?> </td>
      <td> <?php echo$producto ["Existencia"] ?> </td>
      <td> <form method="POST">
        </form>
     <?php } ?>
</head>
<tbody>
    </tbody>
  </table>
</body>
</html>