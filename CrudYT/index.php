<?php include("conexion.php") ?>

<?php include("includes/header.php") ?>

<div class="container p-4">
    <div class="row">
        <div class="col-md-4">

            <?php if (isset($_SESSION['message'])) { ?>
                <div class="alert alert-<? $_SESSION['message-type']; ?> alert-dismissible fade show" role="alert">
                    <?= $_SESSION['message'] ?>
                    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                </div>

            <?php session_unset();
            } ?>

            <div class="card card-body">
                <form action="ingresar.php" method="POST">
                    <div class="form-group">
                        <input type="text" name="nombre" class="form-control" placeholder="Nombre" autofocus>
                    </div>
                    <br>
                    <div class="form-group">
                        <input type="text" name="apellido" rows='2' class="form-control" placeholder="Apellido" autofocus>
                    </div>
                    <br>
                    <div class="form-group">
                        <input type="text" name="cedula" rows='2' class="form-control" placeholder="Cedula" autofocus>
                    </div>
                    <br><br>
                    <input type="submit" class="btn btn-success btn-block" name="ingresar" value="Guardar">
                </form>
            </div>
        </div>

        <!--consulta tabla que muestra-->
        <div class="col-md-8">
            <table class="table table-bordered">
                <thead>
                    <th>id</th>
                    <th>Nombre</th>
                    <th>Apellido</th>
                    <th>Cedula</th>
                    <th>Fecha</th>
                    <th>Accion</th>
                </thead>
                <tbody>
                    <?php
                    $query = 'SELECT * FROM usuario';
                    $result = mysqli_query($conexion, $query);

                    while ($row = mysqli_fetch_array($result)) { ?>
                        <tr>
                            <td><?php echo $row['id_usuario'] ?></td>
                            <td><?php echo $row['nombre_usuario'] ?></td>
                            <td><?php echo $row['apellido_usuario'] ?></td>
                            <td><?php echo $row['cedula_usuario'] ?></td>
                            <td><?php echo $row['Fecha_creada'] ?></td>
                            <td>
                                <a href="editar.php?id=<?php echo $row['id_usuario'] ?>"><svg xmlns="http://www.w3.org/2000/svg" width="30" height="30" fill="#5DADE2 " class="bi bi-pencil-square" viewBox="0 0 16 16">
                                        <path d="M15.502 1.94a.5.5 0 0 1 0 .706L14.459 3.69l-2-2L13.502.646a.5.5 0 0 1 .707 0l1.293 1.293zm-1.75 2.456-2-2L4.939 9.21a.5.5 0 0 0-.121.196l-.805 2.414a.25.25 0 0 0 .316.316l2.414-.805a.5.5 0 0 0 .196-.12l6.813-6.814z" />
                                        <path fill-rule="evenodd" d="M1 13.5A1.5 1.5 0 0 0 2.5 15h11a1.5 1.5 0 0 0 1.5-1.5v-6a.5.5 0 0 0-1 0v6a.5.5 0 0 1-.5.5h-11a.5.5 0 0 1-.5-.5v-11a.5.5 0 0 1 .5-.5H9a.5.5 0 0 0 0-1H2.5A1.5 1.5 0 0 0 1 2.5v11z" />
                                    </svg></a>
                                <a href="eliminar.php?id=<?php echo $row['id_usuario'] ?>">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="30" height="30" fill="#E74C3C " class="bi bi-trash-fill" viewBox="0 0 16 16">
                                        <path d="M2.5 1a1 1 0 0 0-1 1v1a1 1 0 0 0 1 1H3v9a2 2 0 0 0 2 2h6a2 2 0 0 0 2-2V4h.5a1 1 0 0 0 1-1V2a1 1 0 0 0-1-1H10a1 1 0 0 0-1-1H7a1 1 0 0 0-1 1H2.5zm3 4a.5.5 0 0 1 .5.5v7a.5.5 0 0 1-1 0v-7a.5.5 0 0 1 .5-.5zM8 5a.5.5 0 0 1 .5.5v7a.5.5 0 0 1-1 0v-7A.5.5 0 0 1 8 5zm3 .5v7a.5.5 0 0 1-1 0v-7a.5.5 0 0 1 1 0z" />
                                    </svg>
                                </a>
                            </td>
                        </tr>
                    <?php } ?>
                </tbody>
            </table>
        </div>
    </div>
</div>


<?php include("includes/footer.php") ?>