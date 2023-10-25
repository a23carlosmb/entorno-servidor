<?php
// Tarea realizada por Martínez Bourio.

//1. Almacena en un array los 10 primeros números pares. Imprímelos cada uno en una línea utilizando los valores contenidos en el array.

// Inicializo el array con los 10 primeros números pares.
// También podría hacer un bucle aunque tendría que pensar más...)

echo "<p>1. Almacena en un array los 10 primeros números pares.<br/> Imprímelos cada uno en una línea utilizando los valores contenidos en el array.</p>";

$numerosPares = array(2, 4, 6, 8, 10, 12, 14, 16, 18, 20);

echo "<p>Así es como hice el array<br/></p>";
echo "<p><b>\$numerosPares</b> = array(2, 4, 6, 8, 10, 12, 14, 16, 18, 20);<br/><span style='color:grey;'><i>Podría haber hecho un bucle, aunque habría tenido que pensar más.</i></span></p>";

// Imprimo los números pares en líneas separadas.
echo "<p>Imprimo los números pares en líneas separadas:</p>";
foreach ($numerosPares as $numero) {
    echo $numero . "<br>";
}

echo "<hr>";

echo "<p>2. Imprime los valores del array asociativo siguiente usando un foreach:</p>";

echo "<p>Este es el array:</p>

<p><b>\$v[1]</b> = 90;<br/>
<b>\$v[10]</b> = 200;<br/>
<b>\$v['hola']</b> = 43;<br/>
<b>\$v[9]</b> = 'e';</p>";

echo "<p>Solución:</p>";

$v[1] = 90;
$v[10] = 200;
$v['hola'] = 43;
$v[9] = 'e';

// Solución:
foreach ($v as $valor) {
    echo $valor . "<br>";
}
?>
