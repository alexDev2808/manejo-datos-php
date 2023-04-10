<?php


$cursos = [
    'front' => 'javascript', 
    'back' => 'laravel 8'
];

$wishes = [
    'back' => 'laravel',
    'front' => 'VueJS',
    'back' => 'php'
];


// los agrupa
var_dump(array_merge_recursive($cursos, $wishes));

// Combinar elementos de arrays
$categorias = ['front', 'back', 'framework'];
$back = ['vue', 'php', 'laravel'];

echo "\n";
var_dump(array_combine($categorias, $back));