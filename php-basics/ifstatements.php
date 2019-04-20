<!DOCTYPE>
<html>
    <head>
        <title> If Statements</title>
    </head>
    <body>
<?php 
//$weather="Sunny";
//$weather="Rainy";
//$weather="Cloudy";
$weather = "Stormy";

if($weather=="Sunny"){
    echo "weather is nice<br>";
}
else if ($weather=="Rainy"){
    echo "its raining cat and dogs";
}
elseif($weather=="Cloudy"){
    echo "its cloudy but nice";
}
else{
    echo "its hard to forecast weather";
}
?><hr>
<?php 

$Bought_Product=true;
//$Bought_Product=true;


if($Bought_Product){
    echo "<h1>Thank You for Shopping</h1>";
    echo"<p>You product will be delivered soon</p>";
}
else{
    echo "<h1>Please Wait</h1>";
    echo"<p>Your payment is still processing</p>";
}
?> <hr>

<?php
$a = 9;
$b = 3; // $b=0;
$c="Result can not be done, did not pass if statement";

//if ($b > 0){ 
if($b < 10 && $a > 0){
    echo "b is greater than 0"."<br>";
    $c = $a / $b;
}
echo $c;
?>
        
    </body>
</html>