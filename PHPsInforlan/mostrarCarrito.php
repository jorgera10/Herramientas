<?php
include "../_global/config.php";
include "../_global/conexion.php";
include "carrito.php";
?>

<?php include "../_templates/head.php" ?>

<html>
<link rel="stylesheet" href="../css/mostrarCarrito.css">

</html>


<div class="row">
    <header class="col-12 text-center text-white tm-bg-black-transparent p-3 tm-app-header">
        <h2 class="text-uppercase mb-2 tm-app-feature-header">Lista de compra</h2>
    </header>
</div>

<?php if (!empty($_SESSION['CARRITO'])) { ?>

    <?php $total = 0; ?>

    <section class="content_modtrarCarrito container">
        <?php foreach ($_SESSION['CARRITO'] as $indice => $producto) { ?>

            <div class="row row_modtrarCarrito tm-bg-black-transparent " style="width: 95%;">
                <div class="col-2 product ">
                    <img src="https://github.com/intforlan/IntforlanImages/blob/master/<?php echo $producto['nombre'] ?>_I1.jpg?raw=true"" alt=" <?php echo $producto['nombre'] ?>" style="width: 70px; height: 70px;">
                </div>

                <div class="col-5 product">
                    <p class=" text-center align-middle overflow-hidden  line-height: 160px"><?php echo $producto['nombre'] ?></p>
                </div>

                <div class="col-3 product">
                    <p class="line-height: 160px">$ <?php echo $producto['precio'] ?></p>
                </div>

                <div class="col-2 product">
                    <form action="" method="POST">
                        <input type="hidden" id="id" name="id" value="<?php echo (openssl_encrypt($producto['id'], COD, KEY)); ?>">
                        <button type="submit" name="btnAccion" value="Eliminar" style="border: none; line-height: 160px; background:transparent;"><i class="fas fa-trash-alt" style=" font-size: 25px; color:#E7264C "></i></button>
                    </form>
                </div>
            </div>

        <?php $total = $total + ($producto['precio'] * $producto['cantidad']) ?>

<?php } ?>



    </section>

    <div class="tm-bg-black-transparent container_precio ">
        <div class="totalTitulo">
            <h3>Total</h3>
        </div>
        <div class="totalNumero">
            <h3>$<?php echo number_format($total, 2); ?></h3>
        </div>
    </div>


    <div class="row">
        <header class="col-12 text-center text-white tm-bg-black-transparent p-3 tm-app-header">
            <h2 class="text-uppercase mb-2 tm-app-feature-header">Datos Personales</h2>
        </header>
    </div>

    <div class="col-lg-12 tm-contact">

        <form action="pagar.php" method="POST" id="tmContactForm" class="tm-bg-black-transparent tm-contact-form">
            <div class="form-group">
                <input type="text" id="nombre" name="nombre" class="form-control rounded-0 border-top-0 border-right-0 border-left-0" placeholder="Nombre" required="">
            </div>
            <div class="form-group">
                <input type="text" id="apellido" name="apellido" class="form-control rounded-0 border-top-0 border-right-0 border-left-0" placeholder="Apellido" required="">
            </div>
            <div class="form-group">
                <input type="email" id="email" name="email" class="form-control rounded-0 border-top-0 border-right-0 border-left-0" placeholder="Email" required="">
            </div>

            <div class="form-group">
                <input type="text" id="telefono" name="telefono" class="form-control rounded-0 border-top-0 border-right-0 border-left-0" placeholder="Telefono Celular" required="">
            </div>

            <div class="text-right">
                <button type="submit" class="btn btn-primary tm-btn-submit rounded-0" name="btnAccion" value="proceder">
                    Comprar
                </button>
            </div>
        </form>
    </div>


<?php } else { ?>
    <div class="alert alert-success">
        Aun no añades productos a tu carrito
    </div>
<?php } ?>


<?php include "../_templates/footer.php" ?>