<h2>Lista de Contactos</h2>
<form method="GET" action="index.php">
    <input type="text" name="buscar" placeholder="Buscar contacto">
    <button type="submit">Buscar</button>
</form>



<?php if (!empty($_GET['buscar'])) : ?>
    <p> Mostrando resultados para: <strong><?= htmlspecialchars($_GET['buscar']) ?></strong></p>
    <a href="index.php"> Ver lista completa</a>
<?php endif; ?>



<br>
<a href="vistas/agregar.php">Agregar Nuevo Contacto</a>
<br><br>

<table border="1">
    <tr>
        <th>Nombre</th>
        <th>Apellido</th>
        <th>Teléfono</th>
        <th>Acciones</th>
    </tr>
    <?php while ($fila = $resultado->fetch_assoc()) { ?>
        <tr>
            <td><?= $fila['nombre'] ?></td>
            <td><?= $fila['apellido'] ?></td>
            <td><?= $fila['telefono'] ?></td>
            <td>
                <a href="vistas/editar.php?id=<?= $fila['id'] ?>">Editar</a> |
                <a href="index.php?accion=eliminar&id=<?= $fila['id'] ?>" onclick="return confirm('¿Seguro de eliminar?')">Eliminar</a>
            </td>
        </tr>
    <?php } ?>
</table>
