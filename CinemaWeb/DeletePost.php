<?php
	require("Connection.php");
	$id = $_POST['PostID'];
	$link = mysqli_connect($host, $user, $passwordUser, $database);
	$query = "Delete from Posts where PostID = $id";
	$result = mysqli_query($link, $query);
	header('Location: Timetable.php');
?>
