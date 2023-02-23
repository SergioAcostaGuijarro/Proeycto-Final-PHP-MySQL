<?php
session_start();
echo '<link href="../karen.css" type="text/css" rel="stylesheet">';

    echo "<h3>Hola $_SESSION[name], ¿Qué vas a querer hacer hoy?</h3>";
    echo "<a href='./usuarios/usuarios.php'>USUARIOS</a><br>";
    echo "<a href='./pisos/pisos.php'>PISOS</a><br><br><br>";
    echo "<a href='../cerrar_sesion.php'><input type='button' value='Cerar Sesión'></a>";
?>