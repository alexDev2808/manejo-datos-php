<?php


$greet = function($name) { // fun anonimas variable que requiere logica
    return "Hola $name";
};

// parametro Closure necesita una funcion anonima
function saludar(Closure $lang, $name) {
    return $lang($name);
}

$es = function ($name) {
    return "Hola, $name";
};

$en = function ($name) {
    return "Hello, $name";
};

echo saludar($es, "Alexis");