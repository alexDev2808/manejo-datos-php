<?php

$name = "Alexis";

echo "Mi nombre es $name \n";

$courses = [
    'backend' => [
        "PHP",
        "Laravel"
    ]
];

class User {
    public $name = "alexis";
}

$user = new User;

echo "$user->name quiere aprender " . $courses['backend'][0] . "\n";


$teacher = "Jesus";
$Jesus = "Profesor PHP";
echo "$teacher es ${$teacher}\n";

function getTeacher() {
    return 'teacher';
}

echo "${getTeacher()} enseña PHP\n";