<?php

$lorem = "Lorem ipsum dolor sit amet consectetur adipisicing elit. Voluptatum quo vel nesciunt, quas est mollitia fuga veritatis aliquid esse. Aliquid nesciunt vel ex veritatis debitis doloremque commodi consequatur dolore doloribus!";

$extract = substr($lorem, 0, 20);

echo "$extract... [ver mas]\n";

$data = 'JavaScript, PHP, Laravel'; //Campo tags
$tags = explode(', ', $data);
echo "<pre>";
var_dump($tags);


$courses = ["JavaScript", "PHP", "Laravel"];
$implode = implode(", ", $courses);

var_dump($implode);

$course = "        Curso Manejo de Datos PHP                ";
// $courseTrim = ltrim($course);
// $courseTrim = rtrim($course);
$courseTrim = trim($course);
echo "\n";
echo "Curso: $courseTrim.!\n";