<?php

// --------------------For loop --------------------
$rating = 6;
for($i=1;$i<=5;$i++){
    //echo ($i<=$rating) ? "★" : "☆";
}

$officeEmployees=[
    'Sales'=> ['John','Robert','Jack'],
    'Marketing'=> ['Carl','Christine','Mark'],
    'Management'=> ['Steve','David','Peter'],
    'HR'=> ['John','Robert','Jack']
];

$department_key=array_keys($officeEmployees);


for ($i=0; $i < count($department_key); $i++) { 
    $department=$department_key[$i];
    //echo "Department: $department\n";

    $employees= $officeEmployees[$department];

    for($j=0; $j < count($employees); $j++) {
        //echo "-" . $employees[$j] . "\n";
    };

    //echo "\n";
}



//---------------------while loop----------------------------
$validpassword= "123";
$userInput= '';
while ($validpassword !== $userInput){
    $userInput= readline("Enter the Password: ");
    if($validpassword !== $userInput){
        echo "Invalid Password! Try again\n";
    }
    echo "Access Granted! ";
}




//---------------------do while loop----------------------------
do{
    $email=readline("Enter your email address: ");
    //sending email:
    echo "Email sent to $email\n";
    $confirmation= readline("Did you receive the email? (y/n):");

}while($confirmation !== 'y');




//---------------------foreach loop----------------------------
$name= [ "Laravel", "PHP", "JavaScript", "Python"];
foreach($name as $key => $name){
    echo " $key - $name \n";
}