<style>
	body {font:24pt arial bold;}
	a {display:block;}
</style>
<?php
	include_once("dbconnect.php");
	
	$conn = getPDOConnection("sql302.0fees.net", "fees0_13251936_lliu", "fees0_13251936", "fireninja30");
	//Setup SQL Query Command
	$cmd = "INSERT into Information VALUES ('".$_POST['uname']."','".$_POST['pword']."',0,0,0,0)";
	
	//echo $cmd;

	//Prepare the query - Returns a PDOStatement Object
	$statement = $conn->prepare($cmd);
	$result = $statement->execute();
	
	if ($result)
		echo "You have been successfully registered.";
	else
		echo "You can not register here.";
?>
<a href = "index.php">Back</a>