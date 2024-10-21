<h1>Condicionales en php</h1>
<h2>Condicionales if</h2>
<?php 
/* 
if(condición){
    bloque de instrucciones
}else{
    bloque de instrucciones
}
elseif (condición){
    bloque de instrucciones
}
*/

$hora = date("H");
if ($hora < "19"){
    echo "Que tengas un buen día";
}
?>
<hr>
<h2>Condicionales if else</h2>
<?php 
if ($hora > "19"){
    echo "Que tengas un buen día";
}else{
    echo "Que tengas un buenas noches";
}
?>
<hr>
<h2>Condicionales elseif</h2>
<?php 
if ($hora < "10"){
    echo "Que tengas un buen día";
}elseif($hora > "20"){
    echo "Que tengas una buena tarde";
}
else{
    echo "Que tengas un buenas noches";
}
?>
<hr>
<h1>Switch</h1>
<?php 
$color ="rojo";
switch($color){
    case "rojo";
        echo "Mi color favorito es el rojo";
break;
    case "azul";
        echo "Mi color favorito es el azul";
break;
    case "verde";
        echo "Mi color favorito es el verde";
break;
default;
        echo "Mi color favorito no está entre esas opciones";
}
?>
