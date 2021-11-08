<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Pagination</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
</head>


<?php include 'conexion.php';
//llamando a los articulos
$sql = 'SELECT * FROM prueba';
$sentencia = $pdo->prepare($sql);
$sentencia->execute();

$result = $sentencia->fetchAll();

$productsPage = 3; //products for page
$totalProducts = $sentencia->rowCount();
$totalPages = ceil($totalProducts / $productsPage);

?>

<body>
    <h1 class="d-flex justify-content-center">Pagination</h1>

    <?php
        if(!$_GET){
            header('Location:index.php?pages=1');
        }

        if($_GET['pages'] < 1 || $_GET['pages'] > $totalPages){
            header('Location:index.php?pages=1');
        }
    ?>

    <?php

        $start = ($_GET['pages']-1) * $productsPage;

        $sql_articles = 'SELECT * FROM prueba LIMIT :Start, :ProductsPage'; //limit dice que del articulo tal a tal articulo
        $sentencia_articles = $pdo->prepare($sql_articles);
        $sentencia_articles->bindParam(':Start', $start, PDO::PARAM_INT);
        $sentencia_articles->bindParam(':ProductsPage', $productsPage, PDO::PARAM_INT);
        $sentencia_articles->execute();
        
        $result_articles = $sentencia_articles->fetchAll();
    ?>

    <?php foreach ($result_articles as $product) { ?>
        <div class="mx-5 alert alert-primary" role="alert">
            <?php echo $product['nombre'] ?>
        </div>
    <?php } ?>


    <nav aria-label="Page navigation example">
        <ul class="pagination">
            <li class="page-item <?php echo $_GET['pages'] <= 1 ? 'disabled' : '' ?>"><a class="page-link" href="index.php?pages=<?php echo $_GET['pages'] - 1 ?>">Previous</a></li>

            <?php for ($i = 0; $i < $totalPages; $i++) { ?>
                <li class="page-item <?php echo $_GET['pages'] == $i + 1 ? 'active' : '' ?>"><a class="page-link" href="index.php?pages=<?php echo $i + 1 ?>"><?php echo $i + 1 ?></a></li>
            <?php } ?>

            <li class="page-item <?php echo $_GET['pages'] >= $totalPages ? 'disabled' : '' ?>"><a class="page-link" href="index.php?pages=<?php echo $_GET['pages'] + 1 ?>">Next</a></li>
        </ul>
    </nav>


    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js" integrity="sha384-7+zCNj/IqJ95wo16oMtfsKbZ9ccEh31eOz1HGyDuCQ6wgnyJNSYdrPa03rtR1zdB" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js" integrity="sha384-QJHtvGhmr9XOIpI6YVutG+2QOK9T+ZnN4kzFN1RtK3zEFEIsxhlmWl5/YESvpZ13" crossorigin="anonymous"></script>
</body>

</html>