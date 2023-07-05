<?php

require "modelo/Nave.php";

/*
 *
 *
 */
//controlador

    $nombre = addslashes($_POST['nombre']);
    $matricula = $_POST['matricula'];
    $anio = $_POST['anio'];
    $tipo = $_POST['tipo'];
    $descripcion = $_POST['descripcion'];

    $file = $_FILES['foto'];

    move_uploaded_file($file['tmp_name'], "imgSubidas/".$file['name']);



    echo "<pre>";
            print_r($file);
    echo "</pre>";
    




    $nave = new Nave($nombre, $matricula, $anio, $tipo, $descripcion,$file);

    echo $nave->imprimirEnTabla();


