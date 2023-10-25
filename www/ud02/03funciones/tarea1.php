<?php 

// 1. Crea una función que reciba un carácter e imprima se o carácter é un díxito entre 0 e 9.
// 2. Crea una función que reciba un string e devolva a súa lonxitude.
// 3. Crea una función que reciba dous número `a` e `b` e devolva o número `a` elevado a `b`.
// 4. Crea una función que reciba un carácter e devolva `true` se o carácter é unha vogal.
// 5. Crea una función que reciba un número e devolva se o número é par ou impar.
// 6. Crea una función que reciba un string e devolva o string en maiúsculas.
// 7. Crea una función que imprima a zona horaria (*timezone*) por defecto utilizada en PHP.
/* 8. Crea una función que imprima a hora á que sae e se pon o sol para a localización por defecto. Debes comprobar como axustar as coordenadas (latitude e lonxitude) predeterminadas do teu servidor.
*/

// FUnciones

// Argumentos:

function si_es_digito($caracter) {
    return is_numeric($caracter) && $caracter >= 0 && $caracter <= 9;
}

function longitud_string($string) {
    return strlen($string);
}

function potencia($a, $b) {
    return pow($a, $b);
}

function si_es_vocal($caracter) {
    $vocales = array('a', 'e', 'i', 'o', 'u', 'A', 'E', 'I', 'O', 'U');
    return in_array($caracter, $vocales);
}

function si_es_par_o_impar($numero) {
    return $numero % 2 == 0 ? 'par' : 'impar';
}


function pasar_a_mayusculas($cadena) {
    return strtoupper($cadena);
}

function zona_horaria_servidor() {
    echo date_default_timezone_get();
}

// Como para mostrar algo en pantalla:

echo "<p><b>1.</b>Crea una función que reciba un carácter e imprima se o carácter é un díxito entre 0 e 9.</p>";
echo "<p>Solución:</p>";
echo "<p>Utilicé la función <a href='https://www.php.net/manual/en/function.is-numeric.php' target='_BLANK'>is_numeric()</a> a la que agregué forma para determinar si, además de ser un número,<br/>se encuentra comprendido entre cero y nueve.</p>";
echo"<p style='color:green;'>&nbsp;&nbsp;function si_es_digito(\$caracter) {<br/>
    &nbsp;&nbsp;&nbsp;&nbsp;return is_numeric(\$caracter) && \$caracter >= 0 && \$caracter <= 9;<br/>
    &nbsp;&nbsp;}</p><hr>";

echo "<p><b>2.</b> Crea una función que reciba un string e devolva a súa lonxitude.</p>";
echo "<p>Solución:</p>";
echo "<p>Le función ya existe: <a href='https://www.php.net/manual/en/function.strlen.php' target='_BLANK'>strlen()</a>, creo una función que me sirva para pasarle el <i>String</i> como parámetro:</p>";

echo"<p style='color:green;'>&nbsp;&nbsp;function longitud_string(\$string) {<br/>
    &nbsp;&nbsp;&nbsp;&nbsp;return strlen(\$string);<br/>
    &nbsp;&nbsp;}</p><hr>";

echo "<p><b>3.</b>Crea una función que reciba dous número `a` e `b` e devolva o número `a` elevado a `b`</p>";
echo "<p>Solución:</p>";
echo "<p>Uso la función: <a href='https://www.php.net/manual/en/function.pow.php' target='_BLANK'>pow()</a>, creo una función que me sirva para pasarle los números 'a' y 'b'</p>";
echo"<p style='color:green;'>&nbsp;&nbsp;function potencia(\$a, \$b) {<br/>
    &nbsp;&nbsp;&nbsp;&nbsp;return pow(\$a, \$b);<br/>
    &nbsp;}</p><hr>";

echo "<p><b>4.</b>Crea una función que reciba un carácter e devolva `true` se o carácter é unha vogal.</p>";
echo "<p>Solución:</p>";
echo "<p>Creo un array con las vocales y uso la función: <a href='https://www.php.net/manual/en/function.is-array.php' target='_BLANK'>is_array()</a>, para detectar si el parámetro introducido (el caracter) está dentro del array.</p>";

echo"<p style='color:green;'>&nbsp;&nbsp;function si_es_vocal(\$caracter) {<br/>
    &nbsp;&nbsp;&nbsp;&nbsp;\$vocales = array('a', 'e', 'i', 'o', 'u', 'A', 'E', 'I', 'O', 'U');<br/>
    &nbsp;&nbsp;&nbsp;&nbsp;return in_array(\$caracter, \$vocales);<br/>
    &nbsp;}</p><hr>";

echo"<p><b>5.</b> Crea una función que reciba un número e devolva se o número é par ou impar.</p>";
echo "<p>Solución:</p>";
echo"<p style='color:green;'>&nbsp;&nbsp;function si_es_par_o_impar(\$numero) {<br/>
    &nbsp;&nbsp;&nbsp;&nbsp;return \$numero % 2 == 0 ? 'par' : 'impar';<br/>
    &nbsp;}</p><hr>";

echo"<p><b>6.</b> Crea una función que reciba un string e devolva o string en maiúsculas.</p>";
echo "<p>Solución:</p>";
echo "<p>Utilizo la función: <a href='https://www.php.net/manual/en/function.strtoupper.php' target='_BLANK'>strtoupper()</a></p>";
echo"<p style='color:green;'>&nbsp;&nbsp;function pasar_a_mayusculas(\$cadena) {<br/>
    &nbsp;&nbsp;&nbsp;&nbsp;return strtoupper(\$cadena);<br/>
    &nbsp;}</p><hr>";

echo"<p><b>7.</b> Crea una función que imprima a zona horaria (*timezone*) por defecto utilizada en PHP.</p>";
echo "<p>Solución:</p>";
echo "<p>Utilizo la función: <a href='https://www.php.net/manual/en/function.date-default-timezone-get.php'>date_default_timezone_get()</a></p>";
echo"<p style='color:green;'>&nbsp;&nbsp;function zona_horaria_servidor() {<br/>
    &nbsp;&nbsp;&nbsp;&nbsp;echo date_default_timezone_get();<br/>
    &nbsp;}</p><hr>";

echo"<p><b> 8.</b> Crea una función que imprima a hora á que sae e se pon o sol para a localización por defecto. Debes comprobar como axustar as coordenadas (latitude e lonxitude) predeterminadas do teu servidor.</p>";
echo "<p>Solución:</p>";
echo "<span style='color:red;'>-no tengo ni idea-</span>";

?>
