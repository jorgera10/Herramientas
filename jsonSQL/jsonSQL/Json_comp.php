<?php

    $json = file_get_contents("inventario_computadoras.json");
    $inventario = json_decode($json, true);

    foreach($inventario as $row){
        $id  = $row['id'];
        $CodC_T = $row['codigoCOMP'];       
        $nombre  = $row['nombre'];
        $marca  = $row['marca'];
        $categoria  = $row['categoria'];
        $subcategoria  = $row['subcategoria'];
        $subcategoria2  = $row['subcategoria2'];
        $estado  = $row['Estado'];
        $peso  = $row['Peso'];
        $modelo  = $row['Modelo'];
        $procesador = $row['Procesador'];
        $Memoria = $row['Memoria'];
        $RanurasMmeoria = $row['Ranuras memoria'];
        $Disco = $row['Disco duro'];
        $Sistema = $row['Sistema Operativo'];
        $Graficos = $row['Graficos'];
        $Puertos = $row['Puertos'];
        $Sonido = $row['Sonido'];
        $Color = $row['Color'];
        $Garantia = $row['Garantia'];
        $precio = $row['precio'];
        $Disponible = $row['Disponible'];
        $imagen = $row['imagen'];
        

        $sql = "INSERT INTO `computadora`(`id`, `codigoCOMP`, `nombre`, `marca`, `categoria`, `subcategoria`, `subcategoria2`, `Estado`, `Peso`, `Modelo`, `Procesador`, `Memoria`, `Ranuras memoria`, `Disco duro`, `Sistema operativo`, `Graficos`, `Puertos`, `Sonido`, `Color`, `Garantia`, `precio`, `Disponible`, `imagen`) VALUES ('$id','$CodC_T','$nombre','$marca','$categoria','$subcategoria','$subcategoria2','$estado','$peso','$modelo',
        '$procesador',
        '$Memoria',
        '$RanurasMmeoria',
        '$Disco',
        '$Sistema',
        '$Graficos',
        '$Puertos',
        '$Sonido',
        '$Color',
        '$Garantia',
        '$precio',
        '$Disponible',
        '$imagen'
        );";

        //mysqli_query()
        echo($sql);
    }

?>