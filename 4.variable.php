<?php
$name="Marina";
$username="marina878";



//global scope

function sayHi(){
    global $username;

    $name="Alan";
    echo $username . " " . $name;
}


//sayHi();
//echo $name; //undefined variable





//variable interpolation //Hello Marina
echo "Hello, My name is: {$username} and my username is: {$username}";