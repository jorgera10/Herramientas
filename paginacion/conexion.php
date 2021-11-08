<?php
try {
    $pdo = new PDO('mysql:host=localhost;dbname=herramientas', $usuario = 'admin', $contraseña = 'admin');
    echo "conectado";
} catch (PDOException $e) {
    print "¡Error!: " . $e->getMessage() . "<br/>";
    die();
}
?>