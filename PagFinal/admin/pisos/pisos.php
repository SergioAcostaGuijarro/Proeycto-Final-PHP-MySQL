<?php
session_start();
echo '<link href="../../karen.css" type="text/css" rel="stylesheet">';

    echo "<h3>Elija una opción:</h3><br>";
    echo "<a href='../adminindex.php'>INDICE ADMIN</a><br>";
    echo "<a href='../usuarios/usuarios.php'>USUARIOS</a><br>";
    echo "<a href='./añadirp.php'>Alta</a><br>";
    echo "<a href='./eliminarp.php'>Baja</a><br>";
    echo "<a href='./buscarp.php'>Buscar</a><br>";
    echo "<a href='./actualizarp.php'>Modificar</a><br>";
    echo "<a href='./listarp.php'>Listar</a><br><br>";

?>