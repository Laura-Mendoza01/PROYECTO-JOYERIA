   <?php
/**
 * Libros
 */
class provedores extends Controlador
{
  private $modelo;
  /*define un objeto para acceder a los métodos definidos 
	en class LibrosModelo() */
  function __construct()
  {
    $this->modelo=$this->modelo("provedoresModelo");
  }
	/*retorna de la tabla libros un arreglo de todos los recordSet 
	y renderiza éstos en el dashBoard*/
  public function index()
  {
    $data=$this->modelo->getprovedores();
    /*renderiza en el dashBoard los datos del recordSet*/
    $this->vista("provedoresVista",$data);
  }

	/* se realiza una petición de envio de un arreglo de  
	datos, generada por un <submit> vía POST.
	verifica que variables están pasadas por el método POST
		determina si la variable está definida y la asigna, 
		si no asigna un campo vacío.
	*/
  public function modificar($id="")
  {
    if ($_SERVER['REQUEST_METHOD']=="POST")
		{
		/*recolecta atributos de un registro $id*/
		  $id = isset($_POST["id"])?$_POST["id"]:"";
		  $TPieza = isset($_POST["TPieza"])?$_POST["TPieza"]:"";
		  $Tienda = isset($_POST["Tienda"])?$_POST["Tienda"]:"";
		  $Cantidad = isset($_POST["Cantidad"])?$_POST["Cantidad"]:"";
		/* asigna y actualiza los atributos de un registro id seleccionado*/
		  $this->modelo->modificarprovedores($id, $TPieza, $Tienda, $Cantidad);
		} 
	else 
		{
			$data = $this->modelo->getprovedores($id);
			$datos = [
				"id" => $id,
				"TPieza" => $data[0]["TPieza"],
				"Tienda" => $data[0]["Tienda"],
				"Cantidad" => $data[0]["Cantidad"]
				];
			$this->vista("provedoresModificar",$datos);
    }
  }
	/*retorna y muestra recorSet seleccionado. 
	elimina un registro de la base de datos
	cuando se presiona el boton sumit <Enviar>*/
  public function borrar($id="")
  {
   if ($_SERVER['REQUEST_METHOD']=="POST")
   { 
	/*verifica la existencia de un identificador*/
      $id = isset($_POST["id"])?$_POST["id"]:"";
	/*invoca la ejecución de eliminar un registro*/
      $this->modelo->borrarprovedores($id);
    }
		/*retorna y muestra recordSet seleccionado*/
	else 
	{
		//print("muestra");
		/*retorna recorSet seleccionado por id*/
      $data=$this->modelo->getprovedores($id);
		/*indexa en cero, elimina recorSet seleccionado*/
      $datos=[
        "id"=>$id,
        "TPieza" => $data[0]["TPieza"],
				"Tienda" => $data[0]["Tienda"],
				"Cantidad" => $data[0]["Cantidad"]
      ];
	  /*actualiza vista y muestra dashboard*/
      $this->vista("provedoresBorrar",$datos);
    }
  }

  public function alta()
  {
    if ($_SERVER['REQUEST_METHOD']=="POST")
	{
      $TPieza = isset($_POST["TPieza"])?$_POST["TPieza"]:"";
      $Tienda = isset($_POST["Tienda"])?$_POST["Tienda"]:"";
      $Cantidad = isset($_POST["Cantidad"])?$_POST["Cantidad"]:"";

      $this->modelo->insertarprovedores($TPieza, $Tienda, $Cantidad);

    } else {
      $this->vista("provedoresAlta");
    }
  }
}
?>