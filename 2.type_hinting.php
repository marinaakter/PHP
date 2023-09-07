<?php
declare(strict_types=1);

$age= "20";
var_dump($age+ 10);


function callAGe(int $birthYear, string $name){
    return "Hey $name, You're ". 2023 - $birthYear . " years old.";
}

echo callAGe(1999, "Marina");

