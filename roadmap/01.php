<?php

/*
 * EJERCICIO:
 * - Crea ejemplos utilizando todos los tipos de operadores de tu lenguaje:
 *   Aritméticos, lógicos, de comparación, asignación, identidad, pertenencia, bits...
 *   (Ten en cuenta que cada lenguaje puede poseer unos diferentes)
 * - Utilizando las operaciones con operadores que tú quieras, crea ejemplos
 *   que representen todos los tipos de estructuras de control que existan
 *   en tu lenguaje:
 *   Condicionales, iterativas, excepciones...
 * - Debes hacer print por consola del resultado de todos los ejemplos.
 *
 * DIFICULTAD EXTRA (opcional):
 * Crea un programa que imprima por consola todos los números comprendidos
 * entre 10 y 55 (incluidos), pares, y que no son ni el 16 ni múltiplos de 3.
 *
 * Seguro que al revisar detenidamente las posibilidades has descubierto algo nuevo.
 */

//Valores ejemplo
$a = 1;
$b = 2;
$boolean_1 = true;
$boolean_0 = false;
$array = [1, 2, 3, 4];

// Operadores
print "IDENTIDAD" . "\n";
print +$a . "\n"; # IDENTIDAD

print "NEGACIÓN" . "\n";
print -$a . "\n"; # NEGACIÓN

print "ADICIÓN" . "\n";
print $a + $b . "\n"; # ADICIÓN . "\n"

print "SUSTRACCIÓN" . "\n";
print $a - $b . "\n"; # SUSTRACCIÓN

print "MULTIPLICACIÓN" . "\n";
print $a * $b . "\n"; # MULTIPLICACIÓN

print "DIVISIÓN" . "\n";
print $a / $b . "\n"; # DIVISIÓN

print "MÓDULO" . "\n";
print $a % $b . "\n"; # MÓDULO

print "EXPONENTE" . "\n";
print $a ** $b . "\n"; # EXPONENTE

// Estructuras de Control

# IF
print "IF" . "\n";

if ($a > $b)
    print "$a es más grande que $b\n";

# ELSE
print "ELSE" . "\n";

if ($a > $b) {
    print "$a es más grande que $b\n";
} else {
    print "$a es más pequeño que $b\n";
}


# ELSE IF
print "ELSE IF" . "\n";

if ($a > $b) {
    print "$a es más grande que $b\n";
} else if ($a == $b) {
    print "$a es igual a $b\n";
} else {
    print "$a es más pequeño que $b\n";
}


# WHILE
print "WHILE" . "\n";

$i = 0;

while ($i < 10) {
    print $i++;
}


# DO-WHILE
print "\n" . "DO-WHILE" . "\n";

$i = 0;

do {
    print $i++;
} while ($i < 10);


# FOR
print "\n" . "FOR" . "\n";

for ($i = 0; $i < 10; $i++) {
    print $i;
}


# FOREACH
print "\n" . "FOREACH" . "\n";
foreach ($array as $value) {
    echo "Elemento actual de \$array: $value.\n";
}


# PROGRAMA EXTRA

print "\n" . "PROGRAMA EXTRA:" . "\n";

for ($i = 10; $i <= 55; $i++) {

    if ($i % 2 == 0 && $i != 16 && $i % 3 != 0) {
        print $i . "\n";
    }

}