<!DOCTYPE>
 
<html>
    <head>
        <title>For each loop structure</title>
    </head>
    <body>
<?php // these are especially helpful in arrays ?>

<?php

$Number=array(8,60,168,995,45,25,5,100);
//if you want to traverse the array
//first mention the variable 
//then change the array thing to something else
//describing the array number as something else
foreach($Number as $Num){
    echo "Numbers: {$Num} <br>";
    }
?><hr>


<!-- if you have Associative Arrays --> 
<?php

//associative array 
$Food=array(
    "item_number"=>150,
    "name"=>"Pizza",
    "region"=>"Italy",
    "Side_food"=>"Pasta",
    "drink"=>"Soda",
    "package_price"=>85 //"hi"
    );

//for each key word changing it to variable key and value
foreach($Food as $key=>$value){
    //to replace something from the key
    //str_replace(search, replace, subject)
    //ucwords -> capatialized the first letter
    $data = ucwords(str_replace("_", " ", $key));
    //make it better for the user interface 

    //when checking for something specific 
    //here making sure price is a number
    //if not a num output error 
    if($key=="package_price"){
        if(!is_numeric($value)){
            $value="Can not be determined/ not a num";
         //other functions to check fot stuff
         //is_bool()
         //empty()
         //is_null()
         //is_int()   
        }
    }
   //since you stored replaced data in $data now have to use that new one
    echo "{$data} : {$value} <br>";
}
?>
<hr>    
         
    </body>
</html>