<!DOCTYPE html>
<html lang="es">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Lista de Proveedores</title>
  <link rel="shortcut icon" href="<?php print RUTA_APP.'/img/favicon.jpg'; ?>">
  <link rel="stylesheet" type="text/css" href="<?php print RUTA_APP.'/css/main.css'; ?>">
</head>
<body>
  <h1>Lista de Proveedores</h1>
  <table>
    <thead>
      <tr>
        <th>id</th>
        <th>Tipo de Pieza</th>
        <th>Tienda</th>
        <th>Cantidad</th>
        <th>Modificar</th>
        <th>Borrar</th>
      </tr>
    </thead>
    <tbody>
      <?php
        // Usamos foreach en lugar de un for para iterar sobre los datos
        foreach ($data as $proveedor) {
          // Usamos htmlspecialchars para prevenir XSS
          $id = htmlspecialchars($proveedor["id"]);
          $tipoPieza = htmlspecialchars($proveedor["TPieza"]);
          $tienda = htmlspecialchars($proveedor["Tienda"]);
          $cantidad = htmlspecialchars($proveedor["Cantidad"]);
          
          // Imprimimos cada fila de datos
          echo "<tr>";
          echo "<td>$id</td>";
          echo "<td>$tipoPieza</td>";
          echo "<td>$tienda</td>";
          echo "<td>$cantidad</td>";
          echo "<td><a href='" . RUTA_APP . "provedores/modificar/$id'>Modificar</a></td>";
          echo "<td><a href='" . RUTA_APP . "provedores/borrar/$id'>Borrar</a></td>";
          echo "</tr>";
        }
      ?>
    </tbody>
  </table>
  <br>
  <a href='<?php print RUTA_APP."provedores/alta/"; ?>'>Dar de alta un Proveedor</a>
</body>
</html>
