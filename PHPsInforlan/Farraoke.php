<?php
include "../_global/config.php";
include "../_global/conexion.php";
include "../_global/conexionBuscar.php";

include "../php/carrito.php";
include "../_templates/head.php"
?>
<html>
<link rel="stylesheet" href="../css/farraoke.css">

</html>

<body>

    <?php
    /*$query = mysqli_query($conexion, "SELECT nombre FROM productos");*/

    $sentencia = $pdo->prepare("SELECT * FROM `karaokes` WHERE id = 1");
    $sentencia->execute();
    $listaProductos = $sentencia->fetchAll(PDO::FETCH_ASSOC);

    ?>

    <?php foreach ($listaProductos as $producto) { ?>
        <div class="content">
            <div class="row">
                <!--***********************************-->
                <div class="col-xl-7 col-lg-6 col-md-12  editable mb-3">

                    <div class="tm-bg-white-transparent p-5 h-100 editable ">

                        <h3 class="tm-feature-name text-center">Karaoke USB Portable</h3>

                        <img src="../img/Farraoje/Kit 1.1.png" alt="Farraoke">

                    </div>
                </div>
                <!--***********************************-->
                <div class="col-xl-5 col-lg-6 col-md-12 editable mb-3">
                    <div class="tm-bg-white-transparent p-5 editable ">
                        <h3 class="tm-feature-name text-center">Características</h3>
                        <p class="text-justify texto_caraoke ">Buscador de temas por artista, género, nombre y número.
                            <br> Gestiona la programación de temas sin límite.
                            <br> Opción para cantar acompañado de la voz original del cantante.
                            <br> Opción para mover el texto del karaoke por la pantalla.
                            <br> Administra automática del cambio de turnos.
                            <br> Califica al finalizar cada interpretación.
                            <br> Opciones de calificación: excelente, alta, media y baja.
                            <br> Icono para activar y desactivar puntaje.
                        </p>
                        <div class="accordion " id="accordionExample">
                            <div class="accordion-item editable_acordion">
                                <h2 class="accordion-header editable_acordion" id="headingTwo">
                                    <button class="accordion-button collapsed editable_acordion" type="button" data-bs-toggle="collapse" data-bs-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                                        <p class="leerMas">Leer mas...</p>
                                    </button>
                                </h2>
                                <div id="collapseTwo" class="accordion-collapse collapse editable_acordion" aria-labelledby="headingTwo" data-bs-parent="#accordionExample">
                                    <div class="accordion-body">
                                        <br> Funciones para reproducir, pasar, repetir, detener y pausar temas.
                                        <br> Reproducción continua de videos de fondo en 4K.
                                        <br> Opción para agregar videos de fondo en 4K.
                                        <br> Reproductor de videos y audios.
                                        <br> Opción para farrear con videos musicales de todo genero.
                                        <br> Reproduce los videos originales del cantante.
                                        <br> Opción para agregar videos originales de los temas.
                                        <br> Indicador del curso de la canción.
                                        <br> Despliegue de mensajes de cumpleaños, aniversarios, etc.
                                        <br> Reporte de temas cantados.
                                    </div>
                                </div>
                            </div>
                        </div>


                    </div>
                </div>
                <!--***********************************-->
            </div>
        </div>

        <br>
        <br>



        <div class="content">
            <div class="row">
                <!--***********************************-->
                <div class="col-xl-7 col-lg-7 col-md-12  editable mb-3">

                    <div class="tm-bg-white-transparent p-5 h-100 editable ">
                        <video src="" controls autoplay></video>
                    </div>
                </div>
                <!--***********************************-->
                <div class="col-xl-5 col-lg-5 col-md-12 editable mb-3">
                    <div class="tm-bg-white-transparent p-5 editable ">
                        <h3 class="tm-feature-name text-center">Incluye</h3>
                        <p class="text-justify texto_caraoke"> &bull;Flash memory de temas clásicos y actuales de todo género musical.
                            <br> &bull;Libro de canciones impreso anillado.
                            <br> &bull;Actualizaciones y locales para garantía indefinida.
                            <br> &bull;Puntaje al finalizar la interpretación.
                        </p>

                        <div class="agregarFarroke row">
                            <h4 class="col-6" style="color:#0d6efd"> $
                                <?php echo $producto['precio']; ?>
                            </h4>
                            <div class="col-6 agregarboton">
                                <form action="" method="POST" class="formCard tm-call-to-action-form">

                                    <input class="imputDisplay" name="id" id="id" value="<?php echo (openssl_encrypt($producto['id'], COD, KEY)); ?>">
                                    <br>

                                    <input class="imputDisplay" name="nombre" id="nombre" value="<?php echo (openssl_encrypt($producto['kar_nombre'], COD, KEY)); ?>">
                                    <br>

                                    <input class="imputDisplay" name="marca" id="marca" value="<?php echo (openssl_encrypt($producto['kar_marcamarca'], COD, KEY)); ?>">
                                    <br>

                                    <input class="imputDisplay" name="precio" id="precio" value="<?php echo (openssl_encrypt($producto['precio'], COD, KEY)); ?>">
                                    <br>

                                    <input class="imputDisplay" name="cantidad" id="cantidad" value="<?php echo (openssl_encrypt(1, COD, KEY)) ?>" ;>
                                    <br>

                                    <div class="btnContent" style="position: absolute; ">
                                        <button type="submit" class="btn btn-outline-primary" style="position: absolute; text-align: center; justify-content: center;" onclick="alerta()" class="btn btnCard" name="btnAccion" value="Agregar" type="submit">
                                            Agregar
                                        </button>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
                <!--***********************************-->
            </div>

        <?php }
    echo $estado; ?>








        <br>
        <br>

        <div class="content">
            <div class="row container_combo">
                <!--***********************************-->
                <div class="editable_combo ">
                    <div class="tm-bg-white-transparent editable_combo editable">
                        <h1><img src="../img/Farraoje/Kit 1.1.png" height="100px" width="100px" alt=""></h1>
                        <a href="#">
                            <h3 class="tm-feature-name text-center">Kit 1</h3>
                        </a>
                    </div>
                </div>
                <div class="editable_combo ">
                    <div class="tm-bg-white-transparent editable_combo editable">
                        <h1><img src="../img/Farraoje/Kit 2.png" height="100px" width="100px" alt=""></h1>
                        <a href="#">
                            <h3 class="tm-feature-name text-center">Kit 2</h3>
                        </a>
                    </div>
                </div>
                <div class="editable_combo ">
                    <div class="tm-bg-white-transparent editable_combo editable">
                        <h1><img src="../img/Farraoje/Kit 3.png" height="100px" width="100px" alt=""></h1>
                        <a href="#">
                            <h3 class="tm-feature-name text-center">Kit 3</h3>
                        </a>
                    </div>
                </div>
                <div class="editable_combo ">
                    <div class="tm-bg-white-transparent editable_combo editable">
                        <h1><img src="../img/Farraoje/Kit 4.png" height="100px" width="100px" alt=""></h1>
                        <a href="#">
                            <h3 class="tm-feature-name text-center">Kit 4</h3>
                        </a>
                    </div>
                </div>
                <!--***********************************-->
            </div>
        </div>


        <br>
</body>


<?php
include "../_templates/footer.php";
?>