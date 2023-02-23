<?php
session_start();
echo '<link href="../karen.css" type="text/css" rel="stylesheet">';

    echo "<h3>Hola $_SESSION[name], ¿Qué vas a querer hacer hoy?</h3>";
    echo "<a href='./añadirp.php'>AÑADIR</a><br><br><br>";
    echo "<a href='../cerrar_sesion.php'><input type='button' value='Cerar Sesión'></a>";
?>