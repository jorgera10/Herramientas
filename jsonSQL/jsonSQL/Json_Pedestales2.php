<?php

    $json = file_get_contents("inventario_pedestales.json");
    $inventario = json_decode($json, true);

    foreach($inventario as $row){
        $id  = $row['id'];
        $CodPED = $row['CodigoPED'];       
        $nombre  = $row['nombre'];
        $marca  = $row['marca'];
        $categoria  = $row['categoria'];
        $subcategoria  = $row['subcategoria'];
        $descripcion  = $row['descripcion'];
        $estado  = $row['estado'];
        $color = $row["color"];
        $precio = $row["precio"];
        $disponible = $row["Disponible"];
        $imagen = $row["imagen"];

        $sql = "INSERT INTO `pedestales`(`id`, `codigoPED`, `nombre`, `marca`, `categoria`, `subcategoria`, `estado`, `descripcion`, `color`, `precio`, `Disponible`, `imagen`) VALUES ('$id','$CodPED','$nombre','$marca','$categoria','$subcategoria','$descripcion',
        '$estado',
        '$color',
        '$precio',
        '$disponible',
        '$imagen');";

        //mysqli_query()
        echo($sql);
    }

?>