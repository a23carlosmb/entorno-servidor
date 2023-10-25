<?php
/**
 * Crea unha función chamada `comprobar_nif()` que reciba un NIF e devolva:
 *  `true` se o NIF é correcto.
 *  false` se o NIF non é correcto.
 * A letra do DNI é unha letra para comprobar que o número introducido anteriormente é correcto. 
 * Para obter a letra do DNI débense levar a cabo os seguintes pasos:
 * Dividimos o número entre 23.
 * Co resto da división anterior, obtemos a letra corresponde na seguinte táboa: 
 */

// Creo una funcion para comprar si el NIF es válido:
function comprobar_NIF($NIF)
{
    // Comprobar si el NIF tiene un formato válido (8 dígitos seguidos de una letra).
    if (preg_match('/^\d{8}[a-zA-Z]$/', $NIF)) {
        // Extraer el número (los 8 primeros dígitos) y la letra (último carácter).
        $numero = substr($NIF, 0, 8);
        $letra = strtoupper(substr($NIF, -1)); // Asegurarse de que la letra esté en mayúsculas.

        // Calcular la letra correspondiente al número del NIF.
        $letras_validas = "TRWAGMYFPDXBNJZSQVHLCKE";
        $indice = $numero % 23;

        // Comprobar si la letra del NIF coincide con la calculada.
        if ($letra === $letras_validas[$indice]) {
            return true; // El NIF es válido.
        }
    }

    return false; // El NIF no es válido.

}

// A mayores, creo otra función para que imprima en pantalla el resultado de la comprobación, porque no supe hacerlo todo en una:

function resultado_comprobar_NIF($NIF)
{
    if (comprobar_nif($NIF)) {
        echo "El NIF es <span style='color:green;'>válido.</span>";
    } else {
        echo "El NIF es <span style='color:red;'>inválido.</span>";
    }
}

// Pruebo si funciona:

$NIF = "12345678Z";


echo "<p>Comprobar NIF, prueba:</p>";
echo "<p>\$NIF = $NIF</p>";

resultado_comprobar_NIF($NIF); 

$NIF = "Y7612227T";
echo "<p>\$NIF= $NIF</p>";
resultado_comprobar_NIF($NIF); 


?>
