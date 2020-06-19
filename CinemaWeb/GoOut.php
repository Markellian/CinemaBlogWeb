<?php
	setcookie('UserLogin', "", time() - 10000);
	setcookie("UserRole", "", time() - 10000);
	header('Location: Timetable.php');
?>