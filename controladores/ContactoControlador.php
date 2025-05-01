<?php
require_once "modelos/Contacto.php";

$contacto = new Contacto();
$accion = $_GET['accion'] ?? '';



if ($accion == 'agregar') {
    if (!empty($_POST['nombre']) && !empty($_POST['apellido'])) {
        $contacto->agregarContacto($_POST['nombre'], $_POST['apellido'], $_POST['telefono']);
        header("Location: index.php");
    } else {
        echo "Todos los campos son obligatorios.";
    }
}



if ($accion == 'editar') {
    if (!empty($_POST['id']) && !empty($_POST['nombre']) && !empty($_POST['apellido'])) {
        $contacto->actualizarContacto($_POST['id'], $_POST['nombre'], $_POST['apellido'], $_POST['telefono']);
        header("Location: index.php");
    } else {
        echo "Todos los campos son obligatorios.";
    }
}



if ($accion == 'eliminar') {
    if (!empty($_GET['id'])) {
        $contacto->eliminarContacto($_GET['id']);
        header("Location: index.php");
    }
}
?>
