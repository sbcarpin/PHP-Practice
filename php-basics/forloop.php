<!DOCTYPE>
 
<html>
    <head>
<title>For Loops</title>
    </head>
    <body>

<?php  ?>

<?php
 for($i = 1; $i <= 10; $i++){
 	//safe to put the {} around variable
    echo "#{$i} is printing on screen <br>";
 }
?> <hr>


<?php 

$n=5;
for($i = 1; $i <= 20; $i++){
    $result = $n * $i;
    echo $n ." * ". $i ." = ". $result ."<br>";
}
?>
    </body>
</html>