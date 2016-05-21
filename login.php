<style>
	body {font:24pt arial bold;}
	a {display:block;}
</style>
<?php
	include_once("dbconnect.php");
	
	$conn = getPDOConnection("sql302.0fees.net", "fees0_13251936_lliu", "fees0_13251936", "fireninja30");
	$uname = $_POST["uname"];
	$pword = $_POST["pword"];
	
	$cmd = "SELECT * FROM Information WHERE User = '$uname' AND Password = '$pword'";
	$result = $conn->prepare($cmd);
	$result->execute();
	$data = $result->fetch();
	if (isset($data["User"]))
	{
		session_start();
		$_SESSION["User"] = $data["User"];
		echo "You have now logged in.";
	}
	else
	{
		echo "You have failed to log in.";
	}
?>
<a href = "index.php">Back</a>
