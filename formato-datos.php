<?php

// Alterar
$text = "PHP es un lenguaje, año 2023";
echo strtolower($text) . "\n";
echo strtoupper($text) . "\n";
echo lcfirst($text) . "\n";

$slug = str_replace(" ", "-", $text);
echo strtolower($slug);

echo "\n";
$code = 390;

echo str_pad($code, 8, "#", STR_PAD_BOTH) . "\n";

$html = "<h1>Este es un texto en h1</h1>";

echo "$html \n";
echo strip_tags($html) . "\n";

// monobyte
echo strtoupper($text) . "\n";
// multibyte
echo mb_strtoupper($text) . "\n";
