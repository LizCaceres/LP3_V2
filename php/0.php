<!doctype html>
<html>
<body>
<?php 
    // Comentario de linea simple
    /*Comentario Extendido*/
    //Variable
        $variable = 5;
        echo $variable;
        echo "<br>"; //ingresar codigo html en php
        $cadena = "HELLO";
        print $cadena;
        echo "<hr>"; //ingresar codigo html en php
        $cadena2 = "Hola Mundo desde PHP";
        echo "<h1>$cadena2</h1>";
        echo "Esto es " , "String" , " Se pueden escribir separados entre ,";
        echo "<hr>";
        $variablebuleana = true; //también pueden ser false
        var_dump($variablebuleana); //sirve para saber que contiene una variable
        echo "<hr>";
        $variabledecimal = 3.14;
        var_dump($variabledecimal);
?>
<h1>Tipo de datos objetos</h1>
<?php
class Auto {
    function Auto(){
        $this->marca = "kia";
        $this->modelo = "Picanto";
        $this->motor = 2.0;
    }
}

$automovil = new Auto();
echo $automovil->modelo;
echo $automovil->motor;
echo $automovil->marca;

echo "<hr>";
echo "<h1>Variables null</h1>";
$x = "Hola Mundo";
$x = null;
var_dump($x);

?>
</body>
</html>