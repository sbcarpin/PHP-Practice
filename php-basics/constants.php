<!DOCTYPE>
<html>
	<head>
		<title>Practicing</title>
	</head>
	<body>

<?php 
	//opposite of variables 
	//so they just stay the same literally "constant"
?>
<?php 
$name = 45;
//"define" tells PHP we are declaring constant 
//2 args: constant name, value of it
define("Value_of_Pi", 3.14); 
define("Value_of_Gravity", 9.8);
echo "PI VALUE: " . Value_of_Pi;
echo "<br>";
echo "G VALUE: " . Value_of_Gravity;
?>
<?php 
/* 
//cant change values of constants 
//this will output error 
<?php
Value_of_Pi = 000;
echo Value_of_Pi;

//cant redfine value of constant 
define("Value_of_Pi", 0000); 
?> 
*/
?>
	</body>
</html>