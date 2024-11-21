<!DOCTYPE html>
<html>
<head>
  <title>Modificar dato del Proveedor</title>
  <meta charset="utf-8">
</head>
<body>
  <h1>Modificar Proveedor</h1>
  <form action='<?php print RUTA_APP."provedores/modificar/"; ?>' method="POST">
    <table>
      <tr>
        <td><label for="TPieza">Tipo de pieza:</label></td>
        <td><input type="text" name="TPieza" readonly value="<?php print htmlspecialchars($data["TPieza"]); ?>"></td>
      </tr>
      <tr>
        <td><label for="Tienda">Tienda:</label></td>
        <td><input type="text" name="Tienda" readonly value="<?php print htmlspecialchars($data["Tienda"]); ?>"></td>
      </tr>
      <tr>
        <td><label for="Cantidad">Cantidad:</label></td>
        <td><input type="text" name="Cantidad" readonly value="<?php print htmlspecialchars($data["Cantidad"]); ?>"></td>
      </tr>
      <tr>
        <td><input type="hidden" value="<?php print htmlspecialchars($data["id"]); ?>" name="id"></td>
        <td><input type="submit" value="Enviar"></td>
      </tr>
    </table>
  </form>
  <a href='<?php print RUTA_APP."provedores/"; ?>'>Regresar</a>
</body>
</html>
