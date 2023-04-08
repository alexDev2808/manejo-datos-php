<?php

$cursos = ['javascript', 'php'];

$wishes = ['php', 'laravel', 'javascript', 'vuejs'];

var_dump(array_diff($wishes, $cursos)); //comparar las diferencias

$arrayA = [1, 2, 3, 4, 5];
$arrayB = [3, 4, 5, 6, 7];

var_dump(array_diff($arrayB, $arrayA)); // El orden en que se coloquen afecta el resultado

// array_diff_assoc() : comparar key y valores