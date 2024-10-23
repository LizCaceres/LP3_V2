<?php 
include 'conexion.php';
if (isset($_POST['Insertar'])){
if (isset($_POST['nombre']) && isset($_POST['apellido'])){
$existe = true;
$nombre = $_POST ['nombre'];
$apellido = $_POST ['apellido'];
} else{
    $existe = false;
    echo "No existe el nombre o el apellido";
}
    if ($existe){
        $query = mysqli_query($conexion, "INSERT INTO persona (id, nombre, apellido)
        values(null, '$nombre', '$apellido')")
        or die('error'. mysqli_error($conexion)); 
        
        if($query){
             echo "La inserción de datos fue exitosa!!"; ?>
            <meta http-equiv="refresh" content="5, url=http://localhost/LP3_V2/php/pruebamysql.php/index.php">
    <?php }else{
        echo 'Problemas para insertar';
        }
    }
}
?>