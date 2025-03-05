<?php
class Modelo {
    // Atributos de la clase
    private $Modelo;
    private $db;
    private $datos;

    public function __construct() {
        $this->Modelo = array();
        $this->db = new PDO("mysql:host=localhost;dbname=mi_base_datos", "root", "");
    }

    public function insertar($tabla, $data) {
        $consulta = "INSERT INTO " . $tabla . " VALUES (NULL, " . $data . ");";
        $resultado = $this->db->query($consulta);
        if ($resultado) {
            return true;
        } else {
            return false;
        }
    }

    public function mostrar($tabla, $condicion) {
        $consulta = "SELECT * FROM " . $tabla . " WHERE " . $condicion . ";";
        $resu = $this->db->query($consulta);
        if ($resu) {
            $this->datos = $resu->fetchAll(PDO::FETCH_ASSOC);
        } else {
            $this->datos = [];
        }
        return $this->datos;
    }

    public function actualizar($tabla, $data, $condicion) {
        $consulta = "UPDATE " . $tabla . " SET " . $data . " WHERE " . $condicion;
        $resultado = $this->db->query($consulta);
        if ($resultado) {
            return true;
        } else {
            return false;
        }
    }

    public function eliminar($tabla, $condicion) {
        $consulta = "DELETE FROM " . $tabla . " WHERE " . $condicion;
        $resultado = $this->db->query($consulta);
        if ($resultado) {
            return true;
        } else {
            return false;
        }
    }
}
?>
