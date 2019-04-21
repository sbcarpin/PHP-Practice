<!DOCTYPE>
 
<html>
    <head>
        <title>Switch Statement</title>
    </head>
    <body>
<?php 
  
$weather="Stormy";


switch($weather){
    case "Sunny":
        echo "Weather is quite pleasent outside";
        break; //to exlude the rest of the statements, so we can have just this one result 
    case "Rainy":
        echo "Its raining outside <br>";
        break;
    case "Cloudy":
        echo "It is expected to rain <br>";
        break;   
    default: //"else" 
        echo "Weather can not be forecast <br>";
        break;
}
?> <hr>


<?php
$Restricted_Area='Steph';
switch($Restricted_Area){
    case 'Guard':
        echo "Permission Granted";
        break;
    case 'Office boy':
    case 'Public':
    case 'Media':
        //here added 1 statement for all 3 cases 
        //after you just break (power of break) 
        echo "Permission Denied";
        break;
    default:
        echo "hello there, no case";  
}
?>        
    </body>
</html>