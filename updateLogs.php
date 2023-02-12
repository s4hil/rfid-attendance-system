<?php
	include 'database.php';

	$id = file_get_contents("UIDContainer.php");

	$sql = "INSERT INTO `logs` (uid) VALUES('$id')";
	$pdo = Database::connect();
	
	$pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
	$sql = "INSERT INTO logs (uid) values(?)";
	$q = $pdo->prepare($sql);
	$q->execute(array($id));
	Database::disconnect();
?>