<!DOCTYPE>
 
<html>
    <head>
<title> User Define Functions</title>
    </head>
    <body>
<?php

//use functionality whenever you want wihtout repeating all the process

//type function as key word & then give it name -> name(arguments);
function Welcome(){
    echo "Welcome to PHP! <br>";
}
//calling function 
Welcome(); 
echo "<hr>";


function Addition(){
    $a = 5;
    $b = 2;
    $c = $a + $b;
    echo "Addition is {$c} <br>";  
}

Addition();
echo "<hr>";


function add_with_parameter($x,$y){
    $result = $x + $y;
    echo "Add with parameter is: {$result} <br>";
}

add_with_parameter(10,4);
add_with_parameter(100,44);
add_with_parameter(1000,84);
echo "<hr>";


function Add_using_Return($a,$b){
    $c = $a + $b;
    return $c;
}

$Total = Add_using_Return(50,50);
$Total1 = Add_using_Return($Total,2);
echo "first addition with return: ". $Total. "<br>";
echo "second total: ".$Total1;

/*
//Cant Redifine Functions!
/function names are not case sensitive 
function addition(){
    $a = 5;
    $b = 2;
    $c = $a + $b;
    echo "Addition is {$c} <br>";  
}*/
?>
    </body>
</html>