<html>

<head>
    <meta charset="utf-8">
    <title>HTML</title>
</head>

<body>
    <div>
        <form method="POST" action="">
            Nombre: <input type="text" name="nombre"><br>
            Apellidos: <input type="text" name="apellidos"><br>
            <input type="submit" value="Enviar">
        </form>
    </div>


    <div>
        <?php
        /**  Cree un formulario que solicite su nombre y apellido. Cuando se reciben los datos, se debe mostrar la siguiente información:
         * Nombre: `xxxxxxxxx`
         *  Apellidos: `xxxxxxxxx`
         * Nombre y apellidos: `xxxxxxxxxxxx xxxxxxxxxxxx`
         * Su nombre tiene caracteres `X`.
         * Los 3 primeros caracteres de tu nombre son: `xxx`
         * La letra A fue encontrada en sus apellidos en la posición: `X`
         * Tu nombre en mayúsculas es: `XXXXXXXXX`
         * Sus apellidos en minúsculas son: `xxxxxx`
         * Su nombre y apellido en mayúsculas: `XXXXXX XXXXXXXXXX`
         * Tu nombre escrito al revés es: `xxxxxx`
         */

        //Aquí el código php que muestra la información solicitada.
        

        if (isset($_POST['nombre']) && isset($_POST['apellidos'])) {
            echo "<p>Para procesar el formulario utilizaré las funciones:<br/>
            <ul> 
            <li><a href='https://www.php.net/manual/es/function.stripos.php'>stripos()</a></li>
             <li><a href='https://www.php.net/manual/es/function.strtoupper.php'>stroupper()</a></li>
             <li><a href='https://www.php.net/manual/es/function.strtolower.php'>strtolower()</a></li>
             <li><a href='https://www.php.net/manual/es/function.strrev.php'>strrev()</a></li>
        </ul>  
        </p>";
            $nombre = $_POST['nombre'];
            $apellidos = $_POST['apellidos'];

            echo "Nombre: <span style='color:green;'><b>$nombre</b></span><br>";
            echo "Apellidos: <span style='color:green;'><b>$apellidos</b></span><br>";
            echo "Nombre y apellidos: <span style='color:green;'><b>$nombre $apellidos</b></span><br>";
            echo "Su nombre tiene <span style='color:green;'><b>" . strlen($nombre) . "</b></span> caracteres.<br>";
            echo "Los 3 primeros caracteres de tu nombre son: <span style='color:green;'><b>" . substr($nombre, 0, 3) . "</b></span><br>";

            $posicionA = stripos($apellidos, 'A');


            if ($posicionA !== false) {
                echo "La letra A fue encontrada en sus apellidos en la posición: <span style='color:green;'><b>$posicionA</b></span><br>";
                echo "Tu nombre en mayúsculas es: <span style='color:green;'><b>" . strtoupper($nombre) . "</b></span><br>";
                echo "tus apellidos en minúsculas son: <span style='color:green;'><b>" . strtolower($apellidos) . "</b></span><br>";
                echo "tus nombre y apellidos en mayúsculas: <span style='color:green;'><b>" . strtoupper("$nombre $apellidos") . "</b></span><br>";
                echo "Tu nombre escrito al revés es: <span style='color:green;'><b>" . strrev($nombre) . "</b></span><br>";
            }
        }

        ?>
    </div>
</body>

</html>
