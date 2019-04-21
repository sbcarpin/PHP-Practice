<!DOCTYPE>
 
<html>
    <head>
<title>Branching Statements</title>
    </head>
    <body>
<?php 
//somtimes called contiued and break statements 
//important usage: if you have a data set of many people but want info of just one specific person
//dont want to access data that u dont need at the moment so this helps just to go where u need to
?>
<?php

$names = array("Steph","Jr","Bob","Billy","Luis","Susie","Ruth","Jeff");

//this loop will go up to the num of TOTAL ppl
for($i = 0; $i <= 7; $i++){
	
	if($names[$i] == "Luis"){
		//dont want to show data of "luis; skips it, use: 
			//continue;
		//dont want to show the data of & AFTER "luis", then use:
		break;
    }
    echo $names[$i]. "<br>";
} 
 //print_r($names);
?>
 
 
         
    </body>
</html>