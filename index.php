<?php
require_once "controladores/ContactoControlador.php";
$busqueda = $_GET['buscar'] ?? '';
$resultado = $contacto->obtenerContactos($busqueda);
include "vistas/listar.php";
?>



