<h1>Funciones con cadena</h1>
<?php
echo strlen ("Hola mundo desde php"); //La cantidad de valores que contiene una cadena
echo "<hr>";
$cadena= " Hola Mundo ";
echo trim ($cadena);//Sacar espacios de cadenas de texto
echo "<hr>";
echo str_word_count ("Hola mundo desde php");//Contador de palabras
echo "<hr>";
$cadena = "Hola mundo desde php";
echo strrev($cadena);//sirve para invertir valores
echo "<hr>";
echo strpos("Hola mundo desde php","mundo");//sirve para ver en que posicion inicia la palabra que se está buscando
echo "<hr>";
echo str_replace("mundo", "planeta", "Hola mundo");//sirve para reemplazar un valor por otro, en este caso reemplazamos mundo por planeta en la frase hola mundo
echo "<hr>";
echo (pi());//Devuelve el nro pi
echo "<hr>";
echo(min(0,150,30,85,-10,-100,-102));//Trae el valor minimo de una cadena de nros.
echo "<hr>";
echo(max(0,150,30,85,-10,-100,-102));//Trae el valor mayor de una cadena de nros.
echo "<hr>";
echo "<h1>Variables constantes<h1>";
define("nombredecontrante", "Bienvenidos al curso de php");//se define primero el nombre y luego la constante
echo nombredecontrante;//se imprime de esta forma con el nombre de la constante
echo "<hr>";
define("autos",["BMW","Toyota", "Nissan", "Kia"]);//definir array de tipo constante
echo autos[3];
?>