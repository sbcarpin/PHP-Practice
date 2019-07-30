<!DOCTYPE>
<html>
	<head>
		<title>Form Validation Project</title>
	</head>
	<body>
<?php 
$NameError="";
$EmailError="";
$GenderError="";
$WebsiteError="";

if(isset($_POST['Submit'])){
	if(empty($_POST["Name"])){
		$NameError = "Name is Required";
	}
	else{
		$Name = Test_User_Input($_POST["Name"]);
	}

	if(empty($_POST["Email"])){
		$EmailError = "Email is Required";
	}
	else{
		$Email = Test_User_Input($_POST["Email"]);
	}

	if(empty($_POST["Gender"])){
		$GenderError = "Gender is Required";
	}
	else{
		$Gender = Test_User_Input($_POST["Gender"]);
	}

	if(empty($_POST["Website"])){
		$WebsiteError = "Website is Required";
	}
	else{
		$Website = Test_User_Input($_POST["Website"]);
	}
}
function Test_User_Input($Data){
	return $Data;
}

?>

<h2>Form Validation with PHP.</h2>
 
<form action="FormValidationProject.php" method="post"> 
<legend>* Please Fill Out the following Fields.</legend>            
<fieldset>
Name:<br>
<input class="input" type="text" Name="Name" value="">
<!-- <span class="Error">*<?php echo $NameError;  ?></span> -->*<?php echo $NameError ?><br>   
E-mail:<br>
<input class="input" type="text" Name="Email" value="">
<!--<span class="Error">*<?php echo $EmailError; ?></span>-->*<?php echo $EmailError ?><br> 
Gender:<br>
<input class="radio" type="radio" Name="Gender" value="Female">Female
<input class="radio" type="radio" Name="Gender" value="Male">Male
<!--<span class="Error">*<?php echo $GenderError; ?></span>-->*<?php echo $GenderError ?><br>        
Website:<br>
<input class="input" type="text" Name="Website" value="">
<!--<span class="Error">*<?php echo $WebsiteError; ?></span>-->*<?php echo $WebsiteError ?><br> 
Comment:<br>
<textarea Name="Comment" rows="5" cols="25"></textarea>
<br>
<br>
<input type="Submit" Name="Submit" value="Submit Your Information">
   </fieldset>
</form>
	</body>
</html>