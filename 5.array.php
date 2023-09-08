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
echo $superman["city"];



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
