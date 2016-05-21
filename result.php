<!DOCTYPE HTML>
	<?php
	session_start();
	?>
<html>
	<head>
		<title>Quiz Results!</title>
		<style>
		body {background-image:url('wallpaper.jpg');background-repeat:no-repeat;background-attachment:fixed;background-position:center;background-color:black;}
		table {border:thin cyan ridge;background-color:cyan;}
		td {border:thin lime ridge;background-color:lime;}
		div {text-align:center;margin-top:0%; margin-left:25%;border:thin white groove;background:white;opacity:0.95;color:blue;font-family:Comic Sans MS;font-weight:bold;}
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
			<td><a href="es21.php">Eyeshield 21</a></td>
		</tr>
		<tr>
			<td><a href="pot.php">Prince of Tennis</a></td>
		</tr>
		<tr>
			<td><a href="sd.php">Slam Dunk!</a></td>
		</tr>
		<tr>
			<td><a href="wh.php">Whistle!</a></td>
		</tr>
		</table>
		<div>
		<?php
			$ax = 1;
			$bx = 0;
			if ($_POST["Q1"] == $ax )
			{
				$bx = $bx + 1;
			}
			if ($_POST["Q2"] == $ax )
			{
				$bx = $bx + 1;
			}
			if ($_POST["Q3"] == $ax )
			{
				$bx = $bx + 1;
			}
			if ($_POST["Q4"] == $ax )
			{
				$bx = $bx + 1;
			}
			if ($_POST["Q5"] == $ax )
			{
				$bx = $bx + 1;
			}
			if ($_POST["Q6"] == $ax )
			{
				$bx = $bx + 1;
			}
			if ($_POST["Q7"] == $ax )
			{
				$bx = $bx + 1;
			}
			if ($_POST["Q8"] == $ax )
			{
				$bx = $bx + 1;
			}
			if ($_POST["Q9"] == $ax )
			{
				$bx = $bx + 1;
			}
			if ($_POST["Q0"] == $ax )
			{
				$bx = $bx + 1;
			}
			$cx = $bx/10*100;
			echo "Correct:";
			echo "<br />";
			echo $bx;
			echo "/10";
			echo "<br />";
			echo "Percent:" ;
			echo "<br />";
			echo $cx;
			echo "%";
			echo "<br />";
			if ($bx <= 5)
			{
			echo "<img src = 'result1.jpg'>";
			}
			if ($bx > 5 && $bx < 10)
			{
			echo "<img src = 'result2.jpg'>";
			}
			if ($bx == 10)
			{
			echo "<img src = 'result3.jpg'>";
			}
			$user = $_SESSION["User"];
			include_once("dbconnect.php");
			$conn = getPDOConnection("sql302.0fees.net", "fees0_13251936_lliu", "fees0_13251936", "fireninja30");
			//Setup SQL Query Command
			$cmd = "UPDATE Information SET Quiz1 = '$bx' WHERE User = '$user'";
	
			$statement = $conn->prepare($cmd);
			$result = $statement->execute();
			
		?>
		</div>
		<script type = "text/javascript">
		</script>
	</body>
</html>