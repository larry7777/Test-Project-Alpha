<?php
	
	function getPDOConnection($hostname, $dbname, $dbuname, $dbpword)
	{
		//3 PDO parameters
		//hostname and the database name in a formatted string
		//username
		//password
		$hostString = "mysql:host=$hostname;dbname=$dbname";
		return new PDO($hostString, $dbuname, $dbpword);
	}

?>