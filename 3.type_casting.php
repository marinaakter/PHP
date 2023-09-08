<?php

$str="123abc";
var_dump((bool)$str);


$str1=null; #null is always false
var_dump((bool)$str1);


//convert float to int
$float=3.14;
var_dump((int)$float);


// convert string to int
$normalString= "There is a number of 123";
var_dump((int)$normalString);

$stringWithNumber= "50 shades of PHP";
var_dump((int)$stringWithNumber);


//convert string to array
$fruits="apple";
var_dump((array)$fruits);


//object
class Twitter {
    public $username;
    protected $tweet;
    private $joiningDate;

}
//var_dump((array)(new Twitter()));



//convert array to object
$arr= ["name"=>"Marina", "age"=>20];
var_dump((object)$arr);



