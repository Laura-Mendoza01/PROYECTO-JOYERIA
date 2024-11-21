<!DOCTYPE html>
<html>
<head>
  <title>Dar de alta un Provedor</title>
  <meta charset="utf-8">
</head>
<body>
  <form action='<?php print RUTA_APP."provedores/borrar/"; ?>' method="POST">
    <table>
      <tr><td><label for="TPieza">Tipo de pieza:</label></td>
        <td><input type="text" name="TPieza" disabled="disabled" value="<?php print $data["TPieza"]; ?>"></td>
      </tr>
      <tr><td><label for="Tienda">Tienda:</label></td>
        <td><input type="text" name="Tienda" disabled="disabled" value="<?php print $data["Tienda"]; ?>"></td>
      </tr>
      <tr><td><label for="Cantidad">Cantidad:</label></td>
        <td><input type="text" name="Cantidad" disabled="disabled" value="<?php print $data["Cantidad"]; ?>"></td>
      </tr>
      <tr><td><input type="hidden" value="<?php print $data["id"]; ?>" name="id"></td>
        <td><input type="submit" value="Enviar"></td>
      </tr>
    </table>
    <p>ADVERTENCIA: Una vez borrado el registro NO se podrá recuperar la información.</p>
  </form>
  <a href='<?php print RUTA_APP."provedores/"; ?>'>Regresar</a>
</body>
</html>