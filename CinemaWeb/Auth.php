<?php
	if (isset($_POST['login']) && isset($_POST['password'])){

		$login = $_POST['login'];
		$password = $_POST['password'];

		require_once 'Connection.php';

		$link = mysqli_connect($host, $user, $passwordUser, $database);
		$query = "SELECT * From Users";
		$result = mysqli_query($link, $query);
		if ($result){
			$rows = mysqli_num_rows($result);
			for ($i = 0; $i < $rows; $i++){
				$row = mysqli_fetch_row($result);
				if ($row[0] == $login && $row[1] == $password){
					setcookie('UserLogin', $login);
					setcookie('UserRole', $row[2]);		
					$auth = true;			
				}
			}			
		}
		if ($auth == true){
			setcookie('missAuth', '', time()-10000);
			header('Location: Timetable.php');
		}
		else {
			setcookie('missAuth', 'Неверный логин или пароль');
			header('Location: AuthPage.php');
		}
	}
?>