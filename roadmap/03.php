<?php

/*
 * EJERCICIO:
 * - Muestra ejemplos de creación de todas las estructuras soportadas por defecto
 *   en tu lenguaje.
 * - Utiliza operaciones de inserción, borrado, actualización y ordenación.
 *
 * DIFICULTAD EXTRA (opcional):
 * Crea una agenda de contactos por terminal.
 * - Debes implementar funcionalidades de búsqueda, inserción, actualización
 *   y eliminación de contactos.
 * - Cada contacto debe tener un nombre y un número de teléfono.
 * - El programa solicita en primer lugar cuál es la operación que se quiere realizar,
 *   y a continuación los datos necesarios para llevarla a cabo.
 * - El programa no puede dejar introducir números de teléfono no numéricos y con más
 *   de 11 dígitos (o el número de dígitos que quieras).
 * - También se debe proponer una operación de finalización del programa.
 */


// INSERCCIÓN, BORRADO, ACTUALIZACIÓN Y ORDENACIÓN

$array = [0, 1, 2, 3, 4];

# INSERCCIÓN
$array[] = 5; // Se ha añadido un nuevo valor al final del todo


# BORRADO 
unset($array[5]); // Se ha eliminado el valor en el índice 2


# ACTUALIZACIÓN
$array[0] = 1; // Se cambia el valor del índice 0 de 0 a 1


# ORDENACIÓN
sort($array); // Se ordena el array en orden ascendente



// EJERCICIO EXTRA

echo "\nEJERCICIO EXTRA:";


$agenda = array(
    "José" => "0000",
    "María" => "0001",
    "Jesus" => "0002",
);

function agenda()
{


    function buscar($string)
    {
        global $agenda;
        echo "\nNÚMERO TELEFÓNICO (): $agenda[$string]";

    }

    function actualizar($posicion, $valor){

        global $agenda;
        echo "\nVALOR ANTERIOR: $agenda[$posicion]";
        $agenda[$posicion] = $valor;
        echo "\nVALOR ACTUAL: $valor";

    }

    function insertar($valor){

        global $agenda;
        echo "\nSe ha añadido un nuevo valor: $valor";

    }

    function elimininacion($posicion){

        global $agenda;
        unset($array[$posicion]);
        echo "\nEl contacto en la posición $posicion [$agenda[$posicion]] se ha borrado con exito";

    }
    


}