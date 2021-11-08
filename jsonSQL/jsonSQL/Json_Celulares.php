<?php

    $json = file_get_contents("inventario_celulares_tablets.json");
    $inventario = json_decode($json, true);

    foreach($inventario as $row){
        $id  = $row['id'];
        $CodC_T = $row['codigoC&T'];       
        $nombre  = $row['nombre'];
        $marca  = $row['marca'];
        $categoria  = $row['categoria'];
        $subcategoria  = $row['subcategoria'];
        $subcategoria2  = $row['subcategoria2'];
        $estado  = $row['Estado'];
        $peso  = $row['Peso'];
        $modelo  = $row['Modelo'];
        $Memoria = $row['Memoria Ram'];
        $Mmeoria = $row['Mmeoria interna'];
        $Ranura = $row['Ranura memoria'];
        $Pantalla = $row['Pantalla'];
        $Resolucion = $row['Resolucion'];
        $CamaraPrincipal = $row['Camara principal'];
        $CamaraSelfie = $row['Camara selfie'];
        $Sistema = $row['Sistema operativo'];
        $Chipset = $row['Chipset'];
        $Upc = $row['Upc'];
        $Bateria = $row['Bateria'];
        $Wlan = $row['Wlan'];
        $Bluetooth = $row['Bluetooth'];
        $Usb = $row['Usb'];
        $Sensores = $row['Sensores'];
        $Color = $row['Color'];
        $precio = $row['precio'];
        $Disponible = $row['Disponible'];
        $imagen = $row['imagen'];


        $sql = "INSERT INTO `celulares&tablets`(`id`, `codigoC&T`, `nombre`, `marca`, `categoria`, `subcategoria`, `subcategoria2`, `Estado`, `Peso`, `Modelo`, `Memoria Ram`, `Mmeoria interna`, `Ranura memoria`, `Pantalla`, `Resolucion`, `Camara principal`, `Camara selfie`, `Sistema operativo`, `Chipset`, `Upc`, `Bateria`, `Wlan`, `Bluetooth`, `Usb`, `Sensores`, `Color`, `precio`, `Disponible`, `imagen`) VALUES ('$id','$CodC_T','$nombre','$marca','$categoria','$subcategoria','$subcategoria2','$estado','$peso','$modelo',
        '$Memoria',
        '$Mmeoria',
        '$Ranura',
        '$Pantalla',
        '$Resolucion',
        '$CamaraPrincipal',
        '$CamaraSelfie',
        '$Sistema',
        '$Chipset',
        '$Upc',
        '$Bateria',
        '$Wlan',
        '$Bluetooth',
        '$Usb',
        '$Sensores',
        '$Color',
        '$precio',
        '$Disponible',
        '$imagen'
        );";

        //mysqli_query()
        echo($sql);
    }

?>