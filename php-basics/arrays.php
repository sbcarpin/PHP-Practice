<!DOCTYPE>
<html>
	<head>
		<title>Arrays</title>
	</head>
	<body>

<!-- arrays work on two things index and data -->
<h> Array Basics </h>
<br>these work more with locating with index numbers
<br>
<br>

<?php 
$name = array('steph', 'jr', 'bob');
//shall output jr since index 1
echo $name[1];
?>

<?php 
$food = array('pizza', 10, 15, array("Mexican", "Asian", "French"), "Pasta");
?><br>

<?php echo $food[2]; ?><br>
<!-- getting from array within array-->
<?php echo $food[3][0]; ?><br>
<!-- storing into specific parts of array-->
<?php $food[50]="Mango"; ?><br>
<?php $food[25]="Apple"; ?>
<pre>
<?php echo print_r($food) ; ?><br> </pre>

<h> Associative Array </h>
<br>these work by using key as index and with a stored value
<!-- key and value -->
<br>
<?php 
//need to make the ARROW to define that A is a key
//where key has a specific value
$color = array("A"=>"40", "B"=>"Pizza");
?><br>
<?php echo $color["B"]; ?><br>

<!-- could link data like this. shows benefits of use -->
<?php $foods = array("Mexican"=>"tacos", "Italian"=>"pizza"); ?><br>
<?php echo $foods["Mexican"]. " still good with ". $foods["Italian"]; ?><br>
<!-- could see structures of the array -->
<pre>
<?php echo print_r($foods)?></pre>

	</body>
</html>