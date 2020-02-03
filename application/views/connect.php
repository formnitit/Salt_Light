<?php

$dbUser = "root";
$dbName = "salt_light";
$dbPassword = "";

$serverName = "localhost";
$dbChrCode = "utf8";
$dbCollation = "utf8_general_ci";

$conn = mysqli_connect($serverName, $dbUser, $dbPassword, $dbName) or
	die("
		<div class='alert alert-danger' style='position: fixed; top: 0px; z-index: 9999; width: 100%'>
			<b>An error appear while connect to DB:</b><br>" . mysqli_connect_error() .
		"</div>"
		);

mysqli_set_charset($conn, $dbChrCode) or
	die("
		<div class='alert alert-danger' style='position: fixed; top: 0px; z-index: 9999; width: 100%'>
			<b>An error appear while execute SET NAMES</b><br>" . mysqli_error($conn) .
		"</div>"
		);

mysqli_query($conn, "SET collation_connection='$dbCollation'") or
	die("
		<div class='alert alert-danger' style='position: fixed; top: 0px; z-index: 9999; width: 100%'>
			<b>An error appear while execute SET Collation</b><br>" . mysqli_error($conn) .
		"</div>"
		);
?>
