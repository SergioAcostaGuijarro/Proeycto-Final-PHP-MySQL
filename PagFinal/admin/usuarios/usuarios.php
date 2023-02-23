<?php
session_start();
echo '<link href="../../karen.css" type="text/css" rel="stylesheet">';

echo "<h3>Elija una opción:</h3><br>";
    echo "<a href='../adminindex.php'>INDICE ADMIN</a><br>";
    echo "<a href='../pisos/pisos.php'>PISOS</a><br>";
    echo "<a href='./añadiru.php'>Alta</a><br>";
    echo "<a href='./eliminaru.php'>Baja</a><br>";
    echo "<a href='./buscaru.php'>Buscar</a><br>";
    echo "<a href='./actualizaru.php'>Modificar</a><br>";
    echo "<a href='./listaru.php'>Listar</a><br><br>";
?>