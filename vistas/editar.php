<?php
require_once "../modelos/Contacto.php";

$contacto = new Contacto();
$info = $contacto->obtenerContactoPorId($_GET['id']);
?>
<h2>Editar Contacto</h2>
<form method="POST" action="../index.php?accion=editar">
    <input type="hidden" name="id" value="<?= $info['id'] ?>">
    <input type="text" name="nombre" value="<?= $info['nombre'] ?>" required>
    <input type="text" name="apellido" value="<?= $info['apellido'] ?>" required>
    <input type="text" name="telefono" value="<?= $info['telefono'] ?>" required>
    <button type="submit">Actualizar</button>
</form>
<br>
<a href="../index.php">Volver a la lista</a>
