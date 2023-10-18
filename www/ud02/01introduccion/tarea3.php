<?php
//Tarea resuelta por alumno Martínez Bourio

//Busca en la documentación de PHP las funciones de [manejo de variables](http://www.php.net/manual/es/funcref.php)
//Comprueba el resultado devuelto por los siguientes fragmentos de código y analiza el resultado:

$a = "true"; // imprime el valor devuelto por is_bool($a)...
echo '<strong>$a="true"</strong><br/>';
echo '<strong>is_bool($a)</strong><br/>';
echo "Resultado: <strong>".is_bool($a)."</strong>";
echo "<p>";
echo  "is_bool devuelve 'true' cuando el valor es un booleano.<br/> En este caso, 'true' es una cadena de texto, por lo que no devolverá nada.<br/> Si su contenido fuese 'true' o 'false', sin comillas,<br/>devolvería 1.</p>";

echo "<p>Fuente: <a href='https://www.php.net/manual/en/function.is-bool.php'>https://www.php.net/manual/en/function.is-bool.php</a></p><hr/>";

$c = "false"; // imprime el valor devuelto por gettype($c)

echo '<strong>$c = "false"<br/></strong>';
echo '<strong>gettype($c)<br/></strong>';
echo "Resultado: <strong>".gettype($c)."</strong>";

echo "<p>";
echo "gettype devuelve el tipo de variable PHP,<br/>en este caso se trata de una cadena de texto (String).</p>";

echo "<p>Fuente: <a href='https://www.php.net/manual/en/function.gettype.php'>https://www.php.net/manual/en/function.gettype.php</a></p><hr/>";

$d = ""; // el valor devuelto por empty($d)

echo '<strong>$d = ""<br/></strong>';
echo '<strong>empty($d)<br/></strong>';
echo "Resultado: <strong>".empty($d)."</strong>";

echo "<p>";
echo "empty determina si una variable está vacía y devuelve un booleano true, o sea '1',<br/> como ocurre en este caso.</p>";

echo "<p>Fuente: <a href='https://www.php.net/manual/en/function.empty.php'>https://www.php.net/manual/en/function.empty.php</a></p><hr/>";

$e = 0.0; // el valor devuelto por empty($e)

echo '<strong>$e = 0.0;<br/></strong>';
echo '<strong>empty($e)<br/></strong>';
echo "Resultado: <strong>".empty($e)."</strong>";

echo "<p>";
echo "empty también determina si una variable contiene un numero igual o menor a cero<br/> y devuelve true, o sea '1', como ocurre en este caso.</p>";

echo "<p>Fuente: <a href='https://www.php.net/manual/en/function.empty.php'>https://www.php.net/manual/en/function.empty.php</a></p><hr/>";

$f = 0; // el valor devuelto por empty($f)

echo '<strong>$f = 0;<br/></strong>';
echo '<strong>empty($f)<br/></strong>';
echo "Resultado: <strong>".empty($f)."</strong>";

echo "<p>";
echo "Un caso similar al anterior:<br/>";
echo "empty también determina si una variable contiene un numero igual o menor a cero<br/> y devuelve true, o sea '1', como ocurre en este caso.</p>";

echo "<p>Fuente: <a href='https://www.php.net/manual/en/function.empty.php'>https://www.php.net/manual/en/function.empty.php</a></p><hr/>";

$g = false; // el valor devuelto por empty($g)

echo '<strong>$g = false<br/></strong>';
echo '<strong>empty($g)<br/></strong>';
echo "Resultado: <strong>".empty($g)."</strong>";

echo "<p>";
echo "'false' también se considera 'vacío' en los términos de la función empty,<br/> por eso devuelve true, o sea '1'.</p>";

echo "<p>Fuente: <a href='https://www.php.net/manual/en/function.empty.php'>https://www.php.net/manual/en/function.empty.php</a></p><hr/>";

$h; // el valor devuelto por empty($h)

