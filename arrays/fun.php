<?php

$courses = [
    10 => 'php', 
    100 => 'laravel', 
    1000 => 'javascript'
];

// sort($courses);
// rsort($courses);

// keys
// ksort($courses);
// krsort($courses);

echo "<pre>";
var_dump($courses);

var_dump(array_slice($courses, 0, 1)); //cortar desde la posicion 0 a 1
var_dump(array_chunk($courses, 2)); // en bloques

// array_shift($courses) elimina el primer elemento y lo retorna
// array_pop($courses) elimina el ultimo elemento
// array_push($courses) agrega al final

var_dump(array_flip($courses)); //Intercambia valores, la key ahora es el valor, y la key ahora es el valor