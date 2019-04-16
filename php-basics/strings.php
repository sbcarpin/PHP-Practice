<!DOCTYPE>
<html>
	<head>
		<title>Strings</title>
	</head>
	<body>
<h> String Basics </h>
<br>
<br>
<?php 
echo "my name is stephhh <br>";
echo 'my age is 22 <br>';
$color = "red";
$shirt = "turtle neck";

//combine strings with the "."
$combination = $color . " " . $shirt;
echo $combination;
echo "<br>";
echo "<br>";
?>

<?php 
//difference in single vs double quote
echo "$color <br>";
//this prints out with color correctly 

echo '$color <br>'; 
//this will confused the variable as a TEXT

echo "$color is my fave <br>";
//can combine strings

echo "{$color}is my fave <br>";
//can put text right next to variale is use {} 

?>
	</body>
	<hr>
	<hr>

	<h> String Functions </h><br>
	<br>

	<body>
<?php 
$phrase1 = "student who come late ";
$phrase2 = "to class sit by the gate";

//combine strings with variables 
$combine = $phrase1;
//the ".=" means combine = combine + given (phrase)
$combine .= $phrase2;
echo "orginal full string: $combine <br>";
?> <hr>

<!-- * String Functions * -->

<!-- * all thees take strings * -->
Uppercase first: <?php echo ucfirst($combine); ?><br>
Uppercase words: <?php echo ucwords($combine); ?><br>
Lowercase: <?php echo strtolower($combine); ?><br>
Uppercase: <?php echo strtoupper($combine); ?><br>

<hr>

<!-- str_repeat(input, multiplier) -->
Repeat: <?php echo str_repeat($combine, 3); ?><br>

Make substring from one point to another: 
	<!-- substr(string, start, end) -->
	<?php echo substr($combine, 5, 10); ?><br>

Find position of any specific word: 
	<!--  strpos(haystack, needle) -->
	<?php echo strpos($combine, "come"); ?><br>

<!-- strpos(string, char) -->
Find character: <?php echo strchr($combine, "g"); ?><br>

<hr>

Total length of string: <?php echo strlen($combine); ?><br>
Trim: <?php echo "A" . trim(" B C D ") . "E"; ?><br>

<!--  strstr(haystack, needle) -->
Find specific and show after: <?php echo strstr($combine,"come")?><br>

Replace word with new: 
	<!-- str_replace(search, replace, subject) -->
	<?php echo str_replace("sit", "stand", $combine)?><br>

<hr>

	</body>
</html>