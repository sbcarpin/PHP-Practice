<!DOCTYPE>
 
<html>
    <head>
<title> User Define Functions</title>
    </head>
    <body>
<?php

function Welcome(){
    echo "Welcome to PHP! <br>";
}


function add_with_parameter($x,$y){
    $result = $x + $y;
    echo "Add with parameter is: {$result} <br>";
}

?>
    </body>
</html>