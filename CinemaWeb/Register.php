<?php
	if (isset($_POST['regLogin']) && isset($_POST['regPassword']))
	{
		$login = htmlspecialchars($_POST['regLogin']);
		$password = htmlentities($_POST['regPassword']);
		if (strlen($password) < 6)
		{
			$misPas = "Пароль слишком короткий";
		}
		else
		{
			require("Connection.php");
			$link = mysqli_connect($host, $user, $passwordUser, $database);

			$query = "Select * from Users where login = $login";

			$result = mysqli_query($link, $query);
			if ($result){
				$misLog = "Такой логин уже существует";
			}
			else{
				$query = "Insert into Users
							Values ('$login', '$password', 2)";
				$result = mysqli_query($link, $query);
				if ($result){
					setcookie('UserLogin', $login);
					setcookie('UserRole', 2);	
					require("Timetable.php");
					$registr = true;
				}
			}
			$misLog = "";
			$misPas = "";

		}
	}
	if (!$registr) require("Registration.php");
?>