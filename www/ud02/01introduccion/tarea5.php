<?php

// Ejercicio resuelto por alumno Martínez Bourio

// Variables ejercicio 1:

$fahrenheit = 75; // Puedes cambiar el valor de Fahrenheit según tu necesidad
$celsius = ($fahrenheit - 32) * 5/9;

// Variables ejercicio 2:

$x = 20;
$y = 10;
$suma = $x + $y;
$resta = $x - $y;
$multiplicacion = $x * $y;
$division = $x / $y;
$modulo = $x % $y;

// Variables ejercicio 3:

$i=0;

// Variables ejercicio 4:

$base = 20;
$altura = 10;
$area = $base * $altura;
$perimetro = 2 * $base + 2 * $altura;

/*1. Escribe un programa que pase de grados Fahrenheit a Celsius. 
Para pasar de Fahrenheit a Celsius se resta 32 a la temperatura, 
se multiplica por 5 y se divide entre 9.*/

echo "<strong>Ejercicio 1</strong><br/>";
echo "<p>$fahrenheit convertidos a celcius: $celsius</p><hr/>";

/*2. Crea un programa en PHP que declare e inicialice dos 
variables x e y con los valores 20 y 10 respectivamente y
muestre la suma, la resta, la multiplicación, 
la división y el módulo de ambas variables. */
/*(Optativo) Haz dos versiones de este ejercicios.
    - Guarda los resultados en nuevas variables.
    - Sin utilizar variables intermedias. */

// VERSIÓN 1

echo "<strong>Ejercicio 2, version 1</strong><br/>";
echo "<p>VARIABLES:<br/><strong>\$x = 20<br/>\$y = 10<br/>Módulo: $modulo</strong><span style='color:grey;'><i> (Tuve que averiguar que es el 'módulo', creo en Argentina lo llaman 'el resto').</i></span></p>";
echo "<p>VARIABLES INTERMEDIAS:</p><p><strong>\$suma = \$x +  \$y<br/>\$resta = \$x - \$y<br/>\$multiplicacion = \$x * \$y<br>\$division = \$x / \$y \$modulo = \$x % \$y</strong></p>";
echo "Suma: $suma<br>";
echo "Resta: $resta<br>";
echo "Multiplicación: $multiplicacion<br>";
echo "División: $division<br><hr/>";

// VERSION 2

echo "<strong>Ejercicio 2, version 2</strong><br/>";
echo "<p>Sin variables intermedias</p>";
echo "<p>VARIABLES:<br/><strong>\$x = 20<br/>\$y = 10</strong></p>";
echo "Suma: " . ($x + $y) . "<br>";
echo "Resta: " . ($x - $y) . "<br>";
echo "Multiplicación: " . ($x * $y) . "<br>";
echo "División: " . ($x / $y) . "<br>";
echo "Módulo: " . ($x % $y)."<hr/>";

    /*3. (Optativo) Escribe un programa que imprima por pantalla los cuadrados de los 
30 primeros números naturales.*/ 

echo "<p><strong>Ejercicio 3</strong></p>";
echo "<p>He utilizado el bucle <i>for</i>, estudiado en la UD02.5 'Sentencias de control,<br> luego de mirar también el vídeo: <a href='https://www.youtube.com/watch?v=yHaltExns78'>https://www.youtube.com/watch?v=yHaltExns78</a></p>";

for ($i = 1; $i <= 30; $i++) {
    $cuadrado = $i * $i;
    echo "El cuadrado de $i es $cuadrado<br>";
}
echo "<hr/>";

/*4. Hacer un programa php que calcule el área y el perímetro de un rectángulo
 (```área=base*altura``` y (```perímetro=2*base+2*altura```). Debéis declarar 
 las variables base=20 y altura=10. */
echo "<p><strong>Ejercicio 4</strong></p>";
echo "<p>VARIABLES:</p>";
echo "
<p><strong>\$base = 20;
\$altura = 10<br/>
\$area = \$base * \$altura<br/>
\$perimetro = 2 * \$base + 2 * \$altura</strong></p>";
echo "El área del rectángulo es: $area<br>";
echo "El perímetro del rectángulo es: $perimetro";



?>
