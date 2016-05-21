<!DOCTYPE HTML>
	<?php
	session_start();
	?>
<html>
	<head>
		<title>Rewards!</title>
		<style>
		body {background-image:url('wallpaper.jpg');background-repeat:no-repeat;background-attachment:fixed;background-position:center;background-color:black;}
		table {border:thin cyan ridge;background-color:cyan;}
		td {border:thin lime ridge;background-color:lime;}
		img {width:40%;}
		div {text-align:center;margin-top:0%; margin-left:25%;border:thin white groove;background:white;opacity:0.95;color:blue;font-family:Comic Sans MS;font-weight:bold;font-size:18pt;}
		
		</style>
		<script type = "text/javascript">
		</script>
	</head>		
	<body>
		<table>
		<tr>
			<td><a href="index.php">Home</a></td>
		</tr>
		<tr>
			<td><a href="enter.php">Sign In</a></td>
		</tr>
		<tr>
			<td><a href="plot.php">Plot, Protagonists and Antagonists!</a></td>
		</tr>
		<tr>
			<td><a href="minigames.php">Mini Games!</a></td>
		</tr>
		<tr>
			<td><a href="music.php">Music!</a></td>
		</tr>
		<tr>
			<td><a href="about.php">About Me!</a></td>
		</tr>
		</table>
		<div>
		<?php
		include_once("dbconnect.php");
		$user = $_SESSION["User"];
		$conn = getPDOConnection("sql302.0fees.net", "fees0_13251936_lliu", "fees0_13251936", "fireninja30");
	
		$cmd = "SELECT * FROM Information WHERE User = '$user'";
		$result = $conn->prepare($cmd);
		$result->execute();
		$data = $result->fetch();
		if ($data[Quiz1] < 7)
		{
		 echo "If you get 7 or higher or perfect score you can unlock an image.<br /><img src = 'lock.jpg'><br />";
		}
		if ($data[Quiz1] > 7)
		{
		 echo "You unlocked prize 1!<br />";
		 echo "<img src = 'award1.jpg'><br />";
		}
		if ($data[Quiz1] == 10)
		{
		 echo "You unlocked all prizes!<br />";
		 echo "<img src = 'award2.jpg'><br />";
		}
		if ($data[Quiz2] < 7)
		{
		 echo "If you get 7 or higher or perfect score you can unlock an image.<br /><img src = 'lock.jpg'><br />";
		}
		if ($data[Quiz2] > 7)
		{
		 echo "You unlocked prize 1!<br />";
		 echo "<img src = 'award3.jpg'><br />";
		}
		if ($data[Quiz2] == 10)
		{
		 echo "You unlocked all prizes!<br />";
		 echo "<img src = 'award4.jpg'><br />";
		}
		if ($data[Quiz3] < 7)
		{
		 echo "If you get 7 or higher or perfect score you can unlock an image.<br /><img src = 'lock.jpg'><br />";
		}
		if ($data[Quiz3] > 7)
		{
		 echo "You unlocked prize 1!<br />";
		 echo "<img src = 'award5.jpg'><br />";
		}
		if ($data[Quiz3] == 10)
		{
		 echo "You unlocked all prizes!<br />";
		 echo "<img src = 'award6.jpg'><br />";
		}
		if ($data[Quiz4] < 7)
		{
		 echo "If you get 7 or higher or perfect score you can unlock an image.<br /><img src = 'lock.jpg'><br />";
		}
		if ($data[Quiz4] > 7)
		{
		 echo "You unlocked prize 1!<br />";
		 echo "<img src = 'award7.jpg'><br />";
		}
		if ($data[Quiz4] == 10)
		{
		 echo "You unlocked all prizes!<br />";
		 echo "<img src = 'award8.jpg'><br />";
		}
		?>
		</div>
		<script type = "text/javascript">
		</script>
	</body>