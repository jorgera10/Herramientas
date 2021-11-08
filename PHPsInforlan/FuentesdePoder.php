<?php include '../_templates/headerProducto.php' ?>
<?php
    /*$query = mysqli_query($conexion, "SELECT nombre FROM productos");*/
    
    $sentencia = $pdo->prepare("SELECT * FROM `productos` WHERE subcategoria2 = 'Fuentes-de-Poder'");
    $sentencia->execute();
    $listaProductos = $sentencia->fetchAll(PDO::FETCH_ASSOC);
    
    ?>

<?php include '../_templates/footerProducto.php' ?>
    