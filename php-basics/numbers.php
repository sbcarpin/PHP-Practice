<!DOCTYPE>
<html>
	<head>
		<title>Numbers</title>
	</head>
	<body>

<?php 
$FirstNumber = 3;
$SecondNumber = 4;
$ThirdNumber = 3.65478;
?><br>

<?php echo $ThirdNumber + 9 - 6; ?><br>
<?php echo 3.1/6; ?><br>

<?php 
//this will output an Warning about dividing by zero
echo 7/0;?><br>
<br>

Ceil: <?php echo ceil($ThirdNumber); ?><br>
Floor: <?php echo floor($ThirdNumber); ?><br>


<!-- Checking if INTs
	will output 1 if yes/true
	will output 0 is no/false (or nothing)
 -->
<?php echo "is ($FirstNumber) :integer". is_int($FirstNumber); ?><br>
<?php echo "is ($ThirdNumber) :integer". is_int($ThirdNumber); ?><br>
<br>

<!-- Checking if FLOATS
	will output 1 if yes/true
	will output 0 is no/false (or nothing)
 -->
<?php echo "is ($FirstNumber) :float". is_float($FirstNumber); ?><br>
<?php echo "is ($ThirdNumber) :float". is_float($ThirdNumber); ?><br>
<br>
<!-- Checking if NUMERIC
	will output 1 if yes/true
	will output 0 is no/false (or nothing)
 -->
<?php echo "is ($FirstNumber) :numeric". is_numeric($FirstNumber); ?><br>
<?php echo "is ($ThirdNumber) :numeric". is_numeric($ThirdNumber); ?><br>
<br>

<!-- CONVERSIONS-->
<!-- Converting decimal to binary-->
<?php echo "decimal to binary: ".decbin(3); ?><br>
<!-- Converting binary to decimal-->
<?php echo "binary to decimal: ".bindec(11); ?><br><br>

<!--FUNCTIONS-->
Square root: <?php echo sqrt(4);?><br>
Absolute Value: <?php echo abs(-50+100);?><br>
Power: <?php echo pow(2, 10);?><br>
Modulas/Remainder: <?php echo fmod(15,7);?><br>

<!--getting randoms-->
Random: <?php echo rand();?><br>
<!--specific case -->
Random btwn 500 & 1600: <?php echo rand(500,1600);?><br>

<br>
<?php echo $SecondNumber += 2;
//equal to $SecondNumber=$SecondNumber+2;?><br>
Increment: <?php $SecondNumber++; echo $SecondNumber;?><br>
Decrement: <?php $SecondNumber--; echo $SecondNumber;?><br>
	</body>
</html>


