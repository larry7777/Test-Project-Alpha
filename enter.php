<!DOCTYPE HTML>
<?php
	session_start();
?>
<html>
	<head>
		<style>
			body {background-image:url('wallpaper.jpg');background-repeat:no-repeat;background-attachment:fixed;background-position:center;background-color:black;color:white;}
			table {border:thin cyan ridge;background-color:cyan;}
			td {border:thin lime ridge;background-color:lime;}
			label {display:block;}
			input[type="submit"] {font:16pt arial bold;}
			div {text-align:center;margin-top:0%;margin-left:20%;border:thin white groove;background:white;opacity:0.95;color:blue;font-family:Comic Sans MS;font-weight:bold;}
		</style>
		<title>User Registration</title>
	</head>
	<body>
		<table>
		<tr>
			<td><a href="index.php">Home</a></td>
		</tr>
		<tr>
			<td><a href="plot.php">Plot, Protagonists and Antagonists!</a></td>
		</tr>
		<tr>
			<td><a href="minigames.php">Mini Games!</a></td>
		</tr>
		<tr>
			<td><a href="rewards.php">Rewards!</a></td>
		</tr>
		<tr>
			<td><a href="music.php">Music!</a></td>
		</tr>
		<tr>
			<td><a href="about.php">About Me!</a></td>
		</tr>
		</table>
		<script type = "text/javascript">
		</script>
		<div>
		<form method = "post" action = "register.php">
			<label>
				Username: <input type = "text" name = "uname" />
			</label>
			<br>
			<label>
				Password: <input type = "text" name = "pword" />
			</label>
			<hr />
			<input type = "submit" value = "Register" />
		</form>
		<hr />
		<form method = "post" action = "login.php">
			<label>
				Username: <input type = "text" name = "uname" />
			</label>
			<br>
			<label>
				Password: <input type = "text" name = "pword" />
			</label>
			<input type = "submit" value = "Login"/>
		</form>
		</div>
		
	</body>
</html>