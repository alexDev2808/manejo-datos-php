<?php


$courses = [
    "frontend" => "JavaScript",
    "framework" => "Laravel",
    "backend" => "PHP"
];

foreach($courses as $key => $value) {
    echo "$key: $value";
} 

function upper($course, $key) {
    echo strtoupper($course) . ": $key <br>";
}

array_walk($courses, 'upper');
echo "\n";

echo array_key_exists('frontend', $courses);
echo "\n";
echo in_array('JavaScript', $courses);
array_keys($courses);
array_values($courses);