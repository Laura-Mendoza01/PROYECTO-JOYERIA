<?php
/**
 * LibrosModelo.php     
 * 	capa modelo contiene a la interfaz <$db> para gestionar 
 * 	las operaciones de lectura/escritura/eleminación de un recordSet
 * 	de una tabla en base de datos.
 * LibrosModelo.php contiene:
 * 	i)Define una interfaz para gestionar consultas a una base de datos.
 * 	Mediante una consulta selectiva <querySelect()> se tiene que:
 * 	ii) getLibros() retorna un arreglo de una colección de recordSet
 *      retorna todos los elementos de la tabla.
 * 	iii)getLibro() retorna un arreglo de UN recorSet.
 * 	Mediante una consulta NO selectiva  <queryNoSelect()> 
     se tiene que:
 * 	iv) insertarLibros() inserta un recorSet y de ser verdadero muestra el dashBoard
 * 	v) modificarLibros() actualiza un recordSet y de ser verdadero muestra el dashBoard
 * 	vi) borrarLibro() eleimina un recorSet y de ser verdadero muestra el dashBoard.  
 */

 
class provedoresModelo
{
  private $db;
  /*retorna una interfaz para gestionar operaciones de 
  directivas con bases de datos*/
  function __construct()
  {
    $this->db = new MySQLdb(); // Define interfaz para gestionar PHP con base de datos
  }

  /*retorna un arreglo de todos los elementos tipo recordSet 
  de la tabla provedores*/
  public function getprovedores()
  {
    $data = $this->db->querySelect("SELECT * FROM provedores");
    return $data;
  }

  /*retorna un solo recordSet de la tabla provedores basado en su id*/
  public function getproveedor($id)
  {
    $sql = "SELECT * FROM provedores WHERE id = ?";
    $params = [$id];  // Se utiliza un parámetro para la consulta
    $data = $this->db->querySelect($sql, $params);
    return $data;
  }

  /*inserta un recordSet en la tabla provedores*/
  public function insertarprovedores($TPieza, $Tienda, $Cantidad)
  { 
    /*confecciona una consulta de inserción de un recordSet*/
    $sql = "INSERT INTO provedores (id, TPieza, Tienda, Cantidad) VALUES (0, ?, ?, ?)"; // 0: autoincrementa el ID
    $params = [$TPieza, $Tienda, $Cantidad];

    /*ejecuta la sentencia de inserción*/
    if ($this->db->queryNoSelect($sql, $params)) {
      /*redirecciona al dashboard de provedores*/
      header("Location: " . RUTA_APP . "provedores");
      exit();
    } else {
      exit("Error al insertar los datos del proveedor");
    }
  }

  /*actualiza un recordSet en la tabla provedores mediante su id*/
  public function modificarprovedores($id, $TPieza, $Tienda, $Cantidad)
  {
    /*confecciona la sentencia de actualización*/
    $sql = "UPDATE provedores SET TPieza = ?, Tienda = ?, Cantidad = ? WHERE id = ?";
    $params = [$TPieza, $Tienda, $Cantidad, $id];

    /*ejecuta la sentencia de actualización*/
    if ($this->db->queryNoSelect($sql, $params)) {
      /*redirecciona al dashboard de provedores*/
      header("Location: " . RUTA_APP . "provedores");
      exit();
    } else {
      exit("Error al modificar los datos del proveedor");
    }
  }

  /*borra un registro seleccionado mediante su id*/
  public function borrarprovedores($id)
  {
    /*confecciona la sentencia para borrar un registro*/
    $sql = "DELETE FROM provedores WHERE id = ?";
    $params = [$id];

    /*ejecuta la sentencia de eliminación de registro*/
    if ($this->db->queryNoSelect($sql, $params)) {
      /*redirecciona al dashboard de provedores*/
      header("Location: " . RUTA_APP . "provedores");
      exit();
    } else {
      exit("Error al borrar proveedor");
    }
  }
}
?>
