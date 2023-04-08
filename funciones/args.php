<?php

// valores
function greet($name) {
    return "Hola $name";
}

echo greet("Alexis");

// Referencia
$course = 'PHP';

// Afectando a la variable externa(variable por referencia)
function path(&$course) {
    $course = "Laravel";
    echo $course;
}

path($course);
echo $course;

// Predeterminados
function saludar($name = "Jane") {
    return "Hola $name";
}

echo greet();
echo greet("Jesus");