<!DOCTYPE>
<html>
	<head>
		<title>Inside Array | Pointers</title>
	</head>
	<body>
<?php
	$numbers = array(7, 10, 25, 30, 50, 75, 110);
	print_r($numbers);
?><br> <hr>

<?php 
//seeing only the current number
echo current($numbers)."<br>";
//if want to go to next index of array:
next($numbers);
echo current($numbers)."<br>";

//continuing to see next numbers: 
next($numbers);
echo current($numbers)."<br>";

//to skip a number/index (skipping 30 in this  case) 
//just do it twice;
next($numbers);
next($numbers);
echo current($numbers)."<br>";

next($numbers);
echo current($numbers)."<br>";

//could reset your pointer 
reset($numbers);
echo "resetting: ".current($numbers)."<br>";

//go to last element in list and return it
end($numbers);
echo "end of list: ".current($numbers)."<br>";

//if you try to go to the next element when you are at the end of the array it will just not output anything
//so if this was done"
next($numbers);
echo "after end:".current($numbers)."<br>";
?>
	</body>
</html>