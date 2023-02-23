<?php
session_start();
echo '<link href="../karen.css" type="text/css" rel="stylesheet">';

    echo "<h3>Hola $_SESSION[name], ¿Qué vas a querer hacer hoy?</h3>";
    echo "<a href='./listarp.php'>LISTAR</a><br>";
    echo "<a href='./buscarp.php'>BUSCAR</a><br>";
    echo "<a href='./comprarp.php'>COMPRAR</a><br><br><br>";
    echo "<a href='../cerrar_sesion.php'><input type='button' value='Cerar Sesión'></a>";
?>