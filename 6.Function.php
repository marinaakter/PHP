<?php

//Encapsulation

Function shout($name,$message,$time=3){
    echo str_repeat("Hello,". $name .  $message, $time);
}

//shout(" Amal"," Good Morning ");


//str length
$message= "never Give Up";
//echo strlen($message);

//str word count
echo str_word_count($message);


//str first letter capital and small:
// echo ucfirst($message);
// echo lcfirst($message);

//str loweer letter capital and small:
//echo strtolower(strtoupper($message));



$title="101 reason to love PHP";
//echo ucwords($title);

//explode() function
$tags="php,web,programming,oop";
print_r(explode(",",$tags));


//join function
$lang=["html","css","php","javascript"];
echo join("|",$lang);


//number function
echo number_format(3456573.456833,2);
echo number_format(3456573.456833,2,"%","_");

//date and time function
echo "currentDate: ". date("d-m-Y");
echo time();