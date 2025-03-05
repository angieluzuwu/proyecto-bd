<?php
require_once("layout/header.php");

// Verificar si el dato se ha insertado correctamente y recargar la página
if (isset($_GET['m']) && $_GET['m'] === 'nuevo') {
    // Aquí va tu código de inserción, y luego rediriges
    // Ejemplo de redirección después de agregar un nuevo registro:
    header("Location: index.php");
    exit;
}
?>

<a href="index.php?m=nuevo" class="btn">NUEVO</a>
<table>
    <tr>
        <td>ID</td>
        <td>NOMBRE</td>
        <td>ACCIÓN</td>
    </tr>
    <tbody>
        <?php
        // Verifica que $dato no esté vacío
        if (!empty($dato)):
            foreach ($dato as $v): ?>
                <tr>
                    <td><?php echo $v['id']; ?> </td>
                    <td><?php echo $v['nombre']; ?> </td>
                    <td>
                        <a class="btn" href="index.php?m=editar&id=<?php echo $v['id']; ?>">EDITAR</a>
                        <a class="btn" href="index.php?m=eliminar&id=<?php echo $v['id']; ?>" onclick="return confirm('ESTÁ SEGURO?')">ELIMINAR</a>
                    </td>
                </tr>
            <?php endforeach; ?>
        <?php else: ?>
            <tr>
                <td colspan="3">NO HAY REGISTROS</td>
            </tr>
        <?php endif; ?>
    </tbody>
</table>

<?php
require_once("layout/footer.php");
?>
