<?php
require_once "Conexion.php";

class Contacto {
    private $conexion;

    public function __construct() {
        $this->conexion = Conexion::conectar();
    }

    public function obtenerContactos($busqueda = "") {
        if ($busqueda != "") {
            $query = $this->conexion->prepare("SELECT * FROM contactos WHERE nombre LIKE ? OR apellido LIKE ?");
            $param = "%$busqueda%";
            $query->bind_param("ss", $param, $param);
        } else {
            $query = $this->conexion->prepare("SELECT * FROM contactos");
        }
        $query->execute();
        return $query->get_result();
    }

    public function agregarContacto($nombre, $apellido, $telefono) {
        $query = $this->conexion->prepare("INSERT INTO contactos (nombre, apellido, telefono) VALUES (?, ?, ?)");
        $query->bind_param("sss", $nombre, $apellido, $telefono);
        return $query->execute();
    }

    public function obtenerContactoPorId($id) {
        $query = $this->conexion->prepare("SELECT * FROM contactos WHERE id = ?");
        $query->bind_param("i", $id);
        $query->execute();
        return $query->get_result()->fetch_assoc();
    }

    public function actualizarContacto($id, $nombre, $apellido, $telefono) {
        $query = $this->conexion->prepare("UPDATE contactos SET nombre = ?, apellido = ?, telefono = ? WHERE id = ?");
        $query->bind_param("sssi", $nombre, $apellido, $telefono, $id);
        return $query->execute();
    }

    public function eliminarContacto($id) {
        $query = $this->conexion->prepare("DELETE FROM contactos WHERE id = ?");
        $query->bind_param("i", $id);
        return $query->execute();
    }
}
?>
