<?php

class MySQLdb{
    private $host = "localhost";
    private $usuario = "root";
    private $clave = ""; 
    private $db = "joyeria";
    private $puerto = ""; // MAMP necesita el puerto
    private $conn;
  
    function __construct()
    {
        // Conexión a la base de datos
        $this->conn = mysqli_connect($this->host, $this->usuario, $this->clave, $this->db);
        
        // Verificar si hubo error en la conexión
        if (mysqli_connect_errno()) {
            printf("Error en la conexión con la base de datos: %s\n", mysqli_connect_error());
            exit();
        }

        // Establecer el conjunto de caracteres
        if (!mysqli_set_charset($this->conn, "utf8")) {
            printf("Error en la conversión de caracteres: %s\n", mysqli_error($this->conn));
            exit();
        }
    }

    /**
     * Realiza una consulta SELECT y devuelve los resultados en un array.
     */
    public function querySelect($sql)
    {
        $data = array();
        if ($r = $this->conn->query($sql)) {
            while ($row = mysqli_fetch_assoc($r)) {
                array_push($data, $row);
            }
        } else {
            printf("Error en la consulta SELECT: %s\n", mysqli_error($this->conn));
        }
        return $data;
    }

    /**
     * Realiza una consulta INSERT, UPDATE o DELETE
     * Utiliza consultas preparadas para evitar inyecciones SQL.
     */
    public function queryNoSelect($sql, $params = array())
    {
        // Preparar la consulta
        if ($stmt = $this->conn->prepare($sql)) {
            // Si hay parámetros, los enlazamos a la consulta preparada
            if (!empty($params)) {
                // Determinamos los tipos de los parámetros (s = string, i = integer, d = double)
                $types = str_repeat('s', count($params)); // Asumiendo que todos son strings
                $stmt->bind_param($types, ...$params);
            }
            // Ejecutamos la consulta
            return $stmt->execute();
        } else {
            printf("Error en la consulta (no SELECT): %s\n", mysqli_error($this->conn));
            return false;
        }
    }

    /**
     * Cierra la conexión con la base de datos
     */
    public function close()
    {
        mysqli_close($this->conn);
    }
}
?>
