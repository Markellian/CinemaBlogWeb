<?php
	if(isset($_POST['PostValue'])){
		require("Connection.php");
		$link = mysqli_connect($host, $user, $passwordUser, $database);
		$v = $_POST['PostValue'];
		$query = "Insert into Posts values ('$v')";
		$result = mysqli_query($link, $query) or die(mysqli_error($link));
	
	}
	
	header('Location: Timetable.php');
?>