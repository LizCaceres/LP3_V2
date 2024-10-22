<h1>Estructura while</h1>
<?php
/*
while(condición) {
bloque instrucciones
iterador ++;
}
*/
$x=1;
while($x <= 5){
    echo "El número es: $x <br>";
    $x++;
    }
    echo "<h1>Estructura while</h1>";
    $variable =0;
    while($variable <= 100){
    echo "el número es: $variable <hr>";
    $variable+=10;
    }
    /*do{
        bloquee instrucciones
        operador de incremento o decremento
    }while(condición);
    */
    echo "<h1>Do while</h1>";
    $z=1;
    do{
    echo "El nro es: $z <br>";
    $z++;
    } while($z <= 5);
    echo "<h1>Do while 2</h1>";
    $z=0;
    do{
    echo "El nro es: $z <br>";
    $z+=10;
    } while($z <= 100);
?>