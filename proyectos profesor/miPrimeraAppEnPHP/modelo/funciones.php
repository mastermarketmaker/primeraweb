<?php

function subirFoto($archivo, $directorio = "", $pesoMax = 5000000)
{
    $ruta = "";
    $tipo = $archivo['type'];
    $tamano = $archivo['size'];

    $nombreArchivo = limpiar($archivo['name']);
    $nombreArchivo = cortarCadenaFinal($nombreArchivo, ".");

    if ((strpos($tipo, 'jpeg') !== false || strpos($tipo, 'png') !== false) && $tamano < $pesoMax) {
        $idUnico = time(); // Hora UTC

        if (strpos($tipo, 'jpeg') !== false) {
            $extension = '.jpg';
        } else {
            $extension = '.png';
        }

        $nombre_fichero = $directorio . $nombreArchivo . $extension;

        if (file_exists($directorio . $nombreArchivo . ".jpg") || file_exists($directorio . $nombreArchivo . ".png")) {
            $nombre_fichero = $directorio . $nombreArchivo . $idUnico . $extension;
        }

        if (move_uploaded_file($archivo['tmp_name'], $nombre_fichero)) {
            $ruta = $nombre_fichero;
        } else {
            echo "<script>alert('Error al subir el archivo al servidor')</script>";
            $ruta = false;
        }
    } else {
        echo "<script>alert('La foto debe tener una extensión del tipo: jpg o png')</script>";
        $ruta = false;
    }

    return $ruta;
}

function png_a_jpg($archivo)
{
    if (is_file($archivo)) {
        $imagen = imagecreatefrompng($archivo);
        $archivo = str_replace(".png", ".jpg", $archivo);
        imagejpeg($imagen, $archivo, 100);
    }
}

function limpiar($cadena)
{
    // Implementación de la función limpiar()
    // ...

    return $cadena;
}

function cortarCadenaPrincipio($cadena, $caracter)
{
    // Implementación de la función cortarCadenaPrincipio()
    // ...

    return $nombre;
}

function cortarCadenaFinal($cadena, $caracter){
    $posicionsubcadena = strrpos($cadena, $caracter);
    $nombre = substr($cadena, 0, $posicionsubcadena);
    return $nombre;
}


?>