echo '<strong>$h<br/></strong>';
echo '<strong>empty($h)<br/></strong>';
echo "Resultado: <strong>".empty($h)."</strong>";

echo "<p>";
echo "Una función no seteada en absoluto también es vacía para empty,<br/> por eso devuelve true, o sea '1'.</p>";

echo "<p>Fuente: <a href='https://www.php.net/manual/en/function.empty.php'>https://www.php.net/manual/en/function.empty.php</a></p><hr/>";

$i = "0"; // el valor devuelto por empty($i)

echo '<strong>$i = "0"<br/></strong>';
echo '<strong>empty($i)<br/></strong>';
echo "Resultado: <strong>".empty($i)."</strong>";

echo "<p>";
echo "Mismo caso idéntico que vimos con la variable <strong>\$f</strong>,<br/> por eso devuelve true, o sea '1'.</p>";

echo "<p>Fuente: <a href='https://www.php.net/manual/en/function.empty.php'>https://www.php.net/manual/en/function.empty.php</a></p><hr/>";

$j = "0.0"; // el valor devuelto por empty($j)

echo '<strong>$j = "0.0"<br/></strong>';
echo '<strong>empty($j)<br/></strong>';
echo "Resultado: <strong>".empty($j)."</strong>";

echo "<p>";
echo "Mismo caso idéntico que vimos con la variable <strong>\$e</strong>,<br/> por eso devuelve true, o sea '1'.</p>";

echo "<p>Fuente: <a href='https://www.php.net/manual/en/function.empty.php'>https://www.php.net/manual/en/function.empty.php</a></p><hr/>";

$k = true; // el valor devuelto por isset($k)

echo '<strong>$k = true<br/></strong>';
echo '<strong>isset($k)<br/></strong>';
echo "Resultado: <strong>".isset($k)."</strong>";

echo "<p>";
echo "Parecida a <i>empty</i>, isset comprueba si la variable está seteada<br/> por eso en este caso devuelve true, o sea '1'.</p>";

echo "<p>Fuente: <a href='https://www.php.net/manual/en/function.isset.php'>https://www.php.net/manual/en/function.isset.php</a></p><hr/>";

$l = false; // el valor devuelto por isset($l)

echo '<strong>$l = false<br/></strong>';
echo '<strong>isset($l)<br/></strong>';
echo "Resultado: <strong>".isset($l)."</strong>";

echo "<p>";
echo "isset comprueba que la variable está seteada (en este caso en 'false)<br/> por eso devuelve true, o sea '1'.</p>";

echo "<p>Fuente: <a href='https://www.php.net/manual/en/function.isset.php'>https://www.php.net/manual/en/function.isset.php</a></p><hr/>";

$m = true; // el valor devuelto por is_numeric($m)

echo '<strong>$m = true<br/></strong>';
echo '<strong>is_numeric($m)<br/></strong>';
echo "Resultado: <strong>".is_numeric($m)."</strong>";

echo "<p>";
echo "isset comprueba que la variable es un número,<br/>como en este caso es un booleano, no devuelve nada<br><span style='color:grey;'><i>(si fuera un número devolvería true, o sea '1').</span></i></p>";

echo "<p>Fuente: <a href='https://www.php.net/manual/en/function.is-numeric.php'>https://www.php.net/manual/en/function.is-numeric.php</a></p><hr/>";

$n = ""; // el valor devuelto por is_numeric($n)

echo '<strong>$n = ""<br/></strong>';
echo '<strong>is_numeric($n)<br/></strong>';
echo "Resultado: <strong>".is_numeric($n)."</strong>";

echo "<p>";
echo "isset comprueba que la variable es un número,<br/>como en este caso es una cadena de texto (string), no devuelve nada<br><span style='color:grey;'><i>(si fuera un número devolvería true, o sea '1').</span></i></p>";

echo "<p>Fuente: <a href='https://www.php.net/manual/en/function.is-numeric.php'>https://www.php.net/manual/en/function.is-numeric.php</a></p><hr/>";

?>
