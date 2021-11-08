<?php

    $json = file_get_contents("inventario_instrumentos.json");
    $inventario = json_decode($json, true);

    foreach($inventario as $row){
        $id= $row['id'];
        $nombre = $row['nombre'];       
        $marca  = $row['marca'];
        $categoria  = $row['categoria'];
        $subcategoria  = $row['subcategoria'];
        $Estado  = $row['estado'];
        $Tamaño  = $row['tamaño'];
        $Cuerda = $row['cuerdas'];
        $Madera = $row['madera'];
        $Tilo = $row['tilo'];
        $Diapason = $row['diapason'];
        $Pintura = $row['pintura'];
        $Color = $row['color'];
        $Incluye = $row['incluye'];
        $precio = $row['precio'];
        $Disponible = $row['disponible'];
        $imagen = $row['imagen'];
        
        $sql = "INSERT INTO `guitarras`(`id`, `nombre`, `marca`, `categoria`, `subcategoria`, `estado`, `tamaño`, `cuerdas`, `madera`, `tilo`, `diapason`, `pintura`, `color`, `incluye`, `precio`, `disponible`, `imagen`) VALUES (
            '$id',
            '$nombre',
            '$marca',
            '$categoria',
            '$subcategoria',
            '$Estado',
            '$Tamaño',
            '$Cuerda',
            '$Madera',
            '$Tilo',
            '$Diapason',
            '$Pintura',
            '$Color',
            '$Incluye',
            '$precio',
            '$Disponible',
            '$imagen');";

        //mysqli_query()
        echo($sql);
    }

?>