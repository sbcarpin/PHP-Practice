<!DOCTYPE>
<html>
	<head>
		<title>Array Functions</title>
	</head>
	<body>
<?php
$color=array("red", "blue", "green");

//pop items off aray
array_pop($color);
//can add/push items onto array
array_push($color, "black", "white", "pink");
print_r($color);
?><br>

<?php 
$numbers= array(1,7,10,12,21,25,37,41,100); 

//count total items in array
echo "Total Count: ".count($numbers). "<br>"; 
//get max
echo "Max: ".max($numbers). "<br>"; 
//get min
echo "Min ".min($numbers). "<br>"; 

//check if something is in array
//nothing/0 for false and 1 for true
echo "Is 8 in array? ".in_array(8, $numbers). "<br>"; 
echo "<br>";

//can sort the array
echo "Sorted: ".sort($numbers). "<br>"; 
print_r($numbers);
echo "<br>"; echo "<br>";

//can re sort it 
echo "Resorted: ".rsort($numbers). "<br>"; 
print_r($numbers);
echo "<br>";
?><br>

<!-- returns a string from the elements of an array-->
Implode: 
<?php 
$quote = array("never", "give", "up", "!");
echo implode(" ", $quote);
?><br>

<!-- returns it back to elements of an array
	break string into array
	cant take a string a convert to an array if using echo but..-->
Explode: 
<?php 
$string = "hello how are you";

//..can convert string to array elements without echo but by print_r
print_r (explode(" ", $string));
?><br>


	</body>
</html>