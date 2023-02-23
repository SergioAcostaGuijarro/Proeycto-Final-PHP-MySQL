<?php
session_start();
echo '<link href="../../karen.css" type="text/css" rel="stylesheet">';

    $codigo = $_REQUEST["codigo"];
    $calle = $_REQUEST["calle"];
    $numero = $_REQUEST["numero"];
    $piso = $_REQUEST["piso"];
    $puerta = $_REQUEST["puerta"];
    $cp = $_REQUEST["cp"];
    $metros = $_REQUEST["metros"];
    $zona = $_REQUEST["zona"];
    $precio = $_REQUEST["precio"];
    $imagen = $_REQUEST["imagen"];

    $conexion = mysqli_connect ("localhost", "root", "rootroot") or die ("No se puede conectar con la base de datos");
    mysqli_select_db ($conexion, "inmobiliaria") or die ("No se puede seleccionar la base de datos");

    $query="update pisos set calle='$calle', numero='$numero', piso='$piso', puerta='$puerta', cp='$cp', metros='$metros', zona='$zona', precio='$precio', imagen='$imagen' where Codigo_piso='$codigo'";

    if(mysqli_query ($conexion,$query))
    {
        echo "<script language='javascript'>
        alert('Piso actualizado');
        window.location.replace('./pisos.php')
        </script>";
    }
    else
    {
        echo "<script language='javascript'>
        alert('Piso NO actualizado');
        window.location.replace('./listarp.php')
        </script>";
    }
    mysqli_close($conexion);
?>