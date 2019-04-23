<!DOCTYPE>
 
<html>
    <head>
        <title>More Variable Type</title>
    </head>
    <body>

<h> Static Variables </h>
<br>

<?php
function NormalV(){
    $value = 1;
    echo $value."<br>";
    $value++;
    //here the value always resets so always output 1
}
NormalV(); //1
NormalV(); //1 
NormalV();

//using static 
function StaticV(){
    static $value = 1;
    echo $value." static <br>";
    $value++;
    //here the value will stay constant so it wont reset it will successfully increment 
}
StaticV(); //1
StaticV(); //2
StaticV(); //3
?>
<hr><hr>


<h> Local Variables </h><br>
<br>     
<?php

$MyNumber=10101;
function Addition(){
    //these 3 are local variables 
    //cant use outside of the function since they defined here (local scope)
    $a = 5;
    $b = 2;
    $c = $a + $b;
    echo "Local Variables: a b c <br>";
    echo $MyNumber."<br>";
    //this will give you error since the local scope is outside of function (cant access this outside)

    echo "Addition is {$c} <br>";  
}
Addition();
?>
<hr>
<hr>


<h> Global Variables </h><br>   
<?php
echo "this is a variable declared OUTSIDE a function which has a Global Scope 
    & only accessed outside a function <br><br>";

$MyNumber=10000; // Local Scope here 
function More_Addition(){
    //make it global in order to use that variable in here
    global $MyNumber; //could place it outside too (as long it global)
    $a = 5;
    $b = 2;
    $c = $a + $b;
    echo "New Global Addition: ".($MyNumber + $c)."<br>";
    echo "Addition is {$c}<br>";  
}
More_Addition();
?>

<hr>
<hr>


<h> Super Global Variables </h>
<br>
<?php 
 /* 9 times of super global variables
 $GLOBALS - in an array 
 $_REQUEST
 $_FILES
 $_SESSION
 $_ENV

 ** MORE IMPORTANT: **
 forfill user request on web
 $_GET - 
    URLS/Links (how user search on web & how links r found?)
 $_POST - 
    used in WEB FORMS (collect data from user and send to server)
 $_COOKIE -
    COOKIES (give user result by previous track)
*/

$x = 75;
$y = 25; 
function add() {
    //adding more global indexes
    //saves every global out there (in this case it got your "mynumber")
    //saves as an associative array
    $GLOBALS['z'] = $GLOBALS['x'] + $GLOBALS['y'];
}
add();
print_r($GLOBALS);
echo "<br>";
echo $z;
?>

    </body>
</html>









