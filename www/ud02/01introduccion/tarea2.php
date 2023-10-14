<?php
// Tarea realizada por alumno Carlos Martínez Bourio

/**
 * Indica cuál de los siguientes son nombres de variables válidas e inválidas, indica por qué (en comentarios) y corrige los fallos:


/* A efectos de demostrar que he realizado la visualización del vídeo correspondiente a esta lección, 
 * comentaré indicando la regla relacionada que se expone en el mismo:
 * 
 * REGLA 1: Son automáticas, no es preciso declararlas.
 * REGLA 2: Comienzan con el símbolo '$' seguido del nombre de la variable.
 * REGLA 3: Se distingue entre minúsculas y mayúsculas.
 * REGLA 4: El nombre sólo puede empezar por una letra o '_'
 * REGLA 5: El resto de caracteres del nombre puede ser cualquier letra,
 *          número, símbolo '_' o caracteres ASCCI entre 128 y 255.

- valor               INVÁLIDA: No cumple regla 2 (le falta el '$').
- $_N                 VÁLIDA: Al empezar con '_" cumple regla 4.
- $valor_actual       VÁLIDA: Al empezar con una letra cumple regla 4.
- $n                  VÁLIDA: Al empezar con una letra cumple regla 4.
- $#datos             INVÁLIDA: No cumple regla 4 porque no empieza con letra ni '_".
- $valorInicial0      VÁLIDA: Cumple las reglas 4 y 5 (a mayores, comprende también la 3).
- $proba,valor        INVÁLIDA: No cumple regla 5: los signos de puntuación no son admitidos. 
- $2saldo             INVÁLIDA: No cumple regla 4 porque empieza con un número. 
- $n                  VÁLIDA: Al empezar con una letra cumple la regla 4. 
- $meuProblema        VÁLIDA: Cumple las reglas 4 y 5 (a mayores, comprende también la 3).
- $meu Problema       INVÁLIDA: El espacio en blanco no está comprendido en la regla 5.
- $echo               VÁLIDA: Aunque es una palabra reservada, entiendo que deja de serlo gracias al '$', por tanto cumple las reglas. 
- $m&m                INVÁLIDA: No cumple regla 5, ya que el caracter ASCII '&' no se encuentra entre el 128 y el 255.
- $registro           VÁLIDA: Cumple las reglas ya mencionadas. 
- $ABC                VÁLIDA: Cumple las reglas ya mencionadas. 
- $85 Nome            INVÁLIDA: No solo comienza con número, sino que además tiene un espacio en blanco en su interior, por lo que no cumple reglas 4 ni 5.
- $AAAAAAAAA          VÁLIDA: Cumple las reglas, y es una variable porque -aunque esté toda en mayúsculas- para que sea una CONSTANTE habría que definirla. 
- $nome_apelidos      VÁLIDA: Cumple las reglas. 
- $saldoActual        VÁLIDA: Cumple las reglas. 
- $92                 INVÁLIDA: Empieza con número, ya no cumple regla 4. 
- $*143idade          INVÁLIDA: No empieza con una letra, sino con un caracter especial que no es '_', ya no cumple regla 4. 
 */
?>
