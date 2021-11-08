<?php include '../_templates/headerProducto.php' ?>

<?php
/*$query = mysqli_query($conexion, "SELECT nombre FROM productos");*/

$sentencia = $pdo->prepare("SELECT * FROM `productos` WHERE subcategoria = 'celulares'"); //aqui
$sentencia->execute();

$result = $sentencia->fetchAll();

$productsPage = 1; //products for page
$totalProducts = $sentencia->rowCount();
$totalPages = ceil($totalProducts / $productsPage);
?>

<?php
if (!$_GET) {
    //header('Location:computadoras.php?pages=1');
    echo '<meta http-equiv="refresh" content="0;url=celulares.php?pages=1">'; //aqui
}

if ($_GET['pages'] < 1 || $_GET['pages'] > $totalPages) {
    //header('Location:computadoras.php?pages=1');
    echo '<meta http-equiv="refresh" content="0;url=celulares.php?pages=1">'; //aqui
}
?>

<?php

//productos por pagina 

$start = ($_GET['pages'] - 1) * $productsPage;

$sql_articles = "SELECT * FROM productos WHERE subcategoria = 'celulares' LIMIT :Start, :ProductsPage"; //limit dice que del articulo tal a tal articulo //aqui
$sentencia_articles = $pdo->prepare($sql_articles);
$sentencia_articles->bindParam(':Start', $start, PDO::PARAM_INT);
$sentencia_articles->bindParam(':ProductsPage', $productsPage, PDO::PARAM_INT);
$sentencia_articles->execute();

$result_articles = $sentencia_articles->fetchAll();

include "../_templates/footerProducto.php";
?>





<nav aria-label="Page navigation d-flex justify-content-center navbar navbar-expand-lg navbar-light tm-bg-white-transparent tm-navbar">
    <ul class="pagination d-flex justify-content-center tm-bg-white-transparent "  >
        <li class=" tm-bg-white-transparent page-item <?php echo $_GET['pages'] <= 1 ? 'disabled' : '' ?> "><a class=" page-link" href="celulares.php?pages=<?php echo $_GET['pages'] - 1 ?>">Anterior</a></li>

        <?php for ($i = 0; $i < $totalPages; $i++) { ?>
            <li class="tm-bg-white-transparent page-item <?php echo $_GET['pages'] == $i + 1 ? 'active' : '' ?>"><a class="page-link" href="celulares.php?pages=<?php echo $i + 1 ?>"><?php echo $i + 1 ?></a></li>
        <?php } ?>

        <li class="tm-bg-white-transparent page-item <?php echo $_GET['pages'] >= $totalPages ? 'disabled' : '' ?>"><a class=" page-link" href="celulares.php?pages=<?php echo $_GET['pages'] + 1 ?>">Siguiente</a></li>
    </ul>
</nav>

</body>


<?php
include "../_templates/footer.php";
?>