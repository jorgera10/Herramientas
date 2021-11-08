<?php

    $json = file_get_contents("inventario_monitores.json");
    $inventario = json_decode($json, true);

    foreach($inventario as $row){
        $id  = $row['id'];
        $codigoMON = $row['codigoMON'];       
        $nombre  = $row['nombre'];
        $marca  = $row['marca'];
        $categoria  = $row['categoria'];
        $subcategoria  = $row['subcategoria'];
        $subcategoria2  = $row['subcategoria2'];
        $estado  = $row['Estado'];
        $peso  = $row['Peso'];
        $modelo  = $row['Modelo'];
        $tamaño = $row['Tamaño'];
        $resolucion = $row["Resolución"];
        $entradas  = $row["Entradas/salidas"];
        $color = $row["Color"];
        $precio = $row["precio"];
        $disponible = $row["Disponible"];
        $imagen = $row["imagen"];

        $sql = "INSERT INTO `monitores`(`id`, `codigoMON`, `nombre`, `marca`, `categoria`, `subcategoria`, `subcategoria2`, `Estado`, `Peso`, `Modelo`, `Tamaño`, `Resolución`, `Entradas/salidas`, `Color`, `precio`, `Disponible`, `imagen`) VALUES ('$id','$codigoMON','$nombre','$marca','$categoria','$subcategoria','$subcategoria2','$estado','$peso','$modelo','$tamaño',
        '$resolucion',
        '$entradas',
        '$color',
        '$precio',
        '$disponible',
        '$imagen');";

        //mysqli_query()
        echo($sql);
    }

?>