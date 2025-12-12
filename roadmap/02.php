<?php

/*
 * EJERCICIO:
 * - Crea ejemplos de funciones básicas que representen las diferentes
 *   posibilidades del lenguaje:
 *   Sin parámetros ni retorno, con uno o varios parámetros, con retorno...
 * - Comprueba si puedes crear funciones dentro de funciones.
 * - Utiliza algún ejemplo de funciones ya creadas en el lenguaje.
 * - Pon a prueba el concepto de variable LOCAL y GLOBAL.
 * - Debes hacer print por consola del resultado de todos los ejemplos.
 *   (y tener en cuenta que cada lenguaje puede poseer más o menos posibilidades)
 *
 * DIFICULTAD EXTRA (opcional):
 * Crea una función que reciba dos parámetros de tipo cadena de texto y retorne un número.
 * - La función imprime todos los números del 1 al 100. Teniendo en cuenta que:
 *   - Si el número es múltiplo de 3, muestra la cadena de texto del primer parámetro.
 *   - Si el número es múltiplo de 5, muestra la cadena de texto del segundo parámetro.
 *   - Si el número es múltiplo de 3 y de 5, muestra las dos cadenas de texto concatenadas.
 *   - La función retorna el número de veces que se ha impreso el número en lugar de los textos.
 *
 * Presta especial atención a la sintaxis que debes utilizar en cada uno de los casos.
 * Cada lenguaje sigue una convenciones que debes de respetar para que el código se entienda.
 */


function println($string)
{
    return print "\n" . $string . "\n";
}


// TIPOS DE FUNCIONES EN PHP:

# FUNCIÓN SIN PARAMETROS Y SIN RETURN

function sinParametro()
{
    println("Esto es un función sin parametro");
}


# FUNCIÓN CON PARAMETRO Y SIN RETURN

function conParametro($string)
{
    println("Esto es una funcion con parametro ($string)");
}


# FUNCIÓN CON RETURN Y VARIOS PARAMETROS

function conReturn($a, $b)
{
    return println("Esto es un función con return: " . ($a + $b));
}

println("Estas son las funciones:");

sinParametro();
conParametro("Hello World");
conReturn(1, 2);


# FUNCIONES DENTRO DE FUNCIONES

function dentroDeFunciones()
{
    function interior()
    {

    }
}




// FUNCIONES LOCALES Y GLOBALES

println("Variables locales y Globales");

# LOSCALES: Tengo que declararlas y usarlas dentro de la función y no podre usarlas fuera
function variableLocal()
{
    $i = 1;
    println($i);
}

# GLOBALES: Tengo que declararlas fuera y puedo usarlas dentro de una función siempre y cuando le asigne GLOBAL
$j = 2;
function variableGlobal()
{
    global $j;
    println($j);
}

variableLocal();
variableGlobal();



// EJERCICIO EXTRA

println("EJERCICIO EXTRA:");

function ejercicioExtra($string3, $string5)
{

    $count = 0;

    for ($i = 1; $i <= 100; $i++) {

        if ($i % 3 == 0 && $i % 5 == 0) {
            echo "\n" . $i . ": " . $string3 . " y " . $string5;
        } elseif ($i % 3 == 0) {
            echo "\n" . $i . ": " . $string3;
        } elseif ($i % 5 == 0) {
            echo "\n" . $i . ": " . $string5;
        } else {
            echo "\n" . $i;
            $count++;
        }

    }

    return println("\nSe ha impreso un total de $count veces los números en vez del texto");

}

ejercicioExtra("MULTIPLO DE 3", "MULTIPLO DE 5");