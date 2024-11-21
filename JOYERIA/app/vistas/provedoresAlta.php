<!DOCTYPE html>
<html lang="es">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Dar de alta un proveedor</title>
  <link rel="shortcut icon" href="<?php print RUTA_APP.'/img/favicon.jpg'; ?>">
  <link rel="stylesheet" type="text/css" href="<?php print RUTA_APP.'/css/main.css'; ?>">
</head>
<body>
  <h1>Dar de alta un Proveedor</h1>
  
  <!-- Protege el formulario con un token CSRF -->
  <fieldset>
    <form action='<?php print RUTA_APP."provedores/alta/"; ?>' method="POST">
      
      <!-- CSRF Token -->
      <input type="hidden" name="csrf_token" value="<?php echo $_SESSION['csrf_token']; ?>">

      <table>
        <tr>
          <td><label for="TPieza">Tipo de pieza:</label></td>
          <td class="cien">
            <input type="text" name="TPieza" id="TPieza" required>
          </td>
        </tr>
        <tr>
          <td><label for="Tienda">Tienda:</label></td>
          <td class="cien">
            <input type="text" name="Tienda" id="Tienda" required>
          </td>
        </tr>
        <tr>
          <td><label for="Cantidad">Cantidad:</label></td>
          <td class="cien">
            <input type="number" name="Cantidad" id="Cantidad" required min="1">
          </td>
        </tr>
        <tr>
          <td>&nbsp;</td>
          <td><input type="submit" value="Enviar"></td>
        </tr>
      </table>
    </form>
  </fieldset>

  <a href='<?php print RUTA_APP."provedores/"; ?>'>Regresar</a>
</body>
</html>
