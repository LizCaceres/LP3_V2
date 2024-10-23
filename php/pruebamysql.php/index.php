<?php include 'conexion.php'; ?>
<!DOCTYPE html>
<html>
<head>
    <meta charset = "UTF-8">
</head>
<body>
    <h1>Formulario para procesar con php y mysql</h1>
        <form action="procesar.php" method = "post">
            <label for="nombre">Nombre</label><br>
            <input type = "text" id = "nombre" name= "nombre"><br>
            <label for="apellido">Apellido</label><br>
            <input type = "text" id = "apellido" name= "apellido"><br>
            <input type = "submit" name= "Insertar" value = "Insertar"><br>
        </form>
        <hr>
        <h1>Mostrar los datos de la bd</h1>
        <table border= "1">
            <tr>
                <th>id</th>
                <th>Nombre</th>
                <th>Apellido</th>
            </tr>
            <?php
            mysqli_query($conexion, "SET NAMES 'utf8'");//Codificar a UTF8
            //Crear consulta
            $query = mysqli_query($conexion, "SELECT * FROM persona");
            // Recorrer el resultado para capturar los valores

            while($resultado = mysqli_fetch_assoc($query)){
                //var_dump($resultado);
                $id = $resultado ['id'];
                $nombre = $resultado ['nombre'];
                $apellido = $resultado ['apellido'];?>
            
            <tr>
                <td> <?= $id; ?></td>
                <td> <?= $nombre; ?></td>
                <td> <?= $apellido; ?></td>
            </tr>
       <?php }?>
        </table>
</body>
</html>