<?php
    include("conexion.php");

    if(isset($_GET['id'])){
        $id = $_GET['id'];
        $squery = "SELECT * FROM usuario WHERE id_usuario = $id";
        $result = mysqli_query($conexion,$squery);

        if(mysqli_num_rows($result)==1){
            $row = mysqli_fetch_array($result);
            $id = $row['id_usuario'];
            $nombre = $row['nombre_usuario'];
            $apellido = $row['apellido_usuario'];
            $cedula = $row['cedula_usuario'];
        }
    }

    if(isset($_POST['update'])){
        $id = $_GET['id'];
        $nombre = $_POST['nombre'];
        $apellido = $_POST['apellido'];
    
        $query = "UPDATE usuario set nombre_usuario = '$nombre', apellido_usuario = '$apellido' WHERE id_usuario = '$id'";
        mysqli_query($conexion,$query);

        $_SESSION['message'] = 'Usuario actualizado correctamente';
        $_SESSION['message_type'] = 'warning';

        header("Location: index.php");
    }


?>

<?php include('includes/header.php') ?>
<div class="container p-4">
    <div class="row">
        <div class="card card-body">
            <form action="editar.php?id=<?php echo $_GET['id']; ?>" method="POST">
                <div class="form-group">
                    <input type="text" name="nombre" placeholder="nuevo nombre" class="form-control">
                </div>
                <br>
                <div class="form-group">
                    <input type="text" name="apellido" placeholder="nuevo apellido" rows="2" class="form-control">
                </div>
                <br><br>
                <button class="btn btn-success " name="update">
                    Update
                </button>
            </form>
        </div>
    </div>
</div>

<?php include('includes/footer.php') ?>