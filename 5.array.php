<?php

//-------------Indexed Array-----------------//  Array index starts from 0. Array can be of any type, For example: int, float, string or even 
$bestFriends=["Amal","Alan","Bruce","clark",10,13.5,true,new DateTime()];
//print_r($bestFriends);

//echo $bestFriends[1]. " ". $bestFriends[3];



//-------------Associative Array-----------------// associative array is an array that can be accessed by a key instead of a numeric index. Keys can be strings or integers. Values can be any type.
$superman=[
    "name"=>"Clark Kent",
    "age"=>null,
    "city"=>"Metropolis",
    "isHero"=>true,

];
//print_r($superman);
//echo $superman["city"];

//array_values and keys
//print_r(array_values($superman));
//print_r(array_keys($superman));




//-------------Multidimensional Array-----------------//it contains one or more arrays.
$groceryList=[
    "morning"=>"eggs",
    "afternoon"=>"milk",
    "evening"=>"cheese",
    "fozen"=>[
        "frozen pizza","ice"
    ],
    "fruits"=>[
        "orange","apple","banana"
    ],
    "vegetables"=>[
        "carrot","collard","pea"
    ],
    "drinks"=>[
        "alcohol"=>["beer","wine"],
        "non-alcohol"=>["soda","water"]
    ]
];

//echo $groceryList["drinks"]["non-alcohol"][1];


//-------------Array Manipulation-----------------//
//adding elements//
$bestFriends[]="Diana";
//print_r($bestFriends);

//removing elements//
unset($bestFriends[4]);
//print_r($bestFriends);

//updating elements//
$bestFriends[2]="Marina";
//print_r($bestFriends);

//counting elements//
echo count($bestFriends);
echo count($groceryList);

//sort//
sort($bestFriends);
//print_r($bestFriends);

//array search//
echo array_search("Marina",$bestFriends);

//array reverse//
print_r(array_reverse($bestFriends));



$heros=["Wolverine","Superman","Spiderman","Batman"];

//unique values//
print_r(array_unique($heros));


//array slice//
print_r(
   array_slice($heros,1,2)
);


//array shift//
echo array_shift($heros);
print_r($heros);


//array unshift//
$todo=[
    "learn PHP",
    "shopping"
];

array_unshift($todo,"Sleeping");
//print_r($todo);

//array pop
array_pop($todo);
print_r($todo);

//array push
array_push($todo,"Singing");
print_r($todo);