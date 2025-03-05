<?php
    require_once("layout/header.php");
?>

<h1 class="text-center">EDITAR</h1>
<form action="" method="get">
    <?php
    // Verificamos si $dato contiene un solo registro y lo procesamos
    if (!empty($dato)): 
        $v = $dato[0];  // Asumiendo que $dato tiene un solo elemento, lo asignamos a $v
    ?>
        <input type="text" value="<?php echo $v['nombre']; ?>" name="nombre"> <br>
        <input type="text" value="<?php echo $v['precio']; ?>" name="precio"> <br>
        <input type="hidden" value="<?php echo $v['id']; ?>" name="id"> <br>
        <input type="submit" class="btn" name="btn" value="ACTUALIZAR"> <br>
        <input type="hidden" name="m" value="actualizar">
    <?php
    else:
    ?>
        <p>No se encontraron datos para editar.</p>
    <?php
    endif;
    ?> 
</form>

<?php
    require_once("layout/footer.php");
?>
