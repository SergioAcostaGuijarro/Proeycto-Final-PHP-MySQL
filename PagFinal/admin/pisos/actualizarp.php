<!DOCTYPE html>
    <head>
    <link rel="stylesheet" href="../../karen.css"> 
    </head>
    <body>
        <h2>Añadir piso</h2>
        <form action="actp.php" method="POST">
            <a>Di el piso a modificar:</a><br>
            <input type="number" placeholder="Codigo_piso..." name="codigo"><br><br>
            <a>Datos a modificar:</a><br>
            <input type="text" placeholder="Calle..." name="calle"><br>
            <input type="number" placeholder="Número..." name="numero"><br>
            <input type="number" placeholder="Piso..." name="piso"><br>
            <input type="text" placeholder="Puerta..." name="puerta"><br>
            <input type="number" placeholder="CP..." name="cp"><br>
            <input type="number" placeholder="Metros..." name="metros"><br>
            <input type="text" placeholder="Zona..." name="zona"><br>
            <input type="number" placeholder="Precio..." name="precio"><br>
            <input type="file" placeholder="Imagen..." name="imagen"><br>
            <input type="Submit" value="Cambiar" name="entrar"><br><br>
        </form>
    </body>
<html>