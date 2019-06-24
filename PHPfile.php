<!DOCTYPE>
<html>
	<head>
		<title>PHP File</title>
	</head>
	<body>
<?php 
print_r($_POST);

	$Username = $_POST["Username"];
	$Password = $_POST["Password"];	
	$Submit = $_POST["Submit"];
	if(isset($_POST['Submit'])){
		echo "Successful login<br>";
		echo "Welcome: {$Username} <hr>";
	}
	/*//checks username 
	if(isset($Username) && !empty($Username)){
		echo "Username is set with the name of: {$Username}<br>";
	}
	else{
		echo "No user name found. <br>";
	} 
	//checks upasword
	if(isset($Password) && !empty($Password)){
		echo "Password: {$Password}<br>";
	}
	else{
		echo "No password found. <br>";
	}*/

	//username
	if(isset($_POST["Username"])){
		$Username = $_POST["Username"];
		echo "$Username <br>";
	}
	else{
		$Username = "";
	}
	//pasword
	if(isset($_POST["Password"])){
		$Password = $_POST["Password"];
		echo "$Password <br>";
	}
	else{
		$Password = "";
	}
?>
	</body>
</html>