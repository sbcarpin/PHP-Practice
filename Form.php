<?php 
//have to check if submit button has something
if(isset($_POST["Submit"])){
	//get the name of the corresponding input name
	//$_POST connects the name from input field in HTML with PHP code
	//dont need the variables just grab username and password with $_POST
	$Username = $_POST["Username"];
	$Password = $_POST["Password"];	

	if($Username == "Steph" && $Password == "123"){
		echo "<h2>Welcome: {$_POST["Username"]}</h2>";
	}
	else{
		echo "<h2>Account doesn't exist. Try Again.</h2>";
	}
}
else{
	echo "<h2>Login Required</h2>";
}
?>

<!DOCTYPE>
<html>
	<head>
		<title>Form</title>
	</head>
	<body>
	<fieldset>
    <legend>HTML 5 Form</legend>
    <form action="Form.php" method="POST" >
		<label for="Username">Username:</label>
		<input id="Username" type="text" name="Username"><br><br>
		<label for="Password">Password:</label>
		&nbsp;
		<input id="Password" type="Password" name="Password"><br><br><br>
		<input type="Submit" name="Submit" value="Submitted">
    </form>
    </fieldset>
	</body>
</html>