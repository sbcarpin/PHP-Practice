<?php
//have to include the file that is being used here

//require: you must use/include the file mentioned; restrictiion
//require("FunctionFile1.php");
//require_once("FunctionFile.php");

//include : if use or not use its okay
include("FunctionFile1.php");
//include_once("FunctionFile.php");
//If the code from a file has been already included then it will not be included again 
?>
<!DOCTYPE>
 
<html>
    <head>
        <title>Reusability</title>
    </head>
    <body>

<?php
Welcome();
$result = add_with_parameter(15,10);
echo $result;
?>
         
    </body>
</html>