<!DOCTYPE html>
    <head>
    <link rel="stylesheet" href="../../karen.css"> 
    </head>
    <body>
        
        <div id="form">
        <h2>Añadir </h2>
        <form action="añau.php" method="POST">
            <input type="text" placeholder="Nombre..." name="nombre"><br>
            <input type="email" placeholder="Correo..." name="correo"><br>
            <input type="password" placeholder="Contraseña..." name="clave" id="contr1"><br>
            <input type="password" placeholder="Repita la contraseña..." name="clave2" id="contr2"><br>
            <br><a><input type="radio" value="comprador" name="opcion"> Soy comprador  <input type="radio" value="vendedor" name="opcion"> Soy vendedor</a>

            <br><br><input type="submit" value="REGISTRARSE" name="añadir" onclick="f_validar()">
        </form>
        </div>
    </body>
<html>