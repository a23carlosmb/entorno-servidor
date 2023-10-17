<?php
// Tarea realizada por alumno Carlos Martínez Bourio

/**
 * Indica cuál de los siguientes son nombres de variables válidas e inválidas, indica por qué (en comentarios) y corrige los fallos:*/

echo "<p>A efectos de demostrar que he realizado la visualización del vídeo correspondiente a esta lección,<br/>
comentaré indicando la regla relacionada que se expone en el mismo:</p> 
<p><strong>-REGLA 1:</strong>  Son automáticas, no es preciso declararlas.<br/> 
<strong>-REGLA 2: </strong> Comienzan con el símbolo '$' seguido del nombre de la variable.<br/> 
<strong>-REGLA 3: </strong> Se distingue entre minúsculas y mayúsculas.<br/> 
<strong>-REGLA 4:</strong>  El nombre sólo puede empezar por una letra o '_'<br/> 
<strong>-REGLA 5: </strong> El resto de caracteres del nombre puede ser cualquier letra,<br/> 
-número, símbolo '_' o caracteres ASCCI entre 128 y 255.</p>

<table style='border-collapse: collapse; width: 100%; text-align: left;'>

    <tr>
        <td><strong>- valor</strong></td>
        <td>INVÁLIDA</td>
        <td>No cumple regla 2 (le falta el '$').</td>
    </tr>
    <tr>
        <td><strong>- \$_N</strong></td>
        <td>VÁLIDA</td>
        <td>Al empezar con '_' cumple regla 4.</td>
    </tr>
    <tr>
        <td><strong>- \$valor_actual</strong></td>
        <td>VÁLIDA</td>
        <td>Al empezar con una letra cumple regla 4.</td>
    </tr>
    <tr>
        <td><strong>- \$n</strong></td>
        <td>VÁLIDA</td>
        <td>Al empezar con una letra cumple regla 4.</td>
    </tr>
    <tr>
        <td><strong>- #datos</strong></td>
        <td>INVÁLIDA</td>
        <td>No cumple regla 4 porque no empieza con letra ni '_'.</td>
    </tr>
    <tr>
        <td><strong>- \$valorInicial0</strong></td>
        <td>VÁLIDA</td>
        <td>Cumple las reglas 4 y 5 (a mayores, comprende también la 3).</td>
    </tr>
    <tr>
        <td><strong>- \$proba,valor</strong></td>
        <td>INVÁLIDA</td>
        <td>No cumple regla 5: los signos de puntuación no son admitidos.</td>
    </tr>
    <tr>
        <td><strong>- \$2saldo</strong></td>
        <td>INVÁLIDA</td>
        <td>No cumple regla 4 porque empieza con un número.</td>
    </tr>
    <tr>
        <td><strong>- \$n</strong></td>
        <td>VÁLIDA</td>
        <td>Al empezar con una letra cumple la regla 4.</td>
    </tr>
    <tr>
        <td><strong>- \$meuProblema</strong></td>
        <td>VÁLIDA</td>
        <td>Cumple las reglas 4 y 5 (a mayores, comprende también la 3).</td>
    </tr>
    <tr>
        <td><strong>- \$meu Problema</strong></td>
        <td>INVÁLIDA</td>
        <td>El espacio en blanco no está comprendido en la regla 5.</td>
    </tr>
    <tr>
        <td><strong>- \$echo</strong></td>
        <td>VÁLIDA</td>
        <td>Aunque es una palabra reservada, entiendo que deja de serlo gracias al '$', por tanto cumple las reglas.</td>
    </tr>
    <tr>
        <td><strong>- \$m&m</strong></td>
        <td>INVÁLIDA</td>
        <td>No cumple regla 5, ya que el carácter ASCII '&' no se encuentra entre el 128 y el 255.</td>
    </tr>
    <tr>
        <td><strong>- \$registro</strong></td>
        <td>VÁLIDA</td>
        <td>Cumple las reglas ya mencionadas.</td>
    </tr>
    <tr>
        <td><strong>- \$ABC</strong></td>
        <td>VÁLIDA</td>
        <td>Cumple las reglas ya mencionadas.</td>
    </tr>
    <tr>
        <td><strong>- \$85 Nome</strong></td>
        <td>INVÁLIDA</td>
        <td>No solo comienza con número, sino que además tiene un espacio en blanco en su interior, por lo que no cumple reglas 4 ni 5.</td>
    </tr>
    <tr>
        <td><strong>- \$AAAAAAAAA</strong></td>
        <td>VÁLIDA</td>
        <td>Cumple las reglas, y es una variable porque -aunque esté toda en mayúsculas- para que sea una CONSTANTE habría que definirla.</td>
    </tr>
    <tr>
        <td><strong>- \$nome_apelidos</strong></td>
        <td>VÁLIDA</td>
        <td>Cumple las reglas.</td>
    </tr>
    <tr>
        <td><strong>- \$saldoActual</strong></td>
        <td>VÁLIDA</td>
        <td>Cumple las reglas.</td>
    </tr>
    <tr>
        <td><strong>- \$92</strong></td>
        <td>INVÁLIDA</td>
        <td>Empieza con número, ya no cumple regla 4.</td>
    </tr>
    <tr>
        <td><strong>- \$*143idade</strong></td>
        <td>INVÁLIDA</td>
        <td>No empieza con una letra, sino con un carácter especial que no es '_', ya no cumple regla 4.</td>
    </tr>
</table>";


?>
